<?php
$axecon = mysqli_connect('localhost','root','','hostel_db') or die(mysqli_error($axecon));

if (!$axecon) {

  header('location: errors/database-connection');

  // echo "Unable to connect to database.";
}

?>