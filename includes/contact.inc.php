<?php
if (isset($_POST['contact-submit'])) {

  require_once 'dbh.contact.php';

  $conName = $_POST['conName'];
  $conMail = $_POST['conMail'];
  $conPhone = $_POST['conPhone'];
  $conInfo = $_POST['conInfo'];
    if (empty($conName) || empty($conMail) || empty($conPhone) || empty($conInfo)) {
      header("location: ../site.php?contact=emptyfields");
      exit();
    } elseif (!filter_var($conMail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $conName)) {
      header("location: ../site.php?conerror=invalidmail&uid");
      exit();
    } elseif (!filter_var($conMail, FILTER_VALIDATE_EMAIL)) {
      header("location: ../site.php?conerror=invalidmail");
      exit();
    } elseif (!preg_match("/^[a-zA-Z0-9_ -]*$/", $conName)) {
      header("location: ../site.php?conerror=invalidname");
      exit();
    } elseif (!preg_match("/^[0-9]*$/", $conPhone)) {
      header("location: ../site.php?conerror=invalidphone#");
      exit();
    } elseif (!preg_match("/^[a-zA-Z0-9_ - , . ']*$/", $conInfo)) {
      header("location: ../site.php?conerror=invalidcharactersintextbox");
      exit();
    } else{
      $conName = strip_tags($conName);
      $conMail = strip_tags($conMail);
      $conPhone = strip_tags($conPhone);
      $conInfo = strip_tags($conInfo);
      $conInfo = strtolower($conInfo);

      $sql = "SELECT * FROM contact ;";
      $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../site.php?error=sqlstmt");
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, 'ssss', $conName, $conMail, $conPhone, $conInfo);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCount = mysqli_stmt_num_rows($stmt);
          mysqli_stmt_close($stmt);
          if ($resultCount < 0) {
            header("location: ../site.php?error=sqlstmt1");
            exit();
          } else {
              $sql = "INSERT INTO contact (conName, conMail, conPhone, conInfo) VALUES (?, ?, ?, ?);";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../site.php?error=sqlstmt2");
                exit();
              }else{
                mysqli_stmt_bind_param($stmt, 'ssss', $conName, $conMail, $conPhone, $conInfo);
                mysqli_stmt_execute($stmt);
                header("Location: ../site.php?contact=success");
                exit();
              }
          }




          // header("location: ../site.php?contact=success");
          exit();
        }
    }







}else {
  header("location: ../site.php?error=unauthorized");
  exit();
}

function cleanText(){

}
