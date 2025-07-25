<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tienda mayorista de productos electrónicos con 12 años de experiencia">
    <title>InnovaSys - Distribuidor Mayorista de Tecnología</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Concert+One&family=Fugaz+One&family=Gruppo&family=Limelight&family=Squada+One&family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="../Image/Logo.png">
    <link rel="stylesheet" href="../CSS/style_catalogo.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Footer.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Header.css">
    <link rel="stylesheet" href="../CSS/Plantilla/Nav.css">
</head>

<body>
    <div class="sticky-wrapper">
        <header>
            <div class="header-left">
                <img src="../Image/Logo.png" alt="Logo de InnovaSys">
            </div>
            <div class="header-center">
                <h1>&nbsp;INNOVASYS&nbsp;</h1>
            </div>
            <div class="header-right">
                <?php if (isset($_SESSION['nombre'])): ?>
                <span style="margin-right: 10px;">👤
                    <?php echo htmlspecialchars($_SESSION['nombre']); ?>
                </span>
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
        <nav>
            <div class="nav-container">
                <a href="../Productos/Accesorios/Accesorios.php" class="has-dropdown">ACCESORIOS</a>
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
                <a href="../Productos/Almacenamiento/Almacenamiento.php" class="has-dropdown">ALMACENAMIENTO</a>
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
                <a href="../Productos/Conectividad/Conectividad.php" class="has-dropdown">CONECTIVIDAD</a>
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
                <a href="../Productos/Consola/Consola.php" class="has-dropdown">CONSOLA</a>
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
        </nav>
    </div>


    <main class="catalogo-container">
        <h1 class="main-title">Nuestros Catálogos</h1>
        <p class="main-subtitle">Descarga los últimos catálogos de productos por categoría</p>

        <div class="catalogo-grid">
            <!-- Accesorios -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/Accesorio.gif" alt="Accesorios">
                </div>
                <h2 class="card-title">Accesorios</h2>
                <p class="card-description">Auriculares, fundas y más para tus dispositivos</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 2.4MB</span>
                    <a href="../archivos/catalogo-accesorios.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Almacenamiento -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/Almace.gif" alt="Almacenamiento">
                </div>
                <h2 class="card-title">Almacenamiento</h2>
                <p class="card-description">Discos duros, SSD y memorias USB</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 3.1MB</span>
                    <a href="../archivos/catalogo-almacenamiento.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Conectividad -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/Conexion.gif" alt="Conectividad">
                </div>
                <h2 class="card-title">Conectividad</h2>
                <p class="card-description">Cables, adaptadores y accesorios de red</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 2.8MB</span>
                    <a href="../archivos/catalogo-conectividad.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Consola -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/consola.gif" alt="Consola">
                </div>
                <h2 class="card-title">Consola</h2>
                <p class="card-description">Accesorios para videojuegos</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 3.5MB</span>
                    <a href="../archivos/catalogo-consola.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Computación -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/Computador.gif" alt="Computación">
                </div>
                <h2 class="card-title">Computación</h2>
                <p class="card-description">Componentes y periféricos</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 4.2MB</span>
                    <a href="../archivos/catalogo-computacion.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Electrodomésticos -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/Electro.gif" alt="Electrodomésticos">
                </div>
                <h2 class="card-title">Electrodomésticos</h2>
                <p class="card-description">Tecnología para el hogar</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 2.9MB</span>
                    <a href="../archivos/catalogo-electrodomesticos.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Móvil -->
            <div class="catalogo-card">
                <div class="card-icon">
                    <img src="../Image/Catalogo/celular.gif" alt="Móvil">
                </div>
                <h2 class="card-title">Móvil</h2>
                <p class="card-description">Dispositivos y accesorios móviles</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 3.7MB</span>
                    <a href="../archivos/catalogo-movil.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>

            <!-- Ofertas Especiales -->
            <div class="catalogo-card destacado">
                <div class="card-badge">Nuevo</div>
                <div class="card-icon">
                    <img src="../Image/Catalogo/ofertas.gif" alt="Ofertas">
                </div>
                <h2 class="card-title">Ofertas Especiales</h2>
                <p class="card-description">Descuentos exclusivos por tiempo limitado</p>
                <div class="card-footer">
                    <span class="file-info">PDF - 4.5MB</span>
                    <a href="../archivos/catalogo-ofertas.pdf" download class="download-btn">Descargar</a>
                </div>
            </div>
        </div>
    </main>
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