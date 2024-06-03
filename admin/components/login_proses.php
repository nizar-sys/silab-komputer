<?php

include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$digit = strlen($username);

if ($digit == 4) { //cek digit untuk dosen
    $query = "select * from dosen WHERE nid = '$username' AND sandi = '$password'";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
    if ($row['nid'] == $username AND $row['sandi'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        $_SESSION['kode'] = $row['nid'];
        $_SESSION['kategori'] = "dosen";
        header("location:../index.php");
    } else {
        echo "<script>window.history.back(-1);"
        . "alert('Maaf ID atau Kata sandi salah !');"
        . "</script>";
    }
} else if ($digit == 9) { //cek digit mahasiswa
    $query = "select * from mahasiswa WHERE id = '$username' AND pin = '$password'";
    $query2 = "select * from praktikan WHERE nrp = '$username'";
    $hasil2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query2);
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
    $row2 = mysqli_fetch_array($hasil2);
    if ($row['id'] == $username AND $row['pin'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        $_SESSION['kode'] = $row['id'];
        $_SESSION['kategori'] = "mahasiswa";
        if(!empty($row2)) {
            $_SESSION['praktikan'] = "true";
        }else{
            $_SESSION['praktikan'] = "false";
        }
        header("location:../index.php");
    } else {
        echo "<script>window.history.back(-1);"
        . "alert('Maaf ID atau Kata sandi salah !');"
        . "</script>";
    }
} else { //selain 4 dan 9 == admin
    session_start();
    $_SESSION['username'] = "Admin";
    $_SESSION['kategori'] = "admin";
    $_SESSION['isAdmin'] = true;
    header("location:../index.php");
}
?>