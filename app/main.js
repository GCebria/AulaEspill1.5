$(document).ready(function(){

  $.getScript("app/service/cursoService.js", function(){});

  $.getScript("app/service/loginService.js", function(){
    onClickLogin();
  });



});
