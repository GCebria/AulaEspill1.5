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
      console.log(data.precio);
      carrito.cursos.push(data);
      carrito.total = carrito.total + parseInt(data.precio);
      console.log(carrito);
      console.log(carrito.total);
    }
  });
}
/*
function total(){
    var total = 0;
    for each (curso in carrito){
      total = total + curso.precio;
    }
    alert(total);
}*/


function mostrarCarrito(carrito){

};
