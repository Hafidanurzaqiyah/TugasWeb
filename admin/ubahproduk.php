<h2>Ubah Produk</h2>
<?php 
$ambil=$koneksi->query ("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah= $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<?php  
$datakategori = array();

$ambil=$koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-control" name="id_kategori">
			<option>Pilih Kategori</option>
			<?php foreach ($datakategori as $key => $value): ?>

			<option value="<?php echo $value["id_kategori"] ?>" <?php if($pecah["id_kategori"]==$value["id_kategori"]){ echo "selected";} ?> >
				<?php echo $value["nama_kategori"] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Harga Rp</label>
		<input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Berat (Gr)</label>
		<input type="number" name="berat" class="form-control" value="<?php echo $pecah['berat_produk']; ?>">
	</div>
	<div class="form-group">
		<img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width = "200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<!-- <div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label>Stok</label>
<<<<<<< HEAD
		<input type="number" class="form-control" name="stok">
	</div> -->
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name="stok" value="<?php echo ($pecah['stok_produk']); ?>">
=======
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_produk']; ?>">
>>>>>>> e5f2ac0b2278659d5b7d3df8964a7a0e5453cfab
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php 
if (isset($_POST['ubah']))
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto=$_FILES['foto']['tmp_name'];
	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");
		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]',stok_produk='$_POST[stok]', id_kategori=$_POST[id_kategori] WHERE id_produk='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',berat_produk='$_POST[berat]',deskripsi_produk='$_POST[deskripsi]',stok_produk='$_POST[stok]',id_kategori=$_POST[id_kategori] WHERE id_produk='$_GET[id]'");
	}
	echo "<script>alert('data produk telah diubah');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
}
?>