<?php
    require 'config/dbc.php';

    $id = $_GET['id'];

    $query = mysqli_query($connection, "SELECT media_img FROM media WHERE id=$id") or die(mysqli_error($connection));
    $row = mysqli_fetch_array($query);

    $currentImage = $row['media_img'];

    $affected = mysqli_query($connection, "DELETE FROM media WHERE id=$id") or die(mysqli_error($connection));
    
    if ($affected) {
        unlink('../uploads/' . $currentImage);
        header("Location:media.php");
    }

    
?>