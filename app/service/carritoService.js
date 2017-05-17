function Carrito (){
this.cursos=[];
this.total=0;
}
carro = new Carrito();


function anyadeCarrito(id){
  alert(id)
  $.ajax({
    type: 'get',
    url: 'http://localhost/api-slim/api-cursos.php/cursos/'+id,
    data:{
      idCurso: "",
      nombre: "",
      descripcion: "",
      foto: "",
      precio: "",
      tutor: ""
    } ,
    success: function(data){
      console.log(data);
      this.cursos.push(data);
      }
    });
}

function mostrarCarrito(carrito){

};
