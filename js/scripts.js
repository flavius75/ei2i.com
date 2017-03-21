function removeActive(){
  $('.sidebar li a ').removeClass('active')

};


$('.sidebar li a ').click(function(){


  removeActive();
  $(this).addClass('active');

});
