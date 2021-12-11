<?php
    session_start();
    if (!isset($_SESSION['logged'])) {
    header("Location: zaloguj.php");
    exit();
}


require_once('connect.php');
$conn = mysqli_connect($host, $db_user, $db_pass, $db_name);
$sql = "SELECT * FROM news ORDER BY id DESC";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sas-Anka - Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/panel.css">

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

            <ul class="navbar-nav mb-2 mb-lg-0 fs-5">
                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link" href="galeria_panel.php">Galeria</a>
                </li>

                <li class="nav-item  mx-3 my-1">
                    <a class="nav-link active" href="aktualnosci_panel.php">Aktualności</a>
                </li>
                <li class="nav-item ms-lg-auto mx-3 my-1">
                    <a class="nav-link" href="logout.php">Wyloguj</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container my-5">
        <form action="upload_news.php" enctype="multipart/form-data" method="post" class="row">
            <h1 class="col-12 mb-5">Dodaj post do aktualności</h1>
            <h5 class="col-12">Tytuł</h5>

            <input class='col-12 col-md-8 col-lg-4 mb-4' type="text" name="title">

            <h5 class="col-12">Wybierz zdjęcie tytułowe</h5>

            <input class='col-12 mb-4' type="file" name="img">

            <h5 class="col-12">Text</h5>

            <input class='col-12 mb-4' type="text" name="text">

            <h5 class="col-12">Dodaj więcej zdjęć</h5>

            <input name="upload[]" type="file" multiple="multiple" class="col-12 mb-4"/>


            <div class="col-12 my-3"><input type="submit" value="Dodaj post do aktualności"></div>


            <div class='text-danger fs-5'>
                <?php 
                if(isset($_GET['error']) and $_GET['error'] == true) {
                    echo "Uzupełnij wszystkie dane!";
                }

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
            </div>
        </form>

        <div class="row">

            <?php
            if(mysqli_num_rows($res) > 0){
                while($images = mysqli_fetch_assoc($res)) {
                    $insertion = get_snippet($images['insertion'], 40) . '. . .';
                    ?>


                
                <div class="col-12 col-md-6 col-lg-4 text-center border border-2">
                    <h3><?=$images['title']?></h3>
                    <img src="<?=$images['img']?>" class="img-fluid imgs mt-2">
                    <p><?=$insertion?></p>

                    <a href="delete_news.php?id=<?=$images['id']?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>
                </div>
            <?php }} ?>

        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>