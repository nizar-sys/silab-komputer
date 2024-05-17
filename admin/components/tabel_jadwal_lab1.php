<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM jadwal_lab where no_ruang='2401'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[kegiatan]</td>
            <td>$r[waktu]</td>
            <td>$r[penanggungjawab]</td>
        </tr>";
}
?>