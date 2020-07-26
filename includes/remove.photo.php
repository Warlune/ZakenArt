<?php
if (isset($_POST['remove-submit'])) {
  include_once 'dbh.inc.php';
  $rFile = $_POST['remName'];

  $stmt = mysqli_stmt_init($conn);
  $sql = 'DELETE FROM gallery WHERE titleGallery = ?';
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      echo "SQL statement failed! a";
    }else{
      mysqli_stmt_bind_param($stmt, "s", $rFile);
      mysqli_stmt_execute($stmt);
      header("Location: ../gallery.php?remove=success");
    }

    exit();
}else {
  header("Location: ../gallery.php?auth=defnotok");
  exit();
}
