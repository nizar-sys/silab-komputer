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
                        } else if ($_SESSION['kategori'] == "mahasiswa"){ //jika mahasiswa yang masuk
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
                                    <h3>
                                        Penilaian Praktikum</h3>
                                </div>
                                <div class="module-body table">
                                    <p style="margin-left: 10%; margin-right: 10%; margin-bottom: 2%;" align="center">
                                        User dapat mengetahui informasi mengenai nilai akhir praktikum yang telah dilaksanakan
                                        dengan mengisikan informasi yang dibutuhkan pada form dibawah ini. <br>
                                    </p>
                                    <div style="width: 70%; margin-left: 15%;">
                                        <div class="module">
                                            <div class="module-head" align="center">
                                                <h3>
                                                    Informasi Mahasiswa</h3>
                                            </div>
                                            <div class="module-body table">
                                                <form class="form-horizontal row-fluid">
                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">NRP</label>
                                                        <div class="controls">
                                                            <input type="text" id="basicinput" placeholder="Contoh : 152013001" class="span8">
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Praktikum</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8">
                                                                <option value="">Select here..</option>
                                                                <option value="Category 1">Pemrograman Dasar</option>
                                                                <option value="Category 2">Organisasi & Arsitektur Komputer</option>
                                                                <option value="Category 3">Jaringan Komputer</option>
                                                                <option value="Category 4">Pemrograman Robot Cerdas</option>
                                                                <option value="Category 5">Rekayasa Web</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Periode</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8">
                                                                <option value="">Select here..</option>
                                                                <option value="Category 1">2015/2016</option>
                                                                <option value="Category 2">2016/2017</option>
                                                                <option value="Category 3">2017/2018</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
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

    </body>
