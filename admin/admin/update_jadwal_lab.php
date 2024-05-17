<?php
include "../koneksi.php";
$waktu = $_POST[hari2] . " " . $_POST[awal2] . "-" . $_POST[akhir2];
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE jadwal_lab SET 
	no_ruang = '$_POST[ruang2]', 
	kegiatan = '$_POST[kegiatan2]', 
	waktu = '$waktu', 
        penanggungjawab = '$_POST[penanggungjawab2]' 
	WHERE id = $_POST[id]");
header('location:../admin_info_jadwal_lab.php');
?>