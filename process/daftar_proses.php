<?php

$id = $_POST['kode'];
$Lid = strlen($id);
$sandi = $_POST['sandi'];
$pass = $sandi;

if ($Lid == 4) {    // Untuk Dosen

    $target_dir = "../images/dosen/";
    $fileName = time() . basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fileName;
    $nama_file = "images/dosen/$fileName";
    $uploadOk = 1;

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), "INSERT INTO dosen (nid,sandi,nama,jk,tgl_lahir,no_telp,alamat,foto) VALUES($id,$pass,'$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]','$nama_file')");
            echo "
            <script>
                    alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
                    window.location.href='../index.php';
            </script>";
        } else {
            echo "
            <script>
                    alert('NRP telah terdaptar. Silakan minta password ke teknisi jika lupa...!');
                    window.location.href='../index.php';
            </script>";
        }
    }
} else 
if ($Lid == 9) {     // Untuk Mahasiswa

    $target_dir = "../images/mahasiswa/";
    $fileName = time() . basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fileName;
    $nama_file = "images/mahasiswa/$fileName";
    $uploadOk = 1;

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), "INSERT INTO mahasiswa (id,pin,nama,jk,tgl_lahir,no_telp,alamat,foto) VALUES($id,$pass,'$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]','$nama_file')");
            echo "
            <script>
                    alert('Terima kasih telah mendaftar. Silakan melakukan login!');
                    window.location.href='../index.php';
            </script>";
        } else {
            echo "
            <script>
                    alert('NRP telah terdaftar. Silakan minta password ke teknisi jika lupa...!');
                    window.location.href='../index.php';
            </script>";
        }
    }
}
