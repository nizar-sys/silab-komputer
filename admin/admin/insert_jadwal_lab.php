<?php
$waktu = $_POST[hari] . " " . $_POST[awal] . "-" . $_POST[akhir];
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO jadwal_lab
(no_ruang,kegiatan,waktu,penanggungjawab)VALUES
('$_POST[ruang]','$_POST[kegiatan]','$waktu','$_POST[penanggungjawab]')");
header('location:../admin_info_jadwal_lab.php');
?>