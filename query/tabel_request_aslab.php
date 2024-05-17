<?php
include 'koneksi.php';
$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select nrp, nama from mahasiswa,asisten where mahasiswa.id=asisten.nrp and asisten.approve='R' and praktikum='$_GET[kategori]' and periode='$_GET[periode]'");
while ($r = mysqli_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>
                <a href='process/terima_request_aslab_proses.php?kategori=$_GET[kategori]&&periode=$_GET[periode]&&nrp=$r[nrp]' class='btn btn-success btn-xs'>
                    <span class='glyphicon glyphicon-ok'></span> Terima
                </a> 
                <a href='process/tolak_request_aslab_proses.php?kategori=$_GET[kategori]&&periode=$_GET[periode]&&nrp=$r[nrp]' class='btn btn-danger btn-xs'>
                    <span class='glyphicon glyphicon-remove'></span> Tolak
                </a>
            </td>
        </tr>";
}
?>