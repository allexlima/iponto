<!DOCTYPE html>

<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Allex Lima">
	<meta name="description" content="Simple poscomp simulator using php arrays">
	<title>iPonto</title>
	<link rel="icon" href="src/view/img/icon.png">
	<link type="text/css" rel="stylesheet" href="src/view/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="src/view/css/littlethings.css">
	<link type="text/css" rel="stylesheet" href="src/view/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="src/view/js/jquery.min.js"></script>
	<script src="src/view/js/popper.min.js"></script>
	<script src="src/view/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
		<a class="navbar-brand mr-4" href="https://github.com/allexlima/iponto">
	      <img src="src/view/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	      iPonto
	    </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <br>
            <ul class="nav nav-pills nav-fill mr-auto" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <?php if($i_colab->is_admin($_SESSION['user_id'])){ ?>
                <li class="nav-item">
                  <a class="nav-link" id="pills-new-user-tab" data-toggle="pill" href="#new-user" role="tab" aria-controls="new-user" aria-selected="false">New user</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-new-user-tab" data-toggle="pill" href="#list-users" role="tab" aria-controls="list-users" aria-selected="false">List users</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                  <a class="nav-link" href="?pg=signout" role="tab" aria-selected="false">Sing out</a>
                </li>
            </ul>
        </div>

        <span class="font-weight-light">Welcome, <?php echo $user_details['colab_nome']; ?></span>!
	</nav>


	<main class="container">
        <?php if(isset($_SESSION['msg'])){ ?>
            <div class="alert alert-info alert-dismissible animated fadeInDown" role="alert">
              <?php echo $_SESSION['msg']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php } ?>

        <div class="tab-content animated fadeInUp" id="pills-tabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
              <?php require_once 'src/view/pgs/support/punch_clock.php'; ?>
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="pills-profile-tab">
             <?php require_once 'src/view/pgs/support/update_profile.php'; ?>
          </div>

          <?php
            if($i_colab->is_admin($_SESSION['user_id'])) {
              require_once 'src/view/pgs/support/new_user.php';
              require_once 'src/view/pgs/support/list_users.php';
            }
          ?>
        </div>
	</main>

	<footer class="footer text-center">
		<div class="container">
			<span class="text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> & <a href="http://paulomoraes.me">Paulo Moraes</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</span>
		</div>
	</footer>
</body>

</html>
