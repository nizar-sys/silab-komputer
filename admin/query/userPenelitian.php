<?php
include "../koneksi/koneksi.php";
session_start();
$kode_pinjam = $_POST['kode_pinjam'];
$id_peminjam = $_SESSION['kode'];
$alat1 = $_POST['txt1'];
$alat2 = $_POST['txt2'];
$alat3 = $_POST['txt3'];
$alat4 = $_POST['txt4'];
$alat5 = $_POST['txt5'];
$alat6 = $_POST['txt6'];
$alat7 = $_POST['txt7'];
$alat8 = $_POST['txt8'];
$alat9 = $_POST['txt9'];
$alat10 = $_POST['txt10'];
$Date = date("Y-m-d");
$Time = gmdate("H:i:s", time() + 60 * 60 * 7);

$sql = "insert into requestpenelitian (kode_pinjam,id_peminjam,alat1,alat2,alat3,alat4,alat5,alat6,alat7,alat8,alat9,alat10,tanggal_request) "
        . "values ('"
        . "$kode_pinjam','"
        . "$id_peminjam','"
        . "$alat1','"
        . "$alat2','"
        . "$alat3','"
        . "$alat4','"
        . "$alat5','"
        . "$alat6','"
        . "$alat7','"
        . "$alat8','"
        . "$alat9','"
        . "$alat10','"
        . "$Date $Time')";
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$sql);

$_SESSION['pesan'] = 'Peminjaman Alat akan segera diproses!';
header('location:../../index.php');
