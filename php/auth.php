<?php

$id=0;
$email="";

$pass="";

if (isset ($_POST['email'])){


$email= $_POST['email'];

}

// var_dump($pseudo);
// exit;

if (isset ($_POST['password'])){
          // Hachage du mot de passe
          $pass = $_POST['password'];

}



$ini_array = parse_ini_file("../config.ini");


try {

  $db_user = $ini_array['username'];
  $db_password = $ini_array['password'];
  $db_name = $ini_array['dbname'];


  $bdd = new PDO('mysql:host=localhost;dbname='.$db_name.'; charset=utf8', $db_user, $db_password);
} catch (Exception $e) {die('Erreur: ' .$e->getMessage());

}

// Vérification des identifiants
$req = $bdd->prepare('SELECT id, nom FROM members WHERE email = :email AND password = :password');
$req->execute(array(
    'email' => $email,
    'password' => $pass));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email;
    $_SESSION['nom'] = $resultat['nom'];

    $req = $bdd->prepare('INSERT INTO connections(nom, date) VALUES( :nom, NOW())');
    $req->execute(array(
    	'nom' => $_SESSION['nom']
    	));


    header('Location: ../home.php');
 exit();
}
?>
