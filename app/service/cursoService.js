$.getScript("app/model/curso.js", function(){
  peticionCursos();

  });
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
      procesarCursos(data)
    }
  });
}


function procesarCursos(Curso){


$.each(Curso, function(index, curso){
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

      $(html).appendTo("#cursosIndex");

     });

$.each(Curso, function(index, curso){
       var html =  "<div class='col-sm-4 col-xs-6' id="+curso.id+">"+
       "<a href='#' onclick='seleccionarCurso("+curso.id+")'>"+
       "<img class='img-responsive portfolio-item' src="+curso.foto+" alt=''>"+
       "</a>"+
       "</div>";

       $(html).appendTo("#cursosCursos");

});

}

function seleccionarCurso(id){
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'http://localhost/api-slim/api-cursos.php/cursos/'+id,
    data: Curso,
    success: function(data) {
      cargarCursoSelecionado(data);
    }
  });
}

function cargarCursoSelecionado(curso){

          var html = "<div class='col-lg-12'>"+
                    "<h1 class=page-header>"+curso.nombre+
                    "</h1>"+
                "</div>"+

         "<div class='row'>"+
            "<div class='col-md-8'>"+
                        "<img class='img-responsive' src="+curso.foto+" alt=''>"+
                      "</div>"+
                      "<div class='col-md-4'>"+
                    "<h3>Descripción del curso</h3>"+
                    "<p>"+curso.descripcion+"</p>"+
                    "<h3>Detalles del curso</h3>"+
                    "<ul>"+
                      "<li>Lorem Ipsum</li>"+
                      "<li>Dolor Sit Amet</li>"+
                      "<li>Consectetur</li>"+
                      "<li>Adipiscing Elit</li>"+
                  "</ul>"+
              "</div>"+
              "</div>";


      $("#cursoPrincipal").empty();
      $(html).appendTo("#cursoPrincipal");

}
