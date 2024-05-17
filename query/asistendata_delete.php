<?php
$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "UPDATE asisten SET approve='R' WHERE nrp=" . $nrp . "  AND praktikum='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data telah dialihkan ke dalam Request Asisten.';
}
?>  