<?php
$axecon = mysqli_connect('localhost','root','','hostel_db') or die(mysqli_error($axecon));

if (!$axecon) {

  header('location: errors/database-connection');

  // echo "Unable to connect to database.";
}


function returnRoleName($role) {
  return ($role == 1) ? 'admin' : (($role == 2) ? 'owner' : 'client');
}

function alertMe() {
  echo "<script>alert('mmcdkcdjkdj')</script>";
}

?>