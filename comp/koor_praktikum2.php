<?php

include 'koneksi.php';
if (isset($_POST['kategori'])) {
    $kategori = $_POST['kategori'];
    $periode = $_POST['periode'];
}
$query = "SELECT * FROM koordinator,dosen WHERE praktikum='$kategori' AND periode='$periode' AND jabatan='Koor Praktikum' AND koordinator.kode=dosen.nid";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
if (empty($row)) {
    echo "
    <div class='clients-comments text-center'>
        <img src='images/5.png' class='img-circle' alt=''>
        <h3>Koordinator Praktikum</h3>
        <h4><span>Belum Ditentukan</span></h4>
        <h4><a class='btn btn-primary' href='#' data-toggle='modal' data-target='#KoorPrak'>Tambah Koordinator</a></h4>
    </div>";
} else {
    echo "
    <div class='clients-comments text-center'>
        <img src='$row[foto]' class='img-circle' alt=''>
        <h3>Koordinator Praktikum</h3>
        <h4><span>$row[nama]</span></h4>
        <h4><a class='btn btn-primary' href='process/koor_prak_hapus.php?id=$row[id]&&praktikum=$kategori&&periode=$periode'>Hapus Koordinator</a></h4>
    </div>";
}
?>