<?php
ini_set("allow_url_fopen", 1);
session_start();

$id = $_GET['id'];
$json = file_get_contents('http://localhost/api-slim/api-cursos.php/cursos/'.$id);
$curso = json_decode($json);
array_push($_SESSION['carrito'], $curso);



?>
