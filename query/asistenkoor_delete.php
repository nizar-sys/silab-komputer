<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "DELETE FROM koordinator WHERE kode=" . $nrp . "  AND praktikum='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data telah dihapus.';
}
?>