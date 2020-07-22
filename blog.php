<?php require 'header.php' ?>
<main>
  <div class="mainwrap">
    <section class="section-default">
      <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You are logged in!</p>';
      }else {
        echo '<p class="login-status">You are Logged out!</p>';
      }
       ?>
    </section>
  </div>
</main>




<?php require 'footer.php' ?>
