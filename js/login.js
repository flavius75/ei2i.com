
//
// $('#login').on('submit', function(){
//    return false;
// });

// $('form-signin').submit(function(e){
//   e.preventDefault();
// })
//
// $('#login').on('click', function(){
//
//
// var  user = $('#inputEmail').val();
// var  pass = $('#inputPassword').val();
//
//
// if (user == "@flavius" && pass == "password"){
//     window.location.href='home.php'
// }
//
// $.ajax({
//      url : 'auth.php',
//      type : 'POST',
//      data : 'user=' + user + '&password='+pass,
//      dataType : 'html',
//      success: function(answer) {
//        answer = JSON.parse(answer);
//        if (answer.success) {
//
//           window.location.href='home.php';
//           Cookies.set('admin' , '200')
//
//        }
//        else {
//           console.info('mauvais mot de passe');
//               $('#msg-error').show();
//        }
//    },
//    error:function() {
//      console.info('mauvais mot de passe');
//  }
//
// });


// $("#").click(function(){
//
//         $.post(
//             'connexion.php', // Un script PHP que l'on va créer juste après
//             {
//                user : $('#inputEmail').val(),
//                pass : $('#inputPassword').val()
//             },
//
//             function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
//             },
//
//             'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
//          );
//
//     });

});
