<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Polytech UPMC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>




    <div class="container">

      <div class="login-cover ">

      <div class="logo">
      <img src="img/upmc_svg.svg" alt="">

      </svg>
      </div>

      <form class="form-signin " action="php/auth.php" method="post">
        <h2 class="form-signin-heading">Connectez-vous</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email"  autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mot de passe" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se rappeler de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="login" type="submit" >Connexion</button>
      </form>

    </div> <!-- /container -->

<div id="alert" class="alert alert-danger" role="alert"><b>Attention!</b> email et/ou le mot de passe sont incorrects </div>

</div>




<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
