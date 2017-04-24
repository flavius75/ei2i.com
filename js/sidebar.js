(function(){
  let sidebarOpened = false
  let button = document.querySelector('#menu_btn')
  button.addEventListener('click', function(e){
    e.stopPropagation()
    e.preventDefault()
    if(sidebarOpened){
      document.body.classList.remove('has-sidebar')
      sidebarOpened = false
    }else{
    document.body.classList.add('has-sidebar');
    sidebarOpened= true

}

  })

document.body.addEventListener('click', function(){
  if(sidebarOpened){
    document.body.classList.remove('has-sidebar');
    sidebarOpened = false
  }
})

})()
