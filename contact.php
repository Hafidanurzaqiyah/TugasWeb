<?php 
session_start();
//koneksi ke database
include 'koneksi.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Link Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body><
    
    <?php include 'menu.php'; ?>

    <section class="contact">
        <nav class="content">
            <h2>Contact Us</h2>
            <p>Jika ada kendala sesuatu silahkan hubungi kontak dibawah ini...</p>
        </nav>
        <nav class="container">
            <nav class="contactinfo">
                <nav class="box">
                    <nav class="icon"><i class="fas fa-map-marker" aria-hidden="true"></i></nav>
                    <nav class="text">
                        <h3>Address</h3>
                        <p>Jl. Arief Rahman Hakim No.100, Klampis Ngasem, <br>Kec. Sukolilo, Kota SBY, Jawa Timur <br>60117</p>
                    </nav>
                </nav>
                <nav class="box">
                    <nav class="icon"><i class="fas fa-phone" aria-hidden="true"></i></nav>
                    <nav class="text">
                        <h3>Phone</h3>
                        <p>+081331845116</p>
                    </nav>
                </nav>
                <nav class="box">
                    <nav class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></nav>
                    <nav class="text">
                        <h3>Email</h3>
                        <p>ShoesStyle@gmail.com</p>
                    </nav>
                </nav>
                <nav class="box">
                    <nav class="icon"><i class="fab fa-instagram" aria-hidden="true"></i></nav>
                    <nav class="text">
                        <h3>Instagram</h3>
                        <p>@ShoesStyle</p>
                    </nav>
                </nav>
            </nav>
        </section>
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>