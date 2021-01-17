<?php 
session_start();
//koneksi ke database
include 'koneksi.php'; 
require 'vendor/autoload.php';
use Carbon\Carbon;
$sekarang = Carbon::now();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShoesStyle</title>
  <style>
    body {
      background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("img/backgroud.png");
      background-size: cover;
    }
  </style>
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
  <?php include 'menu.php'; ?>

  <div class="row ml-5 mt-5 mr-2 ">
    <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
    <?php while($perproduk=$ambil->fetch_assoc()){ ?>
      <div class="card mr-2 ml-3 mt-2" style="width: 16rem;">
        <div class="card-body bg-light">
         <img src="foto_produk/<?php echo $perproduk['gambar_produk']; ?>" class="card-img-top" alt="...">
         <h3><?php echo $perproduk['nama_produk']; ?></h3>
         <i class="fas fa-star text-success"></i>
         <i class="fas fa-star text-success"></i>
         <i class="fas fa-star text-success"></i>
         <i class="fas fa-star-half-alt text-success"></i>
         <i class="far fa-star text-success"></i><br>
         <h5>Rp.<?php echo number_format($perproduk['harga_produk']); ?></h5>
         <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
         <a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-danger">Detail</a>
       </div>
     </div>
   <?php } ?> 
 </div>
</div>
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
        <div class="col-lg-4 py-5 follow-us">
                <h4>Time : <?php echo "$sekarang"; ?></h4> 
            </div>
      </div>
      <div class="copyright">
        <p>&copy; Copyright <script>document.write(new Date().getFullYear());</script>, ShoesStyle</p>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>