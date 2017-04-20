function botonLogin(){
  console.log('pasaporaqui');
    $('#login-error').empty();
      email=$("#email").val();
      contrasena=$("#contrasena").val();
       $.ajax({
          type: "POST",
          dataType: 'json',
          url: "login.php",
          data: "email="+email+"&contrasena="+contrasena,
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
