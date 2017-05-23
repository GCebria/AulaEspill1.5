<?php
session_start();
unset($_SESSION['nombre']);
header('Location: index.php');
?>
