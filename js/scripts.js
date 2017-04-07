function removeActive(){
  $('.sidebar li a ').removeClass('active')
};


$('.sidebar li a ').click(function(){
  removeActive();
  $(this).addClass('active');
});

$('#stats').click(function(){

  $('#sections').load('stats.php')
});

$('#docs').click(function(){

  $('#sections').load("docs.html")
});

// $("body").css("overflow", "hidden");
