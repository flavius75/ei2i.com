<?php include("header.php") ?>



<div id="docs_content">



  <div class="jumbotron">
    <h1 class="display-3">Documents</h1>
    <p class="lead">L'espace Documents permet de partager un document a l'ensemble des utilisateurs</p>
    <hr class="my-4">
    <p>Pour le moment l'admin est le seul utilisateur qui peut envoyer des documents</p>
    <p class="lead">
    </p>
  </div>


<div class="front" style="height:50px;"></div>

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

<?php include("footer.php") ?>

<script type="text/javascript">
  $(document).ready(function(){
    removeActive();
    $("#docs").addClass('active')
  })
</script>
