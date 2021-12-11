<?php
    if (isset($_GET['g'])) {
        $show = $_GET['g'];
    
    }         

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sas-Anka - Galeria</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/galeria.css">

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
                    <a class="nav-link" href="index.php">Strona główna</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link active" href="galeria.php">Galeria</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="aktualnosci.php">Aktualnosci</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link"  href="kontakt.php">Kontakt</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="heading justify-content-center d-flex">
        <div class="text-white pt-5 pb-4 lh-lg fw-bold">Nasze produkty!</div>
    </div>

    <div class="container">
        <div class="row mx-3 fw-normal mt-4 border-bottom border-2">
            <div class="col-auto nav-link" id='all' style="cursor: pointer;" onclick="sort('all')">Wszystko</div>
            <div class="col-auto nav-link" id='kis' style="cursor: pointer;" onclick="sort('kis')">Kwiaty i sadzonki</div>
            <div class="col-auto nav-link" id="wiazanki" style="cursor: pointer;" onclick="sort('wiazanki')">Wiązanki</div>
            <div class="col-auto nav-link" id="wience" style="cursor: pointer;" onclick="sort('wience')">Wieńce</div>
            <div class="col-auto nav-link" id="dekoracje" style="cursor: pointer;" onclick="sort('dekoracje')">Dekoracje</div>
        </div>

<?php
    require_once('connect.php');
    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);
    $sql = "SELECT * FROM galeria ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);

?>

        <div class="row my-5 mx-2 g-3">

        <?php
        if(mysqli_num_rows($res) > 0){
            while($images = mysqli_fetch_assoc($res)) {?>

            <div id="pageone" data-role="main" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2<?=$images['category']?>">
                <a href="#myPopup" data-rel="popup" data-position-to="window">
                <img src="<?=$images['img']?>" class="imgs"></a>

                <div data-role="popup" id="myPopup">
                <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right"></a><img src="<?=$images['img']?>" style="max-height: 80vh;">
            </div>
        </div>

        <?php }} ?>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>


    <?php
    if (!isset($_GET['g'])) {
        echo "$('.imgs').addClass('vis');";

        echo "$('#all').addClass('active_galery');";
    }  else {
        switch ($show){
            case 'kis';
                echo "$('.kis').addClass('vis');";
                echo "$('kis').addClass('active_galery');";
                
            case 'wiazanki';
                echo "$('.wiazanki').addClass('vis');";
                echo "$('wiazanki').addClass('active_galery');";

            case 'wience';
                echo "$('.wience').addClass('vis');";
                echo "$('wience').addClass('active_galery');";

            case 'dekoracje';
                echo "$('.dekoracje').addClass('vis');";
                echo "$('#dekoracje').addClass('active_galery');";
        }
    }
    ?>
    function sort(item){

        $('.active_galery').removeClass('active_galery');

        $('#'+ item).addClass('active_galery');

        if (item == 'all'){
            $('.imgs').addClass('vis');

        } else {
        $('.imgs').removeClass('vis');

        $('.' + item).addClass('vis');
        }
    }

</script>
</body>
</html>