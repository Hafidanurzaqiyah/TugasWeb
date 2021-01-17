<?php session_start();

include 'koneksi.php';

$id_pembelian=$_GET['id'];

$ambil=$koneksi->query("SELECT * FROM pembayaran 
	LEFT JOIN pembelian ON pembayaran.id_pembelian=pembelian.id_pembelian WHERE pembelian.id_pembelian = '$id_pembelian'");
$detbay=$ambil->fetch_assoc();

// echo "<pre>";
// print_r($detbay);
// echo "</pre>";

if (empty($detbay)) 
{
	echo "<script>alert('belum ada data pembayaran');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}

if ($_SESSION["pelanggan"]["id_pelanggan"]!==$detbay["id_pelanggan"]) 
{
	echo "<script>alert('Anda tidak berhak melihat');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>lihat pembayaran</title>
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
					<li><a href="riwayat.php">Riwayat</a></li>
					<li><a  href="logout.php">Logout</a></li>
					<?php else: ?>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Registrasi</a></li>
					<?php endif ?> 
					<li><a href="keranjang.php">Keranjang</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<h3>Lihat Pembayran</h3>
			<div class="row">
				<div class="col-md-6">
					<table class="table">
						<tr>
							<th>Nama</th>
							<td><?php echo $detbay['nama'] ?></td>
						</tr>
						<tr>
							<th>Bank</th>
							<td><?php echo $detbay['bank'] ?></td>
						</tr>
						<tr>
							<th>Tanggal</th>
							<td><?php echo $detbay['tanggal'] ?></td>
						</tr>
						<tr>
							<th>Jumlah</th>
							<td>Rp. <?php echo number_format($detbay['jumlah']) ?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<img src="bukti_pembayaran/<?php echo $detbay['bukti']; ?>" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</body>
	</html>