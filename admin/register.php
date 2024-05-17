<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:index.php');
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
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

        <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover({
                    placement: 'right'
                });
            });
        </script>        

        <script type="text/javascript">
            function ConfirmPassword() {
                var pass = document.formreg.sandi.value;
                var Cpass = document.formreg.konfirmasi.value;
                var cek = document.getElementById('statusPassword');

                if (Cpass !== pass) {
                    cek.className = 'icon-remove';
                } else {
                    cek.className = 'icon-ok';
                }

                if (pass === "" || Cpass === "") {
                    cek.className = '';
                }
            }
        </script>

        <script type="text/javascript">
            function validasi(formreg) {
                var nip = document.forms["formreg"]["id"].value;
                var numbers = /^[0-9]+$/;

                if (!nip.match(numbers)) {
                    alert("ID harus berupa angka ...");
                    formreg.id.focus();
                    formreg.id.value = '';
                    return(false);
                }
                return(true);
            }
        </script>
    </head>
    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand" href="index.php">
                        Sistem Praktikum Jurusan Elektro
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">

                            <li><a href="#">
                                    Daftar
                                </a></li>

                            <li><a href="#">
                                    Lupa kata sandi?
                                </a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="module span6 offset3">
                        <form class="form-horizontal" name="formreg" method="post" action="components/daftar_proses.php">
                            <div class="module-head">
                                <h3 style="text-align: center">PENDAFTARAN</h3>
                            </div>
                            <div class="module-body">     

                                <table align="center" cellpadding="5" cellspacing="5" width="100%">
                                    <tr>
                                        <td width="30%">ID*</td>
                                        <td><input type="text" id="basicinput" class="span4" name="id" maxlength="9"  placeholder="Masukkan NID / NRP" required autofocus></td>
                                        <td width="5%"><span class="icon-exclamation-sign" style="margin:0 0 5px 0" data-toggle="popover" tabindex="1" data-trigger="focus" title="Informasi" data-content=" 
                                                             &bull;&nbsp;Panjang maksimal 9 digit.
                                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                             &bull;&nbsp;NID (Dosen) : 4 digit.
                                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                             &bull;&nbsp;NRP (Mahasiswa) : 9 digit." ></span></td>
                                    </tr>
                                    <tr>
                                        <td>Kata Sandi*</td>
                                        <td><input type="password" id="basicinput" class="span4" name="sandi" maxlength="6" placeholder="Masukkan kata sandi" required></td>
                                        <td><span class="icon-exclamation-sign" style="margin:0 0 5px 0" data-toggle="popover" tabindex="2" data-trigger="focus" title="Informasi" data-content="
                                                  &bull;&nbsp;Panjang harus 6 digit.
                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  &bull;&nbsp;Nomor PIN (Mahasiswa).
                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  &bull;&nbsp;Bebas (Dosen)."></span></td>
                                    </tr>
                                    <tr>
                                        <td>Konfirmasi*</td><td><input type="password" id="basicinput" class="span4" name="konfirmasi" maxlength="6" placeholder="Masukkan kembali kata sandi" onKeyUp="ConfirmPassword()" required></td>
                                        <td><span id="statusPassword" style="margin:0 0 8px 0"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap*</td><td><input type="text" id="basicinput" class="span4" name="nama" placeholder="Masukkan nama lengkap" required></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin*</td>
                                        <td>
                                            <select name="jk" id="basicinput" class="span4" required>
                                                <option value="">- Pilih -</option>
                                                <option value="L">Laki - laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir*</td><td><input type="date" id="basicinput" class="span4" name="tgl" required></td>
                                    </tr>
                                    <tr>
                                        <td>No Telp / HP*</td><td><input type="text" id="basicinput" class="span4" name="telp" maxlength="13" placeholder="Masukkan nomor telepon / hp" required></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat*</td><td><textarea rows="5" id="basicinput" class="span4" name="alamat" style="resize: vertical; height: 150px; max-height: 200px" placeholder="Masukkan alamat rumah" required></textarea></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="module-foot">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <button type="submit" class="btn btn-primary pull-right">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>