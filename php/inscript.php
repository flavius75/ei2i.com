<?php


$id=0;
$email="";
$pass="";
$nom="";

if (isset ($_POST['email'])){
$email= $_POST['email'];
}

if (isset ($_POST['password'])){
          $pass =sha1($_POST['password']);
}

if (isset ($_POST['name'])){
$nom= $_POST['name'];
}




    $ini_array = parse_ini_file("../config.ini");


    try {

      $db_user = $ini_array['username'];
      $db_password = $ini_array['password'];
      $db_name = $ini_array['dbname'];


      $bdd = new PDO('mysql:host=localhost;dbname='.$db_name.'; charset=utf8', $db_user, $db_password);
    } catch (Exception $e) {die('Erreur: ' .$e->getMessage());

    }



    // Insertion
    $req = $bdd->prepare('INSERT INTO members SET email= :email, password= :password, date= NOW(),  nom= :nom ' );
  $req->bindValue(':email', $email, PDO::PARAM_INT);
  $req->bindValue(':password', $pass, PDO::PARAM_INT);
  $req->bindValue(':nom', $nom, PDO::PARAM_INT);
  $req->execute();


  echo(json_encode(array('success' => true, 'data' => array())));



     exit();

    ?>




     ?>
