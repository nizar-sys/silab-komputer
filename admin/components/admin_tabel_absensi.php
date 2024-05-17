<?php

include 'koneksi.php';
$praktikum = '';
$periode = '';
$kelas = '';
if (isset($_POST['praktikum'])) {
    $praktikum = $_POST['praktikum'];
    $periode = $_POST['periode'];
    $kelas = $_POST['kelas'];
}
//cek jumlah pertemuan
$query = "SELECT COUNT(DISTINCT pertemuan) AS jml FROM absensi WHERE nama_praktikum='$praktikum' and periode='$periode' and kelas='$kelas'";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
$jml_pertemuan = $row['jml'];

$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT DISTINCT nrp,nama,count(nrp)as jml FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND nama_praktikum='$praktikum' AND periode='$periode' AND kelas='$kelas' GROUP BY nrp");
while ($r = mysqli_fetch_array($q)) {
    $persen = ($r['jml'] * 100) / $jml_pertemuan;
    
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>$persen %</td>
            <td><a href='#'> Hapus </a></td>
        </tr>";
}
?>