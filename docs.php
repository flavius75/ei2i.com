<?php session_start()?>
<?php include("header.php") ?>

<div class="container-fluid">

    <!-- <div class="col-sm-9 offset-sm-3 col-md-12 offset-md-0" id="sections"> -->


<div id="docs_content">



  <div class="jumbotron">
    <h1 class="display-3">Documents</h1>
    <p class="lead">L'espace Documents permet de partager un document a l'ensemble des utilisateurs</p>
    <hr class="my-4">
    <p>Pour le moment l'admin est le seul utilisateur qui peut envoyer des documents</p>
    <p class="lead">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Envoyer un fichier
      </button>
    </p>
  </div>


<div class="front" style="height:50px;"></div>




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
$dir    = 'docs/';
$files = scandir($dir);
$length = count($files);

$i=2;

for($i;$i<$length;$i++) {

  ?>
  <div class="row">
<div class="col-sm-4">
  <div class="card">
    <div class="card-block">
      <h3 class="card-title"><?php echo $files[$i] ?></h3>
      <p class="card-text"></p>
      <a href="docs/" download="<?php echo $files[$i] ?>" class="btn btn-primary">Télécharger</a>
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

<script type="text/javascript">
  $(document).ready(function(){
    removeActive();
    $("#docs").addClass('active')
  });


</script>
