<!DOCTYPE html>
<?php require 'header.php'; ?>
  <main>
    <div class="mainwrap">
      <section class="section-default text-center bg-light">
        <form class="signup-form bg-light" action="includes/signup.inc.php" method="post">
          <h1>Join Us!!</h1>
          <input class="form-control" type="text" name="uid" placeholder="Username"  autofocus>
          <input class="form-control" type="text" name="mail" placeholder="E-Mail">
          <input class="form-control" type="password" name="pwd" placeholder="Password">
          <input class="form-control" type="password" name="pwd-rp" placeholder="Re-Enter Pass">
          <button type="submit" name="signup-submit" class="btn btn-secondary">Signup</button>
        </form>
      </section>
    </div>
  </main>
<?php require 'footer.php'; ?>
