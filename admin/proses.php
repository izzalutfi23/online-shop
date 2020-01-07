<?php 
session_start();
include '../koneksi.php';
$proses = $_GET['proses'];

if($proses == 'add_kategori'){
	mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES ('$_POST[nama_kategori]')");
	header('location:index.php?page=kategori');
}
else if($proses == 'edit_kategori'){
	mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$_POST[nama_kategori]' WHERE id_kategori = '$_POST[id_kategori]'");
	header('location:index.php?page=kategori');
}
else if($proses == 'delete_kategori'){
	mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$_GET[id_kategori]'");
	header('location:index.php?page=kategori');
}
else if($proses == 'add_barang'){
	$lokasi_file	=$_FILES['foto']['tmp_name'];
	$tipe_file		=$_FILES['foto']['type'];
	$nama_file		=$_FILES['foto']['name'];
	move_uploaded_file($lokasi_file, "../img/produk/$nama_file");

	mysqli_query($koneksi,"INSERT INTO barang (id_kategori, nama_barang, foto, stok, deskripsi, harga, diskon) VALUES ('$_POST[id_kategori]', '$_POST[nama_barang]', '$nama_file', '$_POST[stok]', '$_POST[deskripsi]', '$_POST[harga]', '$_POST[diskon]')");
	header('location:index.php?page=produk');
}
?>