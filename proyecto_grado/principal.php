<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="principal.php" class="navbar-brand"><span class="text-primary justify-content-text">CAOS</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 ms-lg-0">
                    <li class="nav-item">
                        <a href="quienessomos.html" class="nav-link">Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a href="tienda.php" class="nav-link">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.html" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Cerrar Sesion</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="carrusel">
        <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-current="true"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-current="true"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div></div>
                    <img src="img/inicial.jpg" class="d-block w-100 mt-8" alt="">
                    <div class="carousel-caption text">
                        <h5> Quienes somos</h5>
                        <p class="">
                            CAOS es una tienda virtual de gorras y camisetas confeccionadas con materiales de alta
                            calidad y diseños únicos enfocados al publico que le gusta ropa de excelente condición y
                            vanguardista .
                        </p>
                        <a href="" class="btn btn-warning mt3 text-aline-center"></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/camisa3.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                        <h5> Dar un vistazo</h5>
                        <a href="tienda.php" class="btn btn-primary mt-3">Catalogo</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/contacto.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption text">
                        <h5> Contactenos</h5>
                        <a href="contacto.html" class="btn btn-danger mt-3">310385637</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
  