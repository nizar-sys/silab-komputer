<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}elseif (isset($_SESSION['username']) && !isset($_SESSION['isAdmin'])) {
    header('location:../index.php');
}

if (isset($_GET['update'])) {
    $id = $_GET['id'];
    include './koneksi.php';
    $query = "select * from jadwal_lab WHERE id=$id ";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
    
    $waktu = explode(" ", $row[waktu]);
    $hari = $waktu[0];
    
    $jam = explode("-", $waktu[1]);
    $awal = $jam[0];
    $akhir = $jam[1];
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
                                        Jadwal Penggunaan Lab Sistem praktikum jurusan pendidikan Teknik Elektro</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No Ruang
                                                </th>
                                                <th>
                                                    Kegiatan
                                                </th>
                                                <th>
                                                    Waktu
                                                </th>
                                                <th>
                                                    Penanggung Jawab
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './components/admin_tabel_jadwal_lab.php';
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    No Ruang
                                                </th>
                                                <th>
                                                    Kegiatan
                                                </th>
                                                <th>
                                                    Waktu
                                                </th>
                                                <th>
                                                    Penanggung Jawab
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div style="width: 100%; padding-top: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#InsertModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Tambah Kegiatan Lab
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
</html>

<!-- Modal -->
<div class="modal hide fade" id="InsertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Informasi Kegiatan</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/insert_jadwal_lab.php" onsubmit="infoInsert()" class="form-horizontal row-fluid">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">No Ruang</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="ruang">
                                <option value="">Select here..</option>
                                <option value="2401">2401</option>
                                <option value="2402">2402</option>
                                <option value="2403">2403</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Kegiatan</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="kegiatan">
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
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="awal" onfocus="this.size = 5;" onblur='this.size = 1;' onchange='this.size = 1;
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
                        <label class="control-label" for="basicinput">Jam Berakhir</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="akhir" onfocus="this.size = 5;" onblur='this.size = 1;' onchange='this.size = 1;
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
                                <option value="18.00">18.00</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Penanggung Jawab</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="penanggungjawab">
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

<!-- Modal -->
<div id="UpdateModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Update Informasi Kegiatan</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="admin/update_jadwal_lab.php" onsubmit="infoInsert()" class="form-horizontal row-fluid">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="control-group">
                <label class="control-label" for="basicinput">No Ruang</label>
                <div class="controls">
                    <select tabindex="1" data-placeholder="Select here.." class="span8" name="ruang2">
                        <option value="">Select here..</option>
                        <option value="2401"<?php if ($row[no_ruang] == '2401') echo ' selected="selected"'; ?>>2401</option>
                        <option value="2402"<?php if ($row[no_ruang] == '2402') echo ' selected="selected"'; ?>>2402</option>
                        <option value="2403"<?php if ($row[no_ruang] == '2403') echo ' selected="selected"'; ?>>2403</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Kegiatan</label>
                <div class="controls">
                    <input type="text" id="basicinput" class="span8" name="kegiatan2" value="<?php echo $row[kegiatan] ?>">
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
                    <select tabindex="1" data-placeholder="Select here.." class="span8" name="awal2" onfocus="this.size = 5;" onblur='this.size = 1;' onchange='this.size = 1;
                            this.blur();'>
                        <option value="">Select here..</option>
                        <option value="07.00"<?php if ($awal == '07.00') echo ' selected="selected"'; ?>>07.00</option>
                        <option value="08.00"<?php if ($awal == '08.00') echo ' selected="selected"'; ?>>08.00</option>
                        <option value="09.00"<?php if ($awal == '09.00') echo ' selected="selected"'; ?>>09.00</option>
                        <option value="10.00"<?php if ($awal == '10.00') echo ' selected="selected"'; ?>>10.00</option>
                        <option value="11.00"<?php if ($awal == '11.00') echo ' selected="selected"'; ?>>11.00</option>
                        <option value="12.00"<?php if ($awal == '12.00') echo ' selected="selected"'; ?>>12.00</option>
                        <option value="13.00"<?php if ($awal == '13.00') echo ' selected="selected"'; ?>>13.00</option>
                        <option value="14.00"<?php if ($awal == '14.00') echo ' selected="selected"'; ?>>14.00</option>
                        <option value="15.00"<?php if ($awal == '15.00') echo ' selected="selected"'; ?>>15.00</option>
                        <option value="16.00"<?php if ($awal == '16.00') echo ' selected="selected"'; ?>>16.00</option>
                        <option value="17.00"<?php if ($awal == '17.00') echo ' selected="selected"'; ?>>17.00</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Jam Berakhir</label>
                <div class="controls">
                    <select tabindex="1" data-placeholder="Select here.." class="span8" name="akhir2" onfocus="this.size = 5;" onblur='this.size = 1;' onchange='this.size = 1;
                            this.blur();'>
                        <option value="">Select here..</option>
                        <option value="07.00"<?php if ($akhir == '07.00') echo ' selected="selected"'; ?>>07.00</option>
                        <option value="08.00"<?php if ($akhir == '08.00') echo ' selected="selected"'; ?>>08.00</option>
                        <option value="09.00"<?php if ($akhir == '09.00') echo ' selected="selected"'; ?>>09.00</option>
                        <option value="10.00"<?php if ($akhir == '10.00') echo ' selected="selected"'; ?>>10.00</option>
                        <option value="11.00"<?php if ($akhir == '11.00') echo ' selected="selected"'; ?>>11.00</option>
                        <option value="12.00"<?php if ($akhir == '12.00') echo ' selected="selected"'; ?>>12.00</option>
                        <option value="13.00"<?php if ($akhir == '13.00') echo ' selected="selected"'; ?>>13.00</option>
                        <option value="14.00"<?php if ($akhir == '14.00') echo ' selected="selected"'; ?>>14.00</option>
                        <option value="15.00"<?php if ($akhir == '15.00') echo ' selected="selected"'; ?>>15.00</option>
                        <option value="16.00"<?php if ($akhir == '16.00') echo ' selected="selected"'; ?>>16.00</option>
                        <option value="17.00"<?php if ($akhir == '17.00') echo ' selected="selected"'; ?>>17.00</option>
                        <option value="18.00"<?php if ($akhir == '18.00') echo ' selected="selected"'; ?>>18.00</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Penanggung Jawab</label>
                <div class="controls">
                    <input type="text" id="basicinput" class="span8" name="penanggungjawab2" value="<?php echo $row[penanggungjawab]; ?>">
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
        </form>
    </div>
</div>

<script>
    var update = '<?php echo $_GET[update]; ?>';
    if(update=="true"){
        $('#UpdateModal').modal('show');
    }
</script>