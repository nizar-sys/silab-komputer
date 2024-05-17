<?php

if(isset($_GET['kategori'])){
    $kategori = $_GET['kategori'];
    $periode = $_GET['periode'];
}
include 'koneksi.php';
$query = "SELECT * FROM koordinator,mahasiswa WHERE praktikum='$kategori' AND periode='$periode' AND jabatan='Koor Asisten' AND koordinator.kode=mahasiswa.id";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
if (empty($row)) {
    echo "
    <div class='clients-comments text-center'>
        <img src='images/5.png' class='img-circle' alt=''>
        <h3>Koordinator Asisten</h3>
        <h4><span>Belum Ditentukan</span></h4>";
} else {
    echo "
    <div class='clients-comments text-center'>
        <img src='";
    if (!empty($row['foto'])) {
        echo $row['foto'];
    } else {
        echo "images/5.png";
    }
    echo "' class='img-circle' alt=''>
        <h3>Koordinator Asisten</h3>
        <h4><span>$row[nama]</span></h4>";
}

$query = "SELECT * FROM openregister WHERE praktikum='$kategori' AND periode='$periode'";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
if ((!empty($row)) && ($_SESSION['kategori']=="mahasiswa")) {
    $query = "SELECT approve FROM asisten WHERE praktikum='$_GET[kategori]' AND periode='$_GET[periode]' AND nrp=$_SESSION[kode]";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
    if(empty($row)){
        echo "<h4><a href='#' class='btn btn-primary' data-toggle='modal' data-target='#AslabModal'>Pendataran Dibuka</a></h4>";
    }else if($row['approve'] == "R"){
        echo "<h4><a href='#' class='btn btn-primary' disabled>Pendataran Sedang Diproses</a></h4>";
    }
}

echo "</div>";
?>