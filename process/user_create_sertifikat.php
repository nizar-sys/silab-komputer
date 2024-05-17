<?php

require_once '../admin/admin/PHPWord.php';
include '../koneksi.php';

$tanggal_upload = date("Y/m/d");
$per = $_POST['periode'];
$prak = $_POST['praktikum'];
$asist = $_POST['asisten'];
$asisten = explode("\n", str_replace("\r", "", $asist));

//periode
if ($per == "1617") {
    $periode = "2016/2017";
} else if ($per == "1718") {
    $periode = "2017/2018";
} else if ($per == "1819") {
    $periode = "2018/2019";
} else if ($per == "1819") {
    $periode = "2019/2020";
}

//praktikum
if ($prak == "PEMDAS") {
    $praktikum = "Pemrograman Dasar";
} else if ($prak == "ORKOM") {
    $praktikum = "Organisasi dan Arsitektur Komputer";
} else if ($prak == "PRC") {
    $praktikum = "Pemrograman Robot Cerdas";
} else if ($prak == "JARKOM") {
    $praktikum = "Jaringan Komputer";
} else if ($prak == "REKWEB") {
    $praktikum = "Rekayasa Web";
}

for ($k = 0; $k < sizeof($asisten); $k++) {
    $index = $asisten[$k];
    $query = "SELECT * FROM mahasiswa WHERE id=$index";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
    $nrp = $row['id'];
    $nama = $row['nama'];
    $nama_file = "../admin/file/Sertifikat_" . $prak . "_" . $per . "_" . $nrp . ".docx";
    $path = "../file/Sertifikat_" . $prak . "_" . $per . "_" . $nrp . ".docx";
    $nama_file2 = "Sertifikat_" . $prak . "_" . $per . "_" . $nrp . ".docx";

    $PHPWord = new PHPWord();
    $document = $PHPWord->loadTemplate('../admin/file/Template.docx');
    $document->setValue('Value1', $praktikum);
    $document->setValue('Value2', $nama);
    $document->setValue('Value3', $praktikum);
    $document->setValue('Value4', $periode);
    $document->setValue('Value6', $nrp);
    $document->save($nama_file);
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO file 
        (nama_file,tanggal_upload,kategori,path)VALUES 
        ('$nama_file2','$tanggal_upload','Sertifikat','$path')");
}
header("location:../arsip.php");
?>