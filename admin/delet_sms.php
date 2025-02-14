<?php

require 'config/dbc.php';

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM massage WHERE id=$id") or die(mysqli_error($connection));

header("Location:sms.php")

?>