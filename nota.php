<?php 
session_start();
//koneksi ke database
$koneksi =new mysqli("localhost","root","","shoesstyle");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>nota pembelian</title>
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

				<h2>Detail Pembelian</h2>

				<?php 
				$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian = '$_GET[id]'");
				$detail = $ambil->fetch_assoc();
				?>
				<pre><?php print_r($detail); ?></pre>

				<strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
				<p>
					<?php echo $detail['telepone_pelanggan']; ?><br>
					<?php echo $detail['email_pelanggan']; ?>
				</p>
				<p>
					Tanggal : <?php echo $detail['tanggal_pembelian']; ?> <br>
					Total : <?php echo $detail['total_pembelian']; ?>
				</p>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1; ?>
						<?php $ambil= $koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
						<?php while ($pecah=$ambil->fetch_assoc()){ ?>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><?php echo $pecah['nama_produk']; ?></td>
								<td><?php echo $pecah['harga_produk'];?></td>
								<td><?php echo $pecah['jumlah'];?></td>
								<td>
									<?php echo $pecah['harga_produk']*$pecah['jumlah'];?>
								</td>
							</tr>
							<?php $nomor++; ?>
						<?php } ?>
					</tbody>
				</table>
				<div class="row">
					<div class="col-md-7">
						<div class="alert alert-info">
							<p>
								silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?> ke <br>
								<strong>BANK MANDIRI 137-001088-3456 AN. Shoes Style</strong>
							</p>
						</div>
					</div>
					
				</div>

			</div>
		</section>

	</body>
	</html>