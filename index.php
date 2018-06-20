<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once 'src/model/connect.php';
  require_once 'src/model/i_colab.php';

  $a = new Model_icolab($pdo);

  switch(@$_GET['pg']){
    case "login":
      echo $a->login($_POST['email'], $_POST['password']);
      break;
    case "cadastro":
      echo $a->create($_POST['nome'], $_POST['email'], $_POST['password']);
      break;
    case "is_admin":
      echo $a->is_admin($_POST['email']);
      break;
    default:
      echo "Escolha um recurso!";
      break;
  }


?>
