<?php
session_start(); 
include 'koneksi.php';
$proses = $_GET['proses'];

if($proses == 'add_keranjang'){
	$sql=mysqli_query($koneksi,"SELECT id_barang FROM keranjang WHERE id_barang='$_POST[id_barang]'");
	$num=mysqli_num_rows($sql);
	if($num==0){
		mysqli_query($koneksi, "INSERT INTO keranjang (id_user,id_barang,qty) VALUES ('$_POST[id_user]', '$_POST[id_barang]','$_POST[qty]')");
		mysqli_query($koneksi, "UPDATE barang SET stok=stok - '$_POST[qty]' WHERE id_barang='$_POST[id_barang]'");
	}
	else{
		mysqli_query($koneksi, "UPDATE keranjang SET qty=qty + '$_POST[qty]' WHERE id_barang='$_POST[id_barang]'");
	}
	header('location:index.php?page=cart');
}
else if($proses == 'delete_keranjang'){
	mysqli_query($koneksi, "UPDATE barang SET stok=stok + '$_GET[qty]' WHERE id_barang='$_GET[id_barang]'");
	mysqli_query($koneksi, "DELETE FROM keranjang WHERE id_keranjang='$_GET[id_keranjang]'");
	header('location:index.php?page=cart');
}
else if($proses == 'beli'){
	$qker=mysqli_query($koneksi, "SELECT * FROM keranjang WHERE id_user = '$_POST[id_user]'");
	while($data=mysqli_fetch_array($qker)){
		mysqli_query($koneksi, "INSERT INTO pesanan (id_barang, id_user, nama_pembeli, alamat, no_telp, jasa_pengirim, qty, keterangan) VALUES ('$data[id_barang]', '$data[id_user]', '$_POST[nama_pembeli]', '$_POST[alamat]', '$_POST[no_telp]', '$_POST[jasa_pengirim]', '$data[qty]', '$_POST[keterangan]')");
		mysqli_query($koneksi, "DELETE FROM keranjang where id_keranjang='$data[id_keranjang]'");
		echo "<script>
		window.alert('Pembelian Selesai');
		window.location=('index.php');
		</script>";
	}
}
?>