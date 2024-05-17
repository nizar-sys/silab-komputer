<?php

include 'koneksi.php';
$kategori = $_GET['kategori'];
$periode = $_GET['periode'];
$query = "SELECT * FROM openregister WHERE praktikum='$kategori' AND periode='$periode'";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
if(!empty($row['cv'])){
    echo "- Curriculum Vitae (CV) <br>";
}
if(!empty($row['transkrip'])){
    echo "- Transkrip Nilai <br>";
}
if(!empty($row['foto'])){
    echo "- Foto <br>";
}
if(!empty($row['note'])){
    echo "<br> Catatan : <br>";
    echo $row['note'] . " <br>";
}
?>