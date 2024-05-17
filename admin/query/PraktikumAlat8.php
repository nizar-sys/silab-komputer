<?php
include "../koneksi/koneksi.php";

$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
$Kode = $_GET['kode_pinjam'];
$Tipe = $_GET['tipe_pinjam'];

mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into peminjaman (id_peminjaman,type_peminjaman,kode_barang,kode_peminjam,tgl_pinjam,status_pinjam) values ('$_GET[kode_pinjam]','$_GET[tipe_pinjam]','$_GET[serial_num]','$_GET[id_peminjam]','$Date $Time','Belum Dikembalikan')");
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE barang SET ketersediaan='TIDAK TERSEDIA' WHERE serial_num='$_GET[serial_num]'");
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE requestpraktikum SET alat8='$_GET[serial_num]' WHERE kode_pinjam='$_GET[kode_pinjam]'");	

header("location:../ApprovePraktikum.php?kode_pinjam=$Kode");
?>