<?php

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$ptp = $_POST["ptp"];
$pta = $_POST["pta"];
$pth = $_POST["pth"];
$jml = $_POST["jml"];
$id = $_POST["id"];

$sql = "UPDATE presentase_nilai SET tp=" . $ptp . " , th=" . $pth . " , ta=" . $pta . " , jml_pertemuan=" . $jml . " WHERE id=" . $id . "";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data Berhasil Diperbarui';
}
?>  