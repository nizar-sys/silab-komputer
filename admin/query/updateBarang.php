<?php
include "../koneksi/koneksi.php";
session_start();
$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE barang SET 
serial_num='$_POST[serial_num]',
nama='$_POST[nama]',
status='$_POST[status]',
developer='$_POST[developer]',
lokasi='$_POST[lokasi]',
type='$_POST[type]', 
model='$_POST[model]', 
no_pelabelan='$_POST[no_pelabelan]',
last_update='$Date $Time'
WHERE serial_num='$_POST[serial]'");

$_SESSION['pesan'] = 'Data Anda Berhasil Diperbaharui!';
header('location:../PembaharuanInventaris.php');
?>