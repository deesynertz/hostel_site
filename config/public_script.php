<?php 

# USER INFO
if(isset($_SESSION['logedIn']) && $_SESSION['logedIn'] == TRUE) {
  $userInfoSQL = "SELECT * FROM accounts WHERE email = '" . $username . "' AND role = '" . $_SESSION['role'] . "' LIMIT 1";
  $userInfo = mysqli_fetch_array(mysqli_query($axecon, $userInfoSQL));

  var_dump( $userInfo);
}

# SELECT HOSTEL



# SELECT RENTAL HOUSE



# OTHERS

?>