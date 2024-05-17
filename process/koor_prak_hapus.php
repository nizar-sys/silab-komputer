<?php

include "../koneksi.php";
$id = $_GET['id'];
$kategori = $_GET['praktikum'];
$periode = $_GET['periode'];
$sql = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select kode from koordinator where id=$id");
$row = mysqli_fetch_array($sql);
$kode = $row['kode'];
if (mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"DELETE FROM koordinator WHERE id=$id")) {
    $tanggal = date("Y-m-d h:i:s", time() + 18000);
    $isi = "Maaf ! Anda telah diberhentikan menjadi Koordinator  $kategori periode $periode";
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$kode')");
    echo"
    <script>
            alert('Koordinator Berhasil Dihapus.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
} else {
    echo"
    <script>
            alert('Koordinator Gagal Dihapus.');
            window.location.href='../koordinator_lab.php?kategori=$kategori&&periode=$periode';
    </script>";
}
?>