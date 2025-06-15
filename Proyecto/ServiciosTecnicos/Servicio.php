<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicio = $_POST['servicio'];

    if ($servicio == "Instalación") {
        include 'instalacion.php';
    } elseif ($servicio == "Soporte ") {
        include 'soporte.php';
    } elseif ($servicio == "Reparación") {
        include 'reparacion.php';
    } else {
        echo "Servicio no válido.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
