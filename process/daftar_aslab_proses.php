<?php

session_start();
include "../koneksi.php";
$praktikum = $_POST['kategori'];
$periode = $_POST['periode'];
$nrp = $_SESSION['kode'];

$per_temp = explode("/", $periode);
$newperiode = $per_temp[0] . $per_temp[1];
$tanggal = date("Y/m/d");
$nama_file = "Persyaratan_" . $praktikum . "_" . $newperiode . "_" . $nrp . ".pdf";
$target_dir = "../admin/file/";
$target_file = $target_dir . $nama_file;

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO asisten (nrp,praktikum,periode,approve) VALUES ($nrp,'$praktikum','$periode','R')");
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO file 
        (nama_file,tanggal_upload,kategori,path)VALUES 
        ('$nama_file','$tanggal','Persyaratan','$target_file')");
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Permintaan anda menjadi asisten Laboratorium Praktikum $praktikum periode $periode sedang diproses";
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$nrp')");
    echo"
    <script>
            alert('Permintaan anda sedang diproses. Mohon tunggu konfirmasi selanjutnya !');
            window.location.href='../lab_praktikum.php?kategori=$praktikum&&periode=$periode';
    </script>";
} else {
    echo"
    <script>
            alert('Terjadi kesalahan saat upload file');
            
    </script>";
}
?>