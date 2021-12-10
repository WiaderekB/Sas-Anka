<?php
    require_once('connect.php');

    $categories = $_POST['categories'];
    $finalCategories = '';

    for ($i=0; $i<4; $i++){
        if(isset($categories[$i])){
            $finalCategories = $finalCategories . " " . $categories[$i];
        }
    }


    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];

    $fileDestination = 'uploads_gallery/'.$fileName;
    move_uploaded_file($fileTmpName, $fileDestination);
    
    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

    $sql = "INSERT INTO galeria(img, category) VALUES('$fileDestination', '$finalCategories')";


    mysqli_query($conn, $sql);

    header('Location: galeria_panel.php')
?>