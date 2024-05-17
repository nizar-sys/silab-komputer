<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM jadwal_praktikum");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[periode]</td>
            <td>$r[semester]</td>
            <td>$r[nama_praktikum]</td>
            <td>$r[kelas]</td>
            <td>$r[waktu]</td>
            <td>$r[asisten]</td>
        </tr>";
}
?>