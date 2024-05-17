<?php

include '../koneksi.php';
require("reader.php"); // php excel reader
$file = "temp.xls";
$per = $_GET['periode'];
$kls = $_GET['kelas'];
$pra = $_GET['praktikum'];
$pert = $_GET['pertemuan'];

$connection = new Spreadsheet_Excel_Reader(); // our main object
$connection->read($file);

//cek jumlah mahasiswa
$jmlmhs = 0;
$stat = 0;
$row = 3;
$nrptemp = "";
$ins = 1;
while ($stat == 0) {
    if (!empty($connection->sheets[0]["cells"][$row][3])) {
        $dep = $connection->sheets[0]["cells"][$row][5];
        $nama = $connection->sheets[0]["cells"][$row][4];
        $kode = $connection->sheets[0]["cells"][$row][3];
        $kodetemp = explode("-", $kode);
        $nrp = $kodetemp[0] . $kodetemp[1] . $kodetemp[2];
        if(($nrp != $nrptemp) && ($dep != "Asisten")) {
            mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO absensi 
            (nrp,nama_praktikum,periode,kelas,pertemuan)VALUES 
            ('$nrp','$pra','$per','$kls',$pert)");
            mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO mahasiswa  
            (id,nama)VALUES 
            ('$nrp','$nama')");
            $nrptemp = $nrp;
        }
        $row++;
    } else {
        $stat = 1;
    }
}
$p1 = substr($per, 0, 2);
$p2 = substr($per, 2, 2);
$newperiode = "20".$p1."/20".$p2;
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE presentase_nilai SET pertemuan_berlangsung=pertemuan_berlangsung+1 WHERE praktikum='$pra' AND periode='$newperiode'");
unlink($file);
header('location:../admin_absensi.php');
?>