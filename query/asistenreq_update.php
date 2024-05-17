<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "UPDATE asisten SET approve='Y' WHERE nrp=" . $nrp . "  AND praktikum='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data telah dimasukkan kedalam Data Asisten';
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Selamat ! Permintaan anda menjadi asisten Laboratorium Praktikum $praktikum periode $periode telah diterima";
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, "insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$nrp')");
}
?>  