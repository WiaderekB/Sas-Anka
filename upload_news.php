<?php
    if($_POST['title'] != '') {
        if($_POST['text'] != '') {
            if($_FILES['img']['name'] != '') {

    require_once('connect.php');

    $title = $_POST['title'];
    $insertion = $_POST['text'];

    $file = $_FILES['img'];

    $fileName = $_FILES['img']['name'];
    $fileTmpName = $_FILES['img']['tmp_name'];

    $fileDestination = 'uploads_news/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);
    
    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

    $sql = "INSERT INTO news(title, insertion, img) VALUES('$title', '$insertion', '$fileDestination')";


    mysqli_query($conn, $sql);

    header('Location: aktualnosci_panel.php');

    } else {
        header('Location: aktualnosci_panel.php?error=true');
    }

    }  else {
        header('Location: aktualnosci_panel.php?error=true');
    }
    
    }  else {
        header('Location: aktualnosci_panel.php?error=true');
    }


?>