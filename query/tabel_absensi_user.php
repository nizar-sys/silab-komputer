<?php

include 'koneksi.php';
//cek jumlah pertemuan
$kelas = "";
$periode = "";
$praktikum = "";
$nrp = "";
if (isset($_POST['praktikum'])) {
    $periode = $_POST['periode'];
    $praktikum = $_POST['praktikum'];
    $kelas = $_POST['kelas'];
}
if (isset($_SESSION['kode'])){
    $nrp = $_SESSION['kode'];
}else{
    $nrp = "";
}

$q1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT COUNT(DISTINCT pertemuan) AS jml FROM absensi WHERE nama_praktikum='$praktikum' and periode='$periode' and kelas='$kelas'");
$r1 = mysqli_fetch_array($q1);
$jml_pertemuan = $r1['jml'];

echo "<table class='table table-bordered table-striped' style='width:70%; margin-left:15%;'>";
echo "<tr>"
 . "<th style='width:10%;'> Pertemuan </th>"
 . "<th> Tanggal </th>"
 . "</tr>";
$q2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * from absensi where nrp='$nrp' and nama_praktikum='$praktikum' and periode='$periode' order by pertemuan");
while ($r2 = mysqli_fetch_array($q2)) {
    echo "<tr>"
    . "<td> $r2[pertemuan] </td>"
    . "<td> $r2[tanggal] </td>"
    . "</tr>";
}
echo "</table>";
?>