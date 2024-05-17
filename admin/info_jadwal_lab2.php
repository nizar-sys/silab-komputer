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
                        if (empty($_SESSION['keterangan'])) {
                            include './components/sidebar1.php';
                        } else if ($_SESSION['keterangan'] == "Admin") {
                            include './components/sidebar4.php';
                        } else if ($_SESSION['keterangan'] == "Dosen") {
                            include './components/sidebar2.php';
                        } else if ($_SESSION['keterangan'] == "Mahasiswa"){
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head" style="text-align: center">
                                    <h3>
                                        Jadwal Penggunaan Lab Sistem praktikum jurusan pendidikan Teknik Elektro</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Waktu
                                                </th>
                                                <th>
                                                    Senin
                                                </th>
                                                <th>
                                                    Selasa
                                                </th>
                                                <th>
                                                    Rabu
                                                </th>
                                                <th>
                                                    Kamis
                                                </th>
                                                <th>
                                                    Jum'at
                                                </th>
                                                <th>
                                                    Sabtu
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    07.00-07.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    08.00-08.50
                                                </td>
                                                <td style="background-color: #802420"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0044cc"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    09.00-09.50
                                                </td>
                                                <td style="background-color: #802420"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0044cc"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10.00-10.50
                                                </td>
                                                <td style="background-color: #802420"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0044cc"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11.00-11.50
                                                </td>
                                                <td style="background-color: #802420"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0044cc"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12.00-12.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13.00-13.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0480be"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14.00-14.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0480be"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15.00-15.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0480be"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    16.00-16.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="background-color: #0480be"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    17.00-17.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18.00-18.50
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Waktu
                                                </th>
                                                <th>
                                                    Senin
                                                </th>
                                                <th>
                                                    Selasa
                                                </th>
                                                <th>
                                                    Rabu
                                                </th>
                                                <th>
                                                    Kamis
                                                </th>
                                                <th>
                                                    Jum'at
                                                </th>
                                                <th>
                                                    Sabtu
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
</html>