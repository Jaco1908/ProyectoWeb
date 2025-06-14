<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda mayorista de productos electrónicos con 12 años de experiencia">
    <title>InnovaSys - Distribuidor Mayorista de Tecnología</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Concert+One&family=Fugaz+One&family=Gruppo&family=Limelight&family=Squada+One&family=Tomorrow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="Image/Logo.png">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <header>
        <img src="Image/Logo.png" alt="Logo de InnovaSys">
        <h1>INNOVASYS</h1>
        <div>
            <?php if (isset($_SESSION['nombre'])): ?>
                <span style="margin-right: 10px;">👤 <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
                <a href="IniciarSesion/logout.php" class="login-btn">
                    <span style="margin-right: 10px;"><i>Cerrar Sesión</i></span>
                </a>
            <?php else: ?>
                <a href="IniciarSesion/sesion.php" class="login-btn">
                    <img src="Image/user.png" alt="Usuario"><span style="margin-right: 10px;"><i>Iniciar Sesión</i></span>
                </a>
                <a href="IniciarSesion/registros.php" class="login-btn">
                    <img src="Image/user.png" alt="Usuario"><span style="margin-right: 10px;"><i>Regístrate</i></span>
                </a>
            <?php endif; ?>
        </div>
    </header>
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

        <a href="Catalogo/catalogo.html" class="catalogo">CATÁLOGO</a>
    </nav>

    <main>
        <!-- Carrusel de Promociones Mejorado -->
        <div class="promo-carousel-container">
            <div class="promo-carousel">
                <!-- Inputs radio -->
                <input type="radio" name="promo-slide" id="promo-slide1" checked>
                <input type="radio" name="promo-slide" id="promo-slide2">
                <input type="radio" name="promo-slide" id="promo-slide3">

                <!-- Contenido del carrusel -->
                <div class="promo-carousel-content">
                    <div class="promo-slide">
                        <img src="Image/Promociones/Promo1.png" alt="Tecnología" class="promo-image">
                        <div class="promo-overlay">
                            <h3>Ofertas Especiales</h3>
                            <p>Hasta 50% de descuento en productos seleccionados</p>
                            <a href="#" class="promo-btn">Ver ofertas</a>
                        </div>
                    </div>
                    <div class="promo-slide">
                        <img src="Image/Promociones/Promo2.png" alt="Audífonos" class="promo-image">
                        <div class="promo-overlay">
                            <h3>Nuevos Productos</h3>
                            <p>Descubre nuestra última colección de audífonos</p>
                            <a href="#" class="promo-btn">Ver novedades</a>
                        </div>
                    </div>
                    <div class="promo-slide">
                        <img src="Image/Promociones/Promo3.png" alt="Smartwatch" class="promo-image">
                        <div class="promo-overlay">
                            <h3>Tecnología Wearable</h3>
                            <p>Los mejores smartwatches al mejor precio</p>
                            <a href="#" class="promo-btn">Explorar</a>
                        </div>
                    </div>
                </div>

                <!-- Flechas de navegación -->
                <div class="promo-navigation">
                    <label for="promo-slide1" class="promo-arrow promo-prev">‹</label>
                    <label for="promo-slide2" class="promo-arrow promo-next">›</label>
                    <label for="promo-slide3" class="promo-arrow promo-next">›</label>
                </div>

                <!-- Indicadores -->
                <div class="promo-indicators">
                    <label for="promo-slide1" class="promo-indicator"></label>
                    <label for="promo-slide2" class="promo-indicator"></label>
                    <label for="promo-slide3" class="promo-indicator"></label>
                </div>
            </div>
        </div>

        <!--=============================
Seccion de productos
/* ============================= */-->
        <section class="seccion-productos">
            <input type="radio" name="categoria" id="destacado-radio" checked class="hidden-radio">
            <input type="radio" name="categoria" id="promocion-radio" class="hidden-radio">
            <input type="radio" name="categoria" id="nuevo-radio" class="hidden-radio">

            <div class="botones-categorias">
                <label for="destacado-radio" class="categoria-btn">DESTACADO</label>
                <label for="promocion-radio" class="categoria-btn">PROMOCIÓN</label>
                <label for="nuevo-radio" class="categoria-btn">NUEVO</label>
            </div>

            <!-- Carrusel Destacados -->
            <div class="carrusel-productos" id="destacado-carrusel">
                <div class="carousel-container">
                    <div class="carousel">
                        <input type="radio" name="destacado-slide" id="destacado-slide1" checked>
                        <input type="radio" name="destacado-slide" id="destacado-slide2">

                        <div class="carousel-content">
                            <div class="slide">
                                <div class="producto">
                                    <img src="Image/Destacado/Proyector.jpeg" alt="Proyector Epson"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>PROYECTOR EPSON PORTÁTIL EPIQ V15IBHS FLEX 3LCD WXGA 3000 LÚMENES</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Destacado/Audio.jpg" alt="Teclado mecánico"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>AUDIO XIAOMI/REDMI BUDS 6 PLAY ANUL. RUIDO /36 H.</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Destacado/computadorLev.jpg" alt="Monitor Gaming"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>COMPUTADOR/LENOVO PORTATIL IDEAPAD SLIM 3 15IAH8 </h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Destacado/Cabezal.jpg" alt="Laptop Ultrabook"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CABEZAL HPINC 3YP86A NEGRO/TRICOLOR GT INK TANK 5810</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="producto">
                                    <img src="Image/Destacado/MonitorAsus.jpg" alt="Audífonos inalámbricos"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>MONITOR ASUS/VA259HGA EYE CARE GAMING 24.5 PULG PLANO / IPS</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Destacado/Impresora1.jpg" alt="Disco Duro SSD"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>IMPRESORA EPSON L5590 MULTIFUNCION/WIFI/ETHERNET/INALAMBRICA</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Destacado/Silla.jpg" alt="Tablet Android"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>SILLA APEX/GAMER-CON REPOSAPIES MULTIFUNCION NEGRO/ROJO</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Destacado/Camara ip.jpg" alt="Smartwatch Pro"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CAMARA IP TP-LINK TAPO C310 EXTERIOR/3 MP/VISION NOCTURNA/</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <label for="destacado-slide1" class="arrow arrow-left">‹</label>
                        <label for="destacado-slide2" class="arrow arrow-right">›</label>

                        <div class="indicators">
                            <label for="destacado-slide1" class="indicator"></label>
                            <label for="destacado-slide2" class="indicator"></label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carrusel Promoción -->
            <div class="carrusel-productos" id="promocion-carrusel">
                <div class="carousel-container">
                    <div class="carousel">
                        <input type="radio" name="promocion-slide" id="promocion-slide1" checked>
                        <input type="radio" name="promocion-slide" id="promocion-slide2">

                        <div class="carousel-content">
                            <div class="slide">
                                <div class="producto">
                                    <img src="Image/Prom/camara.jpg" alt="Camara"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CAMARA EZVIZ EB8 4G 2K BIDIRECIONAL PANORAMICA</h4>
                                    <p class="precio-promo">$39.99 <span class="precio-original">$59.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Prom/Mochila.jpg" alt="impresora"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>MOCHILA SPEEDMIND SMMOL04 HASTA 15.6 COLOR GRIS</h4>
                                    <p class="precio-promo">$19.99 <span class="precio-original">$29.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Prom/impresoraepson.jpg" alt="Mochila"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>IMPRESORA EPSON TM-T20III-01 USB+SERIAL/CONTADOR</h4>
                                    <p class="precio-promo">$49.99 <span class="precio-original">$79.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Prom/Mouses.jpg" alt="Webcam Full HD"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>MOUSE PAD SPEEDMIND MPG01NE COLOR NEGRO</h4>
                                    <p class="precio-promo">$29.99 <span class="precio-original">$49.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="producto">
                                    <img src="Image/Prom/TelevisorLG.jpg" alt="Disco Externo"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>TELEVISOR LG 86UT8050PSB 86 PULGADAS SMARTTV 4K UHD</h4>
                                    <p class="precio-promo">$59.99 <span class="precio-original">$89.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Prom/impresoraid.jpg" alt="Router WiFi"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>IMPRESORA ID ZEBRA ZC300 DUAL SIDED, USB Y RED</h4>
                                    <p class="precio-promo">$69.99 <span class="precio-original">$99.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Prom/camaraezvi.jpg" alt="Power Bank"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CAMARA EZVIZ EB5 4K BAT. 10400MAH INTEGRA PANEL SOLAR EXT. WIFI 6</h4>
                                    <p class="precio-promo">$34.99 <span class="precio-original">$49.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Prom/powerbank.jpg" alt="Kit Limpieza"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>POWER BANK ARGOMTECH C12 12000MAH COLOR BLANCO</h4>
                                    <p class="precio-promo">$14.99 <span class="precio-original">$24.99</span></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <label for="promocion-slide1" class="arrow arrow-left">‹</label>
                        <label for="promocion-slide2" class="arrow arrow-right">›</label>

                        <div class="indicators">
                            <label for="promocion-slide1" class="indicator"></label>
                            <label for="promocion-slide2" class="indicator"></label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carrusel Nuevos -->
            <div class="carrusel-productos" id="nuevo-carrusel">
                <div class="carousel-container">
                    <div class="carousel">
                        <input type="radio" name="nuevo-slide" id="nuevo-slide1" checked>
                        <input type="radio" name="nuevo-slide" id="nuevo-slide2">

                        <div class="carousel-content">
                            <div class="slide">
                                <div class="producto">
                                    <img src="Image/Nuevo/candado.jpg" alt="Drone 4K"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CAMDADO AGILER AGI-4007 COMBINACION 4 DIGITOS</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Nuevo/casecooler.jpg" alt="Monitor Curvo"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CASE COOLER MASTER/ELITE 301 EATX WHITE</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Nuevo/celularinfinix.jpg" alt="Laptop Gaming"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CELULAR INFINIX/HOT 50 PRO 8GB RAM</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Nuevo/celulartecno.jpg" alt="Smartphone Plegable"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CELULAR/TECNO/SPARK CAMON 40 PRO 8GM RAM</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="producto">
                                    <img src="Image/Nuevo/discoext.jpg" alt="Tablet Windows"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>DISCO EXTERNO ADAT HD710P 5TB NEGRO USB 3.1 IP68</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Nuevo/Ezvizcamara.jpg" alt="Proyector 4K"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>PROYECTOR 4K UHD 3000 LUMENES ANDROID TV</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Nuevo/play.jpg" alt="Consola Retro"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>CONSOLA DE JUEGO SSONY DISCO SLIM STANDARD</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                                <div class="producto">
                                    <img src="Image/Nuevo/router.jpg" alt="Cámara 360°"
                                        onerror="this.src='Image/placeholder-product.jpg'">
                                    <h4>ROUTER TPLINK/DECO BE25-OUTDOOR WIFI7</h4>
                                    <p><a href="#">Haga clic para ver el precio</a></p>
                                    <a href="#" class="boton-detalle">Ver detalles</a>
                                </div>
                            </div>
                        </div>

                        <label for="nuevo-slide1" class="arrow arrow-left">‹</label>
                        <label for="nuevo-slide2" class="arrow arrow-right">›</label>

                        <div class="indicators">
                            <label for="nuevo-slide1" class="indicator"></label>
                            <label for="nuevo-slide2" class="indicator"></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="carousel-container">
            <!-- Encabezado -->
            <div class="carousel-header">
                <h3>MÁS VENDIDOS</h3>
                <a href="#" class="view-all">VER TODOS LOS PRODUCTOS</a>
            </div>

            <!-- Carrusel -->
            <div class="carousel">
                <input type="radio" name="carousel" id="slide1" checked>
                <input type="radio" name="carousel" id="slide2">
                <input type="radio" name="carousel" id="slide3">

                <!-- Flechas de navegación -->
                <div class="navigation-arrows">
                    <!-- Flecha Izquierda -->
                    <label for="slide1" class="arrow arrow-left arrow-to-1">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </label>
                    <label for="slide2" class="arrow arrow-left arrow-to-2">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </label>
                    <label for="slide3" class="arrow arrow-left arrow-to-3">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </label>
                </div>

                <!-- Contenedor de productos -->
                <div class="carousel-content">
                    <!-- Slide 1 -->
                    <div class="slide">
                        <div class="product">
                            <img src="Image/Masvendidos/Mouse.jpeg" alt="Mouse Logitech">
                            <h4>MOUSE LOGITECH M170 WIRELESS NEGRO</h4>
                            <button class="price-text">Haga clic para ver el precio</button>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/Mouse2.jpg" alt="Mouse Genius">
                            <h4>MOUSE GENIUS DX-110 PS2 BLACK OPTICO</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/Teclado.jpg" alt="Teclado Genius">
                            <h4>TECLADO GENIUS SMART KB-100 USB NEGRO</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/mouse 3.jpg" alt="Mouse Genius">
                            <h4>MOUSE GENIUS DX-120 USB BLACK OPTICO</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="product">
                            <img src="Image/Masvendidos/Adaptador.jpg" alt="Producto 5">
                            <h4>ADAPTADOR DE RED TP-LINK TL-WN823N N300/MINI USB INALAMBRICO</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/Router.jpg" alt="Producto 6">
                            <h4>ROUTER TP-LINK TL-WR840N N300, 2 ANT., 4 PUERTOS FE</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/Micro.jpg" alt="Producto 7">
                            <h4>MICRO SDHC KINGSTON 64GB CON ADAPTADOR/CANVAS SELECT PLUS 100R CL10 UHS-I</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/Mouse4.jpg" alt="Producto 8">
                            <h4>MOUSE GENIUS NX-7000 WIRELESS NEGRO / BLUEEYE / RF 2.4GHZ / PILA AA / WIN Y MAC</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide">
                        <div class="product">
                            <img src="Image/Masvendidos/smartwatch.jpg" alt="Producto 9">
                            <h4>SMARTWATCH MIBRO A2 NEGRO /BT 5.0 LLAMADAS /BAT. 350MAH /1.39 PANTALLA /2ATM</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/auricular.jpg" alt="Producto 10">
                            <h4>AURICULAR WIRELESS GENIUS HS-M920BT IN-EAR / BT 5.0 / ESTUCHE DE CARGA </h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/Mouse5.jpg" alt="Producto 11">
                            <h4>MOUSE GENIUS NX-7009 WIRELESS AZUL / BLUEEYE / RF 2.4GHZ / PILA AA / WIN Y MAC</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                        <div class="product">
                            <img src="Image/Masvendidos/auidifonos.jpg" alt="Producto 12">
                            <h4>AUDIO XIAOMI/REDMI BUDS 6 PLAY ANUL. RUIDO /36 H. /BT 5.4 /IPX4 /COLOR AZUL</h4>
                            <p class="price-text">Haga clic para ver el precio</p>
                            <button class="add-to-cart">Añadir al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Flechas derechas -->
                <div class="navigation-arrows-right">
                    <!-- Flecha Derecha -->
                    <label for="slide2" class="arrow arrow-right arrow-to-2">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="9,18 15,12 9,6"></polyline>
                        </svg>
                    </label>
                    <label for="slide3" class="arrow arrow-right arrow-to-3">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="9,18 15,12 9,6"></polyline>
                        </svg>
                    </label>
                </div>

                <!-- Indicadores -->
                <div class="indicators">
                    <label for="slide1" class="indicator"></label>
                    <label for="slide2" class="indicator"></label>
                    <label for="slide3" class="indicator"></label>
                </div>
            </div>
        </div>

        <br>
        <div class="carousel-container">
            <!-- Encabezado -->
            <div class="carousel-header">
                <h3>MARCAS</h3>
            </div>

            <!-- Carrusel -->
            <div class="carousel">
                <input type="radio" name="brand-carousel" id="brand-slide1" checked>
                <input type="radio" name="brand-carousel" id="brand-slide2">

                <!-- Flechas de navegación -->
                <div class="navigation-arrows">
                    <!-- Flecha Izquierda -->
                    <label for="brand-slide1" class="arrow arrow-left arrow-to-1">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </label>
                    <label for="brand-slide2" class="arrow arrow-left arrow-to-2">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                    </label>
                </div>

                <!-- Contenedor de productos -->
                <div class="carousel-content">
                    <!-- Slide 1 -->
                    <div class="slide">
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/dell.png" alt="Gigabyte">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/gigabyte.png" alt="Infinix">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/infinix.png" alt="Dell">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/microsoft.png" alt="Gigabyte">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/zebra.png" alt="Microsoft">
                            </a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/ecoflow.png" alt="Zebra">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/CPD.png" alt="Ecoflow">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/Asus.png" alt="Ecoflow">
                            </a>
                        </div>
                        <div class="marca">
                            <a href="#">
                                <img src="Image/Marcas/Kaspersky.png" alt="Ecoflow">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Flechas derechas -->
                <div class="navigation-arrows-right">
                    <!-- Flecha Derecha -->
                    <label for="brand-slide2" class="arrow arrow-right arrow-to-2">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="9,18 15,12 9,6"></polyline>
                        </svg>
                    </label>
                </div>

                <!-- Indicadores -->
                <div class="indicators">
                    <label for="brand-slide1" class="indicator"></label>
                    <label for="brand-slide2" class="indicator"></label>
                </div>
            </div>
        </div>
    </main>
    <br>

    <section class="informativo">
        <h2>Servicio técnico especializado</h2>
        <p>Mantenimiento y reparación de equipos electrónicos por profesionales certificados</p>
        <form action="ServiciosTecnicos/servicios.php" method="post">
            <button type="submit">Solicitar servicio</button>
        </form>
    </section>
    <br>

    <footer>
        <div class="footer-container">
            <div class="footer-section logo-section">
                <img src="Image/Logo2.png" alt="Logo de InnovaSys" class="footer-logo">
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
                    <a href="#" class="social-link"><img src="Image/Redes/facebook.png" alt="Facebook"></a>
                    <a href="#" class="social-link"><img src="Image/Redes/instagram.png" alt="Instagram"></a>
                    <a href="#" class="social-link"><img src="Image/Redes/whatsapp.png" alt="WhatsApp"></a>
                    <a href="#" class="social-link"><img src="Image/Redes/linkedin.png" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2023 InnovaSys - Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>