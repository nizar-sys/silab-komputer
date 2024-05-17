<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM asisten WHERE nrp=$_GET[nrp]");
header("location:../koordinator.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>