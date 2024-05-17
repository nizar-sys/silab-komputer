<?php
$server		= "localhost";
$username	= "root";
$password	= "";
$database	= "inventaris";

// ini_set('display_errors', 0);

//koneksi dan memilih database di server
mysqli_connect($server,$username,$password, $database) or die("Gagal");
// mysqli_select_db($database) or die("Database tidak ditemukan");

?>