<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - InnovaSys</title>
    <link rel="stylesheet" href="../CSS/style_sesion.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Footer.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Header.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Nav.css">

</head>
<body>

    <!-- Sección principal de inicio de sesión -->
    <section class="login-main">
        <section class="login-wrapper">
            <!-- Lado Izquierdo: Información de InnovaSys -->
            <section class="login-info">
                <img src="../Image/Logo2.png" alt="Logo InnovaSys" class="info-logo">
                <h2>InnovaSys</h2>
                <p>Tienda de productos electrónicos con 12 años en el sector mayorista.</p>
            </section>

            <!-- Lado Derecho: Formulario de inicio de sesión -->
            <section class="login-container">
                <img src="../Image/Logo.png" alt="Logo" class="login-logo">
                <h1 class="login-title">Iniciar Sesión</h1>
                <form class="login-form" action="conexion.php" method="POST">
                    <label for="nombre">Nombre de usuario</label>
                    <input type="nombre" id="nombre" name="nombre" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>

                    <div class="remember">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Recordarme</label>
                    </div>

                    <button type="submit">Iniciar Sesión</button>
                </form>

                <section class="login-links">
                    <a href="olvidar.php">¿Olvidaste tu contraseña?</a><br>
                    <a href="registros.php">Crear cuenta nueva</a>
                </section>
            </section>
        </section>
    </section>

    <!-- Pie de página -->
    <footer class="footer">
        <section class="footer-container">
            <section class="footer-logo">
                <img src="../Image/Logo2.png" alt="Logo de InnovaSys">
            </section>
            <section class="footer-social">
                <h3>Redes Sociales</h3>
                <section class="social-icons">
                    <a href="#"><img src="../Image/redes/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="../Image/redes/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../Image/redes/whatsapp.png" alt="Whatsapp"></a>
                    <a href="#"><img src="../Image/redes/linkedin.png" alt="LinkedIn"></a>
                </section>
            </section>

            <section class="footer-location">
                <h3>📍 Ubicación - Sede Quito</h3>
                <p>Av. Gral. Rumiñahui S/N, Sangolquí 171103<br>📞 (04) 373-2131</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.768446243726!2d-78.44301499999999!3d-0.3148246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5bd12538eb13b%3A0x907c61f1abbe45ab!2sUniversidad%20de%20las%20Fuerzas%20Armadas%20ESPE!5e0!3m2!1ses-419!2sec!4v1715704600000!5m2!1ses-419!2sec"
                    width="250" height="100" allowfullscreen="" loading="lazy">
                </iframe>
            </section>
        </section>

        <section class="footer-bottom">
            &copy; 2025 InnovaSys. Todos los derechos reservados.
        </section>
    </footer>

</body>
</html>
