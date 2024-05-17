<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND nama_praktikum='$_POST[praktikum]' AND periode='$_POST[periode]' AND kelas='$_POST[kelas]'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>$r[presentase] %</td>
        </tr>";
}
?>