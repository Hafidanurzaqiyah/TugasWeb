<?php 
session_start();
//koneksi ke database
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ShoesStyle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <!-- Link Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="slider-menu">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/1.jpg" alt="First slide">
                <div class="carousel-caption text-left">
                    <h1>Welcome to ShoesStyle</h1>
                    <h2>we hope you enjoy</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/2.jpg" alt="Second slide">
                <div class="carousel-caption text-left">
                    <h1>Welcome to ShoesStyle</h1>
                    <h2>we hope you enjoy</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/3.jpg" alt="Third slide">
                <div class="carousel-caption text-left">
                    <h1>Welcome to ShoesStyle</h1>
                    <h2>we hope you enjoy</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<header>
     <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container ">
      <a class="navbar-brand text-white font-weight-bold" href="#">ShoesStyle</a>
      <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-4 text-white">
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" href="produk.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="chekout.php">Chekout</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION["pelanggan"])): ?>
             <li><a href="logout.php" class="btn"><img src="img/logout.png" width="30" data-toggel="tooltip" title="Logout"></a></li>
          <?php else: ?>
            <li><a href="login.php" class="btn"><img src="img/account.png" width="30" data-toggel="tooltip" title="Login"></a></li>
          <?php endif ?>
          
         <li><a href="keranjang.php" class="btn"><img src="img/keranjang.png" width="30" data-toggel="tooltip" title="Keranjang"></a></li>
       </ul>
     </div>
   </div>
 </nav>
<!-- Footer -->
<div class="footer">
    <div class="container ">
        <div class="container-fluid text-md-left py-5">
            <div class="row footer-details">
              <div class="col-lg-4 py-2 about-us">
                <h1>SHOES STYLE</h1>
                <p>Sebagai Pusat Fashion Online di Asia, kami menciptakan kemungkinan-kemungkinan gaya tanpa batas dengan cara memperluas jangkauan produk, mulai dari produk internasional hingga produk lokal dambaan. Kami menjadikan Anda sebagai pusatnya. Bersama Shoes Style, You Own Now.!</p>
            </div>
            <div class="col-lg-4 py-3 company">
                <h4>Company</h4>
                <ul class="company-item">
                    <li>
                        <a href="#">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Terms &amp; Conditions
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 py-5 follow-us">
                <h4>Follow us</h4>
                <i class="fab fa-facebook" aria-hidden="true"></i>
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <i class="fab fa-instagram" aria-hidden="true"></i>
            </div>
        </div>
        <div class="copyright">
          <p>&copy; Copyright <script>document.write(new Date().getFullYear());</script>, ShoesStyle</p>
      </div>
  </div>
</div>
</div>
</header>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>