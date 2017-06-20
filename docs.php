<?php session_start()?>
<?php include("header.php") ?>





<div class="parallax">


<div class="front">



<h2>Documents</h2>
<h6>Un espace de partage de documents dédié</h4>
<div class="space"></div>

  <button type="button" class="btn btn-outline-secondary btn-lg" data-toggle="modal" data-target="#myModal">
    Envoyer un fichier
  </button>

</div>

</div>


<div class="front" style="height:50px;"></div>
<div class="container-fluid">




  <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-1" id="sections">

<div id="docs_content">


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





<!-- Modal -->
<form class="" action="php/upload.php" method="post" enctype="multipart/form-data">


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Envoyer un fichier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">

  <div class="col-12">
    <input class="form-control" type="text" placeholder="Title" name="title" id="example-text-input">
  </div>
</div>

        <label class="custom-file col-1">
  <input type="file" id="file" name="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>
</form>

<div class="articles">


<?php

  $reponse = $bdd->query('SELECT * FROM docs ORDER BY up_id ');




  // On affiche chaque entrée une à une
  while ($donnees = $reponse->fetch())
  {

if($donnees['up_extension'] == "c" || $donnees['up_extension']== "asm")
{ $icon="img/Source Code_24px.png";}

else  if($donnees['up_extension']== "txt" || $donnees['up_extension']== "odf" ||$donnees['up_extension']== "doc" || $donnees['up_extension']=="docx" || $donnees['up_extension']=="pdf" )
{ $icon="img/Document_24px.png"; }

else if ($donnees['up_extension']== "jpg"|| $donnees['up_extension']=="JPG" || $donnees['up_extension']== "png" || $donnees['up_extension']== "PNG" )
{   $icon="img/Picture_24px.png";  }



?>

<div class="row">
<div class=" tile">

  <div class="card">

<div class="cote" ><img src="<?php echo $icon?>" alt=""></div>

    <div class="card-block">

      <h5 class="card-title"><?php echo $donnees['up_title'].".". $donnees['up_extension'] ?></h5>
      <p class="card-text">
        <em>par<?php echo " ".$donnees['up_member']?></em>

      </p>
      <a href="docs/<?php echo $donnees['up_title'].".". $donnees['up_extension'] ?>" download class="btn btn-primary boutton"><img src="img/Down_24px.png" alt=""></a>
    </div>
  </div>
</div>
</div>


  <?php
}
  ?>


</div>
</div>

</div>
</div>

<?php include("footer.php") ?>

<script nonce='okei2i' type="text/javascript">
  $(document).ready(function(){
    removeActive();
    $("#docs").addClass('active')
  });


</script>
