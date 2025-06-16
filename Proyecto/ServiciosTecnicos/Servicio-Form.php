<?php
session_start();
// Obtener el tipo de servicio de la URL si está presente
$servicioSeleccionado = isset($_GET['servicio']) ? htmlspecialchars($_GET['servicio']) : '';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Servicios de InnovaSys - Distribuidor mayorista de tecnología" />
    <title>Formulario de Servicio - InnovaSys</title>
    <link rel="shortcut icon" href="../Image/Logo.png" />
    <link rel="stylesheet" href="../CSS/style_servicio.css" />
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
    <main>
        <div class="container">
            <h2>Formulario de Solicitud de Servicio</h2>
            <form method="post" action="Servicio.php">
                <table>
                    <tr>
                        <td>Nombre completo:</td>
                        <td><input type="text" name="nombre" required /></td>
                    </tr>
                    <tr>
                        <td>Correo electrónico:</td>
                        <td><input type="email" name="correo" required /></td>
                    </tr>
                    <tr>
                        <td>Tipo de servicio:</td>
                        <td>
                            <?php if(!empty($servicioSeleccionado)): ?>
                                <input type="text" value="<?php echo $servicioSeleccionado; ?>" readonly>
                                <input type="hidden" name="servicio" value="<?php echo $servicioSeleccionado; ?>">
                            <?php else: ?>
                                <select name="servicio" required>
                                    <option value="">-- Selecciona --</option>
                                    <option value="Instalación">Instalación</option>
                                    <option value="Soporte">Soporte</option>
                                    <option value="Reparación">Reparación</option>
                                </select>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha requerida:</td>
                        <td><input type="date" name="fecha" required /></td>
                    </tr>
                    <tr>
                        <td>Comentarios:</td>
                        <td><textarea name="comentarios" rows="5" placeholder="Opcional"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Enviar Solicitud" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
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