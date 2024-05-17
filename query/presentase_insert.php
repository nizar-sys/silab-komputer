<?php
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$praktikum = $_POST['praktikum'];
$periode = $_POST['periode'];
$nh = $_POST['nh'];
$abs = $_POST['abs'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$pro = $_POST['pro'];
$sql = "INSERT INTO presentase_nilai "
        . "(praktikum, periode, nilai_harian, uts, uas, project, absensi) VALUES"
        . "('" . $praktikum . "','" . $periode . "'," . $nh . "," . $uts . "," . $uas . "," . $pro . "," . $abs . ")";
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql)) {
    echo 'Presentase Nilai Berhasil Ditentukan';
}
?>  