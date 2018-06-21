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
    <link type="text/css" rel="stylesheet" href="src/view/css/signin.css">
	<script src="src/view/js/jquery.min.js"></script>
	<script src="src/view/js/popper.min.js"></script>
	<script src="src/view/js/bootstrap.min.js"></script>
</head>

<body class="text-center">

    <form class="form-signin" method="post" action="?pg=login">
        <img class="mb-4" src="src/view/img/icon.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <?php if(isset($alert_msg)){ ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Ops!</strong> <?php echo $alert_msg; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php } ?>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> & <a href="http://paulomoraes.me">Paulo Moraes</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</p>
    </form>

</body>

</html>
