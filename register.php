<?php include 'koneksi.php'; ?>
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


 <?php include 'menu.php'; ?>

 <!--Register-->
 <div class="signup-form">
    <form  method="post">
        <h2>Registrasi Account</h2>
        <div class="form-group">
          <input type="text" class="form-control" name="nama" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
       <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
   </div>
   <div class="form-group">
    <input type="text" class="form-control" name="telepon" placeholder="Nomor Handphone" required>
</div>        
<div class="form-group">
    <button class="btn btn-success btn-lg btn-block" name="daftar">Register Now</button>
</div>
<div class="text-center">Already have an account? <a href="account.html">Sign in</a>
</form>

<?php  
if (isset($_POST["daftar"])) 
{
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];

    $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
    $yangcocok = $ambil->num_rows;
    if ($yangcocok==1) 
    {
       echo "<script>alert('Pendaftaran gagal, email sudah digunakan!');</script>";
       echo "<script>location='register.php';</script>";
   }
   else
   {
    $koneksi->query("INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan) VALUES ('$email','$password','$nama','$telepon','$alamat')");

    echo "<script>alert('Pendaftaran sukses, silahkan login!');</script>";
    echo "<script>location='login.php';</script>";
}
}

?>
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
            <div class="col-lg-4  py-3 sub">
                <form action="">
                    <div class="form-group">
                        <h4>Alamat email</h4>
                        <input name="" class="form-control form-email shadow-none"
                        placeholder="Enter Your Email Address" type="email">
                    </div>
                    <button type="submit" class="btn btn-sub">Subscribe</button>
                </form>
            </div>
            <div class="col-lg-4 py-5 follow-us">
                <h4>Follow us</h4>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
        </div>
        <div class="copyright">
          <p>&copy; Copyright <script>document.write(new Date().getFullYear());</script>, ShoesStyle</p>
      </div>
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