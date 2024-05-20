<?php
session_start();

if (isset($_POST['submit'])) {
    $per = $_POST['periode'];
    $pra = $_POST['praktikum'];
    $kls = $_POST['kelas'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Absensi | Sistem Praktikum Jurusan Elektro</title>

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
                <h2>Absensi Praktikum</h2>
                <p class="lead">
                    Persentasi kehadiran mahasiswa pada kegiatan  Sistem praktikum jurusan pendidikan Teknik Elektro 
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms" align="center">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#AbsensiModal">
                            Tampilkan Absensi
                        </button>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="600ms">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="table_id"
                               width="100%">
                            <thead>
                                <tr>
                                    <th>
                                        NRP
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Presentase Kehadiran (%)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './query/tabel_absensi.php';
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
                                        Presentase Kehadiran (%)
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
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
        <script src="js/tooltip.js"></script>
        <script src="js/popover.js"></script>
        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable();
            });
        </script>
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["periode"].value;
                if (x == null || x == "") {
                    alert('Silakan Pilih Periode Terlebih Dahulu');
                    return false;
                }
                var y = document.forms["myForm"]["praktikum"].value;
                if (y == null || y == "") {
                    alert('Silakan Pilih Nama Praktikum Terlebih Dahulu');
                    return false;
                }
                var z = document.forms["myForm"]["kelas"].value;
                if (z == null || z == "") {
                    alert('Silakan Pilih Kelas Terlebih Dahulu');
                    return false;
                }

            }
        </script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="AbsensiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form onsubmit="return validateForm()" name="myForm" class="form-horizontal row-fluid" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="basicinput">Periode</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" name="periode" id="per">
                                        <option value="">Select here..</option>
                                        <option value="1617">2016/2017</option>
                                        <option value="1718">2017/2018</option>
                                        <option value="1819">2018/2019</option>
                                        <option value="1920">2019/2020</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Praktikum</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" name="praktikum" id="pra">
                                        <option value="">Select here..</option>
                                        <option value="PEMDAS">Pemrograman Dasar</option>
                                        <option value="ORKOM">Organisasi & Arsitektur Komputer</option>
                                        <option value="JARKOM">Jaringan Komputer</option>
                                        <option value="PRC">Pemrograman Robot Cerdas</option>
                                        <option value="REKWEB">Rekayasa Web</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="basicinput">Kelas</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Select here.." class="form-control" name="kelas" id="kls">
                                        <option value="">Select here..</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Informasi Absensi Praktikum</h4>
            </div>
            <div class="modal-body">
                <?php include './query/tabel_absensi_user.php'; ?>
            </div>
            <div class="modal-footer">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->