<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM file where kategori='SuratKeluar'");
while ($r = mysqli_fetch_array($q)) {
    $down = "inventory/" . $r[path];
    echo "
        <tr>
            <td>$r[nama_file]</td>
            <td>$r[tanggal_upload]</td>
            <td><a href='$down'> Download </a> </td>
        </tr>";
}
?>