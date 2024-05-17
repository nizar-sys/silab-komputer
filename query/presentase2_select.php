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
        . '             <th >Tugas Pendahuluan (%)</th>'
        . '             <th >Tugas Harian (%)</th>'
        . '             <th >Tugas Akhir (%)</th>'
        . '             <th >Pertemuan Terakhir</th>'
        . '             <th >Jumlah Pertemuan</th>'
        . '         </tr>';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $output .= '<tr align="center">'
                . ' <td class="ptp" data-id1="' . $row["id"] . '" contenteditable>' . $row["tp"] . '</td>'
                . ' <td class="pth" data-id2="' . $row["id"] . '" contenteditable>' . $row["th"] . '</td>'
                . ' <td class="pta" data-id3="' . $row["id"] . '" contenteditable>' . $row["ta"] . '</td>'
                . ' <td class="per" data-id4="' . $row["id"] . '" >' . $row["pertemuan_berlangsung"] . '</td>'
                . ' <td class="jml" data-id5="' . $row["id"] . '" contenteditable>' . $row["jml_pertemuan"] . '</td>'
                . '</tr>';
    }
} else {
    $output .= '<tr align="center">'
            . '     <td id="ptp" contenteditable></td>'
            . '     <td id="pth" contenteditable></td>'
            . '     <td id="pta" contenteditable></td>'
            . '     <td id="per" ></td>'
            . '     <td id="jml" contenteditable></td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>