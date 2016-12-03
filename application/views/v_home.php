<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Appron</title>
  <meta name="description" content="Cara memasak masa kini">
  <meta name="author" description="Just Team Appron">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("media") ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url("media") ?>/css/demo.css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url("media") ?>/css/adaptive-menu.default.css">
  <script src="https://code.jquery.com/jquery-3.0.0.slim.min.js"></script>
    <script src="<?php echo base_url("media") ?>/js/jquery.adaptive-menu.js"></script>
    <script>
    $(function () {
      $('.wrapmenus').adaptiveMenu();
    });
  </script>

  <!-- Bootstrap -->
  <script src="<?php echo base_url("media") ?>/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url("media") ?>/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
  <div class="logo">
    <img src="<?php echo base_url("media") ?>/img/logo.png" width="60px">
  </div>
  <header>
      <div class="layout-centers">
        <div class="wrapmenus">          
          <nav>
            <ul class="navs menus topmenu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Browse</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

<div class="content">
  <h1 class="content__heading">Selamat Datang di Appron</h1>
  <p class="content__teaser">Berbagi dan memasak lebih mudah</p>
  <a href="#" class="content__cta">Memasak Sekarang!</a>
</div><!--content-->

<video id="my-video" class="video" muted loop>
  <source src="<?php echo base_url("media") ?>/video/bg.mp4" type="video/mp4">
  <source src="<?php echo base_url("media") ?>/video/bg.ogv" type="video/ogg">
  <source src="<?php echo base_url("media") ?>/video/bg.webm" type="video/webm">
</video><!--video-->

<script>
(function() {
  /**
   * Video element
   * @type {HTMLElement}
   */
  var video = document.getElementById("my-video");

  /**
   * Check if video can play, and play it
   */
  video.addEventListener( "canplay", function() {
    video.play();
  });
})();
</script>

<div class="">
  <div class="col-lg-12 header">
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="row">
          <div class="arrow-up">            
          </div>
        </div>        
      </div>
      <div class="box-content">
        <div class="container-fluid">
          <div class="row">
            <center>
              <div class="col-lg-12 title">
                <h1>Ayo Bersama Appron</h1>
              </div>
            </center>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <center>
              <div class="col-sm-4 sub-content">
                <img src="<?php echo base_url("media") ?>/img/Hat.png" class="imgbox">
                <h3>Menjadi Chef</h3>
                <p>Memasak makanan atau minuman yang lezat menjadi kenyataan, dengan resep-resep yang lengkap dan terus berkembang bersama komunitas Appron</p>
              </div>
              <div class="col-sm-4 sub-content">
                <img src="<?php echo base_url("media") ?>/img/Reputation.png" class="imgbox">
                <h3>Membangun Reputasi</h3>
                <p>Jadikan Appron sebagai inti karir Memasak mu, dengan menjadikan Appron sebagai portofolio kuliner mu tingkatkan kesempatan mu untuk bekerja!</p>
              </div>
              <div class="col-sm-4 sub-content">
                <img src="<?php echo base_url("media") ?>/img/Share.png" class="imgbox">
                <h3>Berbagi Bersama</h3>
                <p>Mari kita berkembang bersama dengan berbagi dan membuat resep masakan yang kedepannya akan pasti berguna untuk karir mu</p>
              </div>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<div class="container-fluid parallax1">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 title2">
            <h1>Appron Sebagai Wadah Kuliner</h1>
            <h4>Dari Berbagi, Portofolio, Hingga Belajar Memasak</h4>
            <p>Appron adalah wadah baru bagi para chef dan kalian yang memiliki passion dalam kuliner, jelajahi Appron dan berkembang di dalamnya, selain itu kalian juga dapat banyak belajar di sini mulai dari cara memasak, teknik, dan banyak lagi.</p>
            <center><a href="#">Ikut Sekarang!</a></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="box-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 img-content">
              <img src="<?php echo base_url("media") ?>/img/1.jpg">
            </div>
            <div class="col-md-6 text-content">
              <h1>Steak Daging</h1>
              <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labo...</h4>
              <center>

              <a href="#" class="btn-text-content2">Cari Resep Lain!</a>
              <a href="#" class="btn-text-content">Lihat Selengkapnya</a>
              
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid parallax2">
  <div class="row">
    <div class="col-lg-12 last-content">      
      <center>
        <h1>Ayo Tunggu Apalagi Mulai Bergabung Sekarang !</h1>
        <a href="#" class="btn-text-content">Mulai Memasak!</a>
      </center>
    </div>
  </div>
</div>

<div class="container-fluid footer">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-8 footer-text">
            <h4>Crafted With <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-copyright-mark"></span> 2016 All Right Reserved</h4>
          </div>
          
          <div class="col-sm-4 icon">
            <img src="<?php echo base_url("media") ?>/img/icon_in.png" width="30px">
            <img src="<?php echo base_url("media") ?>/img/icon_gp.png" width="30px">
            <img src="<?php echo base_url("media") ?>/img/icon_fb.png" width="30px">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>