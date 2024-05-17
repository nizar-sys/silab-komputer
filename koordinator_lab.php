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
        <title>Koor. Laboratorium | Sistem Praktikum Jurusan Elektro</title>

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

        <section id="feature">
            <div class="center wow fadeInDown">
                <h2>
                    Koordinator Laboratorium 
                    <?php
                    if ($_GET['kategori'] == "PEMDAS") {
                        echo 'Pemrograman Dasar';
                    } else if ($_GET['kategori'] == "ORKOM") {
                        echo 'Organisasi & Arsitektur Komputer';
                    } else if ($_GET['kategori'] == "PBD") {
                        echo 'Pemrograman Basis Data';
                    } else if ($_GET['kategori'] == "PRC") {
                        echo 'Pemrograman Robot Cerdas';
                    } else if ($_GET['kategori'] == "JARKOM") {
                        echo 'Jaringan Komputer';
                    } else if ($_GET['kategori'] == "REKWEB") {
                        echo 'Rekayasa Web';
                    } else if ($_GET['kategori'] == "JST") {
                        echo 'Jaringan Syaraf Tiruan';
                    } else if ($_GET['kategori'] == "BASDAT") {
                        echo 'Basis Data';
                    } else if ($_GET['kategori'] == "PBO") {
                        echo 'Pemrograman Berorientasi Objek';
                    }
                    echo ' Periode ' . $_GET['periode'];
                    ?>
                </h2>
                <p class="lead">
                    Pusat informasi kegiatan  Sistem praktikum jurusan pendidikan Teknik Elektro ITENAS
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-sm-12 wow fadeInDown" data-wow-delay="300ms">
                        <div class="tab-wrap">
                            <div class="media">
                                <div class="parrent pull-left">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li class="active"><a href="#tab6" data-toggle="tab" class="analistic-01">Koordinator</a></li>
                                        <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Daftar Asisten</a></li>
                                        <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Daftar Praktikan</a></li>
                                        <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Nilai Harian Praktikan</a></li>
                                        <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Pendaftaran Asisten</a></li>
                                        <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Modul & Jobsheet</a></li>
                                    </ul>
                                </div>

                                <div class="parrent media-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active in" id="tab6">
                                            <div class="row contact-wrap">
                                                <div class="col-md-4 ">
                                                    <?php include './comp/koor_kelas2.php'; ?>
                                                </div>
                                                <div class="col-md-4  ">
                                                    <?php include './comp/koor_praktikum2.php'; ?>
                                                </div>
                                                <div class="col-md-4  ">
                                                    <?php include './comp/koor_lab.php'; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab1" align="center">
                                            <button type="button" class="btn btn-default" style="margin-bottom: 2%; float: left;" onclick="asisten_req()"><span class="glyphicon glyphicon-refresh"></span> Refresh
                                            </button>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#OpenRegisterModal" style="margin-bottom: 2%; float: right;" id="br" name="br"                                                    >
                                                <span class="glyphicon glyphicon-calendar"></span> Open Registration
                                            </button>
                                            <div id="regtext"><b>Pendaftaran Ditutup</b></div>
                                            <div id="req_asisten" align="center"></div>
                                        </div>

                                        <div class="tab-pane" id="tab2">
                                            <b>Presentase Nilai</b>
                                            <div id="presentase">
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="tabel5" width="100%">
                                                    <tr align="center">
                                                        <td>Nilai Harian</td>
                                                        <td>Nilai Absensi</td>
                                                        <td>Nilai UTS</td>
                                                        <td>Nilai UAS</td>
                                                        <td>Nilai Project</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="tabel2" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            NRP
                                                        </th>
                                                        <th>
                                                            Nama
                                                        </th>
                                                        <th>
                                                            Kelas
                                                        </th>
                                                        <th>
                                                            NH*
                                                        </th>
                                                        <th>
                                                            UTS
                                                        </th>
                                                        <th>
                                                            UAS
                                                        </th>
                                                        <th>
                                                            Project
                                                        </th>
                                                        <th>
                                                            Absen
                                                        </th>
                                                        <th>
                                                            Nilai
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include './query/tabel_praktikum3.php';
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            NRP
                                                        </th>
                                                        <th>
                                                            Nama
                                                        </th>
                                                        <th>
                                                            Kelas
                                                        </th>
                                                        <th>
                                                            NH*
                                                        </th>
                                                        <th>
                                                            UTS
                                                        </th>
                                                        <th>
                                                            UAS
                                                        </th>
                                                        <th>
                                                            Project
                                                        </th>
                                                        <th>
                                                            Absen
                                                        </th>
                                                        <th>
                                                            Nilai
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <p>(* NH = Nilai Harian)</p>
                                        </div>

                                        <div class="tab-pane" id="tab3">
                                            <div id="presentase2"></div>
                                            <hr>
                                            <div class="form-inline" align="center">
                                                <input type="text" class="form-control nrp" id="nrp" placeholder="NRP Peserta" style="width: 30%;">
                                                <input type="hidden" id="periode" value="<?php echo $_GET['periode'] ?>">
                                                <input type="hidden" id="praktikum" value="<?php echo $_GET['kategori'] ?>">
                                                <button type="button" class="btn btn-default" name="users" onclick="showNilai(nrp.value, periode.value, praktikum.value)">Lihat</button>
                                            </div>
                                            <br>
                                            <div id="mahasiswa"></div>
                                            <div id="live_data" align="center">
                                                <p>
                                                    <b>Masukkan NRP peserta untuk melihat detail nilai...</b> <br>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" style="width:80%;" id="tabel3">
                                                        <tr>
                                                            <th>Pertemuan</th>
                                                            <th>Tugas Pendahuluan</th>
                                                            <th>Tugas Harian</th>
                                                            <th>Tugas Akhir</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"> Data Tidak Ditemukan</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab4">
                                            <div id="data_koor" align="center"></div>
                                            <div id="data_asisten" align="center"></div>
                                        </div>

                                        <div class="tab-pane" id="tab5">
                                            <br>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="media services-wrap">
                                                    <div class="pull-left">
                                                        <img class="img-responsive" src="images/services/modul.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="media-heading">MODUL</h3>
                                                        <p>
                                                            <?php include './comp/modul.php'; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="media services-wrap">
                                                    <div class="pull-left">
                                                        <img class="img-responsive" src="images/services/jobsheet.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="media-heading">JOBSHEET</h3>
                                                        <p>
                                                            <?php include './comp/jobsheet.php'; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!--/.tab-content-->  
                                </div> <!--/.media-body--> 
                            </div> <!--/.media-->     
                        </div><!--/.tab-wrap-->               
                    </div><!--/.col-sm-6-->
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
        <script src="js/koordinator_lab.js"></script>
        <!--<script src="js/modal.js"></script>-->
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="OpenRegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form onsubmit="" name="myForm" class="form-horizontal row-fluid" method="post" action="">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Informasi Pendaftaran</h4>
                </div>
                <div class="modal-body">
                    <p>Persyaratan yang harus dipenuhi : </p>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="basicinput">CV</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" id="cv">
                                        <option value="N">Tidak</option>
                                        <option value="Y">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Transkrip Nilai</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" id="transkrip">
                                        <option value="N">Tidak</option>
                                        <option value="Y">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Foto</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" id="foto">
                                        <option value="N">Tidak</option>
                                        <option value="Y">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Catatan</label>
                                <div class="controls">
                                    <textarea class="form-control" rows="2" id="note" placeholder="Catatan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal" name="btn_register" id="btn_register" class="btn btn-primary">Proses</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="UploadModul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Modul Praktikum</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="process/upload_modul.php" onsubmit="infoInsert()" class="form-horizontal row-fluid" enctype="multipart/form-data">
                    <input type="hidden" name="praktikum" value="<?php echo $_GET['kategori']; ?>">
                    <input type="hidden" name="periode" value="<?php echo $_GET['periode']; ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">File Modul</label>
                        <div class="controls">
                            <input type="file" id="fileToUpload" class="" name="fileToUpload">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="UploadJobsheet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Jobsheet Praktikum</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="process/upload_jobsheet.php" onsubmit="infoInsert()" class="form-horizontal row-fluid" enctype="multipart/form-data">
                    <input type="hidden" name="praktikum" value="<?php echo $_GET['kategori']; ?>">
                    <input type="hidden" name="periode" value="<?php echo $_GET['periode']; ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Pilih File</label>
                        <div class="controls">
                            <input type="file" id="fileToUpload" class="span8" name="fileToUpload">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="KoorPrak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Koordinator Praktikum</h4>
            </div>
            <form method="post" action="process/koor_prak_tambah.php" onsubmit="infoInsert()" class="form-horizontal row-fluid">
                <div class="modal-body">
                    <input type="hidden" name="praktikum" value="<?php echo $_GET['kategori']; ?>">
                    <input type="hidden" name="periode" value="<?php echo $_GET['periode']; ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Masukkan Kode Dosen</label>
                        <div class="controls">
                            <input type="text" id="kode" class="form-control" name="kode">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>