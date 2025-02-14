
<?php
    require 'config/dbc.php';

    $date = $_POST['create_date'];
    $media_type = $_POST['media_type'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $media_img = 'No img fonud';
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $id = $_POST['id'];

    $img_url = $_POST['img_url'];
    $fileName = $img_url;

    if ($_FILES['media_img']['error'] == 0) {
        $name = uniqid(time());
        $extension = pathinfo($_FILES['media_img']['name'], PATHINFO_EXTENSION);
        $fileName = $name . "." . $extension;
        $hasFileUploaded = move_uploaded_file($_FILES['media_img']['tmp_name'], "../uploads/" . $fileName);
    }


    $affected = mysqli_query($connection, "UPDATE media SET create_date='$date', media_type='$media_type', title='$title', slug='$slug', description='$description', media_img='$fileName',  meta_description='$meta_description', meta_keyword='$meta_keyword'  WHERE id=$id") or die(mysqli_error($connection));

    if ($affected) {

        if ($hasFileUploaded) unlink('../uploads/' . $img_url);
 

        header("Location:media.php");                
    }
                 
   
?>