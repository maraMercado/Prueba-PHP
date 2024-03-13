<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ícono -->
    <link rel="icon" type="image/png" href="assets/vps_icon.png">  

    <title>Visas Pro Solutions</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include("components/header.php");?>

    <!-- Services header -->
    <section class="sec-faq-header page_faq">
        <div class="container-fluid">
            <h1>Nuestros servicios</h1>
            <p>Explorá todos los servicios que brindamos para que obtengas<br>tu visa cuanto antes ↓</p>
        </div>
    </section>

    <sec class="sec-services">
        <div class="container-fluid">
            <div class="row row-txt-left">

                <div class="col-md-7">
                    <h1>Consultas</h1>
                    <p style="margin-bottom: 2rem">Evaluamos los requisitos necesarios para que apliques a la visa, según destino y propósito.</p>

                    <h1>Ayuda con la documentación</h1>
                    <p>Te asistimos para que identifiques, recopiles y organices los documentos necesarios, tales como: copias del pasaporte, fotografías, estados financieros, y más.</p>
                </div>
                
                <div class="col-md-5">
                    <img id="blue-rectangle" src="assets/VPS_landpage/sections/services/blue_rectangle.png" alt="Rectángulo azul">
                    <img id="online-meet-handshake" src="assets/VPS_landpage/sections/services/online-meet.jpg" alt="Reunión virtual">
                </div>
            
            </div>
        </div>

        <div class="container-fluid">
            <div class="row row-txt-right">

                <div class="col-md-5">
                    <img id="orange-rectangle" src="assets/VPS_landpage/sections/services/orange_rectangle.png" alt="Rectángulo naranja">
                    <img id="document-fill" src="assets/VPS_landpage/sections/services/document-fill.jpg" alt="Ayuda con la documentación">
                </div>

                <div class="col-md-7">
                    <h1>Preparación de la solicitud</h1>
                    <p style="margin-bottom: 2rem">Te ayudamos para que completes los formularios de solicitud de forma precisa y completa.</p>

                    <h1>Presentación de la solicitud</h1>
                    <p>Presentamos la solicitud del visado en nombre del postulante, frente a la embajada/consulado o vía online.</p>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row row-txt-left">
                <div class="col-md-7">
                    <h1>Seguimiento y comunicación</h1>
                    <p style="margin-bottom: 2rem">Somos el puente entre las embajadas/consulados y el postulante, a quien brindamos actualizaciones constantes sobre los trámites, corrigiendo la documentación si fuera necesario.</p>

                    <h1>Servicios adicionales</h1>
                    <p>Te ayudamos con otros aspectos vinculados a tu viaje, tales como seguros de asistencia al viajero o reservas de alquiler y pasajes.</p>
                </div>

                <div class="col-md-5">
                    <img id="blue-rectangle" src="assets/VPS_landpage/sections/services/blue_rectangle.png" alt="Rectángulo azul">
                    <img id="online-meet-handshake" src="assets/VPS_landpage/sections/services/handshake.jpg" alt="Apretón de manos">
                </div>

            </div>
        </div>
    </sec>

    <!-- Contacto section -->
    <section class="sec-dudas">
        <div class="container-fluid">
            <div class="row" id="row_dudas">
                <div class="col-md-7 order-md-1" id="col">
                    <h1>¿Dudas?</h1>
                    <p>¡Contactate directamente con un <strong>agente de visa</strong>! Recibí <strong>asesoramiento</strong> y comenzá a planear el viaje de tus sueños hoy.</p>
                </div> 
                <div class="col-md-5 order-1" id="col"> 
                    <a class="btn btn-all" href="contact-form.php" role="button">EMPEZÁ</a>
                </div>
            </div>
            </div>
    </section>

    <!-- Footer-->
    <?php include("components/footer.php");?>

<!-- Font Awesome [icons] -->
<script src="https://kit.fontawesome.com/a9872be1ad.js" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>