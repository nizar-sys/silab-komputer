<?php

$tanggal = date("Y/m/d");
$kategori = "Jobsheet";
$praktikum = $_POST['praktikum'];
$periode = $_POST['periode'];
$p1 = substr($periode, 2, 2);
$p2 = substr($periode, -2);
$newperiode = $p1 . $p2;

$nama_file = $kategori . "_" . $praktikum . "_" . $newperiode . ".pdf";
$target_dir = "../admin/file/";
$target_dir2 = "../file/";
$target_file = $target_dir . $nama_file;
$path = $target_dir2 . $nama_file;
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
        ('$nama_file','$tanggal','$kategori','$path')");
        header("location:../koordinator.php?kategori=$praktikum&&periode=$periode");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>