<?php
$axecon = mysqli_connect('localhost','root','','hostel_db') or die(mysqli_error($axecon));

if ($axecon) {
  echo 'connection';
} else {
  echo "Unable to connect to database.";
}

?>