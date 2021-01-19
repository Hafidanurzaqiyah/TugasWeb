<?php

$id_foto = $_GET["idfoto"];
$id_produk = $_GET["idproduk"];

$ambilfoto = $koneksi->query("SELECT * FROM produk_foto WHERE id_produk_foto= '$id_foto'");
$detailfoto = $ambilfoto->fetch_assoc();

$namafilefoto = $detailfoto["nama_produk_foto"];
unlink("../foto_produk/".$namafilefoto);

$koneksi->query("DELETE FROM produk_foto WHERE id_produk_foto='$id_foto'");
echo "<script>alert('Foto Produk Terhapus');</script>";
echo "<script>location='index.php?halaman=detailproduk&id=$id_produk';</script>";