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
        <title>Notifikasi | Sistem Praktikum Jurusan Elektro</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
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

    <body class="homepage">
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
        </header><!--header-->

        <section id="services" class="service-item" >
            <div class="container" style="min-height: 65vh;">
                <div class="center wow fadeInDown">
                    <h2>Notifikasi</h2>
                </div>
                <div class="row wow fadeInDown" data-wow-delay="300ms">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="pemberitahuan"></div>
                        <input type="hidden" id="nrp" value="<?php echo $_SESSION['kode']; ?>">
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->      

    <footer id="footer" class="midnight-blue">
        <?php include './comp/footer.php'; ?>
        <input type="hidden" id="user" value="<?php
        if (!isset($_SESSION['username'])) {
            echo "Empty";
        }
        ?>">
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        $(document).ready(function () {
            show_notif();
        });

        function show_notif() {
            var nrp = document.getElementById("nrp").value;
            $.ajax({
                url: "query/notif_select.php",
                method: "POST",
                data: {nrp: nrp},
                dataType: "text",
                success: function (data) {
                    $('#pemberitahuan').html(data);
                }
            });
        }

        $(document).on('click', '#btn_delete', function () {
            var id = $(this).data("id1");
            $.ajax({
                url: "query/notif_delete.php",
                method: "POST",
                data: {id: id},
                dataType: "text",
                success: function (data) {
                    show_notif();
                }
            });
        });
    </script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="LabModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="alert alert-warning alert-dismissable">
            <h4 align="center">Memasuki Halaman Laboratorium Praktikum</h4>
            <p align="center"><br>Periode berapa yang ingin anda akses ?<br></p>
            <!-- Single button -->
            <br>
            <div align="center">
                <div class="btn-group" align="center">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Pilih Periode <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a id="id1" href="#" onclick="return ValidateUser();">2016/2017</a></li>
                        <li><a id="id2" href="#" onclick="return ValidateUser();">2017/2018</a></li>
                        <li><a id="id3" href="#" onclick="return ValidateUser();">2018/2019</a></li>
                        <li><a id="id4" href="#" onclick="return ValidateUser();">2019/2020</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->