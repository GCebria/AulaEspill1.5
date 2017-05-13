<?php
session_start();
ini_set("allow_url_fopen", 1);

$id = $_GET['id'];
$url = "http://localhost/api-slim/api-cursos.php/cursos/".$idCurso;
$json = file_get_contents($url);
$curso = (array) json_decode($json);
array_push($_SESSION['carrito'], $curso);



?>
