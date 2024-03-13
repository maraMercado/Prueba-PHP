<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ícono -->
    <link rel="icon" type="image/png" href="assets/vps_icon.png">

    <title>Visas Pro Solutions</title>

    <!-- Glider.js [carousel]-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include("components/header.php");?>
    

    <!-- Home section -->
    <section class="sec-home">
        <div class="container-fluid">
            <div class="row" id="row_xl">
                <div class="home col-md-8" id="col1">
                    <h1>Tramitá tu visa hoy.</h1>
                    <p>Viajes, estudio, trabajo, vacaciones y más: facilitamos cada trámite y te acompañamos durante todo el proceso.</p>
                    <a class="btn btn-all" href="contact-form.php" role="button">EMPEZÁ</a>
                </div>
                <div class="home col-md-4" id="col2">
                    <img id="img_home" src="assets/VPS_landpage/sections/section1/passport_thumbnail.jpg" alt="Pasaportes">
                </div>
            </div>
        </div>
    </section>

    <!-- Conocenos section -->
    <section class="sec-conocenos">
        <div class="container-fluid">

        <!-- Texto -->
        <h1>Conocenos</h1>
        <p>Somos una agencia especializada en la <strong style="font-weight: 600">gestión de visas</strong>, basada en Buenos Aires, Argentina. Contamos con más de <strong style="font-weight: 600">10 años de trayectoria</strong>, ofreciendo una variedad de <strong style="font-weight: 600">servicios</strong> para ayudarte a obtener tu visa.</p>
        <p>Descubrí los <strong style="font-weight: 600">países</strong> con los que trabajamos ↓</p>
            
        <!-- Carousel -->
        <div class="carousel">

            <div class="carousel__contenedor">
                <button aria-label="Anterior" class="carousel__anterior">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="carousel__lista">
                            <div class="carousel__elemento">
                                <img src="assets/VPS_landpage/sections/section2/flags/Australia.png" alt="Bandera de Australia">
                                <p>Australia</p>
                            </div>
                            <div class="carousel__elemento">
                                <img src="assets/VPS_landpage/sections/section2/flags/Canada.png" alt="Bandera de Canadá">
                                <p>Canadá</p>
                            </div>
                            <div class="carousel__elemento">
                                <img src="assets/VPS_landpage/sections/section2/flags/EEUU.png" alt="Bandera de Estados Unidos">
                                <p>Estados Unidos</p>
                            </div>
                            <div class="carousel__elemento">
                                    <img src="assets/VPS_landpage/sections/section2/flags/Arabia.png" alt="Bandera de Arabia Saudita">
                                    <p>Arabia Saudita</p>
                            </div>
                            <div class="carousel__elemento">
                                <img src="assets/VPS_landpage/sections/section2/flags/India.png" alt="Bandera de India">
                                <p>India</p>
                            </div>
                            <div class="carousel__elemento">
                                <img src="assets/VPS_landpage/sections/section2/flags/NZ.png" alt="Bandera de Nueva Zelanda">
                                <p>Nueva Zelanda</p>
                            </div>
                            <div class="carousel__elemento">
                                <img src="assets/VPS_landpage/sections/section2/flags/China.png" alt="Bandera de China">
                                <p>China</p>
                            </div>
                </div>

                <button aria-label="Siguiente" class="carousel__siguiente">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <div role="tablist" class="carousel__indicadores"></div>

        </div>

        </div>
    </section>

    <!-- Servicios section -->
    <section class="sec-servicios">
        <div class="container-fluid">
            <div class="row" id="row_xl">
                <div class="home col-md-4" id="col2">
                    <img id="visa_canada" src="assets/VPS_landpage/sections/section3/canada_approved.png" alt="Visa aprobada">
                </div>
                <div class="home col-md-8" id="col1">
                    <h1>Nuestros servicios</h1>
                    <p>Estamos orientados a:
                    <br>
                    ✔ Agilizar el proceso de solicitud del visado
                    <br>
                    ✔ Simplificar la carga administrativa
                    <br>
                    ✔ Aumentar la probabilidad de que la visa se tramite con éxito
                    </p>
                    <a class="btn btn-all" href="services.php" role="button">SERVICIOS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ section -->
    <section class="sec-faq">
        <div class="container-fluid">
            <h1>Preguntas frecuentes</h1>
            <br>
            <a class="btn" href="faq.php" role="button" id="btn-faq">CONOCELAS</a>
        </div>
    </section>

    <!-- Testimonios section -->
    <section class="sec-opinion">
        <div class="container-fluid">
            <h1><i class="fa-solid fa-quote-left" id="quote"></i>Visas Pro Solutions me acompañó durante todo el proceso! Resolvieron mis dudas e hicieron los trámites amenos.<i class="fa-solid fa-quote-right" id="quote"></i></h1>
            <div class="opinion">
                <p id="name_user"><i class="fa-regular fa-circle-user" id="i_user"></i>Anónimo</p>
            </div>
        </div>
    </section>

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

<!-- Glider.js [carousel] -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="index.js"></script>
</body>
</html>