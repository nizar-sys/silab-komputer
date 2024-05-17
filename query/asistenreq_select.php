<?php

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM asisten,mahasiswa WHERE periode='" . $_POST["periode"] . "' AND praktikum='" . $_POST["praktikum"] . "' AND approve='R' AND mahasiswa.id=asisten.nrp";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:100%;">'
        . '         <tr>'
        . '             <th>NRP</th>'
        . '             <th>Nama</th>'
        . '             <th>Lampiran</th>'
        . '             <th>Aksi</th>'
        . '         </tr>';
if (mysqli_num_rows($result) > 0) {
    $periode = $_POST['periode'];
    $praktikum = $_POST['praktikum'];
    $per_temp = explode("/", $periode);
    $newperiode = $per_temp[0] . $per_temp[1];
    while ($row = mysqli_fetch_array($result)) {
        $nrp = $row["nrp"];
        $nama_file = "Persyaratan_" . $praktikum . "_" . $newperiode . "_" . $nrp . ".pdf";
        $sql2 = "SELECT * FROM file WHERE nama_file LIKE '%$nama_file%'";
        $result2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $output .= '<tr>'
                . ' <td class="nrp_req" data-id1="' . $row["id"] . '" >' . $row["nrp"] . '</td>'
                . ' <td class="nama" data-id2="' . $row["id"] . '" >' . $row["nama"] . '</td>'
                . ' <td align="center" class="lampiran" data-id4="' . $row2["id"] . '" > <a class="btn btn-xs btn-default" href="' . substr($row2["path"], 3) . '"><span class="glyphicon glyphicon-paperclip"></span></a></td>'
                . ' <td>'
                . '     <button class="btn btn-danger btn-xs" name="btn_delete3" id="btn_delete3" data-id3="' . $row["nrp"] . '">'
                . '         <span class="glyphicon glyphicon-remove"></span> Tolak'
                . '     </button>'
                . '     <button class="btn btn-success btn-xs" name="btn_update3" id="btn_update3" data-id3="' . $row["nrp"] . '">'
                . '         <span class="glyphicon glyphicon-ok"></span> Terima'
                . '     </button>'
                . ' </td>'
                . '</tr>';
    }
} else {
    $output .= '<tr>'
            . '     <td colspan="43"> Tidak Ada Permintaan</td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>