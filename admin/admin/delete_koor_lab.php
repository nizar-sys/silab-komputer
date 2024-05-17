<?php
include "../koneksi.php";

$id = $_GET['kode'];
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select * from koordinator where id=$id");
$r = mysqli_fetch_array($q);
$lab = $r['praktikum'];
$kode = $r['kode'];

$tanggal = date("Y-m-d h:i:s", time() + 18000);
$isi = "Maaf ! Anda telah diberhentikan menjadi Koordinator Laboratorium $lab";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");

mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM koordinator WHERE id=$_GET[kode]");
header('location:../praktikum.php');
?>