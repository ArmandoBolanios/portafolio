<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="public/img/favico/medalla.png">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="public/css/animate/aos.css">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/icons/boxicons.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/slider/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <?php include 'templates/header.php'; ?>

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Armando Bolaños</h1>
            <p><span class="typed" data-typed-items="Desarrollo web front - end, Desarrollo web back - end, 
            Desarrollo de aplicaciones móviles"></span></p>
        </div>
    </section>

    <main id="main">
        <?php include 'templates/about.php'; ?>
        <?php include 'templates/resume.php'; ?>
        <?php include 'templates/portfolio.php'; ?>
        <?php include 'templates/contact.php'; ?>
        <?php include 'templates/footer.php'; ?>
    </main>

    <script type="text/javascript" src="public/js/animate/aos.js"></script>
    <script type="text/javascript" src="public/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/slider/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="public/js/typed/typed.min.js"></script>
    <script type="text/javascript" src="public/js/skills/noframework.waypoints.js"></script>

    <script type="text/javascript" src="public/js/main.js"></script>
</body>

</html>