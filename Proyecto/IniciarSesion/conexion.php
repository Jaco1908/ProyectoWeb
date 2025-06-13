<?php
session_start();

// Guardar datos del formulario en sesión
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password']; 

// Redirigir a la página de perfil
header("Location: info.php");
exit();
?>
