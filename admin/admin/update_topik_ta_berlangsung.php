<?php
include "../koneksi.php";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE topik_ta SET 
        judul = '$_POST[judul]',  
        peserta = '$_POST[peserta]',  
        pembimbing1 = '$_POST[pembimbing1]',  
        pembimbing2 = '$_POST[pembimbing2]' 
	WHERE id = $_POST[id]");
header('location:../admin_info_topik_ta.php');
?>