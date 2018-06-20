<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once 'src/model/connect.php';
  require_once 'src/model/i_colab.php';

  if(@$_GET['email'] && @$_GET['password']){
    $a = new Model_icolab($pdo);
    echo $a->login($_GET['email'], $_GET['password']);
  }else
    echo "Aguardando 'email' e 'password' via GET";

?>
