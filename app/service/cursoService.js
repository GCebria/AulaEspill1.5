$.getScript("app/model/curso.js", function(){
  peticionCursos();

/*
AÑADIR FUNCIÓN SWICH PARA QUE LLAME A UN LADO U OTRO
*/

function peticionCursos(){
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'http://localhost/api-slim/api-cursos.php/cursos',
    data: Curso,
    success: function(data) {
      procesarCursosIndex(data)
    }
  });
}


function procesarCursosIndex(Curso){

$.each(Curso, function(index, curso){
var nombre = curso.nombre;
var descripcion = curso.descripcion;
 var html = "<div class='col-lg-4 col-sm-6'>"+
            "<a href="+curso.foto+" class='portfolio-box'>"+
              "<img src="+curso.foto+" class='img-fluid' alt=''>"+
                "<div class='portfolio-box-caption'>"+
                 "<div class='portfolio-box-caption-content'>"+
                 "<div class='project-name'>"+curso.nombre+"</div>"+
                     "<div class='project-category text-faded'>"+
                     curso.descripcion+
                     "</div>"+
                 "</div>"+
                "</div>"+
             "</a>"+
             "</div>";

      $(html).appendTo("#divCursos");

     });

}

});



/*<div class="col-lg-4 col-sm-6">

</div>*/
