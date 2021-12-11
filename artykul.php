<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sas-Anka - Artykuł</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">

    <style>
        .imgs{
            max-height: 12.5rem;
            object-fit: cover !important;
            width: 100% !important;
        }
    </style>

    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

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
            <a class="nav-link" href="index.php">Strona główna</a>
        </li>

        <li class="nav-item  mx-3 my-1">
            <a class="nav-link" href="galeria.php">Galeria</a>
        </li>

        <li class="nav-item  mx-3 my-1">
            <a class="nav-link active" href="aktualnosci.php">Aktualnosci</a>
        </li>

        <li class="nav-item  mx-3 my-1">
            <a class="nav-link " href="kontakt.php">Kontakt</a>
        </li>
    </ul>

</div>
</nav>

    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-12 mb-3">
                <div class="col-6"><img src="img/bike.jpg" class="pd-5 pe-4 img-fluid float-start" ></div>

                <div class="col ff-2 blue fs-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                <div class="col p-4 gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic esse quod magni fugiat nobis dolore. Officia, provident necessitatibus. Cumque, alias.</div>
            </div>
        </div>  

        <h3 class='fw-bolder mt-5 mb-4'>Zdjęcia:</h3>

        <div class="row col-12 bg-gray g-3 mx-auto">

        <div id="pageone" data-role="main" class="col-12 col-sm-6 col-lg-4 col-xxl-3 ">
            <a href="#myPopup" data-rel="popup" data-position-to="window">
            <img src="img/bouquet.jpg" class="imgs"></a>

            <div data-role="popup" id="myPopup">
            <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right"></a><img src="img/bouquet.jpg" style="max-height: 80vh;">
            </div>
        </div>

        <div id="pageone" data-role="main" class="col-12 col-sm-6 col-lg-4 col-xxl-3 ">
            <a href="#myPopup" data-rel="popup" data-position-to="window">
            <img src="img/bouquet.jpg" class="imgs"></a>

            <div data-role="popup" id="myPopup">
            <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right"></a><img src="img/bouquet.jpg" style="max-height: 80vh;">
            </div>
        </div>
            

        </div>


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