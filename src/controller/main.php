<?php

    require_once 'src/model/connect.php';
    require_once 'src/model/i_colab.php';

    $i_colab = new ModelColaboradores($pdo);

    if(!isset($_SESSION['user_id'])){
        if(@$_GET['pg'] == "login"){
            $user = $i_colab->login(@$_POST['email'], @$_POST['password']);
            if($user != -1){
                $_SESSION['user_id'] = $user;
                header("Refresh:0; url=/");
            }else
                $alert_msg = "You have entered an invalid username or password";
        }
        require_once 'src/view/pgs/login.php';
    }else{
        if(isset($_GET['pg'])){
            switch($_GET['pg']){
                case 'signout':
                    session_unset();
                    session_destroy();
                    break;

                case 'update':
                    $i_colab->update($_SESSION['user_id'], $_POST['userName'], $_POST['userEmail'], $_POST['userPassword'], $_POST['userFuncao']);
                    break;

                default:
                    break;
            }
            header("Refresh:0; url=/");
        }
        $user_details = $i_colab->get_user($_SESSION['user_id']);
        require_once 'src/view/pgs/home.php';
    }

?>
