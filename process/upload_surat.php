<?php

session_start();
include "../koneksi.php";
$nama = $_POST['nama_file'];
$tanggal = date("Y/m/d");
$nama_file = $nama  . ".pdf";
$target_dir = "../admin/file/";
$target_dir2 = "../file/";
$target_file = $target_dir . $nama_file;
$path = $target_dir2 . $nama_file;

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO file 
        (nama_file,tanggal_upload,kategori,path)VALUES 
        ('$nama_file','$tanggal','Surat','$path')");
    echo"
    <script>
            alert('Permintaan anda sedang diproses. Mohon tunggu konfirmasi selanjutnya !');
            window.location.href='../arsip.php';
    </script>";
} else {
    echo"
    <script>
            alert('Terjadi kesalahan saat upload file');     
    </script>";
}
?>