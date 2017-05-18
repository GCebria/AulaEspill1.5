function comprar(idUsuario){
  fecha = Date().toString();
  alert(fecha);
  $.ajax({
    type: 'post',
    url: 'http://localhost/api-slim/api-pedidos.php/pedidos',
    dataType: 'json',
    data:{
    fechaPedido: fecha,
    idUsuario : idUsuario
    },
    success: function(data){
      console.log(data.message);

    }
  });
}
