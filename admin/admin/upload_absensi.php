<?php

$tanggal = date("Y/m/d");
$kelas = $_POST['kelas'];
$pertemuan = $_POST['pertemuan'];
$praktikum = $_POST['praktikum'];
$periode = $_POST['periode'];
//$nama_file = $periode . "_" . $praktikum . "_" . $kelas . ".xls";
$nama_file = "temp.xls";
$target_dir = "../admin/";
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
        //include "../koneksi.php";
        //mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO file 
        //(nama_file,tanggal_upload,kategori,path)VALUES 
        //('$nama_file','$tanggal','$kategori','$target_file')");
        header("location:absensi_proses.php?periode=$periode&&praktikum=$praktikum&&kelas=$kelas&&pertemuan=$pertemuan&&target=$nama_file");
        //header("location:../admin_absensi.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>