<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$correo = htmlspecialchars($_POST['correo']);
$fecha = htmlspecialchars($_POST['fecha']);
$comentarios = htmlspecialchars($_POST['comentarios']);


echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Solicitud Recibida - InnovaSys</title>

        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 700px;
                background-color: #ffffff;
                margin: 40px auto;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h2 {
                color: #2e8b57;
                text-align: center;
            }
            p {
                font-size: 16px;
                margin: 12px 0;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: #0e3b7c;
                font-weight: bold;
            }
            header, footer {
                width: 100%;
            }
        </style>
    </head>
    <body>

    <!-- CABECERA -->
    <header>
        <table width='100%' bgcolor='white' cellpadding='0' cellspacing='0' border='0'>
            <tr>
                <td align='center' width='20%'>
                    <img src='../Image/Logo.png' alt='Logo' width='130' />
                </td>
                <td align='center' width='60%'>
                    <font face='Fugaz One' size='7' color='#0e3b7c'>
                        <strong>INNOVASYS</strong>
                    </font>
                </td>
                <td align='center' width='20%'>
                    <font face='Tomorrow' size='2' color='#0e3b7c'></font>
                </td>
            </tr>
        </table>
    </header>

    <!-- CUERPO -->
    <div class='container'>
        <h2>✅ Solicitud enviada con éxito</h2>
        <p>Gracias por contactarnos, <strong>$nombre</strong>. Nos comunicaremos contigo muy pronto al correo <strong>$correo</strong>.</p>
        <hr>
        <p><strong>📛 Nombre completo:</strong> $nombre</p>
        <p><strong>📧 Correo electrónico:</strong> $correo</p>
        <p><strong>🔧 Tipo de servicio solicitado:</strong> $servicio</p>
        <p><strong>📅 Fecha requerida:</strong> $fecha</p>";
        
    if (!empty($comentarios)) {
        echo "<p><strong>💬 Comentarios adicionales:</strong> $comentarios</p>";
    } else {
        echo "<p><strong>💬 Comentarios adicionales:</strong> (No se ingresaron comentarios)</p>";
    }

    echo "<a href='../Paginas/servicios.html'>⬅ Volver a Servicios</a>
    </div>

    <!-- PIE DE PÁGINA -->
    <footer>
        <table width='100%' border='0' cellspacing='0' cellpadding='10' bgcolor='#16345b'>
            <tr valign='middle'>
                <td width='15%' align='left'>
                    <img src='../Image/Logo2.png' alt='Logo de InnovaSys' width='120' />
                </td>
                <td width='25%' align='left'>
                    <font color='white' face='Arial, sans-serif' size='2'>
                        <strong>InnovaSys</strong> es una tienda de productos electrónicos que lleva 12 años trabajando
                        en el sector mayorista.
                    </font>
                </td>
                <td width='30%' align='center'>
                    <font color='white' face='Arial, sans-serif' size='3'>
                        <strong><u>Redes Sociales</u></strong><br><br>
                    </font>
                    <table border='0' cellspacing='10' cellpadding='10'>
                        <tr>
                            <td><a href='#'><img src='../Image/redes/facebook.png' width='40' alt='Facebook'></a></td>
                            <td><a href='#'><img src='../Image/redes/instagram.png' width='40' alt='Instagram'></a></td>
                            <td><a href='#'><img src='../Image/redes/whatsapp.png' width='40' alt='Chat'></a></td>
                            <td><a href='#'><img src='../Image/redes/linkedin.png' width='40' alt='LinkedIn'></a></td>
                        </tr>
                    </table>
                </td>
                <td width='30%' align='center'>
                    <font color='white' face='Arial, sans-serif' size='2'>
                        <b><strong>📍 Ubicación</strong></b><br>
                        <strong>Sede Quito</strong><br>
                        Av. Gral. Rumiñahui S/N, Sangolquí 171103 <br>
                        📞 (04) 373-2131
                    </font><br>
                    <iframe
                        src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.768446243726!2d-78.44301499999999!3d-0.3148246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5bd12538eb13b%3A0x907c61f1abbe45ab!2sUniversidad%20de%20las%20Fuerzas%20Armadas%20ESPE!5e0!3m2!1ses-419!2sec!4v1715704600000!5m2!1ses-419!2sec'
                        width='75%' height='100' allowfullscreen='' loading='lazy'>
                    </iframe>
                </td>
            </tr>
        </table>
    </footer>

    </body>
    </html>";
} else {
    // Redirigir si se accede sin enviar datos
    header("Location: ../Paginas/servicios.html");
    exit();
}
?>
