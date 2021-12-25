<?php
    session_start();

    if (isset($_SESSION['logged'])) {
    header("Location: zaloguj.php");
    exit();
    }


    $login = $_POST['login'];
    $pass = $_POST['password'];

    if ($login == 'Sasanka' AND $pass == "Szkolna"){
        $_SESSION['logged'] = true;
        unset($_SESSION["blad"]);

        header('Location: galeria_panel.php');

    } else {
        header('Location: zaloguj.php');
        $_SESSION['blad'] = true;
    }
?>