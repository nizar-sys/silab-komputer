<?php
session_start();

if (isset($_GET['update'])) {
    $id = $_GET['id'];
    include './koneksi.php';
    $query = "select * from jadwal_praktikum WHERE id=$id ";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);

    $waktu = explode(" ", $row[waktu]);
    $hari = $waktu[0];
    $jam = $waktu[1];
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
                        } else if ($_SESSION['kategori'] == "mahasiswa") { //jika mahasiswa yang masuk
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
                                        Isi Data Sertifikat</h3>
                                </div>
                                <div class="module-body table">
                                    <div style="width: 60%; margin-left: 20%;">
                                        <div class="module">
                                            <div class="module-body table">
                                                <form onsubmit="return validateForm()" name="myForm" class="form-horizontal row-fluid" method="post" action="admin/create_sertifikat.php">
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
                                                        <label class="control-label" for="basicinput">Nama Asisten</label>
                                                        <div class="controls">
                                                            <textarea class="form-control" rows="5" name="asisten" placeholder="Gunakan Enter untuk memasukan nama lebih dari satu"></textarea>
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

<!-- Modal Insert -->
<div class="modal hide fade" id="InsertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/insert_jadwal_praktikum.php" onsubmit="infoInsert()" class="form-horizontal row-fluid">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Periode</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="periode">
                                <option value="">Select here..</option>
                                <option value="2015/2016">2015/2016</option>
                                <option value="2016/2017">2016/2017</option>
                                <option value="2017/2018">2017/2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Semester</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="semester">
                                <option value="">Select here..</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Praktikum</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="praktikum">
                                <option value="">Select here..</option>
                                <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                                <option value="Organisasi & Arsitektur Komputer">Organisasi & Arsitektur Komputer</option>
                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                                <option value="Pemrograman Robot Cerdas">Pemrograman Robot Cerdas</option>
                                <option value="Rekayasa Web">Rekayasa Web</option>
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
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Hari</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="hari">
                                <option value="">Select here..</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Jam Mulai</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="jam" onfocus="this.size = 5;" onblur='this.size = 1;' onchange='this.size = 1;
                                    this.blur();'>
                                <option value="">Select here..</option>
                                <option value="07.00">07.00</option>
                                <option value="08.00">08.00</option>
                                <option value="09.00">09.00</option>
                                <option value="10.00">10.00</option>
                                <option value="11.00">11.00</option>
                                <option value="12.00">12.00</option>
                                <option value="13.00">13.00</option>
                                <option value="14.00">14.00</option>
                                <option value="15.00">15.00</option>
                                <option value="16.00">16.00</option>
                                <option value="17.00">17.00</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Koordinator</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="koordinator">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update -->
<div class="modal hide fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/update_jadwal_praktikum.php" onsubmit="infoInsert()" class="form-horizontal row-fluid">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Periode</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="periode2">
                                <option value="">Select here..</option>
                                <option value="2015/2016"<?php if ($row[periode] == '2015/2016') echo ' selected="selected"'; ?>>2015/2016</option>
                                <option value="2016/2017"<?php if ($row[periode] == '2016/2017') echo ' selected="selected"'; ?>>2016/2017</option>
                                <option value="2017/2018"<?php if ($row[periode] == '2017/2018') echo ' selected="selected"'; ?>>2017/2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Semester</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="semester2">
                                <option value="">Select here..</option>
                                <option value="1"<?php if ($row[semester] == '1') echo ' selected="selected"'; ?>>1</option>
                                <option value="2"<?php if ($row[semester] == '2') echo ' selected="selected"'; ?>>2</option>
                                <option value="3"<?php if ($row[semester] == '3') echo ' selected="selected"'; ?>>3</option>
                                <option value="4"<?php if ($row[semester] == '4') echo ' selected="selected"'; ?>>4</option>
                                <option value="5"<?php if ($row[semester] == '5') echo ' selected="selected"'; ?>>5</option>
                                <option value="6"<?php if ($row[semester] == '6') echo ' selected="selected"'; ?>>6</option>
                                <option value="7"<?php if ($row[semester] == '7') echo ' selected="selected"'; ?>>7</option>
                                <option value="8"<?php if ($row[semester] == '8') echo ' selected="selected"'; ?>>8</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Praktikum</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="praktikum2">
                                <option value="">Select here..</option>
                                <option value="Pemrograman Dasar"<?php if ($row[nama_praktikum] == 'Pemrograman Dasar') echo ' selected="selected"'; ?>>
                                    Pemrograman Dasar
                                </option>
                                <option value="Organisasi & Arsitektur Komputer"<?php if ($row[nama_praktikum] == 'Organisasi & Arsitektur Komputer') echo ' selected="selected"'; ?>>
                                    Organisasi & Arsitektur Komputer
                                </option>
                                <option value="Jaringan Komputer"<?php if ($row[nama_praktikum] == 'Jaringan Komputer') echo ' selected="selected"'; ?>>
                                    Jaringan Komputer
                                </option>
                                <option value="Pemrograman Robot Cerdas"<?php if ($row[nama_praktikum] == 'Pemrograman Robot Cerdas') echo ' selected="selected"'; ?>>
                                    Pemrograman Robot Cerdas
                                </option>
                                <option value="Rekayasa Web"<?php if ($row[nama_praktikum] == 'Rekayasa Web') echo ' selected="selected"'; ?>>
                                    Rekayasa Web
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Kelas</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="kelas2" id="kls">
                                <option value="">Select here..</option>
                                <option value="A"<?php if ($row[kelas] == 'A') echo ' selected="selected"'; ?>>A</option>
                                <option value="B"<?php if ($row[kelas] == 'B') echo ' selected="selected"'; ?>>B</option>
                                <option value="C"<?php if ($row[kelas] == 'C') echo ' selected="selected"'; ?>>C</option>
                                <option value="D"<?php if ($row[kelas] == 'D') echo ' selected="selected"'; ?>>D</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Hari</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="hari2">
                                <option value="">Select here..</option>
                                <option value="Senin"<?php if ($hari == 'Senin') echo ' selected="selected"'; ?>>Senin</option>
                                <option value="Selasa"<?php if ($hari == 'Selasa') echo ' selected="selected"'; ?>>Selasa</option>
                                <option value="Rabu"<?php if ($hari == 'Rabu') echo ' selected="selected"'; ?>>Rabu</option>
                                <option value="Kamis"<?php if ($hari == 'Kamis') echo ' selected="selected"'; ?>>Kamis</option>
                                <option value="Jumat"<?php if ($hari == 'Jumat') echo ' selected="selected"'; ?>>Jum'at</option>
                                <option value="Sabtu"<?php if ($hari == 'Sabtu') echo ' selected="selected"'; ?>>Sabtu</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Jam Mulai</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="jam2" onfocus="this.size = 5;" onblur='this.size = 1;' onchange='this.size = 1;
                                    this.blur();'>
                                <option value="">Select here..</option>
                                <option value="07.00"<?php if ($jam == '07.00') echo ' selected="selected"'; ?>>07.00</option>
                                <option value="08.00"<?php if ($jam == '08.00') echo ' selected="selected"'; ?>>08.00</option>
                                <option value="09.00"<?php if ($jam == '09.00') echo ' selected="selected"'; ?>>09.00</option>
                                <option value="10.00"<?php if ($jam == '10.00') echo ' selected="selected"'; ?>>10.00</option>
                                <option value="11.00"<?php if ($jam == '11.00') echo ' selected="selected"'; ?>>11.00</option>
                                <option value="12.00"<?php if ($jam == '12.00') echo ' selected="selected"'; ?>>12.00</option>
                                <option value="13.00"<?php if ($jam == '13.00') echo ' selected="selected"'; ?>>13.00</option>
                                <option value="14.00"<?php if ($jam == '14.00') echo ' selected="selected"'; ?>>14.00</option>
                                <option value="15.00"<?php if ($jam == '15.00') echo ' selected="selected"'; ?>>15.00</option>
                                <option value="16.00"<?php if ($jam == '16.00') echo ' selected="selected"'; ?>>16.00</option>
                                <option value="17.00"<?php if ($jam == '17.00') echo ' selected="selected"'; ?>>17.00</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Koordinator</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="koordinator2" value="<?php echo $row[asisten]; ?>">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var update = '<?php echo $_GET[update]; ?>';
    if (update == "true") {
        $('#UpdateModal').modal('show');
    }
</script>