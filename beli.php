<?php 
session_start();

$id_produk = $_GET['id'];


// jk sudah ada prouk itu dikernajng , maka produk itujumlahnya di+1
if (isset($_SESSION['keranjang'][$id_produk])) 
{
	$_SESSION['keranjang'][$id_produk]+=1;
}
// selain itu (blm ada dikeranjang), maka itu dianggap dibeli 1
else
{
	$_SESSION['keranjang'][$id_produk] = 1;
}

/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/

echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>