function removeActive(){
  $('a .nav-link').removeClass('active');

};


$('.sidebar a .nav-link').click(function(){


  removeActive();
  $(this).addClass('active')

});
