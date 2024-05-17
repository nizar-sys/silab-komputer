<?php

$serial = $_GET['serial'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$sql = "SELECT * FROM barang WHERE serial_num = '".$serial."' ORDER BY serial_num";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$connect, $sql);
$output .='
	<div class="table-responsive" align="center">
		<table class="table table-bordered" style="width:90%">';
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<tr>
                                <th style="width:50%">Serial Number</th><td>'.$row["serial_num"].'</td>
                            </tr>
                            <tr>
                                <th>Nama</th><td class="nama" data-id1="'.$row["serial_num"].'" >'.$row["nama"].'</td>
                            </tr>
                            <tr>
                                <th>Status</th><td class="status" data-id2="'.$row["serial_num"].'" >'.$row["status"].'</td>
                            </tr>
                            <tr>
                                <th>Developer</th><td class="developer" data-id3="'.$row["serial_num"].'" >'.$row["developer"].'</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th><td class="lokasi" data-id4="'.$row["serial_num"].'" >'.$row["lokasi"].'</td>
                            </tr>
                            <tr>
                                <th>Type</th><td class="type" data-id5="'.$row["serial_num"].'" >'.$row["type"].'</td>
                            </tr>
                            <tr>
                                <th>Model</th><td class="model" data-id6="'.$row["serial_num"].'" >'.$row["model"].'</td>
                            </tr>
                            <tr>
                                <th>Nomor Pelabelan</th><td class="no_pelabelan" data-id7="'.$row["serial_num"].'" >'.$row["no_pelabelan"].'</td>
                            </tr>';
	}
}
else
{
	$output .= '<tr>
					<td colspan="8" align="center">Data Not Found</td>
				</tr>';
}
$output .= '</table>
	</div>';
	
echo $output;
?>