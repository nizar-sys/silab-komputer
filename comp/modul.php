<?php

if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $periode = $_GET['periode'];
}
include 'koneksi.php';
$per_temp = explode("/", $periode);
$p1 = substr($per_temp[0], 2);
$p2 = substr($per_temp[1], 2);
$newperiode = $p1 . $p2;
$nama_file = "Modul_" . $kategori . "_" . $newperiode;
$query = "SELECT * FROM file WHERE nama_file LIKE '%$nama_file%'";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
if (empty($row)) {
    echo "
    <a class='btn btn-xs btn-warning' href='#' data-toggle='modal' data-target='#UploadModul'>Upload</a>";
} else {
    $path = $row['path'];
    $newpath = "admin" . substr($path, 2);
    $kode = $row['id'];
    echo "
    <a class='btn btn-xs btn-info' href='$newpath'>Download</a> | 
    <a class='btn btn-xs btn-danger' href='process/delete_modul.php?id=$kode&&kategori=$kategori&&periode=$periode'>Hapus</a> ";
}
?>