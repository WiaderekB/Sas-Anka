<?php
    session_start();
    if (isset($_SESSION['logged'])) {
    header("Location: panel.php");
    exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sas-Anka - Zaloguj się do panelu</title>
    
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <form class='row my-5' action="login.php" method="post">
        <div class="col-12 text-center my-1">Login: <input type="text" name="login"/></div>
        <div class="col-12 text-center my-1">Hasło: <input type="password" name="password"/></div>
        <div class="col-12 text-center my-3"><input type="submit" value="Zaloguj się"></div>
        <div class="col-12 text-center red" id="mess">
            <?php if(isset($_SESSION['blad'])) {echo "Niepoprawny login lub hasło";}?>
        </div>
    </form>


</body>
</html>