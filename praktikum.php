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
        <title>Praktikum | Sistem Praktikum Jurusan Elektro</title>

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
    </head><!--/head-->

    <body class="homepage">
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
        </header><!--header-->

        <section id="services" class="service-item">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Praktikum</h2>
                    <p class="lead">
                        Halaman informasi kegiatan  Sistem praktikum jurusan pendidikan Teknik Elektro 
                    </p>
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
            <input type="hidden" id="user" value="<?php if(!isset($_SESSION['username'])){echo "Empty";}?>">
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script type="text/javascript">
            function ValidateUser() {
                var user = document.getElementById("user").value;
                if (user==="Empty") {
                    alert("Silakan Login Terlebih Dahulu");
                    return false;
                } else {
                    return true;
                }
            }
            function ChangeLab(lab){
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
                        Pilih Periode <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
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