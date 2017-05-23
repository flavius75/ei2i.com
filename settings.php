
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
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>



        <div class="form-group">
          <label for="exampleTextarea">Example textarea</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Photo de profile</label>
          <label class="custom-file col-1">
            <input type="file" id="file" name="file" class="custom-file-input">
            <span class="custom-file-control"></span>
        </div>

        <fieldset class="form-group">
          <legend>Radio buttons</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
          </div>
          <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>

        </fieldset>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
          </label>
        </div>
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
