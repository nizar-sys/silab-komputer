<?php

include './koneksi.php';

$nrp = $_SESSION['kode'];
$praktikum = '';
$periode = '';

echo '<div class="parrent pull-left">
        <ul class="nav nav-tabs nav-stacked">';
$q1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), "SELECT * FROM praktikum where approve='Y' AND praktikum.nrp=$nrp");
$no = 1;
while ($r = mysqli_fetch_array($q1)) {
    if ($no == 1) {
        echo "<li class='active'><a href='#tab$no' data-toggle='tab' class='analistic-01'>$r[prak] $r[periode]</a></li>";
    } else {
        echo "<li class=''><a href='#tab$no' data-toggle='tab' class='analistic-01'>$r[prak] $r[periode]</a></li>";
    }
    $no++;
}
echo '</ul>'
    . '</div>'
    . '';

echo '<div class="parrent media-body">
        <div class="tab-content">';
$q2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), "SELECT * FROM praktikum where approve='Y' AND praktikum.nrp=$nrp");
$no = 1;
while ($r2 = mysqli_fetch_array($q2)) {
    if ($no == 1) {
        $active = "active in";
    } else {
        $active = "";
    }
    echo "<div class='tab-pane $active' id='tab$no'>";
    $output = "";
    $output .= '<h4><b>TABEL NILAI HASIL AKUMULASI</b></h4>'
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:100%;" id="nilai">'
        . '         <tr align="center">'
        . '             <th style="width:16%;">Nilai Harian</th>'
        . '             <th style="width:16%;">Nilai Absensi</th>'
        . '             <th style="width:16%;">Nilai UTS</th>'
        . '             <th style="width:16%;">Nilai UAS</th>'
        . '             <th style="width:16%;">Nilai Project</th>'
        . '             <th style="width:16%;">Total</th>'
        . '         </tr>';
    $output .= '<tr align="center">'
        . ' <td class="nh" data-id1="' . $r2["id"] . '" >' . $r2["nilai_harian"] . '</td>'
        . ' <td class="abs" data-id2="' . $r2["id"] . '" >' . $r2["absen"] . '</td>'
        . ' <td class="uts" data-id3="' . $r2["id"] . '" >' . $r2["uts"] . '</td>'
        . ' <td class="uas" data-id4="' . $r2["id"] . '" >' . $r2["uas"] . '</td>'
        . ' <td class="pro" data-id5="' . $r2["id"] . '" >' . $r2["project"] . '</td>'
        . ' <td class="pro" data-id6="' . $r2["id"] . '" >' . $r2["total"] . '</td>'
        . '</tr>'
        . '</table>'
        . '</div><hr>';

    $connect = mysqli_connect("localhost", "root", "", "inventaris");
    $output .= '<h4><b>TABEL NILAI HARIAN</b></h4>'
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:80%;" id="harian">'
        . '         <tr>'
        . '             <th>Pertemuan</th>'
        . '             <th>Tugas Pendahuluan</th>'
        . '             <th>Tugas Harian</th>'
        . '             <th>Tugas Akhir</th>'
        . '         </tr>';
    $periode = $r2['periode'];
    $praktikum = $r2['prak'];
    $sql = "SELECT * FROM nilai_harian WHERE nrp=" . $nrp . " AND periode='" . $periode . "' AND praktikum='" . $praktikum . "'";
    $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), $connect, $sql);
    $sql3 = "SELECT * FROM praktikum WHERE nrp=" . $nrp . " AND periode='" . $periode . "' AND prak='" . $praktikum . "' AND approve='Y'";
    $result3 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), $connect, $sql3);
    if ((mysqli_num_rows($result) > 0) || (mysqli_num_rows($result3) > 0)) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<tr>'
                . ' <td class="pertemuan" data-id1="' . $row["id"] . '">' . $row["pertemuan"] . '</td>'
                . ' <td class="tp" data-id2="' . $row["id"] . '" >' . $row["tp"] . '</td>'
                . ' <td class="th" data-id3="' . $row["id"] . '" >' . $row["th"] . '</td>'
                . ' <td class="ta" data-id4="' . $row["id"] . '" >' . $row["ta"] . '</td>'
                . '</tr>';
        }
    } else {
        $output .= '<tr>'
            . '     <td colspan="5"> Data Tidak Ditemukan</td>'
            . ' </tr>';
    }
    $output .= '</table>'
        . '</div>';

    echo $output;
    echo '</div>';
    $no++;
}

echo '</div>'
    . '</div>';
if (mysqli_num_rows($q1) < 1) {
    echo '<h2><b> Anda Belum Pernah Terdaftar Sebagai Praktikan</b></h2>';
}
