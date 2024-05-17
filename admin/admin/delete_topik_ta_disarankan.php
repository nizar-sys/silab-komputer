<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM topik_ta WHERE id=$_GET[kode] and status='disarankan'");
header('location:../admin_info_topik_ta.php');
?>