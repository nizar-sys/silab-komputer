<?php
include 'koneksi.php';
$nrp = '';
$nrp = $_SESSION['kode'];
$h1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM koordinator WHERE jabatan='Koor Laboratorium' AND kode=$nrp");
$r1 = mysqli_fetch_array($h1);
$h2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT * FROM koordinator WHERE jabatan='Koor Praktikum' AND kode=$nrp");
$r2 = mysqli_fetch_array($h2);
$h3 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"SELECT count(*) as jml FROM pemberitahuan WHERE status='D' AND user='$_SESSION[kode]'");
$r3 = mysqli_fetch_array($h3);
?>
<!-- Navbar User (Dosen)-->
<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand img-fluid" href="index.php" style="font-size: large; padding-left: 10px;">
                <img src="images/logo-1.jpeg" width="50" alt="logo" style="margin-right: 5px;">
                SILAB JUTEK
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar Lab <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="user_inventaris.php">Inventaris</a></li>
                        <li><a href="info_jadwal_lab.php">Jadwal Penggunaan Lab</a></li>
                        <li><a href="monitoring.php">Monitoring</a></li>
                        <li><a href="user_peminjaman_penelitian.php">Peminjaman Penelitian</a></li>
                        <li><a href="info_topik_TA.php">Topik TA</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar Praktikum <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="absensi.php">Absensi Praktikum</a></li>
                        <li><a href="arsip.php">Arsip & Dokumentasi</a></li>
                        <li><a href="info_jadwal_praktikum.php">Jadwal Praktikum</a></li>
                        <li><a href="praktikum.php">Praktikum</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                        if ($r3['jml'] != 0) {
                            echo "" . $_SESSION['username'] . "  (" . $r3['jml'] . ")";
                        } else {
                            echo "" . $_SESSION['username'];
                        }
                        ?> 
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="pemberitahuan.php">
                                Notifikasi
                                <?php
                                if ($r3['jml'] != 0) {
                                    echo "<span class='badge'>" . $r3['jml'] . "</span>";
                                }
                                ?>
                            </a>
                        </li>
                        <?php
                        if (!empty($r1)) {
                            echo "<li><a href='#' data-toggle='modal' data-target='#KoorLabModal'>Koordinator Laboratorium</a></li>";
                        }
                        ?>
                        <?php
                        if (!empty($r2)) {
                            echo "<li><a href='#' data-toggle='modal' data-target='#KoorPrakModal'>Koordinator Praktikum</a></li>";
                        }
                        ?>
                        <li><a href="#" data-toggle="modal" data-target="#PeminjamanModal">Peminjaman</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="process/logout_proses.php">Logout</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

<!-- Modal -->
<div class="modal fade" id="KoorLabModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Informasi Praktikum</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Praktikum</label>
                            <div class="controls">
                                <select tabindex="1" data-placeholder="Select here.." class="form-control" name="praktikum" id="pra">
                                    <option value="">Select here..</option>
                                    <option value="PEMDAS">Pemrograman Dasar</option>
                                    <option value="ORKOM">Organisasi & Arsitektur Komputer</option>
                                    <option value="PRC">Pemrograman Robot Cerdas</option>
                                    <option value="JST">Jaringan Syaraf Tiruan</option>
                                    <option value="JARKOM">Jaringan Komputer</option>
                                    <option value="REKWEB">Rekayasa Web</option>
                                    <option value="BASDAT">Basis Data</option>
                                    <option value="PBD">Pemrograman Basis Data</option>
                                    <option value="PBO">Pemrograman Berorientasi Objek</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Periode</label>
                            <div class="controls">
                                <select tabindex="1" data-placeholder="Select here.." class="form-control" name="periode" id="per">
                                    <option value="">Select here..</option>
                                    <option value="2016/2017">2016/2017</option>
                                    <option value="2017/2018">2017/2018</option>
                                    <option value="2018/2019">2018/2019</option>
                                    <option value="2019/2020">2019/2020</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="gotopage();">Proses</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    function gotopage(){
        var praktikum = document.getElementById("pra").value;
        var periode = document.getElementById("per").value;
        var path = "koordinator_lab.php?kategori="+praktikum+"&&periode="+periode;
        window.location.href=path;
    }
</script>


<!-- Modal -->
<div class="modal fade" id="KoorPrakModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <h4 align="center">Verifikasi Halaman Koordinator Praktikum</h4>
            <p align="center"><br>Laboratorium mana yang ingin anda akses ?<br></p>
            <br>
            <div align="center">
                <div class="btn-group-vertical" style="width: 50%;">
                    <?php
                    $query = "SELECT * FROM koordinator WHERE jabatan='Koor Praktikum' AND kode=$_SESSION[kode]";
                    $hasil = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),$query);
                    while ($row = mysqli_fetch_array($hasil)) {
                        $praktikum = $row['praktikum'];
                        $periode = $row['periode'];
                        echo "<a href='koordinator.php?kategori=$praktikum&&periode=$periode' class='btn btn-default'>" . $row['praktikum'] . " " . $row['periode'] . "</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="PeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <h4 align="center">Verifikasi Halaman Peminjaman Barang</h4>
            <p align="center"><br>Peminjaman kategori apakah yang ingin anda lihat ?<br></p>
            <br>
            <div align="center">
                <div class="btn-group-vertical" style="width: 50%;">
                    <a href="info_peminjaman_penelitian.php" class="btn btn-default">Peminjaman Penelitian</a>
                    <a href="info_peminjaman_praktikum.php" class="btn btn-default">Peminjaman Praktikum</a>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->