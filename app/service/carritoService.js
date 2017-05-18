var carrito = {
  cursos: [],
  total: 0,
}

function anyadeCarrito(id){
  $.ajax({
    type: 'get',
    url: 'http://localhost/api-slim/api-cursos.php/cursos/'+id,
    dataType: 'json',
    data:{
      idCurso: "",
      nombre: "",
      descripcion: "",
      foto: "",
      precio: "",
      tutor: ""
    } ,
    success: function(data){

      carrito.cursos.push(data);

      precioTotal(parseInt(data.precio));
      carrito.total = carrito.total + parseInt(data.precio);
      html = "<li>"+ data.nombre+
            "</li>";
      console.log(html);
      $(html).appendTo("#carrito-body");
    }
  });
}
function precioTotal(precio){
    $("#precio-total").empty();
    carrito.total = carrito.total + precio;
    html = "<p>"+carrito.total+"</p>";
    $(html).appendTo("#precio-total");
  }

  /*

function mostrarCarrito(carrito){
  alert(cursos[0].nombre);
  for each(curso in carrito){
    html = "<li>"+ cursos.nombre+
          "</li>";
    $("#carrito-body").append(html);
  }
};

*/
