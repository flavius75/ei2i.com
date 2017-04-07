<?php

$id=0;
$pseudo="non";

$pass="";

if (isset ($_POST['email'])){


$pseudo= $_POST['password'];

}

var_dump($pseudo);
exit;

if (isset ($_POST['inputPassword'])){
          // Hachage du mot de passe
          $pass = $_POST['inputPassword'];

}

try {
  $bdd = new PDO('mysql:host=localhost;dbname=ei2i.com; charset=utf8', 'root', 'root');
} catch (Exception $e) {die('Erreur: ' .$e->getMessage());

}

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM members WHERE email = :email AND password = :password');
$req->execute(array(
    'email' => $pseudo,
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
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
    header('Location: ../home.php');
 exit();
}
?>
