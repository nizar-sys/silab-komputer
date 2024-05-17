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
        <title>Lab Praktikum | Sistem Praktikum Jurusan Elektro</title>

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
                    Laboratorium 
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
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="300ms">
                        <?php include './comp/koor_kelas.php'; ?>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="600ms">
                        <?php include './comp/koor_praktikum.php'; ?>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay="900ms">
                        <?php include './comp/koor_lab.php'; ?>
                    </div>
                </div>
            </div>
        </section>  <!--/gmap_area -->

        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Peserta Praktikum</h2>
                <p class="lead">
                    Nama mahasiswa yang terdaftar untuk mengikuti 
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-12 wow fadeInDown" data-wow-delay="300ms" align="center">
                        <?php
                        include './koneksi.php';
                        $nrp = '';
                        if(isset($_GET['kategori'])){
                            $kategori = $_GET['kategori'];
                            $periode = $_GET['periode'];
                            $nrp = $_SESSION['kode'];
                        }
                        $query = "select approve from praktikum WHERE prak='$kategori' AND periode='$periode' AND nrp=$nrp";
                        $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
                        $row = mysqli_fetch_array($hasil);
                        if ($row['approve'] == "") {
                            echo '
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#DaftarModal" id="tombol">
                                Daftar Sebagai Peserta
                            </button>';
                        } else if ($row['approve'] == "R") {
                            echo '
                            <button class="btn btn-primary btn-lg" disabled>
                                Permintaan Sedang Diproses
                            </button>';
                        } else if ($row['approve'] == "Y") {
                            echo "
                            <a href='user_peminjaman_praktikum.php?praktikum=$kategori&&periode=$periode' class='btn btn-primary btn-lg' >
                                Peminjaman Peralatan Praktikum
                            </a>";
                        }
                        ?>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="tabel1"
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
                                        Kelas
                                    </th>
                                    <th>
                                        Nilai
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './query/tabel_praktikum.php';
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
                                        Nilai
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
        <script>
            $(document).ready(function () {
                $('#tabel1').DataTable();
            });

            function ValidateExtension() {
                var allowedFiles = [".doc", ".docx", ".pdf"];
                var fileUpload = document.getElementById("fileToUpload");
                var lblError = document.getElementById("lblError");
                var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
                if (!regex.test(fileUpload.value.toLowerCase())) {
                    lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                    return false;
                }
                lblError.innerHTML = "";
                return true;
            }
        </script>
    </body>
</html

<!-- Modal -->
<div class="modal fade" id="DaftarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <form name="formlogin" method="post" action="process/daftar_praktikan_proses.php">
                <h4 align="center">Verifikasi Pendaftaran Praktikumz Laboratorium</h4>
                <p align="center"><br>Apakah anda yakin ingin mendaftar sebagai praktikan ?<br></p>
                <p align="center">
                    <br>
                    <input type="hidden" name="periode" value="<?php echo $_GET['periode']; ?>">
                    <input type="hidden" name="kategori" value="<?php echo $_GET['kategori']; ?>">
                    <button type="submit" name="submit" class="btn btn-success" style="width: 30%;">Proses</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger" aria-hidden="true" style="width: 30%;">Batal</button>
                </p>
            </form>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="AslabModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <form name="formlogin" method="post" action="process/daftar_aslab_proses.php" enctype="multipart/form-data">
                <h4 align="center">Verifikasi Pendaftaran Asisten Laboratorium</h4>
                <p><br>Persyaratan yang harus dipenuhi untuk mendaftar sebagai asisten laboratorium adalah sebagai berikut :<br></p>
                <?php
                include './comp/persyaratan.php';
                ?>
                <br><input type="file" id="fileToUpload" name="fileToUpload">
                <p align="center">
                    <br>
                    <span id="lblError" style="color: red;"></span>
                    <input type="hidden" name="periode" value="<?php echo $_GET['periode']; ?>">
                    <input type="hidden" name="kategori" value="<?php echo $_GET['kategori']; ?>">
                    <button type="submit" name="submit" onclick="return ValidateExtension()" class="btn btn-success" style="width: 30%;">Proses</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger" aria-hidden="true" style="width: 30%;">Batal</button>
                </p>
            </form>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->