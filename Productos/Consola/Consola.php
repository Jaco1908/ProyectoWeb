<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESORIOS</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Concert+One&family=Fugaz+One&family=Gruppo&family=Limelight&family=Squada+One&family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Consola.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Footer.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Header.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Nav.css">
    <link rel="shortcut icon" href="../../Image/Logo.png">
    
</head>

<body>
<div class="sticky-wrapper"> 
        <header>
            <div class="header-left">
                <img src="../../Image/Logo.png" alt="Logo de InnovaSys">
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
                        <img src="../../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                        <span><i>Iniciar Sesión</i></span>
                    </a>
                    <a href="IniciarSesion/registros.php" class="login-btn">
                        <img src="../../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                        <span><i>Regístrate</i></span>
                    </a>
                <?php endif; ?>
            </div>
        </header>
    <!-- MENÚ DE NAVEGACIÓN .. -->
   
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
        <a href="../Conectividad/Conectividad.php" class="has-dropdown">CONECTIVIDAD</a>
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
        <a href="../Computacion/Computacion.php" class="has-dropdown">COMPUTACIÓN</a>
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
        <a href="../Electrodomesticos/Electrodomesticos.php" class="has-dropdown">ELECTRODOMÉSTICOS</a>
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
        <a href="../Movil/Movil.php" class="has-dropdown">MÓVIL</a>
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

      <a href="../../Catalogo/" class="catalogo">CATÁLOGO</a>
    </nav>
</div>
    <div class="container">
        <div class="breadcrumb">
            <a href="../../index.php">Home</a> <span>CONSOLA</span>
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
                            <img src="../../Image/Productos/Consola/Accesorios_Gaming/GOOGLE CHROMECAST 4K.png" alt="Producto">
                        </div>
                         <div class="product-info">
                          <h3>GOOGLE CHROMECAST 4K</h3>
                          <p class="specs">Streaming en 4K HDR • Compatible con Google TV • Control remoto</p>
                          <p class="price-info">Inicia sesión para ver precios</p>
                          <button class="view-btn">Ver producto</button>
                      </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="../../Image/Productos/Consola/Accesorios_Gaming/AMAZON FIRE TV STICK 4K.png" alt="Producto">
                        </div>
                       <div class="product-info">
                          <h3>AMAZON FIRE TV STICK 4K</h3>
                          <p class="specs">Alexa integrado • Dolby Vision • 8GB almacenamiento</p>
                          <p class="price-info">Inicia sesión para ver precios</p>
                          <button class="view-btn">Ver producto</button>
                      </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="../../Image/Productos/Consola/Consolas/NVIDIA SHIELD TV PRO.png" alt="Producto">
                        </div>
                        <div class="product-info">
                            <h3>NVIDIA SHIELD TV PRO</h3>
                            <p class="specs">AI upscaling 4K • GeForce Now • 3GB RAM</p>
                            <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="../../Image/Productos/Consola/Accesorios_Gaming/ROKU ULTRA 2023.png" alt="Producto">
                        </div>
                        <div class="product-info">
                          <h3>ROKU ULTRA 2023</h3>
                          <p class="specs">Dolby Vision/HDR10+ • Ethernet incluido • Control por voz</p>
                          <p class="price-info">Inicia sesión para ver precios</p>
                          <button class="view-btn">Ver producto</button>
                      </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="../../Image/Productos/Consola/Accesorios_Gaming/XBOX SERIES.png" alt="Producto">
                        </div>
                         <div class="product-info">
                            <h3>XBOX SERIES S</h3>
                            <p class="specs">512GB SSD • 1440p/120fps • Game Pass incluido</p>
                            <p class="price-info">Inicia sesión para ver precios</p>
                            <button class="view-btn">Ver producto</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src="../../Image/Productos/Consola/Consolas/PLAYSTATION 5 DIGITAL EDITION.png" alt="Producto">
                        </div>
                                      <div class="product-info">
                          <h3>PLAYSTATION 5 DIGITAL EDITION</h3>
                          <p class="specs">825GB SSD • 4K/120Hz • Sin lector de discos</p>
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