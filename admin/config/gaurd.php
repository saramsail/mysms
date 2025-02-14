<?php
 
   session_start();
    
   $is_valid = $_SESSION['is_valid'];
 
   if ( !$is_valid)
      header("Location:index.php");
?>


<!-- 
session_start();
    
    $is_valid = $_SESSION['is_valid'];
    
    if ( !$is_valid)
        header("Location:index.php"); -->