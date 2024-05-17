<?php

session_start();
include "../koneksi.php";

if (isset($_POST['kategori'])) {
    $praktikum = $_POST['kategori'];
    $periode = $_POST['periode'];
    $nrp = $_SESSION['kode'];
}

mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO praktikum (nrp,prak,periode,approve) VALUES ($nrp,'$praktikum','$periode','R')");
$tanggal = date("Y-m-d h:i:s", time()+18000);
$isi = "Permintaan anda menjadi praktikan Laboratorium Praktikum $praktikum periode $periode sedang diproses";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$nrp')");
echo"
    <script>
            alert('Permintaan anda sedang diproses. Mohon tunggu konfirmasi selanjutnya !');
            window.location.href='../lab_praktikum.php?kategori=$praktikum&&periode=$periode';
    </script>";

echo $praktikum;
echo $periode;
echo $nrp;
?>