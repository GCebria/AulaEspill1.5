function onClickLogin(){

  $("#login").click(function(){
        email=$("#email").val();
        contrasena=$("#contrasena").val();
         $.ajax({
            type: "POST",
            url: "../login.php",
            data: "email="+email+"&contrasena="+contrasena
        });
    });
}
