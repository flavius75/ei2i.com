<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Polytech UPMC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/poly-style.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
        <script nonce='okei2i' src="https://use.fontawesome.com/0bd560c9ea.js"></script>


  </head>

  <body>

    <?php

if (!$_SESSION['nom']){
    header('Location: index.php');
}


if($_SESSION['nom'] == "Flavius")
 $_SESSION['admin'] = true;
  else
  $_SESSION['admin'] = false


     ?>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top " style="background-color: #2969b0; height: 58px !important">
      <div id="menu_btn">

      <img src="img/Menu_48px.png" alt="" >

    </div>
      <a class="navbar-brand logo" href="#">
    <img src="img/upmc_svg.svg" alt="UPMC" width="106" height="40">

    <div class="identity">
      <img src="img/Circled User Male_24px.png" alt="">
    <span>  <?php echo $_SESSION['nom'] ?></span>
    </div>

  </a>
    </nav>


    <nav class="col-sm-3 col-md-2 bg-faded sidebar">

<div class="text-center profile_pic">

<img src="img/pa.png" alt="" class="back">
<img src="img/profile.png" width="90" height="90" alt="Profile" class="rounded-circle portrait"><br><br>

<h4><?php echo $_SESSION['nom'] ?></h4>

</div>


      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="home.php" id="dashboard"><img src="img/Home_24px.png" alt=""></i>Tableau de bord <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="docs.php" id="docs"><img src="img/File_24px.png" alt=""></i>Documents</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="settings.php" id="settings"><img src="img/Settings_24px.png" alt=""></i>Paramètres</a>
        </li>

<?php

if($_SESSION['admin']){

  $link = "<li class=\"nav-item\"><a class=\"nav-link\" href=\"admin.php\" id=\"admin\"><img src=\"img/Speed_24px.png\"></i>Admin</a></li>";
  echo $link;
}

 ?>


      </ul>

      <button type="button" class="btn btn-danger deconexion" id="deconnexion" >Deconnexion</button>


    </nav>
