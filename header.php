<?php
  session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="An Art Student">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery needs to be put before bootstraap to work -->
    <script src="https://use.fontawesome.com/a1ef126434.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">

    <title>ZakenArt</title>
  </head>
  <body>
    <header class="sticky-top" >
      <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">


      <?php
      if (isset($_SESSION['userId'])) {

            if ($_SESSION['isAdmin'] == 1) {
              echo '<a class="navbar-brand" href="site.php"><img alt="Brand"src="img/admin.png" class="image-responsive"> </a>';
            }else {
              echo '<a class="navbar-brand" href="site.php"><img alt="Brand"src="img/logo.png" class="image-responsive"> </a>';
            }
        echo  '<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse " id="navbarMenu">
            <ul id="navlist" class="navbar-nav">
              <li class="navbar-item"><a href="site.php" class="navbar-link">Home </a></li>
              <li class="navbar-item"><a href="gallery.php" class="navbar-link">Gallery </a></li>
              <li class="navbar-item"><a href="about.php" class="navbar-link">About</a></li>
              <li class="navbar-item"><a href="blog.php" class="navbar-link">Blog</a></li>
              ';if ($_SESSION['isAdmin'] == 1) {
              echo  '<li class="navbar-item"><a href="admin.php" class="navbar-link">Admin</a></li>
              <!-- <li class="navbar-item"><a href="buy.php" class="navbar-link btn bg-danger">Buy Now! </a></li> -->
                </ul>
                <div class="loginpwd">
                <form action="includes/logout.inc.php" method="post">
                 <button type="submit" class="btn btn-secondary" name="logout-submit">Logout</button>
               </form>
               </div>';
            }else {
            echo '<!-- <li class="navbar-item"><a href="buy.php" class="navbar-link btn bg-danger">Buy Now! </a></li> -->
              </ul>
              <div class="loginpwd">
              <form action="includes/logout.inc.php" method="post">
               <button type="submit" class="btn btn-secondary" name="logout-submit">Logout</button>
             </form>
             </div>';
            }
        }else {
          echo '<a class="navbar-brand" href="site.php"><img alt="Brand"src="img/logo.png" class="image-responsive"> </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse " id="navbarMenu">
            <ul id="navlist" class="navbar-nav">
              <li class="navbar-item"><a href="site.php" class="navbar-link">Home </a></li>
              <li class="navbar-item"><a href="gallery.php" class="navbar-link">Gallery </a></li>
              <li class="navbar-item"><a href="about.php" class="navbar-link">About</a></li>
              <li class="navbar-item"><a href="blog.php" class="navbar-link">Blog</a></li>
              <!-- <li class="navbar-item"><a href="buy.php" class="navbar-link btn bg-danger">Buy Now! </a></li> -->
            </ul>
            <div class="loginpwd">
             <form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-Mail">
              <input type="password" name="pass" placeholder="Password">
              <button type="submit" class="btn btn-secondary" name="login-submit">Login</button>
              <a class="bg-light navbar-link" href="signup.php" >Signup</a>
              </form>
              </div>';
      }
       ?>


      </nav>
    </header>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </body>
