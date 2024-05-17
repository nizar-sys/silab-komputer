<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM topik_ta where status='disarankan'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[judul]</td>
        </tr>";
}
?>