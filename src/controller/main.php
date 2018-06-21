<?php

    require_once 'src/model/connect.php';
    require_once 'src/model/i_colab.php';

    $i_colab = new ModelColaboradores($pdo);

    if(!isset($_SESSION['user_id'])){
        if(@$_GET['pg'] == "login"){
            $user = $i_colab->login($_POST['email'], $_POST['password']);
            if($user != -1){
                $_SESSION['user_id'] = $user;
                header("Refresh:0; url=/");
            }else
                $alert_msg = "You have entered an invalid username or password";
        }
        require_once 'src/view/pgs/login.php';
    }else{
        if(@$_GET['pg'] == "signout"){
            session_unset();
            session_destroy();
            header("Refresh:0; url=/");
        }
        require_once 'src/view/pgs/home.php';
    }

?>
