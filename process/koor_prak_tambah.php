<?php

include "../koneksi.php";
$kategori = $_POST['praktikum'];
$periode = $_POST['periode'];
$kode = $_POST['kode'];

if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT into koordinator (kode,jabatan,praktikum,periode) values ($kode,'Koor Praktikum','$kategori','$periode')")) {
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Selamat ! Anda telah menjadi Koordinator  $kategori periode $periode";
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");
    echo"
    <script>
            alert('Koordinator Berhasil Ditambahkan.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
} else {
    echo"
    <script>
            alert('Koordinator Gagal Ditambahkan.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
}
?>