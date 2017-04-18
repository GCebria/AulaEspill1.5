function botonLogin(){
    console.log('pasaporaqui');
    $('#login-modal').modal('toggle');
      email=$("#email").val();
      contrasena=$("#contrasena").val();
       $.ajax({
          type: "POST",
          dataType: 'json',
          url: "login.php",
          data: "email="+email+"&contrasena="+contrasena,
          success: function(data){
              if(data.status === "success"){
                location.reload();
              } else if(data.status=== "error") {
                  alert('invalid password or user');

                }

              }
    });
}
