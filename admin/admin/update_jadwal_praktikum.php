<?php
include "../koneksi.php";
$waktu = $_POST[hari2] . " " . $_POST[jam2];
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE jadwal_praktikum SET 
	periode = '$_POST[periode2]', 
	semester = '$_POST[semester2]', 
	nama_praktikum = '$_POST[praktikum2]', 
        kelas = '$_POST[kelas2]', 
        waktu = '$waktu', 
        asisten = '$_POST[koordinator2]' 
	WHERE id = $_POST[id]");
header('location:../admin_info_jadwal_praktikum.php');
?>