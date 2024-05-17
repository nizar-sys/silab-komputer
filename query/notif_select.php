<?php

ini_set('display_errors', 0);
$nrp = $_POST['nrp'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM pemberitahuan WHERE user='" . $nrp . "' order by tanggal desc";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        if ($row['status'] == "D") {
            $output .= "
            <div class='alert alert-success alert-dismissable $row[id]'>
                <button type='btn' data-dismiss='alert' class='close' id='btn_delete' data-id1='$row[id]'>&times;</button>
                <strong>$row[tanggal]</strong> &nbsp $row[isi]
            </div>";
        } else {
            $output .= "
            <div class='alert alert-warning alert-dismissable $row[id]'>
                <button type='btn' data-dismiss='alert' class='close' id='btn_delete' data-id1='$row[id]'>&times;</button>
                <strong>$row[tanggal]</strong> &nbsp $row[isi]
            </div>";
        }
    }
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect,"update pemberitahuan set status='R' where user='$nrp'");
} else {
    $output .= "
            <div class='alert alert-warning alert-dismissable'>
                <strong>Anda tidak memiliki pemberitahuan apapun</strong>
            </div>";
}
echo $output;
?>