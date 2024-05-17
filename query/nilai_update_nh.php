<?php

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$nilai = $_POST["nilai"];
$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];
$sql = "UPDATE praktikum SET nilai_harian=".$nilai."  WHERE nrp=".$nrp."  AND prak='".$praktikum."' AND periode='".$periode."'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data Berhasil Diperbarui';
}
?>  