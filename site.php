<!DOCTYPE html>
<?php require 'header.php'; ?>
<div class="mainwrap">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ol>
 <div class="carousel_inner">
  <div class="carousel-item active">
      <picture>
        <source media="(min-width: 780px)" srcset="img/a.jpg">
        <source media="(min-width: 575px)" srcset="img/aaa.jpg">
        <img class="carousel-img" src="img/aaa.jpg" alt="art">
      </picture>
    <!-- <img class="carousel-img" src="img/a.jpg" alt="art"> -->
    <div class="black-overlay"></div>
  </div>
  <div class="carousel-item">
    <picture>
      <source media="(min-width: 780px)" srcset="img/b.jpg">
      <source media="(min-width: 575px)" srcset="img/bbb.jpg">
      <img class="carousel-img" src="img/bbb.jpg" alt="art">
    </picture>
    <div class="black-overlay"></div>
  </div>
  <div class="carousel-item">
    <picture>
      <source media="(min-width: 780px)" srcset="img/c.jpg">
      <source media="(min-width: 575px)" srcset="img/ccc.jpg">
      <img class="carousel-img" src="img/ccc.jpg" alt="art">
    </picture>
    <div class="black-overlay"></div>
  </div>
 </div>
 </div>
 <div class="carousel-caption text-center">
    <div class="row text-center padding">
      <div class="col-12">
        <h3 class="display-3">Zaken-Art</h3>
    </div>
    <div class="col-6 text-right">
      <a id="viewart" href="gallery.php"> <button type="button" class="btn btn-outline-light btn-lg">View Art</button></a>
    </div>
    <div class="col-6 text-left">
      <button  style="animation-name:none;" type="button" class="btn btn-secondary btn-lg">About Me</button>
    </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid">
  <div class="row jumbotron padding">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <h3>Want to see more art?</h3>
        <p class="lead">Come follow my blog where I keep fans and customers updated about sales and new art.</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a href="signup.php"> <button id='blogbtn' type="button" class="btn btn-outline-secondary btn-lg">Sign up!</button> </a>

      </div>
    </div>
  </div>

    <hr class="my-4">

  </div>
  <div class="container-fluid padding crypto">
    <div class="row padding ">
      <div class="col-md-12 col-lg-5">
        <h2>The Age Of Crypto Art</h2>
        <h5>museums may be losing their luster and physical media cannot be immortilized</h5>
        <p>thus the age of art on the blockchain was born. a way to prserve sell and collect art online. </p>
        <p>Art created on the chain can be traded for crypto-currency and your art can also make commision if ur art is conntinually traded on the chain</p>
        <br>
        <a href="https://en.wikipedia.org/wiki/Crypto_art" class="btn btn-secondary" target="_blank">Crypto art</a>
      </div>
      <div  class="text-center col-lg-7">
        <img id="parapic" src="img/d.jpg" class="img-fluid">

      </div>

    </div>

  </div>
  <button class="fun btn btn-secondary" type="button" data-toggle="collapse" data-target='#crypto'>Click to explore</button>
  <div id='crypto' class="collapse">
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-sm-6 col-md-3">
          <img class="gif" src='img/opensea.png'>

        </div>
        <div class="col-sm-6 col-md-3">
          <img class="gif" src='img/superrare.jpg'>

        </div>
        <div class="col-sm-6 col-md-3">
          <img class="gif" src='img/portion.png'>

        </div>
        <div class="col-sm-6 col-md-3">
          <img class="gif" src='img/bitcoin.jpg'>

        </div>


      </div>

    </div>

  </div>
  <hr class="my-4">
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h2 class="display-5">Get Connected</h2>

      </div>
      <hr>
      <div class="col-12">
        <p class="lead">follow me on my way to become next hokage.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fa fa-facebook-square"></i>
        <h3>Facebook</h3>
        <p>jshdjashdjashdjahdajhl</p>

      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fa fa-instagram"></i>
        <h3>Instagram</h3>
        <p>jshdjashdjashdjahdajhl</p>

      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <i class="fa fa-twitter-square"></i>
        <h3>Twitter</h3>
        <p>jshdjashdjashdjahdajhl</p>

      </div>
    </div>
  </div>
  <hr class="my-4">
  <figure>
    <div class="fixed-wrap">
      <div id="fixed">

      </div>

    </div>
  </figure>

      <div class="container-fluid padding">
        <div class="row welcome text-center">
          <div class="col-12">
            <h1 class="display-4">Want to get ahold of me??</h1>

          </div>
          <hr>
          <div class="col-12">
            <p class="lead">contact me in the form below</p>
          </div>
        </div>
      </div>
      <div class="container-fluid padding">
        <div class="row text-center padding">
          <div class="col-12 bg-light">
            <form class="contact-form" action="includes/contact.inc.php" method="post">
              <input type="text" name="conName" placeholder="Full Name">
              <input type="text" name="conMail" placeholder="E-Mail Address">
              <input type="text" name="conPhone" placeholder="Phone">
              <br><br>
              <textarea id="subject" name="conInfo" placeholder="Write something.."></textarea>
              <br>
              <input type="submit" name="contact-submit" class="btn btn-secondary">
            </form>

          </div>
        </div>
      </div>




<?php require 'footer.php'; ?>
