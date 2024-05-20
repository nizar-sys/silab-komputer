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
            <h2>Data Inventaris Alat</h2>
            <p class="lead">
                Daftar Alat Inventaris Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro 
            </p>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                <table id="table_id" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Developer</th>
                            <th>Lokasi</th>
                            <th>Type</th>
                            <th>Model</th>
                            <th>Last Update</th>
                            <th>No. Pelabelan</th>
                            <th>Ketersediaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $tampil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select * from barang order by serial_num");
                        while ($r = mysqli_fetch_array($tampil)) {
                            echo "
                                                    <tr>	
                                                        <td align=center>$r[serial_num]</td>
                                                        <td align=center>$r[nama]</td>
                                                        <td align=center>$r[status]</td>
                                                        <td align=center>$r[developer]</td>
                                                        <td align=center>$r[lokasi]</td>
                                                        <td align=center>$r[type]</td>
                                                        <td align=center>$r[model]</td>
                                                        <td align=center>$r[last_update]</td>
                                                        <td align=center>$r[no_pelabelan]</td>
                                                        <td align=center>$r[ketersediaan]</td>
                                                    </tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Serial Number</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Developer</th>
                            <th>Lokasi</th>
                            <th>Type</th>
                            <th>Model</th>
                            <th>Last Update</th>
                            <th>No. Pelabelan</th>
                            <th>Ketersediaan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section> <!--/gmap_area -->

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
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>