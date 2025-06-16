<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESORIOS</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Concert+One&family=Fugaz+One&family=Gruppo&family=Limelight&family=Squada+One&family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Conectividad.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Footer.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Header.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Nav.css">
    <link rel="shortcut icon" href="../../Image/Logo.png">
    
</head>

<body>
<div class="sticky-wrapper"> 
   <header>
        <a href="../../index.php"><img src="../../Image/Logo.png" alt="Logo de InnovaSys"></a>
        <h1>INNOVASYS</h1>
        <div style="display: flex; align-items: center; gap: 10px;">
            <?php if (isset($_SESSION['nombre'])): ?>
                <span style="margin-right: 10px;">👤 <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                <a href="../../IniciarSesion/logout.php" class="login-btn">
                    <span style="margin-right: 10px;"><i>Cerrar Sesión</i></span>
                </a>
            <?php else: ?>
                <a href="../../IniciarSesion/sesion.php" class="login-btn" style="display: flex; align-items: center;">
                    <img src="../../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                    <span><i>Iniciar Sesión</i></span>
                </a>
                <a href="../../IniciarSesion/registros.php" class="login-btn" style="display: flex; align-items: center;">
                    <img src="../../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                    <span><i>Regístrate</i></span>
                </a>
            <?php endif; ?>
        </div>
    </header>
   

   
    <!-- MENÚ DE NAVEGACIÓN -->
    <nav>
      <div class="nav-container">
        <a href="../Accesorios/Accesorios.php" class="has-dropdown">ACCESORIOS</a>
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
        <a href="../Almacenamiento/Almacenamiento.php" class="has-dropdown">ALMACENAMIENTO</a>
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
        <a href="Conectividad.php" class="has-dropdown">CONECTIVIDAD</a>
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
        <a href="../Consola/Consola.php" class="has-dropdown">CONSOLA</a>
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
</div>
    
        <div class="container">
        <div class="breadcrumb">
            <a href="../../index.php">Home</a> <span>CONECTIVIDAD</span>
        </div>

        <div class="content-wrapper">
            <div class="sidebar">
                    <div class="filter-section brands-section">
                    <h3>
                        Marcas
                        <a href="#" class="view-all-brands">Ver todas</a>
                    </h3>
                    <div class="brands-scrollable">
                        <ul>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Xiaomi</a></li>
                            <li><a href="#">Huawei</a></li>
                            <li><a href="#">Sony</a></li>
                            <li><a href="#">LG</a></li>
                            <li><a href="#">Motorola</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">OnePlus</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Asus</a></li>
                            <li><a href="#">Lenovo</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="main-content">
                <div class="sorting-options">
                    <div class="sort-by">
                        <label for="sort-select">Ordenar por:</label>
                        <select id="sort-select" class="sort-select">
                            <option value="default">Orden predominante</option>
                            <option value="popularity">Ordenar por popularidad</option>
                            <option value="latest">Ordenar por los últimos</option>
                            <option value="price-low">Ordenar por precio: bajo a alto</option>
                            <option value="price-high">Ordenar por precio: alto a bajo</option>
                        </select>
                    </div>
                </div>

                <div class="product-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>ELGATO STREAM DECK MK.2 - CONTROLADOR PARA STREAMING</h3>
                           <p class="specs">15 teclas programables • Integración con OBS/Twitch</p>
                           <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>RAZER RIPSHAW HD - CAPTURADORA DE VIDEO 4K</h3>
                             <p class="specs">Resolución 1080p/60fps • Conexión USB 3.0</p>
                             <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>GOXLR MINI - MEZCLADOR PARA STREAMERS</h3>
                             <p class="specs">4 canales de audio • Efectos de voz integrados</p>
                             <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>RODE STREAMER X - INTERFAZ DE AUDIO PROFESIONAL</h3>
                              <p class="specs">2 entradas XLR • Compatible con PC/Consolas</p>
                              <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>AVERMEDIA LIVE GAMER ULTRA - CAPTURADORA 4K</h3>
                             <p class="specs">Passthrough 4K60 HDR • Compatible con PS5/Xbox</p>
                              <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>ELGATO WAVE 3 - MICRÓFONO USB PARA STREAMING</h3>
                                        <p class="specs">Calidad broadcast • Filtro anti-pop integrado</p>
                            <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-section logo-section">
                <img src="../../Image/Logo2.png" alt="Logo de InnovaSys" class="footer-logo">
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
                    <a href="#" class="social-link"><img src="../../Image/Redes/facebook.png" alt="Facebook"></a>
                    <a href="#" class="social-link"><img src="../../Image/Redes/instagram.png" alt="Instagram"></a>
                    <a href="#" class="social-link"><img src="../../Image/Redes/whatsapp.png" alt="WhatsApp"></a>
                    <a href="#" class="social-link"><img src="../../Image/Redes/linkedin.png" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2023 InnovaSys - Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>
<!-- Página creada por el equipo de desarrollo de InnovaSys. Última actualización: 2024. -->