<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO topik_ta
(judul,peserta,pembimbing1,pembimbing2,status)VALUES
('$_POST[judul]','$_POST[peserta]','$_POST[pembimbing1]','$_POST[pembimbing2]','Berlangsung')");
header('location:../admin_info_topik_ta.php');
?>