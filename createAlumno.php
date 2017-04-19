<?php
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$recontrasena = $_POST['recontrasena'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];


 $response = array();
 $mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "INSERT INTO alumnos VALUES (NULL, '$nombre', '$apellidos', '$telefono', '$email','$contrasena', '$direccion')";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
if ($result=== TRUE) {
    echo "New alumno created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>
