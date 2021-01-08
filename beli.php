<?php 
session_start();
$id_produk = $_GET['id'];

if (isset($_SESSION['keranjang'][$id_produk])) 
{
	$_SESSION['keranjang'][$id_produk]+=1;
}
else
{
	$_SESSION['keranjang'][$id_produk]=1;
}
// echo "<prev>";
// print_r($_SESSION);
// echo "<prev";
echo "<script> alert('produk telah masuk ke keranjang belanja'); </script>";
echo " <script>location = 'keranjang.php'; </script>";
?>