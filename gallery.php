<?php  require 'header.php';?>
<div class="row text-center" style="width:100%">

  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">3D</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">2D</button>

  </div>
  <?php
  if (isset($_SESSION['userId']) && ($_SESSION['isAdmin'] == 1)) {
    echo '<div class="col-12 text-center">
      <form class="photo-upload bg-danger" action="includes/add.photo.php" method="post" enctype="multipart/form-data">
        <input class="bg-dark text-danger" type="text" name="title" placeholder="Title">
        <input class="bg-dark text-danger" type="text" name="description" placeholder="Description">
        <label for="dimension">3D or 2D:</label>
        <select id="dimension" class="bg-dark text-danger" name="dimension">
          <option value="1">3D</option>
          <option value="2">2D</option>

        </select>
        <!-- <input class="bg-dark text-danger" type="text" name="title" placeholder=""> -->
        <input class="bg-dark text-danger hide-file" type="file" name="file">
        <button class="btn btn-dark" type="submit" name="photo-submit">Upload</button>
      </form>
      <br>';
  } else {

  }
   ?>
  </div>

</div>
<div class="gallery" id="gallery">
<?php
include_once 'includes/dbh.inc.php';

$sql = "SELECT * FROM gallery ORDER BY idGallery DESC";
$stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    echo "SQL statement failed!";
  } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
      echo ' <div class="mb-3 pics animation all '.$row['dimGallery'].'">
               <img class="img-fluid" src="img/art/'.$row['titleGallery'].'" alt="'.$row['descGallery'].'">
             </div>';
    }
  }

  ?>
  <?php include 'includes/gallery.js' ?>
</div>
<?php require 'footer.php'; ?>
