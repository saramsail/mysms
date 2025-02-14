<?php 

session_start();

require 'config/dbc.php';

$old_password = $_POST['old_password'];
$retype_password = $_POST['retype_password'];
$member_id = $_SESSION['member_id'];

$affected =  mysqli_query($connection, "UPDATE member SET password='$retype_password' WHERE password='$old_password' AND id='$member_id'") or die(mysqli_error($connection));

if ($affected) {
    session_destroy();
    header('location:index.php');
}

?> 
