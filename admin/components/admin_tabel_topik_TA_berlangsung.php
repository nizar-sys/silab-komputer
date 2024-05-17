<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM topik_ta where status='berlangsung'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>
            <a href='admin_info_topik_ta.php?update=berlangsung&&id=$r[id]'><i class='menu-icon icon-edit'></i></a> 
            <a href='admin/delete_topik_ta_berlangsung.php?kode=$r[id]'><i class='menu-icon icon-trash'></i></a>$r[judul]
            </td>
            <td>$r[peserta]</td>
            <td>$r[pembimbing1]</td>
            <td>$r[pembimbing2]</td>
        </tr>";
}
?>