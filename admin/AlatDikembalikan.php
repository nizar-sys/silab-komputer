<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Praktikum Jurusan Elektro</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        include "koneksi/koneksi.php";
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <?php
                if (empty($_SESSION['username'])) {
                    include './components/navbar1.php';
                } else {
                    include './components/navbar2.php';
                }
                ?>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php
                        if (empty($_SESSION['kategori'])) { //kategori kosong = guest
                            include './components/sidebar1.php';
                        } else if ($_SESSION['kategori'] == "admin") { //jika admin yang masuk
                            include './components/sidebar4.php';
                        } else if ($_SESSION['kategori'] == "dosen") { //jika dosen yang masuk
                            include './components/sidebar2.php';
                        } else if ($_SESSION['kategori'] == "mahasiswa") { //jika mahasiswa yang masuk
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>Pengembalian Alat</h3>
                                </div>
                                <div class="module-body">
                                    <?php
                                    include "koneksi/koneksi.php";
                                    $edit = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM peminjaman WHERE id_peminjaman ='$_GET[kode_pinjam]' and kode_barang ='$_GET[kode_barang]'");
                                    $r = mysqli_fetch_array($edit);

                                    $hasil = (string) strlen($r['kode_peminjam']);
                                    $nm = '';
                                    $stat = '';
                                    if ($hasil > 5) {
                                        $nama = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select * from mahasiswa where id=$r[kode_peminjam]");
                                        $n = mysqli_fetch_array($nama);
                                        $nm = $n['nama'];
                                        $stat = 'Mahasiswa';
                                    } else {
                                        $nama = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select nama from dosen where nid=$r[kode_peminjam]");
                                        $n = mysqli_fetch_array($nama);
                                        $nm = $n['nama'];
                                        $stat = 'Dosen';
                                    }

                                    echo "
                                    <form class=form-horizontal row-fluid action=query/kembalikanAlat.php method=post>
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Kode Pinjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[id_peminjaman] class=span2 disabled>
                                                <input type=hidden name=inputKode_pinjam value=$r[id_peminjaman] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Id Peminjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[kode_peminjam] class=span2 disabled>
                                                <input type=hidden name=inputId_peminjam value=$r[kode_peminjam] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Nama Peminjam</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$nm class=span2 disabled>
                                            </div> </br>
                                            <label class=control-label for=basicinput>Tipe Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[type_peminjaman] class=span2 disabled>
                                                <input type=hidden name=inputTipe_pinjam value=$r[type_peminjaman] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Tanggal Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[tgl_pinjam] class=span2 disabled>
                                                <input type=hidden name=inputTanggal_pinjam value=$r[tgl_pinjam] class=span2 >
                                            </div> </br>
                                            <label class=control-label for=basicinput>Serial Number</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$r[kode_barang] class=span2 disabled>
                                                <input type=hidden name=inputKode_barang value=$r[kode_barang] class=span2 >
                                            </div>
                                        </div>
                                        
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Kondisi Kembali</label>
                                            <div class=controls>
                                                <select class=span2 name=kondisi required>
                                                    <option value='' selected>-- Pilih --</option>								 						   	   
                                                    <option value=Baik>Baik</option>								 						   	   
                                                    <option value=Buruk>Buruk</option>
                                                </select> 
                                            </div>
                                        </div>
                                        </br>	
                                        <div class=control-group>
                                            <div class=controls>
                                                <button type=submit class=btn-warning>Kembalikan</button>
                                            </div>
                                        </div>
                                    </form> ";
                                    ?>
                                </div>
                            </div><!--/.module-->

                            <br />

                        </div><!--/.content-->
                    </div><!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
        <script src="scripts/jquery.min.js"></script>
    </body>
</html>