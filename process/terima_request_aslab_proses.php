<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE asisten SET approve='Y' WHERE nrp=$_GET[nrp]");
header("location:../koordinator.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>