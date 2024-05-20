<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Single | Corlate</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else if ($_SESSION['kategori'] == "mahasiswa") {
                include './comp/navbar2.php';
            } else if ($_SESSION['kategori'] == "dosen") {
                include './comp/navbar3.php';
            }
            ?>
        </header><!--/header-->

        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Peminjaman Alat Penelitian</h2>
                <p class="lead">
                    Detail Peminjaman Alat Inventaris Untuk Penelitian Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro 
                </p>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                    <div class="form-group center">
                        <?php
                        include "koneksi.php";
                        $edit = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM requestpenelitian WHERE kode_pinjam ='$_GET[kode_pinjam]'");
                        $r = mysqli_fetch_array($edit);

                        $hasil = (string) strlen($r['id_peminjam']);
                        $nm = '';
                        $stat = '';
                        if ($hasil > 5) {
                            $nama = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select * from mahasiswa where id=$r[id_peminjam]");
                            $n = mysqli_fetch_array($nama);
                            $nm = $n['nama'];
                            $stat = 'Mahasiswa';
                        } else {
                            $nama = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select nama from dosen where nid=$r[id_peminjam]");
                            $n = mysqli_fetch_array($nama);
                            $nm = $n['nama'];
                            $stat = 'Dosen';
                        }

                        echo "
                                    <form class='form-horizontal' role='form' name=frm action='info_peminjaman_penelitian.php' method='post'>
                                        <div class=control-group>
                                            <label class='col-sm-2 control-label' for=basicinput>Kode Pinjam</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder=$r[kode_pinjam] class='form-control' disabled>
                                                
                                            </div> </br>
                                            <label class='col-sm-2 control-label' for=basicinput>Id Peminjam</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder=$r[id_peminjam] class='form-control' disabled>
                                                
                                            </div> </br>
                                            <label class='col-sm-2 control-label' for=basicinput>Nama Peminjam</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$nm' class='form-control' disabled>
                                            </div> </br>
                                            <label class='col-sm-2 control-label' for=basicinput>Tipe Peminjaman</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder=Penelitian class='form-control' disabled>
                                                
                                            </div>
                                        </div>
                                        </br></br>
                                        
                                        <div class=control-group>
                                            <label class='col-sm-2 control-label' for=basicinput>Nama Alat </label><label class='col-sm-2 control-label' for=basicinput></label></br></br>
                                            ";
                        $a1 = $r['alat1'];
                        $a2 = $r['alat2'];
                        $a3 = $r['alat3'];
                        $a4 = $r['alat4'];
                        $a5 = $r['alat5'];
                        $a6 = $r['alat6'];
                        $a7 = $r['alat7'];
                        $a8 = $r['alat8'];
                        $a9 = $r['alat9'];
                        $a10 = $r['alat10'];


                        if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null) and ( $a8 <> null) and ( $a9 <> null) and ( $a10 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a5' name=txt5 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-6</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a6' name=txt6 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-7</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a7' name=txt7 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-8</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a8' name=txt8 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-9</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a9' name=txt9 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-10</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a10' name=txt10 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null) and ( $a8 <> null) and ( $a9 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a5' name=txt5 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-6</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a6' name=txt6 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-7</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a7' name=txt7 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-8</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a8' name=txt8 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-9</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a9' name=txt9 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null) and ( $a8 <> null)) {
                            echo"
                                             <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a5' name=txt5 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-6</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a6' name=txt6 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-7</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a7' name=txt7 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-8</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a8' name=txt8 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null) and ( $a7 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a5' name=txt5 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-6</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a6' name=txt6 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-7</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a7' name=txt7 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null) and ( $a6 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a5' name=txt5 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-6</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a6' name=txt6 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null) and ( $a5 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a5' name=txt5 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null) and ( $a4 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a4' name=txt4 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null) and ( $a3 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a3' name=txt3 class='form-control' disabled required>
                                                
                                                
                                            
                                            </div></br>
                                            ";
                        } else if (($a1 <> null) and ( $a2 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a2' name=txt2 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        } else if (($a1 <> null)) {
                            echo"
                                            <label class='col-sm-2 control-label' for=basicinput>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder='$a1' name=txt1 class='form-control' disabled required>
                                                
                                                
                                            </div></br>
                                            ";
                        }

                        echo"
                                    </div>
                                    </br>	
                                    <div class=control-group>
                                        <div class=controls>
                                            <button type=submit class='btn btn-danger pull-right'>Kembali</button>
                                        </div>
                                    </div>
                                    </form> ";
                        ?>
                    </div><!--/.content-->
                </div>
            </div>
        </section>  <!--/gmap_area -->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-1.12.3.js"></script>
        <script src="datatable/media/js/jquery.dataTables.min.js"></script>
        <script src="datatable/media/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable();
            });
        </script>
    </body>
</html>