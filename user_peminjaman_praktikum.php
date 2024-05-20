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
        <title>Peminjaman Praktikum | Sistem Praktikum Jurusan Elektro</title>

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
        <link rel="shortcut icon" href="images/ico/icon.png">
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
                <h2>Peminjaman Alat Praktikum</h2>
                <p class="lead">
                    Peminjaman Alat Inventaris Untuk  Sistem praktikum jurusan pendidikan Teknik Elektro 
                </p>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                    <div class="form-group center">
                        <?php
                        include "koneksi.php";
                        $Date1 = date("dmY");
                        $Date = ('PR' . $Date1);

                        $Code = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select * from requestpraktikum order by tanggal_request desc limit 1");
                        $r = mysqli_fetch_array($Code);
                        $Kode = substr($r['kode_pinjam'], 2, 8);

                        $Kode1 = substr($r['kode_pinjam'], 10, 3);
                        $hasil = '';


                        if ($Kode == '') {
                            $int = (int) $Kode1;
                            if ($int >= 99) {
                                $angka = $int + 1;
                                $print = ($Date . $angka);
                                $hasil = $print;
                            } else if ($int <= 99 && $int >= 9) {
                                $angka = $int + 1;
                                $print = ($Date . '0' . $angka);
                                $hasil = $print;
                            } else if ($int < 9) {
                                $angka = $int + 1;
                                $print = ($Date . '00' . $angka);
                                $hasil = $print;
                            }
                        } else if ($Kode == $Date1) {
                            $int = (int) $Kode1;
                            if ($int >= 99) {
                                $angka = $int + 1;
                                $print = ($Date . $angka);
                                $hasil = $print;
                            } else if ($int <= 99 && $int >= 9) {
                                $angka = $int + 1;
                                $print = ($Date . '0' . $angka);
                                $hasil = $print;
                            } else if ($int < 9) {
                                $angka = $int + 1;
                                $print = ($Date . '00' . $angka);
                                $hasil = $print;
                            }
                        } else if ($Kode <> $Date1) {
                            $int = 0;
                            if ($int >= 99) {
                                $angka = $int + 1;
                                $print = ($Date . $angka);
                                $hasil = $print;
                            } else if ($int <= 99 && $int >= 9) {
                                $angka = $int + 1;
                                $print = ($Date . '0' . $angka);
                                $hasil = $print;
                            } else if ($int < 9) {
                                $angka = $int + 1;
                                $print = ($Date . '00' . $angka);
                                $hasil = $print;
                            }
                        }
                        $periode = $_GET['periode'];
                        $per_temp = explode("/", $periode);
                        $p1 = $per_temp[0];
                        $p2 = $per_temp[1];
                        
                        echo"
                                <div class=module-body>
                                <form class='form-horizontal' role='form' name=frm action='admin/query/userPraktikum.php' method='post'>
                                    <div class=control-group>
                                        <div class=form-group>
                                            <label for='basicinput' class='col-sm-2 control-label'>ID Peminjaman</label>
                                            <div class='col-sm-10 input-group'>
                                                <input type=text id=basicinput placeholder=$hasil class='form-control' disabled>
                                                <input type=hidden id=basicinput value=$hasil class=span5 name='kode_pinjam'>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='basicinput' class='col-sm-2 control-label'>Tipe Peminjaman</label>
                                            <div class='col-sm-10 input-group'>
                                              <input type=text id=basicinput placeholder='Praktikum' class='form-control' disabled>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='basicinput' class='col-sm-2 control-label'>Praktikum</label>
                                            <div class='col-sm-10 input-group'>
                                              <select tabindex=1 class='form-control' name='nama_praktikum'>
                                                    <option value='$_GET[praktikum]'>$_GET[praktikum]</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label for='basicinput' class='col-sm-2 control-label'>Periode Ajaran</label>
                                            <div class='col-sm-10 input-group'>
                                                <span class='input-group-addon'>Tahun</span>
                                                <input type='text' class='form-control' maxlength='4' name='th1' required value='$p1' readonly>
                                                <span class='input-group-addon'>/</span>
                                                <span class='input-group-addon'>Tahun</span>
                                                <input type='text' class='form-control' maxlength='4' name='th2' required value='$p2' readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=control-group>
                                        <div class=form-group>
                                            <label class='col-sm-2 control-label' for=basicinput>Nama Alat </label><label class='col-sm-5 control-label' for=basicinput><span>*Minimal diisikan satu dan mengisikannya secara berurut</span></label>
                                            </br></br>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-1</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat1 placeholder='Masukkan Nama Alat' name=txt1 onChange='cekTxt1();' class='form-control' required> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat1Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-2</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat2 placeholder='Masukkan Nama Alat' name=txt2 onChange='cekTxt2();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat2Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-3</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat3 placeholder='Masukkan Nama Alat' name=txt3 onChange='cekTxt3();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat3Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-4</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat4 placeholder='Masukkan Nama Alat' name=txt4 onChange='cekTxt4();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat4Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-5</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat5 placeholder='Masukkan Nama Alat' name=txt5 onChange='cekTxt5();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat5Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-6</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat6 placeholder='Masukkan Nama Alat' name=txt6 onChange='cekTxt6();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat6Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-7</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat7 placeholder='Masukkan Nama Alat' name=txt7 onChange='cekTxt7();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat7Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-8</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat8 placeholder='Masukkan Nama Alat' name=txt8 onChange='cekTxt8();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat8Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-9</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat9 placeholder='Masukkan Nama Alat' name=txt9 onChange='cekTxt9();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat9Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                            <label for='basicinput' class='col-sm-2 control-label'>Alat Ke-10</label>
                                            <div class='col-sm-10 input-group'>
                                               <input type=text id=hasilAlat10 placeholder='Masukkan Nama Alat' name=txt10 onChange='cekTxt10();' class='form-control' disabled=true> 
                                               <a href=# class='input-group-addon btn-danger' data-toggle='modal' data-target='#Alat10Modal' data-keyboard='false' data-backdrop='static'><span>Pilih</span></a>
                                            </div>
                                        </div>	
                                    </div>
                                    </br></br>
                                    <div class=control-group>
                                        <div class=controls>
                                            <button type=submit class='btn btn-danger pull-right'>Pinjam</button>
                                        </div>
                                    </div>
                                </form>
                            </div> ";
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
        <script>
            function cekTxt1()
            {
                p1 = document.frm.txt1.value;

                if (p1 != '')
                {
                    document.frm.txt2.disabled = false;
                }
                else {
                    document.frm.txt2.disabled = true;
                    document.frm.txt3.disabled = true;
                    document.frm.txt4.disabled = true;
                    document.frm.txt5.disabled = true;
                    document.frm.txt6.disabled = true;
                    document.frm.txt7.disabled = true;
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt2()
            {
                p2 = document.frm.txt2.value;

                if (p2 != '')
                {
                    document.frm.txt3.disabled = false;
                }
                else {
                    document.frm.txt3.disabled = true;
                    document.frm.txt4.disabled = true;
                    document.frm.txt5.disabled = true;
                    document.frm.txt6.disabled = true;
                    document.frm.txt7.disabled = true;
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt3()
            {
                p3 = document.frm.txt3.value;

                if (p3 != '')
                {
                    document.frm.txt4.disabled = false;
                }
                else {
                    document.frm.txt4.disabled = true;
                    document.frm.txt5.disabled = true;
                    document.frm.txt6.disabled = true;
                    document.frm.txt7.disabled = true;
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt4()
            {
                p4 = document.frm.txt4.value;

                if (p4 != '')
                {
                    document.frm.txt5.disabled = false;
                }
                else {
                    document.frm.txt5.disabled = true;
                    document.frm.txt6.disabled = true;
                    document.frm.txt7.disabled = true;
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt5()
            {
                p5 = document.frm.txt5.value;

                if (p5 != '')
                {
                    document.frm.txt6.disabled = false;
                }
                else {
                    document.frm.txt6.disabled = true;
                    document.frm.txt7.disabled = true;
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt6()
            {
                p6 = document.frm.txt6.value;

                if (p6 != '')
                {
                    document.frm.txt7.disabled = false;
                }
                else {
                    document.frm.txt7.disabled = true;
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt7()
            {
                p7 = document.frm.txt7.value;

                if (p7 != '')
                {
                    document.frm.txt8.disabled = false;
                }
                else {
                    document.frm.txt8.disabled = true;
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt8()
            {
                p8 = document.frm.txt8.value;

                if (p8 != '')
                {
                    document.frm.txt9.disabled = false;
                }
                else {
                    document.frm.txt9.disabled = true;
                    document.frm.txt10.disabled = true;
                }
            }
            function cekTxt9()
            {
                p9 = document.frm.txt9.value;

                if (p9 != '')
                {
                    document.frm.txt10.disabled = false;
                }
                else {
                    document.frm.txt10.disabled = true;
                }
            }
        </script>
        <script src="admin/scripts/jquery.min.js"></script>
    </body>

    <!--- Modal Alat1 ---->
    <div class="modal fade" id="Alat1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat1.php'; ?>
    </div>
    <!--- Modal Alat2 ---->
    <div class="modal fade" id="Alat2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat2.php'; ?>
    </div>
    <!--- Modal Alat3 ---->
    <div class="modal fade" id="Alat3Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat3.php'; ?>
    </div>
    <!--- Modal Alat4 ---->
    <div class="modal fade" id="Alat4Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat4.php'; ?>
    </div>
    <!--- Modal Alat5 ---->
    <div class="modal fade" id="Alat5Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat5.php'; ?>
    </div>
    <!--- Modal Alat6 ---->
    <div class="modal fade" id="Alat6Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat6.php'; ?>
    </div>
    <!--- Modal Alat7 ---->
    <div class="modal fade" id="Alat7Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat7.php'; ?>
    </div>
    <!--- Modal Alat8 ---->
    <div class="modal fade" id="Alat8Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat8.php'; ?>
    </div>
    <!--- Modal Alat9 ---->
    <div class="modal fade" id="Alat9Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat9.php'; ?>
    </div>
    <!--- Modal Alat10 ---->
    <div class="modal fade" id="Alat10Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include './modalAlat/MasukanAlat10.php'; ?>
    </div>

</html>