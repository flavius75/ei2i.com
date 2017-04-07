
<?php include("header.php") ?>


          <div class="jumbotron">
            <h1 class="display-3">Salut {utilisateur} !</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Lire plus ...</a>
            </p>
          </div>


          <div class="row news">
            <div class="col-md-4 text-center">
               <img src="User-Login-128.png" alt="User Icon" />
               <p>
                 Chaque utilisateur possede un espace dedié qui lui permet d'acceder a l'ensemble des services mises a disposition par ce site.

               </p>
            </div>
            <div class="col-md-4 text-center" >
               <img src="Document-Share-01-128.png" alt="Document Share" />
               <p>
                 Partager des documents a l'ensemble des utilisateurs devient plus facile. Un espage dédié est crée afin que chacun puisse y contribuer.

               </p>
            </div>
            <div class="col-md-4 text-center">
               <img src="Calendar-Date-01-128.png" alt="Calendar Icon" />
               <p>
                 Organisez votre temps avec l'outil calendrier qui integre les informations fournies par l'administrations concernant les horaires des cours.
             </p>

            </div>




          </div>

          <div class="col-md-12">

<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
          </div>
        </div>
      </div>
    </div>




<?php include("footer.php") ?>

<script type="text/javascript">
  $(document).ready(function(){

    $("#dashboard").addClass('active')
  })
</script>
