<?php
session_start();
$email = $_GET['email'];
$contrasena = $_GET['contrasena'];
$mysqli=mysqli_connect('localhost','root','','aulaespill');

$query = "SELECT * FROM alumnos WHERE email='$email' AND contrasena='$contrasena'";
echo $query;
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['email']=$row['email'];
		}
		else{
			echo 'false';
		}
?>
