function updateUser(idUsuario){
  $.ajax({
    type: 'put',
    url: 'http://localhost/api-slim/api-usuarios.php/usuarios/'+idUsuario,
    dataType: 'json',
    data:{
      nombre: $("#nombre").val(),
      apellidos: $("#apellidos").val(),
      telefono: $("#telefono").val(),
      email: $("#email").val(),
      contrasena: $("#contrasena").val(),
      direccion: $("#direccion").val(),
    },
    success: function(data){
         console.log(data.message);
        }
  });

};
