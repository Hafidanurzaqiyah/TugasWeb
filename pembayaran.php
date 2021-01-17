<?php session_start(); ?>
<?php include 'koneksi.php';

if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
	echo "<script>alert('silahkan login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}


$idpem = $_GET["id"];
$ambil=$koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem=$ambil->fetch_assoc();

$id_pelanggan_beli=$detpem["id_pelanggan"];
$id_pelanggan_login= $_SESSION["pelanggan"]["id_pelanggan"];

if ($id_pelanggan_login!==$id_pelanggan_beli) 
{
	echo "<script>alert('jangan nakal');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>pembayaran</title>
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
					<?php endif ?> 
					<li><a href="keranjang.php">Keranjang</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<h2>Konfirmasi Pembayaran</h2>
			<p>Kirim bukti pembayaran Anda disini</p>
			<div class="alert alert-info">Total tagihan Anda <strong>Rp. <?php echo number_format($detpem["total_pembelian"]); ?></strong></div>

			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Penyetor</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Bank</label>
					<input type="text" name="bank" class="form-control">
				</div>

				<div class="form-group">
					<label>Jumlah</label>
					<input type="number" name="jumlah" min="1" class="form-control">
				</div>

				<div class="form-group">
					<label>Foto Bukti</label>
					<input type="file" name="bukti" class="form-control">
					<p class="text-danger">Foto bukti harus JPG maksimal 2MB</p>
				</div>
				<button class="btn btn-primary" name="kirim">Kirim</button>

			</form>
		</div>

		<?php 

		if (isset($_POST["kirim"])) 
		{
			$namabukti=$_FILES["bukti"]["name"];
			$lokasibukti=$_FILES["bukti"]["tmp_name"];
			$namafiks=date("YmdHis").$namabukti;
			move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

			$nama = $_POST["nama"];
			$bank = $_POST["bank"];
			$jumlah = $_POST["jumlah"];
			$tanggal = date("Y-m-d");

			$koneksi->query("INSERT INTO pembayaran (id_pembelian,nama,bank,jumlah,tanggal,bukti) VALUES ('$idpem','$nama','$bank','$jumlah','$tanggal','$namafiks')");

			$koneksi->query("UPDATE pembelian SET status_pembelian='Sudah kirim pembayaran' WHERE id_pembelian='$idpem'");

			echo "<script>alert('Terima kasih sudah mengirimkan bukti pembayaran');</script>";
			echo "<script>location='riwayat.php';</script>";
		}
		?>

	</body>
	</html>