<?php

include "../koneksi.php";
$kode = $_POST['kode'];
$lab = $_POST['lab'];

mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO koordinator
(kode, jabatan, praktikum)VALUES
($kode,'Koor Laboratorium','$lab')");

$tanggal = date("Y-m-d h:i:s", time() + 18000);
$isi = "Selamat ! Anda telah dipilih menjadi Koordinator Laboratorium $lab";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");

header('location:../praktikum.php');
?>