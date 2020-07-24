<?php
// checking is they got to this page legitimitly
if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-rp'];
  $admin = 0;
// checks is form is empty
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    // sends back info they already typed
    // empty fields
    header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
    // invalaid email and user
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: ../signup.php?error=invalidmail&uid");
    exit();
    // invalid user
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
    // invaalid user
  } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
  }
  // non matching password
  else if ($password !== $passwordRepeat) {
    header("location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  } else {
    // connecting to sql checking for repeat username or accounts
    $sql = "SELECT uidUsers FROM login WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("location: ../signup.php?error=usertaken&mail=".$email);
        exit();
      }else {
        $sql = "INSERT INTO login (uidUsers, emailUsers, pwdUsers, admin) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../signup.php?error=sqlerror");
          exit();
        }else {
          $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"ssss", $username, $email, $hashedpwd, $admin );
          mysqli_stmt_execute($stmt);
          header("location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);

}else {
  header("location: ../signup.php?error=ugothere");
  exit;
}
