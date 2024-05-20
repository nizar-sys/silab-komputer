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
        <title>Monitoring | Sistem Praktikum Jurusan Elektro</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
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
        <section id="portfolio">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Monitoring</h2>
                    <p class="lead">
                        Menampilkan secara langsung keadaan ruangan Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro 
                    </p>
                </div>

                <div class="row">
                    <div class="portfolio-items">
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
                                        <a class="preview" href="http://192.168.43.1:8080/video" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                                    </div> 
                                </div>
                            </div>
                        </div><!--/.portfolio-item-->

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
                                        <a class="preview" href="images/lab/lab_multimedia.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
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
                                        <a class="preview" href="images/lab/lab_jarkom.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
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
                                            - Pemrograman Basis Data <br>
                                            - Pemrograman Berorientasi Objek
                                        </p>
                                        <a class="preview" href="images/lab/lab_daskom.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                                    </div> 
                                </div>
                            </div>           
                        </div><!--/.portfolio-item-->
                    </div>
                </div>
            </div>
        </section><!--/#portfolio-item-->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>

    </body>
</html>
