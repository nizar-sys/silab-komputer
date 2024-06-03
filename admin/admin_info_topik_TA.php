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
    $query = "select * from topik_ta WHERE id=$id ";
    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
    $row = mysqli_fetch_array($hasil);
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
                                    <h2>
                                        Topik TA (Tugas Akhir)</h2>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Topik TA yang Sedang Berlangsung</h3>
                                </div>
                                <div class="module-body table">
                                    <div style="width: 100%; padding-bottom: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#BerlangsungModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Tambah Topik TA (Berlangsung)
                                        </button>
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
                                                </th>
                                                <th>
                                                    Pembimbing 1
                                                </th>
                                                <th>
                                                    Pembimbing 2
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './components/admin_tabel_topik_TA_berlangsung.php';
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
                                                </th>
                                                <th>
                                                    Pembimbing 1
                                                </th>
                                                <th>
                                                    Pembimbing 2
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Topik TA yang Disarankan</h3>
                                </div>
                                <div class="module-body table">
                                    <div style="width: 100%; padding-bottom: 2%;" align="center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#InsertDisarankanModal" style="width: 90%">
                                            <i class='menu-icon icon-pencil'></i> Tambah Topik TA (Disarankan)
                                        </button>
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                           width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include './components/admin_tabel_topik_TA_disarankan.php';
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Judul
                                                </th>
                                                <th>
                                                    Peserta
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

<!-- Modal -->
<div class="modal hide fade" id="BerlangsungModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Topik Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/insert_topik_ta_berlangsung.php" onsubmit="infoSimpan()" class="form-horizontal row-fluid">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Judul</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="judul" value="<?php echo $row[judul] ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Peserta</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="peserta" value="<?php echo $row[peserta] ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Pembimbing 1</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="pembimbing1">
                                <option value="">Select here..</option>
                                <option value="Asep Nana Hermana, S.T., M.T.">Asep Nana Hermana, S.T., M.T.</option>
                                <option value="Budi Raharjo, M.T.">Budi Raharjo, M.T.</option>
                                <option value="Dina Utami, S.T., M.T.">Dina Utami, S.T., M.T.</option>
                                <option value="Irma Amelia, S.T., M.T.">Irma Amelia, S.T., M.T.</option>
                                <option value="Jasman Pardede, S.T., M.T.">Jasman Pardede, S.T., M.T.</option>
                                <option value="Milda Gustiana, H., M.Eng.">Milda Gustiana, H., M.Eng.</option>
                                <option value="Rio Korio Utoro, S.T., M.T.">Rio Korio Utoro, S.T., M.T.</option>
                                <option value="Youlia Indrawaty, S.T., M.T.">Youlia Indrawaty, S.T., M.T.</option>
                                <option value="Yusuf Miftahudin, S.T., M.T.">Yusuf Miftahudin, S.T., M.T.</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Pembimbing 1</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="pembimbing2">
                                <option value="">Select here..</option>
                                <option value="Asep Nana Hermana, S.T., M.T.">Asep Nana Hermana, S.T., M.T.</option>
                                <option value="Budi Raharjo, M.T.">Budi Raharjo, M.T.</option>
                                <option value="Dina Utami, S.T., M.T.">Dina Utami, S.T., M.T.</option>
                                <option value="Irma Amelia, S.T., M.T.">Irma Amelia, S.T., M.T.</option>
                                <option value="Jasman Pardede, S.T., M.T.">Jasman Pardede, S.T., M.T.</option>
                                <option value="Milda Gustiana, H., M.Eng.">Milda Gustiana, H., M.Eng.</option>
                                <option value="Rio Korio Utoro, S.T., M.T.">Rio Korio Utoro, S.T., M.T.</option>
                                <option value="Youlia Indrawaty, S.T., M.T.">Youlia Indrawaty, S.T., M.T.</option>
                                <option value="Yusuf Miftahudin, S.T., M.T.">Yusuf Miftahudin, S.T., M.T.</option>
                            </select>
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

<div class="modal hide fade" id="UpdateBerlangsungModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Topik Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/update_topik_ta_berlangsung.php" onsubmit="infoInsert()" class="form-horizontal row-fluid">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Judul</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="judul" value="<?php echo $row[judul] ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Peserta</label>
                        <div class="controls">
                            <input type="text" id="basicinput" class="span8" name="peserta" value="<?php echo $row[peserta] ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Pembimbing 1</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="pembimbing1">
                                <option value="">Select here..</option>
                                <option value="Asep Nana Hermana, S.T., M.T."<?php if ($row[pembimbing1] == 'Asep Nana Hermana, S.T., M.T.') echo ' selected="selected"'; ?>>Asep Nana Hermana, S.T., M.T.</option>
                                <option value="Budi Raharjo, M.T."<?php if ($row[pembimbing1] == 'Budi Raharjo, M.T.') echo ' selected="selected"'; ?>>Budi Raharjo, M.T.</option>
                                <option value="Dina Utami, S.T., M.T."<?php if ($row[pembimbing1] == 'Dina Utami, S.T., M.T.') echo ' selected="selected"'; ?>>Dina Utami, S.T., M.T.</option>
                                <option value="Irma Amelia, S.T., M.T."<?php if ($row[pembimbing1] == 'Irma Amelia, S.T., M.T.') echo ' selected="selected"'; ?>>Irma Amelia, S.T., M.T.</option>
                                <option value="Jasman Pardede, S.T., M.T."<?php if ($row[pembimbing1] == 'Jasman Pardede, S.T., M.T.') echo ' selected="selected"'; ?>>Jasman Pardede, S.T., M.T.</option>
                                <option value="Milda Gustiana, H., M.Eng."<?php if ($row[pembimbing1] == 'Milda Gustiana, H., M.Eng.') echo ' selected="selected"'; ?>>Milda Gustiana, H., M.Eng.</option>
                                <option value="Rio Korio Utoro, S.T., M.T."<?php if ($row[pembimbing1] == 'Rio Korio Utoro, S.T., M.T.') echo ' selected="selected"'; ?>>Rio Korio Utoro, S.T., M.T.</option>
                                <option value="Youlia Indrawaty, S.T., M.T."<?php if ($row[pembimbing1] == 'Youlia Indrawaty, S.T., M.T.') echo ' selected="selected"'; ?>>Youlia Indrawaty, S.T., M.T.</option>
                                <option value="Yusuf Miftahudin, S.T., M.T."<?php if ($row[pembimbing1] == 'Yusuf Miftahudin, S.T., M.T.') echo ' selected="selected"'; ?>>Yusuf Miftahudin, S.T., M.T.</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Pembimbing 2</label>
                        <div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" name="pembimbing2">
                                <option value="">Select here..</option>
                                <option value="Asep Nana Hermana, S.T., M.T."<?php if ($row[pembimbing2] == 'Asep Nana Hermana, S.T., M.T.') echo ' selected="selected"'; ?>>Asep Nana Hermana, S.T., M.T.</option>
                                <option value="Budi Raharjo, M.T."<?php if ($row[pembimbing2] == 'Budi Raharjo, M.T.') echo ' selected="selected"'; ?>>Budi Raharjo, M.T.</option>
                                <option value="Dina Utami, S.T., M.T."<?php if ($row[pembimbing2] == 'Dina Utami, S.T., M.T.') echo ' selected="selected"'; ?>>Dina Utami, S.T., M.T.</option>
                                <option value="Irma Amelia, S.T., M.T."<?php if ($row[pembimbing2] == 'Irma Amelia, S.T., M.T.') echo ' selected="selected"'; ?>>Irma Amelia, S.T., M.T.</option>
                                <option value="Jasman Pardede, S.T., M.T."<?php if ($row[pembimbing2] == 'Jasman Pardede, S.T., M.T.') echo ' selected="selected"'; ?>>Jasman Pardede, S.T., M.T.</option>
                                <option value="Milda Gustiana, H., M.Eng."<?php if ($row[pembimbing2] == 'Milda Gustiana, H., M.Eng.') echo ' selected="selected"'; ?>>Milda Gustiana, H., M.Eng.</option>
                                <option value="Rio Korio Utoro, S.T., M.T."<?php if ($row[pembimbing2] == 'Rio Korio Utoro, S.T., M.T.') echo ' selected="selected"'; ?>>Rio Korio Utoro, S.T., M.T.</option>
                                <option value="Youlia Indrawaty, S.T., M.T."<?php if ($row[pembimbing2] == 'Youlia Indrawaty, S.T., M.T.') echo ' selected="selected"'; ?>>Youlia Indrawaty, S.T., M.T.</option>
                                <option value="Yusuf Miftahudin, S.T., M.T."<?php if ($row[pembimbing2] == 'Yusuf Miftahudin, S.T., M.T.') echo ' selected="selected"'; ?>>Yusuf Miftahudin, S.T., M.T.</option>
                            </select>
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

<div class="modal hide fade" id="InsertDisarankanModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Topik Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/insert_topik_ta_disarankan.php" onsubmit="infoSimpan()">
                    <table style="width: 90%; margin-left: 4%">
                        <tr align="center">
                            <td><input name="judul" type="text" placeholder="Judul Tugas Akhir" style="width: 100%;"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal hide fade" id="UpdateDisarankanModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Update Informasi Topik Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/update_topik_ta_disarankan.php" onsubmit="infoSimpan()">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <table style="width: 90%; margin-left: 4%">
                        <tr align="center">
                            <td><input name="judul" type="text" placeholder="Judul Tugas Akhir" style="width: 100%;" value="<?php echo $row[judul] ?>"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal hide fade" id="PesertaModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Informasi Peserta Tugas Akhir</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="admin/update_topik_ta_peserta_disarankan.php" onsubmit="infoSimpan()">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <table style="width: 90%; margin-left: 4%">
                        <tr align="center">
                            <td><input name="peserta" type="text" value="<?php echo $row[judul]; ?>" style="width: 100%;" readonly></td>
                        </tr>
                        <tr align="center">
                            <td><input name="peserta" type="text" placeholder="Nama Peserta Topik Tugas Akhir" style="width: 100%;"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var update = '<?php echo $_GET[update]; ?>';
    if (update == "disarankan") {
        $('#UpdateDisarankanModal').modal('show');
    } else if (update == "peserta") {
        $('#PesertaModal').modal('show');
    } else if (update == "berlangsung") {
        $('#UpdateBerlangsungModal').modal('show');
    }
</script>