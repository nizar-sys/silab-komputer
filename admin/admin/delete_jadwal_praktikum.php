<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM jadwal_praktikum WHERE id=$_GET[kode]");
header('location:../admin_info_jadwal_praktikum.php');
?>