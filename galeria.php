<?php
    if (isset($_GET['g'])) {
        $show = $_GET['g'];
    
    }         

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sas-Anka - Galeria</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/galeria.css">
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
                    <a class="nav-link " href="kontakt.php">Kontakt</a>
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
            <div class="col-auto nav-link" id='kis' style="cursor: pointer; <?php if($show == 'kis'){echo'vis';}?> " onclick="sort('kis')">Kwiaty i sadzonki</div>
            <div class="col-auto nav-link" id="wiazanki" style="cursor: pointer; <?php if($show == 'wiazanki'){echo'vis';}?> " onclick="sort('wiazanki')">Wiązanki</div>
            <div class="col-auto nav-link" id="wience" style="cursor: pointer; <?php if($show == 'wience'){echo'vis';}?> " onclick="sort('wience')">Wieńce</div>
            <div class="col-auto nav-link" id="dekoracje" style="cursor: pointer; <?php if($show == 'dekoracje'){echo'vis';}?> " onclick="sort('dekoracje')">Dekoracje</div>
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
            <img src="<?=$images['img']?>" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 imgs<?=$images['category']?>">


        <?php }} ?>

        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>


            <?php
            if (!isset($_GET['g'])) {
                echo "$('.imgs').addClass('vis');";

                echo "$('#all').addClass('active_galery');";
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