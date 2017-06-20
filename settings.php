
<?php session_start()?>
<?php include("header.php") ?>
<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-1" id="sections">
<!-- <div class="container-fluid"> -->

  <div class="space"></div>

  <div class="card">
    <h3 class="card-header">Paramètres</h3>
    <div class="card-block">
      <h4 class="card-title">Special title treatment</h4>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>

        <div class="form-group">
          <label for="exampleInputName">Nom</label>
          <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" >
        </div>


        <div class="form-group">
          <label for="exampleInputPhoto">Photo de profile</label>
          <label class="custom-file col-1">
            <input type="file" id="file" name="file" class="custom-file-input">
            <span class="custom-file-control"></span>
        </div>

<div class="space"></div>

        <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>
      </form>


    </div>
  </div>


</div>

<?php include("footer.php") ?>

<script type="text/javascript">
  $(document).ready(function(){

    $("#settings").addClass('active')
  })
</script>
