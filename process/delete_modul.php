<?php

include '../koneksi.php';
$kode = $_GET['id'];
$kategori = $_GET['kategori'];
$periode = $_GET['periode'];

$query = "SELECT * FROM file WHERE id=$kode";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);

$path = $row['path'];
$file = "../admin/" . substr($path, 3);

if (!unlink($file)) {
    echo "error deleting $file";
} else {
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM file WHERE id=$kode");
    header("location:../koordinator.php?kategori=$kategori&&periode=$periode");
}

?>