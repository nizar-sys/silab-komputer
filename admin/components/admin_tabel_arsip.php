<?php
include 'koneksi.php';
$kategori = $_GET['kategori'];
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM file WHERE kategori='$kategori'");
while ($r = mysqli_fetch_array($q)) {
    $file = substr($r['path'], 3);
    echo "
        <tr>
            <td><a href='$file'>$r[nama_file]</a></td>
            <td>$r[tanggal_upload]</td>
            <td>
            <a href='admin/delete_arsip.php?id=$r[id]&&path=$r[path]&&kategori=$kategori'> <i class='menu-icon icon-remove'></i> Hapus </a> 
            </td>
        </tr>";
}
?>