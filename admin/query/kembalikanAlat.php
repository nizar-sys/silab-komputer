<?php
include "../koneksi/koneksi.php";
session_start();

$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);

mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE barang SET 
ketersediaan='TERSEDIA'
WHERE serial_num='$_POST[inputKode_barang]'");


mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE peminjaman SET 
tgl_kembali='$Date $Time',
status_pinjam='Sudah Dikembalikan',
kondisi_kembali='$_POST[kondisi]'
WHERE kode_barang='$_POST[inputKode_barang]'");

$_SESSION['pesan'] = 'Alat Telah Dikembalikan!';
header("location:../PengembalianAlat.php");
?>