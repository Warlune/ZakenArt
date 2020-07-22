<?php
if (isset($_POST['login-submit'])) {

require  'dbh.inc.php';

$mail = $_POST['mailuid'];
$password = $_POST['pass'];

if (empty($mail) || empty($password)) {
    header("location: ../site.php?error=emptyfields");

}else {
  //use placeholders ? and prepared staatements for security
  // this just checks if it works for the DB
  $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../site.php?error=sqlerror");
      exit();
  }else {
    // actuaally checking for a result
    mysqli_stmt_bind_param($stmt, "ss" , $mail, $mail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $pwdCheck = password_verify($password, $row['pwdUsers']);
      //pass doesnt match
      if ($pwdCheck == false) {
        header("location: ../site.php?error=wrongpassword");
        exit();
      }else if ($pwdCheck == true) {
        //password does match
        session_start();
        $_SESSION['userId'] = $row['idUsers'];
        $_SESSION['userUid'] = $row['uidUsers'];
        $_SESSION['email'] = $row['emailUsers'];
        $_SESSION['isAdmin'] = $row['admin'];

        header("location: ../site.php?login=sucess");
        exit();
      }
    }else {
      header("location: ../site.php?error=wrongpassword");
      exit();
    }

  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
// If the user tries to access this page an inproper way, we send them back to the signup page.
header("Location: ../signup.php");
exit();
}
