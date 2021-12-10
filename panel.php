<?php
    session_start();
    if (!isset($_SESSION['logged'])) {
    header("Location: zaloguj.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sas-Anka - Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <div class="container m-auto align-content-center mt-5">
        <div class="row fs-1 blue text-center">
            <div class="col-12 col-md-6"><a class="nav-link my-5" href="galeria_panel.php">Galeria</a></div>
            <div class="col-12 col-md-6"><a class="nav-link my-5" href="aktualnosci_panel.php">Aktualności</a></div>
            <div class="col-12"><a class="nav-link my-5 fs-3" href="logout.php">Wyloguj</a></div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>