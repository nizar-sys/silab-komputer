<?php
include "../koneksi/koneksi.php";
 session_start();
 
  // Simpan ke Database
  $Date = date("Y-m-d");
  $Time = gmdate("H:i:s",time()+60*60*7);
  
  $sql = "insert into req_perbaikan(kode_barang,info_perbaikan,tgl_perbaikan) values ('$_POST[serial_num]','$_POST[info_kerusakan]','$Date $Time')";
  
  mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$sql);

  /*echo"<script>alert('Produk Berhasil disimpan!');history.go(-1);</script>";*/
   
    $_SESSION['pesan'] = 'Permintaan Perbaikan Berhasil Dikirim!';
    /*echo '<script>window.location="homeweb_user.php"</script>';*/
 
  header('location:../PermintaanPerbaikan.php');
?>