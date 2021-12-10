<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sas-Anka</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing_page.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 px-3 px-6 mb-n1">

        <img src="img/logo.png" alt="" class="navbar-brand">

        <button class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1"  id="navbarSupportedContent">
            <div class="offcanvas-header">
                <img src="img/logo.png" alt="" class="offcanvas-title">

                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link active" href="index.php">Strona główna</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="galeria.php">Galeria</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="aktualnosci.php">Aktualnosci</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                </li>
            </ul>

        </div>
    </nav>
    <div id="section1">
            <div class="row gy-3 d-none d-sm-flex fs-4 fw-bold">
                <a href="galeria.php?g=kis" class="col-12 col-sm-8 col-md-5 col-lg-4 col-xl-3 rounded-end bg-blue py-xxl-2 py-1 text-white ps-5">Kwiaty i sadzonki</a>
                <div class="w-100"></div>
                <a href="galeria.php?g=wiazanki" class="col-12 col-sm-8 col-md-5 col-lg-4 col-xl-3 rounded-end bg-blue py-xxl-2 py-1 text-white ps-5">Wiązanki</a>
                <div class="w-100"></div>
                <a href="galeria.php?g=wience" class="col-12 col-sm-8 col-md-5 col-lg-4 col-xl-3 rounded-end bg-blue py-xxl-2 py-1 text-white ps-5">Wieńce</a>
                <div class="w-100"></div>
                <a href="galeria.php?g=dekoracje" class="col-12 col-sm-8 col-md-5 col-lg-4 col-xl-3 rounded-end bg-blue py-xxl-2 py-1 text-white ps-5">Dekoracje</a>
            </div>
    </div>

    
        <div class="row py-5  justify-content-center align-items-center" id="section2">
            
            <img src="img/bouquet.jpg" class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-6" style="z-index: 10;">

            <div id="box1_s2" class="col-12 col-sm-10 col-lg-7 col-xl-5 p-3 p-sm-4 p-md-5 ps-xl-4 ps-xxl-5 p-3 p-sm-4 py-md-5 py-lg-4 py-xl-5 row">
                <div class="col-2 bg-pink"></div>
                <div class="w-100"></div>
    
                <div class="col col-xxl-10 ff-2 fw-bold fs-1 blue">Witaj w Kwiaciarni Sas-Anka</div>
                <div class="col-10 col-xxl-7 fs-4 fw-bold my-2 my-sm-3 my-md-4 my-lg-3 my-xl-4 pink">Codziennie gwarancja świeżych kwiatów!</div>
                <p class="gray col-11 col-xl-10 col-xxl-8 mb-4 fs-5 fw-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet ex eros. Integer at magna porttitor, ornare turpis sit amet, consectetur quam. Praesent massa mauris, egestas laoreet ultrices sit amet, mattis porttitor sapien. Donec sed quam non metus commodo.</p>
                <div class="w-100"></div>
                <a href="kontakt.php" class="col-10 col-sm-7 fs-5 fw-bolder btn">Skontaktuj się!</a>
    
            </div>

        </div>
        

        <div class="row py-5 justify-content-center align-items-center" id="section3">
            
            <div id="box2_s2" class="col-12 col-sm-10 col-lg-6 col-xl-5 p-3 p-sm-4 p-md-5 ps-xl-4 ps-xxl-5 p-3 p-sm-4 py-md-5 py-lg-4 py-xl-5 row order-2 order-lg-1">
                <div class="col-2 bg-pink"></div>
                <div class="w-100"></div>
    
                <div class="col col-xxl-10 ff-2 fw-bold fs-1 blue">Wyślij kwiaty już dziś!</div>
                <div class="col-12 col-xxl-7 fs-4 fw-bold my-2 my-sm-3 my-md-4 my-lg-3 my-xl-4 pink">My zajmiemy się dostawą</div>
                <p class="gray col-11 col-xl-10 col-xxl-7 mb-4 fs-5 fw-lighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet ex eros. Integer at magna porttitor, ornare turpis sit amet, consectetur quam. Praesent massa mauris, egestas laoreet ultrices sit amet, mattis porttitor sapien. Donec sed quam non metus commodo.</p>
                <div class="w-100"></div>
                <a href="tel:+48 694 123 831" class="col-9 col-sm-8 col-md-7 fs-5 fw-bolder btn">Zadzwoń!</a>

            </div>
            
            <img src="img/bike.jpg" class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-6 order-1 order-lg-2" style="z-index: 10;">

        </div>

        <footer class="bg-white light-gray px-5 pt-3 pt-sm-4">
            <div class="d-flex flex-wrap flex-column flex-lg-row justify-content-between align-items-center py-3 mt-4 border-top">
                <div class="col col-lg-4 mb-0 text-muted order-2 order-lg-1">&copy; 2022 Bartosz Wiaderek</div>
                <img src="img/logo-sm.png" class="order-1 order-lg-2 col-12 col-lg-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto" alt="">
                <div class="nav col-md-4 justify-content-end d-none d-lg-flex order-3">
                    <li class="nav-item"><a href="index.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Strona główna</a> </li>
                    <li class="nav-item"><a href="galeria.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Galeria</a> </li>
                    <li class="nav-item"><a href="aktualnosci.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Aktualnosci</a> </li>
                    <li class="nav-item"><a href="kontakt.php" class="nav-link px-1 px-xl-2 px-xxl-3 text-muted">Kontakt</a> </li>
                </div>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>