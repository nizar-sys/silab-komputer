<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM jadwal_lab WHERE id=$_GET[kode]");
header('location:../admin_info_jadwal_lab.php');
?>