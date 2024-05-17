<?php

$tanggal = date("Y/m/d");
$kategori = $_POST['kategori'];
$praktikum = $_POST['praktikum'];
$periode = $_POST['periode'];
$nama_file = $kategori . "_" . $praktikum . "_" . $periode . ".pdf";
$target_dir = "../file/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $nama_file;
$uploadOk = 1;

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        include "../koneksi.php";
        mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO file 
        (nama_file,tanggal_upload,kategori,path)VALUES 
        ('$nama_file','$tanggal','$kategori','$target_file')");
        header("location:../admin_arsip.php?kategori=$kategori");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>