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
