<?php

include "../koneksi.php";

$id = $_POST['id'];
$Lid = strlen($id);
$sandi = $_POST['sandi'];
$pass = $sandi;


if($Lid == 4){
	mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO dosen VALUES('$id','$pass','$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]')");
	echo"
	<script>
		alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
		window.location.href='../login.php';
	</script>";
} else{
	mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO mahasiswa VALUES('$id','$pass','$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]')");
	echo"
	<script>
		alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
		window.location.href='../login.php';
	</script>";
}


?>