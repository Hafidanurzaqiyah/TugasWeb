<?php session_start(); ?>
<?php include 'koneksi.php' ?>
<?php  
$id_produk = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>detail produk</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a  href="index.php">Home</a></li>
        <li><a  href="produk.php">Produk</a></li>
        <li><a  href="contact.php">Contact</a></li>
        <li><a  href="chekout.php">Chekout</a></li>
        <?php if (isset($_SESSION["pelanggan"])): ?>
          <li><a  href="logout.php">Logout</a></li>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
          <?php endif ?> 
          <li><a href="keranjang.php">Keranjang</a></li>
        </ul>
      </div>
    </nav>

<section class="konten">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="foto_produk/<?php echo $detail["foto_produk"];?>" alt="" class="img-responsive">
			</div>
			<div class="col-md-6">
				<h2><?php echo $detail["nama_produk"]; ?></h2>
				<h4>Rp. <?php echo number_format($detail["harga_produk"]); ?></h4>

				<h5>Stok : <?php echo $detail["stok_produk"]; ?></h5>

				<form method="post">
					<div class="form-group">
						<div class="input-group">
							<input type="number" min="1" name="jumlah" class="form-control" max="<?php echo $detail['stok_produk']; ?>">
							<div class="input-group-btn">
								<button class="btn btn-primary" name="beli">Beli</button>
							</div>
						</div>
					</div>
				</form>
				<?php 

				if (isset($_POST['beli'])) 
				{
					$jumlah=$_POST["jumlah"];

					$_SESSION["keranjang"][$id_produk] = $jumlah;

					echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
					echo "<script>location = 'keranjang.php';</script>";
				}

				 ?>

				<p><?php echo $detail['deskripsi_produk']; ?></p>
			</div>
		</div>
	</div>
</section>
<!-- Footer -->
<!-- <div class="footer">
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
</div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script> -->
</body>
</html>