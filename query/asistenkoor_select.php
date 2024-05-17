<?php

$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM koordinator,mahasiswa WHERE periode='" . $_POST["periode"] . "' AND praktikum='" . $_POST["praktikum"] . "' AND jabatan='Koor Asisten' AND mahasiswa.id=koordinator.kode";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<p id="koor">'
                . '     <b>Koordinator Asisten : ' . $row["nama"] . '</b>'
                . '     <button class="btn btn-danger btn-xs" name="btn_delete4" id="btn_delete4" data-id1="' . $row["kode"] . '">'
                . '         <span class="glyphicon glyphicon-remove"></span> Hapus'
                . '     </button>'
                . '     <br>'
                . ' <p>';
    }
} else {
    $output .= '<p id="koor"><b>Koordinator Asisten : Belum Ditentukan</b>'
            . '<form class="form-inline" role="form" align="center">
                    <div class="form-group">
                        <input type="text" class="form-control nrp" id="nrp_koor" placeholder="NRP Peserta">
                    </div>
                    <button type="button" class="btn btn-default" onclick="update_koor(nrp_koor.value)">Proses</button>
                </form><br><p>';
}
echo $output;
?>