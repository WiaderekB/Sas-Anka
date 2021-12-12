<?php
    if($_POST['title'] != '') {
        if($_POST['text'] != '') {
            if($_FILES['img']['name'] != '') {

    require_once('connect.php');

    if ($_FILES['addImages'] != '') {
        $finalImagesName = '';
        foreach ($_FILES['addImages']['tmp_name'] as $key => $value) {
            $imageName = $_FILES['addImages']['name'][$key];
            $imageTmpName = $_FILES['addImages']['tmp_name'][$key];


            $fileDestination = 'uploads_news/'.uniqid(). '.' . pathinfo($imageName, PATHINFO_EXTENSION);

            $finalImagesName = $finalImagesName . $fileDestination . ', ';
            
            move_uploaded_file($imageTmpName, $fileDestination);
        }
    }
    
    $title = $_POST['title'];
    $insertion = $_POST['text'];

    $file = $_FILES['img'];

    $fileName = $_FILES['img']['name'];
    $fileTmpName = $_FILES['img']['tmp_name'];
    $fileTmpName = $_FILES['img']['tmp_name'];


    $fileDestination = 'uploads_news/'.uniqid(). '.' . pathinfo($fileName, PATHINFO_EXTENSION);
    move_uploaded_file($fileTmpName, $fileDestination);
    
    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

    $sql = "INSERT INTO news(title, insertion, img, add_images) VALUES('$title', '$insertion', '$fileDestination', '$finalImagesName')";


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