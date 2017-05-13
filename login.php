<?php
session_start();
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
 $response = array();
 $mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "SELECT * FROM alumnos WHERE email='$email' AND contrasena='$contrasena'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$_SESSION['nombre']=$row['nombre'];
			$response['status'] = 'success';
			$response['message'] = 'This was successful';
      $_SESSION['carrito'] = array();
		}
		else{
			$response['status'] = 'error';
	    $response['message'] = 'This failed';
		}
		echo json_encode($response);

?>
