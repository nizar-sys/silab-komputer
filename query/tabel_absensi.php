<?php

include 'koneksi.php';
//cek jumlah pertemuan
$kelas = "";
$periode = "";
$praktikum = "";
if (isset($_POST['praktikum'])) {
    $periode = $_POST['periode'];
    $praktikum = $_POST['praktikum'];
    $kelas = $_POST['kelas'];
}

if (isset($_SESSION['kode'])) {
    $nrp = $_SESSION['kode'];
} else {
    $nrp = "";
}

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
            <td>$r[nama]</td>";
    if ($r['nrp'] == $nrp) {
        echo "<td>$persen % 
                <a href='#' data-toggle='modal' data-target='#UserModal'>
                <span class='glyphicon glyphicon-info-sign'></span>
                </a>
            </td>";
    } else {
        echo "<td>$persen %</td>";
    }

    echo "</tr>";
}
