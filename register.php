<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Registrasi | Sistem Praktikum Jurusan Elektro</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        
        <!-- core JS POPOVER -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover({
                    placement: 'right'
                });
            });
        </script>  
        <script type="text/javascript">
            function validasi(formreg) {
                var nip = document.forms["formreg"]["kode"].value;
                var numbers = /^[0-9]+$/;

                if (!nip.match(numbers)) {
                    alert("ID harus berupa angka ...");
                    formreg.kode.focus();
                    formreg.kode.value = '';
                    return(false);
                }
                return(true);
            }
        </script>
        <script type="text/javascript">
            function ConfirmPassword() {
                var pass = document.formreg.sandi.value;
                var Cpass = document.formreg.konfirmasi.value;
                var cek = document.getElementById('statusPassword');

                if (Cpass !== pass) {
                    cek.className = 'glyphicon glyphicon-remove';
                } else {
                    cek.className = 'glyphicon glyphicon-ok';
                }

                if (pass === "" || Cpass === "") {
                    cek.className = 'glyphicon glyphicon-lock';
                }
            }
        </script>
        <script type="text/javascript">
            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("fileToUpload").files[0]);
                oFReader.onload = function (oFREvent)
                {
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                };
            };
        </script>
    </head><!--/head-->

    <body>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else {
                include './comp/navbar2.php';
            }
            ?>
        </header><!--/header-->

        <section id="contact-info">
            <div class="center wow fadeInDown">                
                <h2>Registrasi</h2>
                <p class="lead">Untuk dapat mengakses fitur yang lebih lengkap silakan registrasi terlebih dahulu ...</p>
            </div>
            <div class="container wow fadeInDown" data-wow-delay="300ms"> 
                <div class="row contact-wrap"> 
                    <div class="status alert alert-success" style="display: none"></div>
                    <form class="form-horizontal" name="formreg" method="post" action="process/daftar_proses.php" onsubmit="return validasi(this)" enctype="multipart/form-data">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <label>Foto *</label><br>
                                <p>Ukuran Pas Foto Harus Kotak (Mis. 256 X 256 Pixel)</p>
                                <img id="uploadPreview" src="images/default.jpg" class="img-thumbnail" alt="Responsive Image" style="width: 256px;height: 256px; margin-bottom: 10px">
                                <input type="file" id="fileToUpload" name="fileToUpload" onchange="PreviewImage()"  required="required">
                            </div>
                            <div class="form-group">
                                <label>ID *</label>
                                <div class="input-group">
                                    <input type="text" name="kode" class="form-control" required="required" maxlength="9" placeholder="Masukkan NID / NRP" autofocus>
                                    <span class="input-group-addon" data-toggle="popover" tabindex="1" data-trigger="hover" title="Informasi" data-content=" 
                                        &bull;&nbsp;Panjang maksimal 9 digit.
                                        &bull;&nbsp;NID (Dosen) : 4 digit. &nbsp;&nbsp;&nbsp;&nbsp;
                                        &bull;&nbsp;NRP (Mahasiswa) : 9 digit." >
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi *</label>
                                <div class="input-group">
                                    <input type="password" name="sandi" class="form-control" required="required" maxlength="6" placeholder="Masukkan Kata Sandi">
                                    <span class="input-group-addon" data-toggle="popover" tabindex="2" data-trigger="hover" title="Informasi" data-content="
                                        &bull;&nbsp;Kata sandi berupa angka.
                                        &bull;&nbsp;Panjang harus 6 digit.
                                        &bull;&nbsp;Nomor PIN (Mahasiswa).
                                        &bull;&nbsp;Acak (Dosen).">
                                        <span class="glyphicon glyphicon-info-sign"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Kata Sandi *</label>
                                <div class="input-group">
                                    <input type="password" name="konfirmasi" class="form-control" required="required" maxlength="6" placeholder="Masukkan Kembali Kata Sandi" onkeyup="ConfirmPassword()">
                                    <span class="input-group-addon">
                                        <span id="statusPassword" class="glyphicon glyphicon-lock"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required="required" placeholder="Masukkan Alamat Email">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap *</label>
                                <input type="text" name="nama" class="form-control" required="required" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <select name="jk" class="form-control" required="required">
                                    <option value="">- Pilih -</option>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir *</label>
                                <input type="date" class="form-control" name="tgl" required="required">
                            </div>
                            <div class="form-group">
                                <label>No. HP *</label>
                                <input type="text" class="form-control" name="telp" required="required" placeholder="Masukkan Nomor HP">
                            </div>
                            <div class="form-group">
                                <label>Alamat *</label>
                                <textarea class="form-control" rows="3" name="alamat" required="required" style="height: 150px; max-height: 200px;resize: vertical" placeholder="Masukkan Alamat"></textarea>
                            </div>  
                            <div class="form-group" align="right">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </div>
                        </div>
                    </form> 
                </div><!--/.row-->
            </div><!--/.container-->
        </section>  <!--/gmap_area -->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>