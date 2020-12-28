<?php 
session_start();
//koneksi ke database
$koneksi =new mysqli("localhost","root","","shoesstyle");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Flatshoes</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav">
			<li><a href="">Flatshoes</a></li>
			<li><a href="">Keranjang</a></li>
			<li><a href="">Login</a></li>
			<li><a href="">Chekout</a></li>
		</ul>
	</div>
</nav>

<!-- Konten -->
<section class="konten">
	<div class="container">
		<h1>Flatshoes</h1>

		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
			<?php while($perproduk=$ambil->fetch_assoc()){ ?>
			<div class="col-md-3">
				<div class="thumbnail">
				<img src="foto_produk/<?php echo $perproduk['gambar_produk']; ?>" alt="">
				<div class="caption">
					<h3><?php echo $perproduk['nama_produk']; ?></h3>
					<h5>Rp.<?php echo number_format($perproduk['harga_produk']); ?></h5>
					<a href="" class="btn btn-primary">Beli</a>
				</div>
			</div>
		</div>
			<?php } ?>
	</div>
</div>
</section>
</body>
</html>