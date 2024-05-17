<?php

$periode = $_POST['periode'];
$praktikum = $_POST['praktikum'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM openregister WHERE periode='" . $periode . "' AND praktikum='" . $praktikum . "'";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
if (mysqli_num_rows($result) > 0) {
    $output .= '<b>Pendaftaran Dibuka  </b><button type="button" class="btn-danger btn-xs" id="closereg">Tutup Sekarang</button>'
            . '<script>'
            . '$("#br").prop("disabled",true);'
            . '</script>';
} else {
    $output .= '<b>Pendaftaran Ditutup</b>'
            . '<script>'
            . '$("#br").prop("disabled",false);'
            . '</script>';
}
echo $output;
?>