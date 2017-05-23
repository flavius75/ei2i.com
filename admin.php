<?php session_start()?>
<?php include("header.php") ?>



<?php

if($_SESSION['nom'] != "Flavius"){
    header('Location: home.php');
}

 ?>


 <?php

 $ini_array = parse_ini_file("config.ini");


 try {

   $db_user = $ini_array['username'];
   $db_password = $ini_array['password'];
   $db_name = $ini_array['dbname'];


   $bdd = new PDO('mysql:host=localhost;dbname='.$db_name.'; charset=utf8', $db_user, $db_password);
 } catch (Exception $e) {die('Erreur: ' .$e->getMessage());

 }
 ?>

 <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-1" id="sections">


<div class="container-fluid">

  <div class="jumbotron">
    <h1 class="display-2">Salut Administrateur</h1>
    <p class="lead">Tu peux retrouver ici l'ensemble des informations necessaires a  propos du site ei2i.fr</p>
  </div>

  <div class="space"></div>

  <div class="row">
     <div class="col scores">
       <div class="number">

<?php
$taille_totale= 0;

$reponse = $bdd->query('SELECT COUNT(*) FROM connections');
$entry= $reponse ->fetch();

$reponse = $bdd->query('SELECT COUNT(*) FROM docs');
$nb_docs= $reponse ->fetch();

$reponse = $bdd->query('SELECT up_filesize FROM docs');
while ($taille = $reponse ->fetch())
{
  $taille_totale = $taille_totale + $taille[0];
};

if ($taille_totale/10485760 < 1){
  $taille_totale= $taille_totale/1024;
  $taille_totale = number_format($taille_totale,2);
  $unit= "Ko";
}else {
  $taille_totale=$taille_totale/10485760;
  $taille_totale = number_format($taille_totale,2);
  $unit="Mo";
}

$reponse = $bdd->query('SELECT COUNT(*) FROM members');
$nb_members= $reponse -> fetch();

  ?>

         <b><?php echo $entry[0] ?></b>
       </div>
       Connexions
     </div>
     <div class="col scores">
       <div class="number">
         <b><?php echo $nb_docs[0] ?></b>
       </div>
       Documents partagés
     </div>
     <div class="col scores">
       <div class="number">
         <b><?php echo $taille_totale." ".$unit  ?></b>
       </div>
       Taille des documents
     </div>
     <div class="col scores">
       <div class="number">
         <b><?php echo $nb_members[0] ?></b>
       </div>
      Membres inscrits
     </div>
   </div>
   <div class="space"></div>

<div class="graph">

<canvas  id="bar_chart" width="400" height="200" ></canvas>
<canvas  id="pie_chart"></canvas>

</div>

 <div class="space"></div>

   <div class="col-md-12">

<table class="table">
<thead class="thead-default">
<tr>
<th>#</th>
<th>Nom</th>
<th>Date</th>
<th>Heure</th>
</tr>
</thead>
<tbody>

<?php

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM connections ORDER BY ID DESC LIMIT 0, 5');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

$date_base =  $donnees['date'];

$year = substr($date_base, 0, 4);
$month = substr($date_base, 5,-12);
$day = substr($date_base, 8,-9);
$heure_co = substr($date_base, 11, -3);

?>

<tr>
  <th scope="row"><?php echo $donnees['ID'] ?></th>
  <td><?php echo $donnees['nom'] ?></td>
  <td><?php echo  $day. "-". $month."-".$year ?></td>
  <td><?php echo $heure_co ?></td>
  </tr>

<?php
}

 $reponse->closeCursor(); ?>


</tbody>
</table>
   </div>

</div>
  <?php include("footer.php") ?>

  <script type="text/javascript">
    $(document).ready(function(){
      removeActive();
      $("#").addClass('active')
    });

  </script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script type="text/javascript" src="js/chart.js"></script>
