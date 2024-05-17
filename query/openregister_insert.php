<?php

$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];
$cv = $_POST["cv"];
$transkrip = $_POST["transkrip"];
$foto = $_POST["foto"];
$note = $_POST["note"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "INSERT INTO openregister "
        . "(praktikum, periode, cv, transkrip, foto, note) VALUES"
        . "('" . $praktikum . "','" . $periode . "','" . $cv . "','" . $transkrip . "','" . $foto . "','" . $note ."')";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Pendaftaran Telah Dibuka';
}

?>