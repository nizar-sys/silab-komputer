<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "SELECT * FROM asisten WHERE nrp=" . $nrp . " AND approve='Y'";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
if (mysqli_num_rows($result) > 0) {
    $sql2 = "INSERT INTO koordinator "
            . "(kode, jabatan, praktikum, periode) VALUES"
            . "(" . $nrp . ",'Koor Asisten','" . $_POST["praktikum"] . "','" . $_POST["periode"] . "')";
    if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql2)) {
        echo 'Data Berhasil Disimpan';
    }
}else{
    echo 'NRP tidak ditemukan';
}
?>