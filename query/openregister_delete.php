<?php

$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "DELETE FROM openregister WHERE praktikum='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Pendaftaran Telah Ditutup';
}
?>