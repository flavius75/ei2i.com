<?php

session_start();

if ($_FILES['file']['error'] > 0) $erreur = "Erreur lors du transfert";

$title =  $_POST['title'];

$name = $_FILES['file']['name'] ;
$type =  $_FILES['file']['type'] ;
$taille = $_FILES['file']['size'] ;

$user = $_SESSION['nom'];


//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['file']['name'], '.')  ,1)  );


$nom = "../docs/{$title}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['file']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";


$ini_array = parse_ini_file("../config.ini");


try {

  $db_user = $ini_array['username'];
  $db_password = $ini_array['password'];
  $db_name = $ini_array['dbname'];


  $bdd = new PDO('mysql:host=localhost;dbname='.$db_name.'; charset=utf8', $db_user, $db_password);
} catch (Exception $e) {die('Erreur: ' .$e->getMessage());

}


$req = $bdd->prepare('INSERT INTO docs( up_title, up_extension, up_filesize, up_date, up_member) VALUES( :up_title, :up_extension, :up_filesize, NOW(), :up_member)');
$req->execute(array(
	'up_title' => $title,
  'up_extension' => $extension_upload,
	'up_filesize' => $taille,
	'up_member' => $user,
	));



  header('Location: ../docs.php');

?>
