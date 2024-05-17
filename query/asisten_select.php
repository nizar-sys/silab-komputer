<?php
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT *, asisten.id as kode FROM asisten,mahasiswa WHERE periode='".$_POST["periode"]."' AND praktikum='".$_POST["praktikum"]."' AND approve='Y' AND mahasiswa.id=asisten.nrp";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:100%;">'
        . '         <tr>'
        . '             <th>NRP</th>'
        . '             <th>Nama</th>'
        . '             <th>Kelas</th>'
        . '         </tr>';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $output .= '<tr>'
                . ' <td class="nrp_asisten" data-id1="'.$row["id"].'">'.$row["nrp"].'</td>'
                . ' <td class="nama" data-id2="'.$row["id"].'" >'.$row["nama"].'</td>'
                . ' <td class="kelas" data-id3="'.$row["kode"].'" contenteditable>'.$row["kelas"].'</td>'
                . '</tr>';
    }
}else{
    $output .= '<tr>'
            . '     <td colspan="3"> Data Not Fount</td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>