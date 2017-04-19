$(document).ready(function(){


  $.getScript("app/service/cursoService.js", function(){

  });

 $.getScript("app/service/loginService.js", function(){
  });

$('#btnCrearAlumno').click(function(){
  $.ajax({
     type: "POST",
     dataType: 'json',
     url: 'http://localhost/api-slim/api-alumnos.php/alumnos',
     data: "nombre="+nombre+
     "$apellidos="+apellidos+
     "$telefono="+telefono+
     "$email="+email+
     "&contrasena="+contrasena+
     "$direccion="+direccion,
     success: function(data){
         if(data.status === "success"){
           alert('alumno insertado');
           location.reload();
         } else if(data.status=== "error") {
             $('<p>Invalid password or user</p>').appendTo('#login-error');

           }

         }
});
});

});
