<?php
    require_once('connect.php');
    $conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

    $id = $_GET['id'];
    $res = mysqli_query($conn, "SELECT * FROM galeria WHERE id = '$id'");

    while ($row = mysqli_fetch_array($res)){
        $img = $row['img'];
    }

    unlink($img);

    $sql = "DELETE FROM galeria WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);

    header('location: galeria_panel.php');
?>