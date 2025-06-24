<?php
session_start();
// Verificar si se enviaron los datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $servicio = htmlspecialchars($_POST["servicio"]);
    $fecha = htmlspecialchars($_POST["fecha"]);
    $comentarios = htmlspecialchars($_POST["comentarios"]);
} else {
    // Redirigir si se accede sin enviar datos
    header("Location: ../ServiciosTecnicos/servicios.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios - InnovaSys</title>
    <link rel="stylesheet" href="../CSS/style_servicio.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Footer.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Header.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Nav.css">
</head>
<body>
    <!-- CABECERA  INICIO-->
      <header>
            <div class="header-left">
                <a href="../index.php">
                    <img src="../Image/Logo.png" alt="Logo de InnovaSys">
                </a>
            </div>
            <div class="header-center">
                <h1>&nbsp;INNOVASYS&nbsp;</h1>
            </div>
            <div class="header-right">
                <?php if (isset($_SESSION['nombre'])): ?>
                    <span style="margin-right: 10px;">👤 <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                    <a href="IniciarSesion/logout.php" class="login-btn">
                        <span style="margin-right: 10px;"><i>Cerrar Sesión</i></span>
                    </a>
                <?php else: ?>
                    <a href="IniciarSesion/sesion.php" class="login-btn">
                        <img src="../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                        <span><i>Iniciar Sesión</i></span>
                    </a>
                    <a href="IniciarSesion/registros.php" class="login-btn">
                        <img src="../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                        <span><i>Regístrate</i></span>
                    </a>
                <?php endif; ?>
            </div>
        </header>

    <!-- CUERPO -->
    <div class="container">
        <h2>✅ Solicitud enviada con éxito</h2>
        <p>Gracias por contactarnos, <strong><?php echo $nombre; ?></strong>. Nos comunicaremos contigo muy pronto al correo <strong><?php echo $correo; ?></strong>.</p>
        <hr>
        <p><strong>📛 Nombre completo:</strong> <?php echo $nombre; ?></p>
        <p><strong>📧 Correo electrónico:</strong> <?php echo $correo; ?></p>
        <p><strong>🔧 Tipo de servicio solicitado:</strong> <?php echo $servicio; ?></p>
        <p><strong>📅 Fecha requerida:</strong> <?php echo $fecha; ?></p>
        <?php if (!empty($comentarios)): ?>
            <p><strong>💬 Comentarios adicionales:</strong> <?php echo $comentarios; ?></p>
        <?php else: ?>
            <p><strong>💬 Comentarios adicionales:</strong> (No se ingresaron comentarios)</p>
        <?php endif; ?>

        <br><a href='../ServiciosTecnicos/servicios.php'>⬅ Volver a Servicios</a>
    </div>

    <!-- PIE DE PÁGINA -->
<footer>
        <div class="footer-container">
            <div class="footer-section logo-section">
                <img src="../Image/Logo2.png" alt="Logo de InnovaSys" class="footer-logo">
                <p class="footer-description">InnovaSys es una tienda de productos electrónicos que lleva 12 años
                    trabajando en el sector mayorista.</p>
            </div>

            <div class="footer-section location-section">
                <h3 class="footer-title">📍 Ubicación</h3>
                <div class="location-info">
                    <p class="location-name"><strong>Sede Quito</strong></p>
                    <p class="location-address">Av. Gral. Rumiñahui S/N, Sangolquí 171103</p>
                    <p class="location-phone">📞 (04) 373-2131</p>
                </div>
            </div>

            <div class="footer-section social-section">
                <h3 class="footer-title">Redes Sociales</h3>
                <div class="social-icons">
                    <a href="#" class="social-link"><img src="../Image/Redes/facebook.png" alt="Facebook"></a>
                    <a href="#" class="social-link"><img src="../Image/Redes/instagram.png" alt="Instagram"></a>
                    <a href="#" class="social-link"><img src="../Image/Redes/whatsapp.png" alt="WhatsApp"></a>
                    <a href="#" class="social-link"><img src="../Image/Redes/linkedin.png" alt="LinkedIn"></a>
                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2023 InnovaSys - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>