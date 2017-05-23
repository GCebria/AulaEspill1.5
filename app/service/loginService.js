function botonLogin(){
    $('#login-error').empty();
      email=$("#email").val();
      contrasena=$("#contrasena").val();
      console.log(email +" - " +contrasena);


        $.ajax({
          type: 'POST',
          url: 'http://localhost/AulaEspill1.5/app/service/login.php',
          dataType: 'json',
          data: {
            email: email,
            contrasena: contrasena
          },
          success: function(data){
            if(data.status === "success"){
            $('#login-modal').modal('toggle');
            location.reload();
            } else if(data.status=== "error") {
              $('<p>Invalid password or user</p>').appendTo('#login-error');
            }
          }
        });
}


/*
$.ajax({
   type: "POST",
   dataType: 'json',
   url: "login.php",
   data: {email: email, contrasena, contrasena},
   success: function(data){
       if(data.status === "success"){
         $('#login-modal').modal('toggle');
         location.reload();
       } else if(data.status=== "error") {
           $('<p>Invalid password or user</p>').appendTo('#login-error');
         }
       }
     });
     */
