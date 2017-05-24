$('#login').click(function(e){
  e.preventDefault();

var email = $('#inputEmail').val();
var pass = $('#inputPassword').val();

$.ajax({
    url: 'php/auth.php',
    type: 'POST',
    data: 'email='+email+'&password='+pass,
    dataType: 'json',
    cache:false,
    success: function(){
      console.log('succes');
      window.location.href = "home.php";
    },
    error: function(data){
      $('#alert').css('visibility','visible')
    }
  })

})


$('#inscript').click(function(e){
  e.preventDefault();

var email = $('#inputEmail').val();
var nom = $('#inputName').val();
var pass1 = $('#inputPassword1').val();
var pass2 = $('#inputPassword2').val();

if(pass1 != pass2){
  $('#alert').css('visibility','visible')
}
else{

$.ajax({
    url: 'php/inscript.php',
    type: 'POST',
    data: 'email='+email+'&password='+pass1+'&name='+nom,
    dataType: 'json',
    cache:false,
    success: function(){
      console.log('succes');
      window.location.href = "index.php";
    },
    error: function(data){
    console.log("Echec d'inscription");
    }
  })

  }

})
