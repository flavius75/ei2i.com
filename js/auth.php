<?php
if (!empty($_POST)){
  $password = $_POST['password'];
  $user = $_p

}


  $id=0;
  $user="";



  // if (isset ($_POST['username'])){
  //
  //
  // $pseudo= $_POST['username'];
  //
  // }
  //
  // if (isset ($_POST['password'])){
  //           // Hachage du mot de passe
  //           $pass_hache = $_POST['password'];
  // }
  //
  // try {
  //   $bdd = new PDO('mysql:host=localhost;dbname=wethink; charset=utf8', 'root', 'root');
  // } catch (Exception $e) {die('Erreur: ' .$e->getMessage());
  //
  // }
  //
  // // Vérification des identifiants
  // $req = $bdd->prepare('SELECT id FROM members WHERE username = :username AND password = :password');
  // $req->execute(array(
  //     'username' => $pseudo,
  //     'password' => $pass_hache));
  //
  // $resultat = $req->fetch();
  //
  // if (!$resultat)
  // {
  //     echo 'Mauvais identifiant ou mot de passe !';
  // }
  // else
  // {
  //     session_start();
  //     $_SESSION['id'] = $resultat['id'];
  //     $_SESSION['pseudo'] = $pseudo;
  //     echo 'Vous êtes connecté !';
  //     header('Location: ../home.php');
  //  exit();
  // }



  if ($password == 'password'){

    echo(json_encode(array('success' => true, 'data' => array())));
  } else {
    echo(json_encode(array('success' => false, 'data' => null)));
  }
  return;


?>
