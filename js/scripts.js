function removeActive() {
  $('.sidebar li a ').removeClass('active')
};


$('.sidebar li a ').click(function() {
  removeActive();
  $(this).addClass('active');
});

$('#deconnexion').click(function(e) {

  e.preventDefault();

  var exit = 1;

  $.ajax({
    url: 'php/exit.php',
    type: 'POST',
    data: 'exit=' + exit,
    dataType: 'json',
    success: function() {
      window.location.href = "index.php";
    },
    error: function() {
      alert("Impossible de se deconnecter");
    }
  })

})
