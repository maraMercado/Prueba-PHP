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

    <section class="sec-form">
        <div class="container-fluid">

            <h4 class="text-center">Realizá tu consulta con un agente de visa</h4>

            <form action="https://api.web3forms.com/submit" method="POST" class="row g-3" autocomplete="off">

                <input type="hidden" name="access_key" value="be02d95d-4ad8-472f-9af3-5751e9597a9c">

                <div class="col-md-6">
                    <label for="name" class="form-label">Nombre y apellido</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="number" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="col-md-6">
                    <label for="subject" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>

                <div class="col-md-12">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea placeholder="Quiero recibir asesoramiento sobre..." class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

                </form>

        </div>
    </section>

<!-- Font Awesome [icons] -->
<script src="https://kit.fontawesome.com/a9872be1ad.js" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="index.js"></script>

</body>
</html>