<?php
  session_start();

  $errorMessage = '';
  $successMessage = '';
  $warningMessage = '';

  if (isset($_SESSION['logedIn']) && $_SESSION['logedIn'] == TRUE) {
    if (returnRoleName($_SESSION['role']) == 'admin') {
      # code...
      header("location: ../admin/index");
    } else if(returnRoleName($_SESSION['role']) == 'owner') {
      # code...
      // header("Refresh: 2; url=pages/dashboard.php");
    }else if(returnRoleName($_SESSION['role']) == 'client') {
      # code...
      // header("Refresh: 2; url=pages/dashboard.php");
    }else {
      # code...
    }
  }
  
  require_once('../config/connection.php');

  # Register
  

  # Login
  if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($axecon, $_POST['username']);
    $password = mysqli_real_escape_string($axecon, $_POST['password']);

    if (empty($username) || empty($password)) {
      $errorMessage = 'username or password is empty';
    } else {

      // id	fullname	email	gender	phone	image	address	nationality	role_id	password	regDate 
      // AS u JOIN roles ON roles.id = u.role_id
      // $selectUser = "SELECT id, email, role_id FROM users WHERE email = '" . $username . "' AND password = '" . sha1($password) . "'  LIMIT 1";

      $authSQL = "SELECT email FROM accounts WHERE email = '" . $username . "' AND password = '" . $password . "'  LIMIT 1";
      $authQuery = mysqli_query($axecon, $authSQL);

      if (!mysqli_error($axecon)) {
        if (mysqli_num_rows($authQuery) > 0) {
          $email_ar = mysqli_fetch_array($authQuery);
          $userSQL = "SELECT * FROM accounts WHERE email = '" .$email_ar['email']. "' LIMIT 1";
          $user = mysqli_fetch_array(mysqli_query($axecon, $userSQL));

          $_SESSION['logedIn']    = TRUE;
          $_SESSION['id']         = $user['id'];
          $_SESSION['role']       = $user['role'];
          $_SESSION['username']   = $user['email'];

          if ($_SESSION['logedIn']) {
            
            if (returnRoleName($_SESSION['role']) == 'admin') {
              # code...
              $successMessage = 'Login done Successfully.';
              header("Refresh: 2; url=../admin/index");
            } else if(returnRoleName($_SESSION['role']) == 'owner') {
              # code...
              // header("Refresh: 2; url=pages/dashboard.php");
            }else if(returnRoleName($_SESSION['role']) == 'client') {
              # code...
              // header("Refresh: 2; url=pages/dashboard.php");
            }else {
              # code...
            }
          } else {
            $warningMessage = 'Something went wrong, Try again.';
          }
        } else {
          $errorMessage = 'Cridential Does not Match';
        }
      } else {
        $errorMessage = 'Something went wrong, Try again.';
      }
    }
  }

  // function max($input, $value) {
  //   return (count_chars($input) > $value) ? true : false;
  // }



  # Confirm Email


  # Reset
  ## Send Link
  ## New Password


















?>