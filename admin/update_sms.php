<?php
    require 'config/dbc.php';

    $date = $_POST['create_date'];
    $category_id = $_POST['category_id'];;
    $member_id = 0;
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $id = $_POST['id'];

    mysqli_query($connection, "UPDATE massage SET create_date='$date', category_id='$category_id', member_id='$member_id', title='$title', slug='$slug', content='$content', meta_description='$meta_description', meta_keyword='$meta_keyword' WHERE id=$id")or die(mysqli_error($connection));
    

    header("Location:sms.php");                
   
?>          	