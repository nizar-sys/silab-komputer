<?php
session_start();
include './koneksi.php';
$kategori = $_GET['kategori'];
$periode = $_GET['periode'];
$nrp = $_SESSION['kode'];
$sql = "SELECT * from koordinator where praktikum='$kategori' AND periode='$periode' AND kode=$nrp";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$sql);
//------------------------------------------------------------------------------- update nilai absensi
$per_temp = explode("/", $periode);
$p1 = substr($per_temp[0], 2, 2);
$p2 = substr($per_temp[1], 2, 2);
$newperiode = $p1 . $p2;
//cek jumlah pertemuan
$query = "SELECT pertemuan_berlangsung FROM presentase_nilai WHERE praktikum='$kategori' AND periode='$periode'";
$hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
$row = mysqli_fetch_array($hasil);
$jml_pertemuan = $row['pertemuan_berlangsung'];

$q = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT DISTINCT nrp,nama,count(nrp)as jml FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND nama_praktikum='$kategori' AND periode='$newperiode' GROUP BY nrp");
while ($r = mysqli_fetch_array($q)) {
    $persen = ($r['jml'] * 100) / $jml_pertemuan;
    mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"UPDATE praktikum SET absen=$persen WHERE prak='$kategori' AND periode='$periode' AND nrp=$r[nrp]");
}
//-------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Asisten Lab | Sistem Praktikum Jurusan Elektro</title>

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
                    Asisten Laboratorium 
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
                                        <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Request Praktikan</a></li>
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            echo '
                                            <li class=""><a href="#tab5" data-toggle="tab" class="analistic-01">Daftar Asisten</a></li>';
                                        }
                                        ?>
                                        <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Daftar Nilai Praktikan</a></li>
                                        <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Nilai Harian</a></li>
                                        <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Modul & Jobsheet</a></li>
                                    </ul>
                                </div>

                                <div class="parrent media-body">
                                    <div class="tab-content">
                                        
                                        <div class="tab-pane  active in" id="tab1">
                                            <button type="button" class="btn btn-default" style="margin-bottom: 2%; float: left;" onclick="praktikan_req()"
                                                    ><span class="glyphicon glyphicon-refresh"></span> Refresh
                                            </button>
                                            <div id="req_praktikan" align="center"></div>
                                        </div>

                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            echo '
                                            <div class="tab-pane" id="tab5">
                                                <div id="data_asisten" align="center"></div>
                                            </div>';
                                        }
                                        ?>

                                        <div class="tab-pane" id="tab2">
                                            <b>Presentase Nilai</b>
                                            <div id="presentase">
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="tabel5" width="100%">
                                                    <tr align="center">
                                                        <td>Nilai Harian (%)</td>
                                                        <td>Nilai Absensi (%)</td>
                                                        <td>Nilai UTS (%)</td>
                                                        <td>Nilai UAS (%)</td>
                                                        <td>Nilai Project (%)</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <hr>
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
                                                    include './query/tabel_praktikum2.php';
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
        <script src="js/asisten.js"></script>
    </body>
</html