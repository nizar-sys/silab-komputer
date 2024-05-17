<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO topik_ta
(judul,status)VALUES
('$_POST[judul]','Disarankan')");
header('location:../admin_info_topik_ta.php');
?>