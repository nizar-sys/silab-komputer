<!--NavBar Guest-->
<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand img-fluid" href="index.php"><img src="images/logo-1.jpeg" width="50" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar Lab <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="info_jadwal_lab.php">Jadwal Penggunaan Lab</a></li>
                        <li><a href="monitoring.php">Monitoring</a></li>
                        <li><a href="info_topik_TA.php">Topik TA</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar Praktikum <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="absensi.php">Absensi</a></li>
                        <li><a href="#" onclick="warning();">Daftar Nilai</a></li>
                        <li><a href="info_jadwal_praktikum.php#">Jadwal Praktikum</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#LoginModal">Login</a></li>
                        <li><a href="register.php">Registrasi</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="formlogin" method="post" action="process/login_proses.php" onsubmit="return validasi_login(this)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <div hidden="true" id="pesan" class="alert alert-warning alert-dismissible" role="alert" position: fixed">
                    
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" maxlength="9" placeholder="Masukkan NRP / NID" name="username2">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" maxlength="6" placeholder="Masukkan Kata Sandi" name="password2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    function warning(){
        alert('Silakan Login Terlebih Dahulu');
    }
</script>