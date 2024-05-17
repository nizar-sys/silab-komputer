<?php

$nrp = $_POST["nrp"];
$praktikum = $_POST["praktikum"];
$periode = $_POST["periode"];
$per_temp = explode("/", $periode);
$newperiode = $per_temp[0] . $per_temp[1];
$nama_file = "Persyaratan_" . $praktikum . "_" . $newperiode . "_" . $nrp . ".pdf";

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "DELETE FROM asisten WHERE nrp=" . $nrp . "  AND praktikum='" . $praktikum . "' AND periode='" . $periode . "'";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Data telah dihapus.';
    $sql2 = "SELECT path FROM file WHERE nama_file='$nama_file'";
    $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql2);
    $row = mysqli_fetch_array($result);
    $path = $row['path'];
    unlink($path);
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, "DELETE FROM file WHERE nama_file='$nama_file'");
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Maaf ! Permintaan anda menjadi asisten Laboratorium Praktikum $praktikum periode $periode telah ditolak";
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, "insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$nrp')");
}
?>