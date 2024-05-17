<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM topik_ta where status='berlangsung'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[judul]</td>
            <td>$r[peserta]</td>
            <td>$r[pembimbing1]</td>
            <td>$r[pembimbing2]</td>
        </tr>";
}
?>