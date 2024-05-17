<?php
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "INSERT INTO nilai_harian "
        . "(pertemuan, nrp, praktikum, periode, tp, th, ta) VALUES"
        . "(" . $_POST["pertemuan"] . "," . $_POST["nrp"] . ",'" . $_POST["praktikum"] . "','" . $_POST["periode"] . "'," . $_POST["tp"] . "," . $_POST["th"] . "," . $_POST["ta"] . ")";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data Berhasil Dimasukkan';
}
?>  