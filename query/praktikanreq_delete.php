<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "DELETE FROM praktikum WHERE nrp=" . $nrp . "  AND prak='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Maaf ! Permintaan anda menjadi praktikan Laboratorium Praktikum $praktikum periode $periode telah ditolak";
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect,"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$nrp')");
    echo 'Data telah dihapus.';
}
?>