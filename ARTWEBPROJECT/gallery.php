<?php
session_start();
include_once("config.php");
echo "Welcome ". $_SESSION['email'];
echo "<a href='logout.php'>Logout</a>";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gallery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap:400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <!--<link rel="stylesheet" href="assets/css/Footer-Basic.css">-->
    <!--<link rel="stylesheet" href="assets/css/Header-Dark.css">-->
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!--<link rel="stylesheet" href="assets/css/Login-Form-Dark.css">-->
    <!--<link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">-->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" id="brandLogo" href="index.html"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active d-lg-flex" id="aboutMeLink" href="aboutMe.html">About me</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="row">
  <div class="column">
    <img src="assets/img/1.jpg">
    <img src="assets/img/30.jpg">
    <img src="assets/img/3.jpg">
    <img src="assets/img/4.jpg">
    <img src="assets/img/5.jpg">
    <img src="assets/img/6.jpg">
    <img src="assets/img/7.jpg">
  </div>
  <div class="column">
    <img src="assets/img/8.jpg">
    <img src="assets/img/9.jpg">
    <img src="assets/img/10.jpg">
    <img src="assets/img/11.jpg">
    <img src="assets/img/12.jpg">
    <img src="assets/img/13.jpg">
    <img src="assets/img/14.jpg">
  </div>
  <div class="column">
    <img src="assets/img/15.jpg">
    <img src="assets/img/16.jpg">
    <img src="assets/img/17.jpg">
    <img src="assets/img/18.jpg">
    <img src="assets/img/19.jpg">
    <img src="assets/img/20.jpg">
    <img src="assets/img/22.jpg">
  </div>
  <div class="column">
    <img src="assets/img/23.jpg">
    <img src="assets/img/24.jpg">
    <img src="assets/img/25.jpg">
    <img src="assets/img/26.jpg">
    <img src="assets/img/27.jpg">
    <img src="assets/img/28.jpg">
    <img src="assets/img/29.jpg">

  </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/gallery.js"></script>
</body>

</html>