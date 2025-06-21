<?php
session_start();

$usuarioIngresado = $_POST['nombre'] ?? '';
$claveIngresada = $_POST['password'] ?? '';

$archivo = '../IniciarSesion/usuario.txt';
$usuarioValido = false;

if (file_exists($archivo)) {
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lineas as $linea) {
        list($nombre, $password) = explode('|', trim($linea));
        if ($usuarioIngresado === $nombre && $claveIngresada === $password) {
            $usuarioValido = true;
            $_SESSION['nombre'] = $nombre;
            break;
        }
    }
}

if ($usuarioValido) {
    header("Location: ../index.php");
    exit;
} else {
    header("Location: ../login.php?error=Credenciales incorrectas");
    exit;
}