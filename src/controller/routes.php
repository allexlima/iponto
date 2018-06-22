<?php

    if(isset($_GET['pg'])){

        switch($_GET['pg']){
            case 'login':
                $user = $i_colab->login(@$_POST['email'], @$_POST['password']);
                if($user == -1) $_SESSION['msg'] = "You have entered an invalid username or password";
                else $_SESSION['user_id'] = $user;
                break;

            case 'signout':
                session_unset();
                session_destroy();
                break;

            case 'update':
                $id = (isset($_GET['id'])) ? $_GET['id'] : $_SESSION['user_id'];
                $pass = (isset($_GET['id']) && $i_colab->is_admin($_SESSION['user_id'])) ? "123" : @$_POST['userPassword'];
                $i_colab->update($id, $name=$_POST['userName'], $email=@$_POST['userEmail'], $password=$pass, $post=$_POST['userFuncao']);
                $_SESSION['msg'] = "Fields updated successfully for account <b>".(($_POST['userEmail'])?$_POST['userEmail']:"#".$id)."</b>!";
                break;

            case 'create':
                if($i_colab->is_admin($_SESSION['user_id'])){
                    $newuser = $i_colab->create($_POST['newUserName'], $_POST['newUserEmail'], $_POST['newUserPassword'], $_POST['newUserFuncao']);
                    $newuser = $i_colab->get_user($newuser);
                    $_SESSION['msg'] = "New user <b>".$newuser['colab_nome']."</b> created successfully!";
                }
                break;

            case 'delete':
                if($i_colab->is_admin($_SESSION['user_id'])){
                    $i_colab->delete($_GET['id']);
                    $_SESSION['msg'] = "The entry <b>#".$_GET['id']."</b> was deleted successfully!";
                }
                break;

            case 'checkin':
                if($i_ponto->pclock_open($_SESSION['user_id']))
                    $_SESSION['msg'] = "You <b>checked in</b> successfully <b>at ".date("F j, Y, g:i:s a")."</b>";
                else
                    $_SESSION['msg'] = "<b>Something went wrong!</b> You can't re-check in before your check out.";
                break;

            case 'checkout':
                if($i_ponto->pclock_close($_SESSION['user_id']))
                    $_SESSION['msg'] = "You <b>checked out</b> successfully <b>at ".date("F j, Y, g:i:s a")."</b>";
                else
                    $_SESSION['msg'] = "<b>Something went wrong!</b> You can't re-check out before your check in.";
                break;

            default:
                break;
        }

        header("Location: /");
        exit();

    }

?>
