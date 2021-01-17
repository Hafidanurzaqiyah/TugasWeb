<?php 
session_start();
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- Link Main CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <?php include 'menu.php'; ?>
    <!---Account-->
    <div class="wrapper">
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Login</h2>

        <div class="inner-addon left-addon">
          <label class="control-label">Email</label>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="text" class="form-control" name="email" placeholder="youremail.com" required="" autofocus=""/>
        </div>
        <div class="inner-addon left-addon">
         <label class="control-label">Password</label>
         <i class="fa fa-lock" aria-hidden="true"></i>
         <input type="password" class="form-control" name="password" placeholder="*******" required="" autofocus=""/>
       </div>
       <a class="forgot-password" href="#">I forgot my password</a>   
       <button class="btn btn-lg btn-primary btn-block" name="simpan">Login</button>
     </form>
     <p class="account-signup">Don't have an account? <a href="register.php">Sign up here</a>
     </div>


     <?php 
     if (isset($_POST["simpan"])) 
     {

      $email = $_POST["email"];
      $password = $_POST["password"];

      $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

      $akunyangcocok = $ambil->num_rows;
      if ($akunyangcocok==1) 
      {
        $akun = $ambil->fetch_assoc();
        $_SESSION["pelanggan"]= $akun;
        echo "<script>alert('anda berhasil login');</script>";

        if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"])) 
        {
          echo "<script>location='chekout.php';</script>";
        }
        else
        {
          echo "<script>location='produk.php';</script>";
        }
        
      }
      else 
      {
        echo "<script>alert('anda gagal login, periksa akun anda');</script>";
        echo "<script>location='login.php';</script>";

      }
    }

    ?>

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