<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sas-Anka - Aktualności</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/aktualnosci.css">
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

    <div class="heading justify-content-center d-flex">
        <div class="text-white pt-5 pb-4 lh-lg fw-bold">Zobacz co nowego!</div>
    </div>

    <?php
        require_once('connect.php');
        $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);
        $sql = "SELECT * FROM news ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        function get_snippet( $str, $wordCount = 10 ) {
            return implode( 
              '', 
              array_slice( 
                preg_split(
                  '/([\s,\.;\?\!]+)/', 
                  $str, 
                  $wordCount*2+1, 
                  PREG_SPLIT_DELIM_CAPTURE
                ),
                0,
                $wordCount*2-1
              )
            );
          }

    ?>

    <div class="container">
        <div class="row mx-3 mt-5 mb-5 pb-4 border-bottom border-2"></div>
        <div class="row mx-2 g-5">

        <?php
        if(mysqli_num_rows($res) > 0){
            while($images = mysqli_fetch_assoc($res)) {
                $insertion = get_snippet($images['insertion'], 40) . '. . .';
                ?>

            <div class="col-12 col-md-6 col-xl-4 ">
                <img src="<?=$images['img']?>" class="imgs" alt="">
                <h3 class='blue fw-bolder my-3'><?=$images['title']?></h3>
                <p class='light-gray fw-light fs-7'><?=$insertion?></p>
                <a href="artykul.php?id=<?=$images['id']?>" class="btn btn2 fs-5 my-2 white">Zobacz więcej</a>
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

</body>
</html>