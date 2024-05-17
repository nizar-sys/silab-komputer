<?php

$periode = $_POST['periode'];
$praktikum = $_POST['praktikum'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM presentase_nilai WHERE periode='" . $periode . "' AND praktikum='" . $praktikum . "'";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '<b>Komponen Nilai</b>'
        . '     <table class="table table-bordered table-striped" style="width:100%;" id="tabel3">'
        . '         <tr align="center">'
        . '             <th style="width:20%;">Tugas Pendahuluan (%)</th>'
        . '             <th style="width:20%;">Tugas Harian (%)</th>'
        . '             <th style="width:20%;">Tugas Akhir (%)</th>'
        . '             <th style="width:20%;">Pertemuan Terakhir</th>'
        . '             <th style="width:20%;">Jumlah Pertemuan</th>'
        . '         </tr>';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        if($row['tp']!=0) {
            $output .= '<tr align="center">'
                    . ' <td class="ptp" data-id1="' . $row["id"] . '" >' . $row["tp"] . '</td>'
                    . ' <td class="pth" data-id2="' . $row["id"] . '" >' . $row["th"] . '</td>'
                    . ' <td class="pta" data-id3="' . $row["id"] . '" >' . $row["ta"] . '</td>'
                    . ' <td class="per" data-id4="' . $row["id"] . '" >' . $row["pertemuan_berlangsung"] . '</td>'
                    . ' <td class="jml" data-id5="' . $row["id"] . '" >' . $row["jml_pertemuan"] . '</td>'
                    . '</tr>';
        }else{
            $output .= '<tr align="center">'
            . '     <td colspan="5"> Presentase Nilai Belum Ditentukan, Presetase Nilai Menggunakan Pengaturan Default</td>'
            . ' </tr>';
        }
    }
} else {
    $output .= '<tr align="center">'
            . '     <td colspan="3"> Presentase Nilai Belum Ditentukan, Presetase Nilai Menggunakan Pengaturan Default</td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>