<?php

    require_once 'src/model/connect.php';
    require_once 'src/model/i_colab.php';

    $i_colab = new ModelColaboradores($pdo);

    require_once 'src/controller/routes.php';

    if(!isset($_SESSION['user_id']))
        require_once 'src/view/pgs/login.php';
    else{
        $user_details = $i_colab->get_user($_SESSION['user_id']);
        require_once 'src/view/pgs/home.php';
    }

    unset($_SESSION['msg']);

?>
