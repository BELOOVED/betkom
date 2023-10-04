<?php
  include 'inc/config.php';
  $q = explode("/", $_GET['q']);
  $page = "main";
  if (file_exists('view/'.$q[0].'.php')) {
    $page = $q[0];
  }
  include 'view/'.$page.'.php';
?>