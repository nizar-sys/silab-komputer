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
    <title>Beranda | Sistem Praktikum Jurusan Elektro</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <link rel="shortcut icon" href="images/ico/icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script type="text/javascript">
        function validasi_login(formlogin) {
            var user = document.formlogin.username2.value;
            var pass = document.formlogin.password2.value;

            if ((user === "") || (pass === "")) {
                $(document).ready(function() {
                    alert('ID atau Kata Sandi masih kosong !');
                    formlogin.username2.focus();
                });
                return (false);
            }
            return (true);
        }
    </script>
</head><!--/head-->

<body class="homepage">
    <?php
    include "koneksi.php";
    //        menampilkan pesan jika ada pesan
    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
        echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
    }
    //        mengatur session pesan menjadi kosong
    $_SESSION['pesan'] = '';
    ?>
    <header id="header">
        <?php
        $navbar = './comp/navbar1.php';

        if (isset($_SESSION['kategori']) && !empty($_SESSION['kategori'])) {
            switch ($_SESSION['kategori']) {
                case "mahasiswa":
                    $navbar = './comp/navbar2.php';
                    break;
                case "dosen":
                    $navbar = './comp/navbar3.php';
                    break;
                default:
                    $navbar = './comp/navbar1.php';
                    break;
            }
        }

        include $navbar;
        ?>
    </header><!--header-->

    <section id="main-slider" class="no-margin">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"> Sistem praktikum jurusan pendidikan Teknik Elektro</h1>
                                    <h2 class="animation animated-item-2">Dapatkan informasi mengenai kegiatan praktikum yang diselenggarakan Program Studi Sistem praktikum jurusan pendidikan Teknik Elektro</h2>
                                    <a class="btn-slide animation animated-item-3" href="praktikum.php">Menuju Halaman</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Monitoring Laboratoum Sistem praktikum jurusan pendidikan Teknik Elektro</h1>
                                    <h2 class="animation animated-item-2">Lihat keadaan Laboratorium secara langsung melalui video streaming</h2>
                                    <a class="btn-slide animation animated-item-3" href="monitoring.php">Menuju Halaman</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Absensi </h1>
                                    <h2 class="animation animated-item-2">Cek kehadiran praktikum yang sedang atau yang telah dilaksanakan</h2>
                                    <a class="btn-slide animation animated-item-3" href="absensi.php">Menuju Halaman</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Fitur</h2>
                <p class="lead">Berikut beberapa fitur yang dapat diakses melalui website Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro ITENAS</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Info Praktikum</h2>
                            <h3>Informasi mengenai peserta praktikum,absensi, nilai, dll.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Topik TA</h2>
                            <h3>Informasi judul TA yang dapat dijadikan referensi</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Arsip & Dokumentasi</h2>
                            <h3>Download file yang berkaitan dengan laboratorium dan praktikum</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Inventaris</h2>
                            <h3>Melihat data invertaris laboratorium</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Peminjaman Alat</h2>
                            <h3>Melakukan request peminjaman peralatan laboratorium</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Dan Lain-lain</h2>
                            <h3>Masih ada fitur lain yang dapat diakses</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->

    <?php if (!isset($_SESSION['username'])) : ?>
        <section id="login-page">
            <div class="container">
                <div class="center wow fadeInDown align-items-center">
                    <h2>Login</h2>
                    <p class="lead">
                        Silakan login terlebih dahulu untuk mengakses fitur-fitur yang ada
                    </p>
                </div>

                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <a href="#" data-toggle="modal" data-target="#LoginModal">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" width="80" src="./images/login-mahasiswa.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">Mahasiswa</h3>
                                    <p>Login <br> Mahasiswa</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <a href="./admin/">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services2.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">Admin</h3>
                                    <p>Login <br> Admin</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="./admin/">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" width="80" src="images/login-dosen.jpg">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">Dosen</h3>
                                    <p>Login <br> Dosen</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <a href="./admin/">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" width="80" src="images/login-aslab.jpg">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">Aslab</h3>
                                    <p>Login Asisten <br> Laboratorium</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!--/.container-->
        </section>
    <?php endif; ?>

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Monitoring</h2>
                <p class="lead">
                    Menampilkan secara langsung keadaan ruangan Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro ITENAS
                </p>
            </div>

            <div class="row">
                <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap wow fadeInDown" data-wow-delay="300ms">
                        <img class="img-responsive" src="images/lab/lab_daskom.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Lab DasKom</a></h3>
                                <p>
                                    Praktikum : <br>
                                    - Pemrograman Dasar <br>
                                    - Organisasi & Arsitektur Komputer
                                </p>
                                <a class="preview" href="http://10.243.114.103:8080/video" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap wow fadeInDown" data-wow-delay="600ms">
                        <img class="img-responsive" src="images/lab/lab_multimedia.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Lab Multimedia</a></h3>
                                <p>
                                    Praktikum : <br>
                                    - Pemrograman Robot Cerdas <br>
                                    - Jaringan Syaraf Tiruan
                                </p>
                                <a class="preview" href="images/lab/lab_jarkom.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap wow fadeInDown" data-wow-delay="900ms">
                        <img class="img-responsive" src="images/lab/lab_jarkom.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Lab JarKom</a></h3>
                                <p>
                                    Praktikum : <br>
                                    - Jaringan Komputer <br>
                                    - Rekayasa Web
                                </p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap wow fadeInDown" data-wow-delay="1200ms">
                        <img class="img-responsive" src="images/lab/lab_daskom.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Lab BasDat</a></h3>
                                <p>
                                    Praktikum : <br>
                                    - Basis Data <br>
                                    - Pemrograman Basis Data <br>
                                    - Pemrograman Berorientasi Objek
                                </p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Praktikum</h2>
                <p class="lead">Informasi kegiatan Sistem praktikum jurusan pendidikan Teknik Elektro ITENAS</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('PEMDAS')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services1.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">PEMDAS</h3>
                                <p>Pemrograman <br> Dasar</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('ORKOM')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services2.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">ORKOM</h3>
                                <p>Organisasi & Arsitektur Komputer</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('PRC')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services3.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">PRC</h3>
                                <p>Pemrograman <br> Robot Cerdas</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('JARKOM')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services4.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">JARKOM</h3>
                                <p>Jaringan <br> Komuputer</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('REKWEB')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services5.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">REKWEB</h3>
                                <p>Rekayasa <br> Web</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('JST')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services6.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">JST</h3>
                                <p>Jaringan Syaraf <br> Tiruan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('BASDAT')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services7.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">BASDAT</h3>
                                <p>Basis <br> Data</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('PBD')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services8.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">PBD</h3>
                                <p>Pemrograman <br> Basis Data</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#LabModal" onclick="ChangeLab('PBO')">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
                                <img class="img-responsive" src="images/services/services9.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">PBO</h3>
                                <p>Pemrograman <br> Berorientasi Objek</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <footer id="footer" class="midnight-blue">
        <?php include './comp/footer.php'; ?>
        <input type="hidden" id="user" value="<?php if (!isset($_SESSION['username'])) {
                                                    echo "Empty";
                                                } ?>">
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="admin/scripts/jquery.min.js"></script>
    <script type="text/javascript">
        function ValidateUser() {
            var user = document.getElementById("user").value;
            if (user === "Empty") {
                alert("Silakan Login Terlebih Dahulu");
                return false;
            } else {
                return true;
            }
        }

        function ChangeLab(lab) {
            var link1 = "lab_praktikum.php?kategori=" + lab + "&&periode=2016/2017";
            var link2 = "lab_praktikum.php?kategori=" + lab + "&&periode=2017/2018";
            var link3 = "lab_praktikum.php?kategori=" + lab + "&&periode=2018/2019";
            var link4 = "lab_praktikum.php?kategori=" + lab + "&&periode=2019/2020";
            document.getElementById("id1").href = link1;
            document.getElementById("id2").href = link2;
            document.getElementById("id3").href = link3;
            document.getElementById("id4").href = link4;
        }
    </script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="LabModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <h4 align="center">Memasuki Halaman Laboratorium Praktikum</h4>
            <p align="center"><br>Periode berapa yang ingin anda akses ?<br></p>
            <!-- Single button -->
            <br>
            <div align="center">
                <div class="btn-group" align="center">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Pilih Periode<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" style="width: 50%;">
                        <li><a id="id1" href="#" onclick="return ValidateUser();">2016/2017</a></li>
                        <li><a id="id2" href="#" onclick="return ValidateUser();">2017/2018</a></li>
                        <li><a id="id3" href="#" onclick="return ValidateUser();">2018/2019</a></li>
                        <li><a id="id4" href="#" onclick="return ValidateUser();">2019/2020</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->