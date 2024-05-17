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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Praktikum Jurusan Elektro</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["periode"].value;
                if (x==null || x=="") {
                    alert('Silakan Pilih Periode Terlebih Dahulu');
                    return false;
                }
                var y = document.forms["myForm"]["praktikum"].value;
                if (y==null || y=="") {
                    alert('Silakan Pilih Nama Praktikum Terlebih Dahulu');
                    return false;
                }
                var z = document.forms["myForm"]["kelas"].value;
                if (z==null || z=="") {
                    alert('Silakan Pilih Kelas Terlebih Dahulu');
                    return false;
                }
                
            }
        </script>
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
                                    <h3>Absensi Praktikum</h3>
                                </div>
                                <div class="module-body table">

                                    <div style="width: 60%; margin-left: 20%;">
                                        <div class="module">
                                            <div class="module-head" align="center">
                                                <h3>
                                                    Informasi Praktikum
                                                </h3>
                                            </div>
                                            <div class="module-body table">
                                                <form onsubmit="return validateForm()" name="myForm" class="form-horizontal row-fluid" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Periode</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="periode" id="per">
                                                                <option value="">Select here..</option>
                                                                <option value="1516">2015/2016</option>
                                                                <option value="1617">2016/2017</option>
                                                                <option value="1718">2017/2018</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Praktikum</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="praktikum" id="pra">
                                                                <option value="">Select here..</option>
                                                                <option value="PEMDAS">Pemrograman Dasar</option>
                                                                <option value="ORKOM">Organisasi & Arsitektur Komputer</option>
                                                                <option value="JARKOM">Jaringan Komputer</option>
                                                                <option value="PRC">Pemrograman Robot Cerdas</option>
                                                                <option value="REKWEB">Rekayasa Web</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <label class="control-label" for="basicinput">Kelas</label>
                                                        <div class="controls">
                                                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="kelas" id="kls">
                                                                <option value="">Select here..</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="C">C</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
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
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './components/admin_tabel_absensi.php';
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
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div style="width: 100%; padding-top: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#AbsensiModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Upload File Absensi
                                        </button>
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

    <!-- Modal -->
    <div class="modal hide fade" id="AbsensiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal row-fluid" method="post" action="admin/upload_absensi.php" enctype="multipart/form-data">
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Periode</label>
                            <div class="controls">
                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="periode">
                                    <option value="">Select here..</option>
                                    <option value="1516">2015/2016</option>
                                    <option value="1617">2016/2017</option>
                                    <option value="1718">2017/2018</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Praktikum</label>
                            <div class="controls">
                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="praktikum">
                                    <option value="">Select here..</option>
                                    <option value="PEMDAS">Pemrograman Dasar</option>
                                    <option value="ORKOM">Organisasi & Arsitektur Komputer</option>
                                    <option value="JARKOM">Jaringan Komputer</option>
                                    <option value="PRC">Pemrograman Robot Cerdas</option>
                                    <option value="REKWEB">Rekayasa Web</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Kelas</label>
                            <div class="controls">
                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="kelas">
                                    <option value="">Select here..</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Pertemuan</label>
                            <div class="controls">
                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="pertemuan">
                                    <option value="">Select here..</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">File</label>
                            <div class="controls">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>