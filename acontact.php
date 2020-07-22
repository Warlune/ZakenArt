<?php require 'header.php' ?>

<?php
  if (isset($_SESSION['userId']) && ($_SESSION['isAdmin'] == 1)) {
include_once 'includes/dbh.contact.php';

$sql = "SELECT * FROM contact ORDER BY conId DESC";
$stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    echo "SQL statement failed!";
  } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      echo
        '<div class="row text-center" style="width:100%">
            <div class="col-6 vl">
              <h3>Name: '. $row['conName'] .'</h3>
              <hr class="my-4">
              <p>E-Mail: '. $row['conMail'] .'</p>
              <p>Phone: '. $row['conPhone'] .'</p>
            </div>
            <div class="col-6" style="padding-top:1rem;">
              <h3>Msg</h3>
              <p>'. $row['conInfo'] .' </p>
            </div>
            </div>
            <hr class="my-4">';
    }
  }
}else{
  header("location: site.php?login=notLoggedIn");
  exit();
}
  ?>

<?php require 'footer.php' ?>
<div class="row">

</div>
