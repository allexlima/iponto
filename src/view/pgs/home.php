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
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-new-user-tab" data-toggle="pill" href="#new-user" role="tab" aria-controls="new-user" aria-selected="false">New user</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pg=signout" role="tab" aria-selected="false">Sing out</a>
                </li>
            </ul>
        </div>
	</nav>

	<main class="container animated fadeInUp">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
              Home
          </div>
          <div class="tab-pane fade" id="new-user" role="tabpanel" aria-labelledby="pills-new-user-tab">
              Novo perfil
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              Editar meu perfil
          </div>
        </div>
	</main>

	<footer class="footer text-center">
		<div class="container">
			<span class="text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> & <a href="http://paulomoraes.me">Paulo Moraes</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</span>
		</div>
	</footer>
</body>

</html>
