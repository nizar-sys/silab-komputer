<?php

include "../koneksi.php";
$username = $_POST['username2'];
$password = $_POST['password2'];
$digit = strlen($username);

if ($digit == 4) { //cek digit untuk dosen
    $query = "select * from dosen WHERE nid = '$username' AND sandi = '$password'";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), $query);
    $row = mysqli_fetch_array($hasil);
    if ($row['nid'] == $username and $row['sandi'] == $password) {
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
    //$query2 = "select * from praktikan WHERE nrp = '$username'";
    //$hasil2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), $query2);
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'), $query);
    $row = mysqli_fetch_array($hasil);
    //$row2 = mysqli_fetch_array($hasil2);
    if ($row['id'] == $username and $row['pin'] == $password) {
        session_start();
        $_SESSION['username'] = $row['nama'];
        $_SESSION['kode'] = $row['id'];
        $_SESSION['praktikan'] = $row['praktikan'];
        $_SESSION['kategori'] = "mahasiswa";
        header("location:../index.php");
    } else {
        echo "<script>window.history.back(-1);"
            . "alert('Maaf ID atau Kata sandi salah !');"
            . "</script>";
    }
} else if ($username == "admin" && $password == "admin") {
    session_start();
    $_SESSION['username'] = "Admin";
    $_SESSION['kategori'] = "admin";
    header("location:../admin/index.php");
} else {
    header("location:../index.php");
    echo "<script>window.history.back(-1);"
        . "alert('Maaf ID atau Kata sandi tidak terdaftar !');"
        . "</script>";
}
