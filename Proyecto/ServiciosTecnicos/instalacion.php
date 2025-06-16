<?php

// Verificar si se enviaron los datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$correo = htmlspecialchars($_POST['correo']);
$fecha = htmlspecialchars($_POST['fecha']);
$comentarios = htmlspecialchars($_POST['comentarios']);

echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Solicitud Recibida - InnovaSys</title>

        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 700px;
                background-color: #ffffff;
                margin: 40px auto;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h2 {
                color: #2e8b57;
                text-align: center;
            }
            p {
                font-size: 16px;
                margin: 12px 0;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: #0e3b7c;
                font-weight: bold;
            }
            header, footer {
                width: 100%;
            }
        </style>
    </head>
    <body>

    <!-- CABECERA -->
    <header>
        <img src="../Image/Logo.png" alt="Logo de InnovaSys">
        <h1>&nbsp;INNOVASYS&nbsp;</h1>
        <div style="display: flex; align-items: center; gap: 10px;">
            <?php if (isset($_SESSION['nombre'])): ?>
                <span style="margin-right: 10px;">👤 <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                <a href="IniciarSesion/logout.php" class="login-btn">
                    <span style="margin-right: 10px;"><i>Cerrar Sesión</i></span>
                </a>
            <?php else: ?>
                <a href="IniciarSesion/sesion.php" class="login-btn" style="display: flex; align-items: center;">
                    <img src="../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                    <span><i>Iniciar Sesión</i></span>
                </a>
                <a href="IniciarSesion/registros.php" class="login-btn" style="display: flex; align-items: center;">
                    <img src="../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                    <span><i>Regístrate</i></span>
                </a>
            <?php endif; ?>
        </div>
    </header>

    <!-- CUERPO -->
    <div class='container'>
        <h2>✅ Solicitud enviada con éxito</h2>
        <p>Gracias por contactarnos, <strong>$nombre</strong>. Nos comunicaremos contigo muy pronto al correo <strong>$correo</strong>.</p>
        <hr>
        <p><strong>📛 Nombre completo:</strong> $nombre</p>
        <p><strong>📧 Correo electrónico:</strong> $correo</p>
        <p><strong>🔧 Tipo de servicio solicitado:</strong> $servicio</p>
        <p><strong>📅 Fecha requerida:</strong> $fecha</p>";
        
    if (!empty($comentarios)) {
        echo "<p><strong>💬 Comentarios adicionales:</strong> $comentarios</p>";
    } else {
        echo "<p><strong>💬 Comentarios adicionales:</strong> (No se ingresaron comentarios)</p>";
    }

    echo "<a href='/servicios.html'>⬅ Volver a Servicios</a>
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
    </html>";
} else {
    // Redirigir si se accede sin enviar datos
    header("Location: ../Paginas/servicios.html");
    exit();
}
?>