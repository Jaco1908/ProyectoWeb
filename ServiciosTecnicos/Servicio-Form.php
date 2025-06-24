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

    <!-- MENÚ DE NAVEGACIÓN -->
    <!-- MENÚ DE NAVEGACIÓN -->
    <nav>
      <div class="nav-container">
        <a href="#" class="has-dropdown">ACCESORIOS</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">ACCESORIO</div>
              <a href="#" class="dropdown-link">MOCHILA</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">AURICULAR</div>
              <a href="#" class="dropdown-link">AUX</a>
              <a href="#" class="dropdown-link">BLUETOOTH</a>
              <a href="#" class="dropdown-link">USB</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">MOTO A BATERÍA</div>
              <a href="#" class="dropdown-link">RECARGABLE</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">GRABADORA</div>
              <a href="#" class="dropdown-link">EXTERNO</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-container">
        <a href="#" class="has-dropdown">ALMACENAMIENTO</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">SMARTWATCH</div>
              <a href="#" class="dropdown-link">MÓVIL</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">PARLANTE</div>
              <a href="#" class="dropdown-link">AUX</a>
              <a href="#" class="dropdown-link">PORTÁTIL</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-container">
        <a href="#" class="has-dropdown">CONECTIVIDAD</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">MICRÓFONO</div>
              <a href="#" class="dropdown-link">USB</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">CÁMARA</div>
              <a href="#" class="dropdown-link">USB</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">ADAPTADOR</div>
              <a href="#" class="dropdown-link">HDMI</a>
              <a href="#" class="dropdown-link">VGA</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">COMBO</div>
              <a href="#" class="dropdown-link">TECLADO</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-container">
        <a href="#" class="has-dropdown">CONSOLA</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">STREAMING</div>
              <a href="#" class="dropdown-link">CHROMECAST</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">PISCINA</div>
              <a href="#" class="dropdown-link">CIRCULAR</a>
              <a href="#" class="dropdown-link">DESMONTABLE</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-container">
        <a href="#" class="has-dropdown">COMPUTACIÓN</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">ENCLOSURE</div>
              <a href="#" class="dropdown-link">USB</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">EXTENSOR</div>
              <a href="#" class="dropdown-link">HUB</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">CANDADO</div>
              <a href="#" class="dropdown-link">PORTÁTIL</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">MOUSE</div>
              <a href="#" class="dropdown-link">USB</a>
              <a href="#" class="dropdown-link">WIRELESS</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-container">
        <a href="#" class="has-dropdown">ELECTRODOMÉSTICOS</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">CABLE</div>
              <a href="#" class="dropdown-link">USB</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">PANEL</div>
              <a href="#" class="dropdown-link">SOLAR</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-container">
        <a href="#" class="has-dropdown">MÓVIL</a>
        <div class="dropdown-menu">
          <div class="dropdown-content">
            <div class="dropdown-column">
              <div class="category-title">SOPORTE</div>
              <a href="#" class="dropdown-link">MONITOR</a>
              <a href="#" class="dropdown-link">TELEVISOR</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">CARRO A BATERÍA</div>
              <a href="#" class="dropdown-link">RECARGABLE</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">FOCOS</div>
              <a href="#" class="dropdown-link">LED</a>
            </div>
            <div class="dropdown-column">
              <div class="category-title">TECLADO</div>
              <a href="#" class="dropdown-link">USB</a>
              <a href="#" class="dropdown-link">WIRELESS</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#" class="catalogo">CATÁLOGO</a>
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