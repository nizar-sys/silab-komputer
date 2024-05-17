<?php
include 'koneksi.php';
if (isset($_GET['kategori'])) {
   $kategori= $_GET["kategori"];
}
$kategoriuser = $_SESSION['kategori'];
if($kategoriuser=="dosen"){
    $kategori = "'Modul','Jobsheet','Absensi','Sertifikat','Surat'";
}else{
    $kategori = "'Modul','Jobsheet'";
}
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM file WHERE kategori IN ($kategori)");
while ($r = mysqli_fetch_array($q)) {
    $file = substr($r['path'], 3);
    $file = "admin/" . $file;
    echo "
        <tr>
            <td><a href='$file'>$r[nama_file]</a></td>
            <td>$r[kategori]</td>
            <td>$r[tanggal_upload]</td>
            <td>
            <a href='$file'> <span class='glyphicon glyphicon-download-alt'></span> Download </a> 
            </td>
        </tr>";
}
?>