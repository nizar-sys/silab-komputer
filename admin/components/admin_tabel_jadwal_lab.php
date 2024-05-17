<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM jadwal_lab");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[no_ruang]</td>
            <td>$r[kegiatan]</td>
            <td>$r[waktu]</td>
            <td>$r[penanggungjawab]</td>
            <td>
            <a href='admin/delete_jadwal_lab.php?kode=$r[id]'><i class='menu-icon icon-trash'></i>Hapus</a> / 
            <a href='admin_info_jadwal_lab.php?update=true&&id=$r[id]'><i class='menu-icon icon-edit'></i>Update</a>
            </td>
        </tr>";
}
?>