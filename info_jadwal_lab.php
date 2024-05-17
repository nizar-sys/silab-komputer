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
        <title>Jadwal Lab | Sistem Praktikum Jurusan Elektro</title>

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
                <h2>Jadwal Penggunaan Lab</h2>
                <p class="lead">
                    Rangkaian kegiatan yang dilakukan di Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro ITENAS
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Ruang 2401</a></li>
                            <li><a data-toggle="tab" href="#menu1">Ruang 2402</a></li>
                            <li><a data-toggle="tab" href="#menu2">Ruang 2403</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <?php include './comp/tab_jadwal_lab1.php'; ?>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <?php include './comp/tab_jadwal_lab2.php'; ?>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <?php include './comp/tab_jadwal_lab3.php'; ?>
                            </div>
                        </div>
                    </div>
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
                $('#tabel1').DataTable();
                $('#tabel2').DataTable();
                $('#tabel3').DataTable();
            });
        </script>
    </body>
</html>