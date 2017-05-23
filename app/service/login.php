<?php
session_start();
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
 $response = array();
 $mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$_SESSION['nombre']=$row['nombre'];
      $_SESSION['apellidos']=$row['apellidos'];
      $_SESSION['telefono']=$row['telefono'];
      $_SESSION['email']=$row['email'];
      $_SESSION['direccion']=$row['direccion'];
      $_SESSION['idUsuario']=$row['idUsuario'];
      $_SESSION['rolUsuario'] = $row['rolUsuario'];
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
