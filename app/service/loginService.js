function onClickLogin(){

  $("#login").click(function(){
      alert("mecangenlá");
        email=$("#email").val();
        contrasena=$("#contrasena").val();
         $.ajax({
            type: "POST",
            url: "../login.php",
            data: "email="+email+"&contrasena="+contrasena
        });
    });
}
