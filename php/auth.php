<?php

$id=0;
$email="";

$pass="";

if (isset ($_POST['email'])){


$email= $_POST['email'];

}


if (isset ($_POST['password'])){
          $pass =sha1($_POST['password']);
}


// $pass1=sha1("password");
// $pass2=sha1("password");
//
// var_dump($pass1);
// var_dump($pass2);



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
  echo(json_encode(array('success' => false, 'data' => null)));
    header('Location: ../index.php');
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

  echo(json_encode(array('success' => true, 'data' => array())));

    header('Location: ../home.php');
 exit();
}
?>
