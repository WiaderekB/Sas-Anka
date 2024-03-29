<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sas-Anka - Kontakt</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/kontakt.css">
    
</head>
<body class="bg-light">
    <!-- Messenger Wtyczka czatu Code -->
    <div id="fb-root"></div>

    <!-- Your Wtyczka czatu code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "116046146920331");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
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
                    <a class="nav-link" href="aktualnosci.php">Aktualności</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link active" href="kontakt.php">Kontakt</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="heading justify-content-center d-flex">
        <div class="text-white pt-5 pb-4 lh-lg fw-bold">Skontaktuj się z nami!</div>
    </div>

        <div class="position-relative my-xl-5 me-xl-5 my-3 row">

            <div class="col-11 col-sm-10 mx-auto col-md-5 mt-5 ms-lg-3 ms-lg-4 ms-xl-5 p-lg-5 p-3" id="contact_box">
                <h1 class="fs-2 fw-bold">Kwiaciarnia Sas-Anka</h1>
                <div class="add col-2 bg-pink my-3"></div>
                <p class="fw-light fs-4">Ul. Szkolna 9 <br> 98-355 Trębaczew</p>
                <div class="row my-5">
                    <div class="col-md-11 col-5 col-lg-5 fw-bolder text-center fs-4 order-1">Pon, Śr, Czw</div>
                    <div class="col-md-11 col-7 col-lg-7 fw-bolder text-center fs-4 order-lg-2 order-2 order-md-3 mt-lg-0 mt-0 mt-md-3">Wt, Pt, Sob</div>
                    <div class="w-100"></div>
                    <div class="col-md-11 col-5 col-lg-5 fw-light text-center fs-3 pink order-lg-3 order-3 order-md-2">9.00 - 16.00</div>
                    <div class="col-md-11 col-7 col-lg-7 fw-light text-center fs-3 pink order-4">12.00 - 16.00</div>
                </div>
                <div class="col fs-4">Telefon: <a href="tel: +48 694 123 831" class="pink">+48 <b>694 123 831</b></a> </div>
                <div class="col fs-4 mt-3 mb-4">Facebook: <a href="https://bit.ly/Sas-Anka" target="blank" class="pink fw-bolder">Sas-Anka</a> </div>
                <a href="https://www.google.com/maps/place/Kwiaciarnia+Sas-Anka/@51.132268,18.9173843,17z/data=!3m1!4b1!4m5!3m4!1s0x47109f524e605995:0x501d99927ff94aee!8m2!3d51.1322684!4d18.9195833" target="blank" class="d-block d-sm-none text-center col-12 pink fw-bolder fs-4">Zobacz na mapie!</a>
            </div>
            <iframe class="d-none d-sm-block col-11 col-sm-10 col-md-5 mx-auto ms-md-3 ms-lg-4 ms-xl-5" style="z-index: 10;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2503.719991404969!2d18.919851947997273!3d51.13207273349395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47109f524e605995%3A0x501d99927ff94aee!2sKwiaciarnia%20Sas-Anka!5e0!3m2!1sen!2spl!4v1638911399896!5m2!1sen!2spl" width="450" height="600" allowfullscreen="" loading="lazy"></iframe>

        </div>


    <footer class="bg-white light-gray px-5 pt-3 pt-sm-4" style="margin-top: 7.5rem;">
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