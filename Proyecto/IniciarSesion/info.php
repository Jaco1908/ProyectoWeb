<?php
session_start();

// Si no hay datos en sesión, redirige al login
if (!isset($_SESSION['email'])) {
    header("Location: index.php"); // O tu página de login
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - InnovaSys</title>
    <link rel="stylesheet" href="../CSS/style_sesion.css">
</head>
<body>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f2f5; margin: 0; padding: 0; }
        .profile-container {
            max-width: 400px; margin: 50px auto; padding: 20px;
            background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 8px;
        }
        h2 { text-align: center; color: #333; }
        p { font-size: 16px; color: #555; }
        .label { font-weight: bold; }
    </style>
    <section class="profile-container">
        <h2>Perfil de Usuario</h2>
        <p><span class="label">Nombre de Uusario:</span> <?php echo htmlspecialchars($_SESSION['nombre']); ?></p>
        <p><span class="label">Correo:</span> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p><span class="label">Contraseña:</span> <?php echo htmlspecialchars($_SESSION['password']); ?></p>
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