<?php
$periode = $_POST['periode'];
$praktikum = $_POST['praktikum'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM presentase_nilai WHERE periode='".$periode."' AND praktikum='".$praktikum."'";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:100%;" id="tabel3">'
        . '         <tr align="center">'
        . '             <th style="width:20%;">Nilai Harian (%)</th>'
        . '             <th style="width:20%;">Nilai Absensi (%)</th>'
        . '             <th style="width:20%;">Nilai UTS (%)</th>'
        . '             <th style="width:20%;">Nilai UAS (%)</th>'
        . '             <th style="width:20%;">Nilai Project (%)</th>'
        . '         </tr>';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $output .= '<tr align="center">'
                . ' <td class="pnh" data-id1="'.$row["id"].'" >'.$row["nilai_harian"].'</td>'
                . ' <td class="pabs" data-id2="'.$row["id"].'" >'.$row["absensi"].'</td>'
                . ' <td class="puts" data-id3="'.$row["id"].'" >'.$row["uts"].'</td>'
                . ' <td class="puas" data-id4="'.$row["id"].'" >'.$row["uas"].'</td>'
                . ' <td class="ppro" data-id5="'.$row["id"].'" >'.$row["project"].'</td>'
                . '</tr>';
    }
}else{
    $output .= '<tr align="center">'
            . '     <td colspan="5"> Presentase Nilai Belum Ditentukan, Presetase Nilai Menggunakan Pengaturan Default</td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>