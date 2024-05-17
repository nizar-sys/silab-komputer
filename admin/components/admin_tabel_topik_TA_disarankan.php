<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM topik_ta where status='disarankan'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>
            <a href='admin_info_topik_TA.php?update=disarankan&&id=$r[id]' ><i class='menu-icon icon-edit'></i></a> 
            <a href='admin/delete_topik_ta_disarankan.php?kode=$r[id]'><i class='menu-icon icon-trash'></i></a>$r[judul]
            </td>
            <td>
            <a class='btn btn-primary' href='admin_info_topik_TA.php?update=peserta&&id=$r[id]'><i class='menu-icon icon-pencil'></i> Tambahkan </a>
            </td>
        </tr>";
}
?>