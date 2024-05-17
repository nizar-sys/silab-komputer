<?php
include "../koneksi.php";
$waktu = $_POST[hari] . " " . $_POST[jam];
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO jadwal_praktikum
(periode,nama_praktikum,kelas,waktu,asisten)VALUES
('$_POST[periode]','$_POST[praktikum]','$_POST[kelas]','$waktu','$_POST[koordinator]')");
header('location:../admin_info_jadwal_praktikum.php');
?>