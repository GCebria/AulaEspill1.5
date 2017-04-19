<?php
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$recontrasena = $_POST['recontrasena'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

if ($contrasena = $recontrasena){

 $response = array();
 $mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "INSERT INTO alumnos VALUES '$email','$contrasena'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$_SESSION['email']=$row['email'];
			$response['status'] = 'success';
			$response['message'] = 'This was successful';

		}
		else{
			$response['status'] = 'error';
	    $response['message'] = 'This failed';
		}
		echo json_encode($response);
}

?>
