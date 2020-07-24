<?php
if (isset($_POST['photo-submit'])) {
  $newFileName = $_POST['title'];
  if (empty($_POST['title'])) {
   $newFileName = "gallery";
 }else {
   $newFileName = strtolower(str_replace(" ", "-", $newFileName));
 }
 $imgDesc = $_POST['description'];
 $imgDim = $_POST['dimension'];

 $file = $_FILES['file'];
// error handling
 $fileName = $file["name"];
 $fileType = $file["type"];
 $fileTmp = $file["tmp_name"];
 $fileError = $file["error"];
 $fileSize = $file["Size"];
// grabbing just file extention
 $fileExt = explode(".", $fileName);
 // end grabs the end of the file
 $fileActualExt = strtolower(end($fileExt));

 $allowed = array('jpg', 'jpeg', 'png' );
// checks a sting inside the array
 if (in_array($fileActualExt, $allowed)) {
   if ($fileError === 0) {
     if ($fileSize < 2000000) {
       $imageFullName = $newFileName . "." . uniqid("", true). "." . $fileActualExt;
       $fileDestination = "../img/art/" . $imageFullName;

       include_once "dbh.inc.php";
       if (empty($imgDesc) || empty($imgDim)) {
         header("Location: gallery.php?upload=empty");
         exit();
       } else {
         $sql = "SELECT * FROM gallery;";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location: gallery.php?sqlerror=prestmtfail");
           exit();
         }else {
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           $rowCount = mysqli_num_rows($result);
           $setImgOrder = $rowCount + 1;

           $sql = "INSERT INTO gallery (titleGallery, descGallery, dimGallery) VALUES (?, ?, ?);";
           if (!mysqli_stmt_prepare($stmt, $sql)) {
             header("Location: gallery.php?sqlerror=stmtfail");
             exit();
           } else {
             mysqli_stmt_bind_param($stmt, "sss", $imageFullName, $imgDesc, $imgDim);
             mysqli_stmt_execute($stmt);
             if ( move_uploaded_file($fileTmp, $fileDestination)) {
               echo $fileDestination;
             }else {
               echo "didnt work";
             }
             header("Location: ../gallery.php?upload=success");

           }
         }
       }
     }else {
       echo "file size is to big";
       exit();
     }
   }else {
     echo "You had an error";
     exit();
   }
 } else {
   echo "The file type your uploading is not supported";
   exit();
 }
}
