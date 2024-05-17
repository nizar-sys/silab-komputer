<?php

include 'koneksi.php';
if(isset($_POST['kategori'])){
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
    </div>";
} else {
    echo "
    <div class='clients-comments text-center'>
        <img src='$row[foto]' class='img-circle' alt=''>
        <h3>Koordinator Praktikum</h3>
        <h4><span>$row[nama]</span></h4>";
    if($row["nid"]==$_SESSION['kode']){
        echo"
            <h4><a class='btn btn-primary' href='koordinator.php?kategori=$kategori&&periode=$periode'>Halaman Koordinator Praktikum</a></h4>
        </div>";
    }else{
        echo"</div>";
    }
}

?>