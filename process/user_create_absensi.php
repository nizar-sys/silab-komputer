<?php

require_once '../admin/admin/PHPWord.php';
include '../koneksi.php';

$tanggal_upload = date("Y/m/d");
$tgl = $_POST['tanggal'];
$per = $_POST['periode'];
$prak = $_POST['praktikum'];
$kelas = $_POST['kelas'];
$pertemuan = $_POST['pertemuan'];
$asist = $_POST['asisten'];
$nama_file = "../admin/file/Absensi_" . $prak . "_" . $per . "_" . $kelas . ".docx";
$path = "../file/Absensi_" . $prak . "_" . $per . "_" . $kelas . ".docx";
$nama_file2 = "Absensi_" . $prak . "_" . $per . "_" . $kelas . ".docx";
$asisten = explode("\n", str_replace("\r", "", $asist));

//periode
if ($per == "1617") {
    $periode = "2016/2017";
} else if ($per == "1718") {
    $periode = "2017/2018";
} else if ($per == "1829") {
    $periode = "2018/2019";
} else if ($per == "1920") {
    $periode = "2019/2020";
}

//praktikum
if ($prak == "PEMDAS") {
    $praktikum = "Pemrograman Dasar";
} else if ($prak == "ORKOM") {
    $praktikum = "Organisasi & Arsitektur Komputer";
} else if ($prak == "PRC") {
    $praktikum = "Pemrograman Robot Cerdas";
} else if ($prak == "JARKOM") {
    $praktikum = "Jaringan Komputer";
} else if ($prak == "REKWEB") {
    $praktikum = "Rekayasa Web";
}

//New Word Document
$PHPWord = new PHPWord();

// New landscape section
$section = $PHPWord->createSection(array('orientation' => 'landscape'));
$PHPWord->addFontStyle('rStyle', array('bold' => true, 'size' => 16));
$PHPWord->addParagraphStyle('pStyle', array('align' => 'center'));
$section->addText("Absensi Asisten Praktikum $praktikum Kelas $kelas $periode", 'rStyle', 'pStyle');
$section->addTextBreak(1);

// Define table style arrays
$styleTable = array('borderSize' => 6, 'borderColor' => '000000', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '000000', 'bgColor' => 'FFFFFF');

// Define cell style arrays
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => PHPWord_Style_Cell::TEXT_DIR_BTLR);

// Define font style for first row
$fontStyle = array('bold' => true, 'align' => 'center');

// Add table style
$PHPWord->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow);

// Add table
$table = $section->addTable('myOwnTableStyle');

// Add row
$table->addRow(600);

$date = date_create($tgl);

// Add cells (Kepala Tabel)
$table->addCell(2000, $styleCell)->addText('NRP', $fontStyle);
$table->addCell(2000, $styleCell)->addText('Nama', $fontStyle);
for ($i = 1; $i <= $pertemuan; $i++) {
    $table->addCell(1000, $styleCell)->addText(date_format($date, "d/m"), $fontStyle);
    date_add($date,date_interval_create_from_date_string("7 days"));
}

// Add cells (Nama Asisten)
for ($k = 0; $k < sizeof($asisten); $k++) {
    $query = "SELECT * FROM mahasiswa WHERE id=$asisten[$k]";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
    $table->addRow(300);
    $table->addCell(2000)->addText($row['id']);
    $table->addCell(2000)->addText($row['nama']);
    for ($i = 1; $i <= $pertemuan; $i++) {
        $table->addCell(1000, $styleCell)->addText("", $fontStyle);
    }
}

//Save File
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save($nama_file);
mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"INSERT INTO file 
        (nama_file,tanggal_upload,kategori,path)VALUES 
        ('$nama_file2','$tanggal_upload','Absensi','$path')");
header("location:../arsip.php");
?>