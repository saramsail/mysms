<?php

  require 'config/dbc.php';

  $id = $_GET['id'];

  $qurey = mysqli_query($connection, "SELECT status FROM massage WHERE id=$id") or die(mysqli_error($connection));
  $row = mysqli_fetch_array($qurey);

  $newStatus = ($row['status'] == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
  mysqli_query($connection, "UPDATE massage SET status='$newStatus' WHERE id=$id") or die(mysqli_error($connection));
  header("Location:sms.php");


?>

 