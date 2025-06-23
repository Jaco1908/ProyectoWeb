<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESORIOS</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Concert+One&family=Fugaz+One&family=Gruppo&family=Limelight&family=Squada+One&family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Accesorios.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Footer.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Header.css">
    <link rel="stylesheet" href="../../CSS/Plantilla/Nav.css">
    <link rel="shortcut icon" href="../../Image/Logo.png">

</head>

<body>
    <div class="sticky-wrapper">
        <header>
            <div class="header-left">
                <a href="../../index.php"> <img src="../../Image/Logo.png" alt="Logo de InnovaSys"></a>
            </div>
            <div class="header-center">
                <h1>&nbsp;INNOVASYS&nbsp;</h1>
            </div>
            <div class="header-right">
                <?php if (isset($_SESSION['nombre'])): ?>
                    <span style="margin-right: 10px;">👤 <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                    <a href="../../IniciarSesion/logout.php" class="login-btn">
                        <span style="margin-right: 10px;"><i>Cerrar Sesión</i></span>
                    </a>
                <?php else: ?>
                    <a href="../../IniciarSesion/sesion.php" class="login-btn">
                        <img src="../../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                        <span><i>Iniciar Sesión</i></span>
                    </a>
                    <a href="../../IniciarSesion/registros.php" class="login-btn">
                        <img src="../../Image/user.png" alt="Usuario" style="height: 20px; margin-right: 5px;">
                        <span><i>Regístrate</i></span>
                    </a>
                <?php endif; ?>
            </div>
        </header>



        <!-- MENÚ DE NAVEGACIÓN -->
        <nav>
            <div class="nav-container">
                <a href="Accesorios.php" class="has-dropdown">ACCESORIOS</a>
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

            <a href="../../Catalogo/catalogo.php" class="catalogo">CATÁLOGO</a>
        </nav>
    </div>
    <div class="container">
        <div class="breadcrumb">
            <a href="../../index.php">Home</a> <span>ACCESORIOS</span>
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
                            <li><a href="Filtro/Zebra.php">Zebra</a></li>
                            <li><a href="Filtro/TPLINK.php">TPLINK</a></li>
                            <li><a href="Filtro/Speedmind.php">Speedmind</a></li>
                            <li><a href="Filtro/Xiaomi.php">Xiaomi</a></li>
                            <li><a href="Filtro/Genius.php">Genius</a></li>
                            <li><a href="Filtro/Epson.php">Epson</a></li>
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

                    <!-- Botón de alternancia de vista -->
                    <div class="view-toggle">
                        <input type="radio" name="view" id="grid-view" checked>
                        <label for="grid-view" title="Vista en cuadrícula">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="3" y="3" width="7" height="7" />
                                <rect x="14" y="3" width="7" height="7" />
                                <rect x="3" y="14" width="7" height="7" />
                                <rect x="14" y="14" width="7" height="7" />
                            </svg>
                        </label>

                        <input type="radio" name="view" id="list-view">
                        <label for="list-view" title="Vista en lista">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="3" y="5" width="18" height="2" />
                                <rect x="3" y="11" width="18" height="2" />
                                <rect x="3" y="17" width="18" height="2" />
                            </svg>
                        </label>
                    </div>
                </div>

                <!-- Contenedor del slider con productos -->
                <div class="products-slider">
                    <!-- Slide 1 -->
                    <input type="radio" name="slide" id="slide1" checked>
                    <input type="radio" name="slide" id="slide2">
                    <input type="radio" name="slide" id="slide3">

                    <div class="slides">
                        <!-- Página 1 de productos -->
                        <div class="slide">
                            <div class="product-grid">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Zebra/Adaptador.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>ACCESORIO ZEBRA ADAPTADOR DE C.A.L198 (CARGADOR MÓVIL)</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/TPlink/AdaptadorRed.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>ADAPTADOR DE RED TPURK USB ARCHER TU PLUS AC 1300</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Speedmind/AdaptadorHdmi.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>ADAPTADOR SPEEDINRO SM1890 HDMI A VGA / SOPORTA 1080P</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Xiaomi/AudioBuds6_Azul.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>AUDIO XIAOMI REDMI BUDS 6 PLAY AZUL</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Xiaomi/AudioBuds6_Negro.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>AUDIO XIAOMI REDMI BUDS 6 PLAY NEGRO</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Genius/AudioHS.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>AUDIO WIRELESS GENIUS HS-M920BT</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Página 2 de productos -->
                        <div class="slide">
                            <div class="product-grid">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Epson/Bandeja.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>BANDEJA EPSON PARA IMPRESORA MULTIFUNCIÓN COLOR WORKFORCES</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Genius/CableC.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>CABLE GENIUS ACC-A2CC TIPO A-C/CARGA RÁPIDA</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Genius/TecladoMouseKm.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>COMBO TECLADO Y MOUSE GENIUS KM-200 USB NEGRO</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Speedmind/BarraSonido.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>BARRA DE SONIDO SPEEDMIND SB905 2.0/ 30W</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Speedmind/Mochila.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>MOCHILA SPEEDMIND SMMOL04 HASTA 15.6 COLOR GRIS CON BLOQUEO</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="../../Image/Productos/Accesorios/Genius/MouseMini.png" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>MOUSE GENIUS WIRELESS MINI </h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Página 3 de productos -->
                        <div class="slide">
                            <div class="product-grid">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/200" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>ALTAVOZ BLUETOOTH PORTÁTIL JBL</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/200" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>POWER BANK 20000mAh CARGA RÁPIDA</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/200" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>MICRÓFONO USB CONDENSADOR PROFESIONAL</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>

                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://via.placeholder.com/200" alt="Producto">
                                    </div>
                                    <div class="product-info">
                                        <h3>ADAPTADOR USB-C A HDMI 4K</h3>
                                        <p class="price-info">Inicia sesión para ver precios</p>
                                        <button class="view-btn">Ver producto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controles de navegación -->
                    <div class="slider-controls">
                        <div class="slider-nav">
                            <label for="slide1" class="nav-dot"></label>
                            <label for="slide2" class="nav-dot"></label>
                            <label for="slide3" class="nav-dot"></label>
                        </div>

                        <div class="slider-arrows">
                            <label for="slide1" class="arrow prev" data-slide="3">❮</label>
                            <label for="slide2" class="arrow next" data-slide="1">❯</label>
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