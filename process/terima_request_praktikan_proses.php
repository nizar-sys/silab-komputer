<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE praktikum SET approve='Y' WHERE nrp=$_GET[nrp]");
header("location:../asisten.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>