<?php

    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'src/controller/main.php';

    // require_once 'src/view/pgs/login.php';
    // require_once 'src/view/pgs/home.php';

    // require_once 'src/model/connect.php';
    // require_once 'src/model/i_colab.php';
    //
    // $a = new ModelColaboradores($pdo);
    //
    // switch(@$_GET['pg']){
    //     case "login":
    //         echo $a->login($_POST['email'], $_POST['password']);
    //         break;
    //     case "create":
    //         echo $a->create($_POST['nome'], $_POST['email'], $_POST['password']);
    //         break;
    //     case "is_admin":
    //         echo $a->is_admin($_POST['email']);
    //         break;
    //     case "update":
    //         echo $a->update($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['password'], $_POST['funcao']);
    //         break;
    //     default:
    //         echo "Escolha um recurso!";
    //         break;
    // }

?>
