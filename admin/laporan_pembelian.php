<?php  
$semuadata=array();
$tglm="-";
$tgls="-";
$status=" ";
if (isset($_POST["kirim"])) 
{
	$tglm=$_POST["tglm"];
	$tgls=$_POST["tgls"];
	$status=$_POST["status"];
	$ambil=$koneksi->query("SELECT * FROM pembelian pm LEFT JOIN pelanggan pl ON pm.id_pelanggan=pl.id_pelanggan WHERE status_pembelian='$status' AND tanggal_pembelian BETWEEN '$tglm' AND '$tgls'");
	while($pecah=$ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}
	// echo "<pre>";
	// print_r($semuadata);
	// echo "</pre>";
}

?>


<h2>Laporan_Pembelian dari <?php echo $tglm ?> hingga <?php echo $tgls ?></h2>
<hr>

<form method="post">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label>Tanggal Mulai</label>
				<input type="date" name="tglm" class="form-control" value="<?php echo $tglm ?>">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Tanggal Selesai</label>
				<input type="date" name="tgls" class="form-control" value="<?php echo $tgls ?>"
		></div>
	</div>
	<div class="col-md-3">
			<label>Status</label>
			<select class="form-control" name="status">
				<option value="">Pilih Status</option>
				<option value="Belum dibayar" <?php echo $status=="Belum dibayar"?"selected":"";?> >Belum dibayar</option>
				<option value="Dibatalkan"<?php echo $status=="Dibatalkan"?"selected":"";?> >Dibatalkan</option>
				<option value="Barang sudah sampai"<?php echo $status=="Barang sudah sampai"?"selected":"";?> >Barang sudah sampai</option>
				<option value="Barang dikirim"<?php echo $status=="Barang dikirim"?"selected":"";?> >Barang dikirim</option>
				<option value="Lunas"<?php echo $status=="Lunas"?"selected":"";?> >Lunas</option>
				<option value="Pending"<?php echo $status=="Pending"?"selected":"";?> >Pending</option>
			</select>
		</div>
		<div class="col-md-2">
			<label>&nbsp;</label><br>
			<button class="btn btn-primary" name="kirim"><i class="glypicon glypicon-tasks"></i>Lihat Laporan</button>
		</div>
	</div>
</form>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Pelanggan</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php $total=0; ?>
		<?php foreach ($semuadata as $key => $value): ?>

		<?php $total+=$value['total_pembelian'] ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value["nama_pelanggan"] ?></td>
			<td><?php echo date("d F y", strtotime($value["tanggal_pembelian"])) ?></td>
			<td>Rp. <?php echo number_format($value["total_pembelian"]) ?></td>
			<td><?php echo $value["status_pembelian"] ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="3">Total</th>
			<th>Rp. <?php echo number_format($total)?></th>
			<th></th>
		</tr>
	</tfoot>
</table>