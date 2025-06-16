<?php
session_start();
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
    <!-- CABECERA -->
    <header>
        <img src="../Image/Logo.png" alt="Logo de InnovaSys">
        <h1>INNOVASYS</h1>
        <div style="display: flex; align-items: center; gap: 10px;">
            <?php if (isset($_SESSION['nombre'])): ?>
                <span style="margin-right: 10px;">👤 <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                <a href="../IniciarSesion/logout.php" class="login-btn">
                    <span style="margin-right: 10px;"><i>Cerrar Sesión</i></span>
                </a>
            <?php else: ?>
                <a href="../IniciarSesion/sesion.php" class="login-btn" style="display: flex; align-items: center;">
                    <img src="../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                    <span><i>Iniciar Sesión</i></span>
                </a>
                <a href="../IniciarSesion/registros.php" class="login-btn" style="display: flex; align-items: center;">
                    <img src="../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                    <span><i>Regístrate</i></span>
                </a>
            <?php endif; ?>
        </div>
    </header>

    <!-- MENÚ DE NAVEGACIÓN -->
    <nav>
        <!-- ... (mantén igual tu código de navegación existente) ... -->
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="main-servicios">
        <section class="intro">
            <h2>¿Qué servicio necesitas?</h2>
            <p>En <strong>InnovaSys</strong> ofrecemos soluciones tecnológicas eficientes y confiables. Conoce más sobre nuestros servicios:</p>
        </section>

        <section class="tarjetas-servicio">
            <a href="Servicio-Form.php?servicio=Instalación" class="tarjeta">
                <img src="../Image/Servicios/Instalacion.jpg" alt="Instalación">
                <h3>Instalación</h3>
                <p>Instalamos y configuramos computadoras, redes, software y periféricos.</p>
            </a>
            <a href="Servicio-Form.php?servicio=Soporte" class="tarjeta">
                <img src="../Image/Servicios/Soporte.jpg" alt="Soporte Técnico">
                <h3>Soporte Técnico</h3>
                <p>Brindamos asistencia técnica remota o presencial. Solucionamos problemas técnicos.</p>
            </a>
            <a href="Servicio-Form.php?servicio=Reparación" class="tarjeta">
                <img src="../Image/Servicios/Reparacion.jpg" alt="Reparación">
                <h3>Reparación</h3>
                <p>Reparamos computadoras y realizamos mantenimiento preventivo.</p>
            </a>
        </section>
    </main>
 <!-- PIE DE PÁGINA -->
    <br />
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