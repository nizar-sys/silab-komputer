<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>
    <body>

        <?php
        include "koneksi/koneksi.php";
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>

        <div class="navbar navbar-fixed-top" style="bg-color:black;">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand" href="index.html">
                        Laboratorium Sistem praktikum jurusan pendidikan Teknik Elektro Itenas
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!--<form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>-->

                        <ul class="nav pull-right">
                            <!--                            <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Item No. 1</a></li>

                                                                <li><a href="#">Don't Click</a></li>
                                                                <li class="divider"></li>
                                                                <li class="nav-header">Example Header</li>
                                                                <li><a href="#">A Separated link</a></li>
                                                            </ul>
                                                        </li>-->

                            <li><a href="#">
                                    Beranda
                                </a></li>
                            <li class="nav-user dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/user.png" class="nav-avatar" />
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->



        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">

                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages1">
                                        <i class="menu-icon icon-inbox"></i>
                                        <b class="label green pull-right"><?php
                                            $notifp1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select count(*) as jumlah from requestpraktikum where status='No'");
                                            $nfp1 = mysqli_fetch_array($notifp1);
                                            $notifp2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select count(*) as jumlah from requestpenelitian where status='No'");
                                            $nfp2 = mysqli_fetch_array($notifp2);
                                            $result = $nfp1['jumlah'] + $nfp2['jumlah'];
                                            echo $result;
                                            ?></b>
                                        Notifikasi
                                    </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li>
                                            <a href="RequestPraktikum.php">
                                                <i class="icon-check pull-right"></i>
                                                <b class="label orange"><?php
                                                    $notifp = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select count(*) as jumlah from requestpraktikum where status='No'");
                                                    $nfp = mysqli_fetch_array($notifp);
                                                    echo $nfp['jumlah'];
                                                    ?></b>
                                                Praktikum
                                            </a>
                                        </li>
                                        <li>
                                            <a href="RequestPenelitian.php">
                                                <i class="icon-check pull-right"></i>
                                                <b class="label orange"><?php
                                                    $notifp = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select count(*) as jumlah from requestpenelitian where status='No'");
                                                    $nfp = mysqli_fetch_array($notifp);
                                                    echo $nfp['jumlah'];
                                                    ?></b>
                                                Penelitian
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="PengembalianAlat.php">
                                        <i class="menu-icon icon-circle-arrow-right"></i>
                                        Pengembalian Alat
                                    </a>
                                </li>
                                <li>
                                    <a href="PermintaanPerbaikan.php">
                                        <i class="menu-icon icon-barcode"></i>
                                        Permintaan Perbaikan
                                    </a>
                                </li>
                            </ul><!--/.widget-nav-->

                            <!--                            <ul class="widget widget-menu unstyled">
                                                            <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                                            <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                                            <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                                            <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                                            <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                                                        </ul>/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-book"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        Inventaris Alat
                                    </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li>
                                            <a href="HistoriAlat.php">
                                                <i class="icon-check"></i>
                                                Riwayat Peminjaman Alat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="DataInventaris.php">
                                                <i class="icon-check"></i>
                                                Data Inventaris Alat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="PenambahanInventaris.php">
                                                <i class="icon-check"></i>
                                                Penambahan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="PembaharuanInventaris.php">
                                                <i class="icon-check"></i>
                                                Pembaharuan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="PenghapusanInventaris.php">
                                                <i class="icon-check"></i>
                                                Penghapusan
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-signout"></i>
                                        Keluar
                                    </a>
                                </li>
                            </ul>

                        </div><!--/.sidebar-->
                    </div><!--/.span3-->


                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <?php
                                $Date1 = date("dmY");
                                $Date = ('PN' . $Date1);

                                $Code = mysqli_query(mysqli_connect('localhost', 'root', '', 'inventaris'),"select * from requestpenelitian order by tanggal_request desc limit 1");
                                $r = mysqli_fetch_array($Code);
                                $Kode = substr($r['kode_pinjam'], 2, 8);

                                $Kode1 = substr($r['kode_pinjam'], 10, 3);
                                $hasil = '';


                                if ($Kode == '') {
                                    $int = (int) $Kode1;
                                    if ($int >= 99) {
                                        $angka = $int + 1;
                                        $print = ($Date . $angka);
                                        $hasil = $print;
                                    } else if ($int <= 99 && $int >= 9) {
                                        $angka = $int + 1;
                                        $print = ($Date . '0' . $angka);
                                        $hasil = $print;
                                    } else if ($int < 9) {
                                        $angka = $int + 1;
                                        $print = ($Date . '00' . $angka);
                                        $hasil = $print;
                                    }
                                } else if ($Kode == $Date1) {
                                    $int = (int) $Kode1;
                                    if ($int >= 99) {
                                        $angka = $int + 1;
                                        $print = ($Date . $angka);
                                        $hasil = $print;
                                    } else if ($int <= 99 && $int >= 9) {
                                        $angka = $int + 1;
                                        $print = ($Date . '0' . $angka);
                                        $hasil = $print;
                                    } else if ($int < 9) {
                                        $angka = $int + 1;
                                        $print = ($Date . '00' . $angka);
                                        $hasil = $print;
                                    }
                                } else if ($Kode <> $Date1) {
                                    $int = 0;
                                    if ($int >= 99) {
                                        $angka = $int + 1;
                                        $print = ($Date . $angka);
                                        $hasil = $print;
                                    } else if ($int <= 99 && $int >= 9) {
                                        $angka = $int + 1;
                                        $print = ($Date . '0' . $angka);
                                        $hasil = $print;
                                    } else if ($int < 9) {
                                        $angka = $int + 1;
                                        $print = ($Date . '00' . $angka);
                                        $hasil = $print;
                                    }
                                }
                                echo"
                                <div class=module-head>
                                    <h3>Peminjaman Alat</h3>
                                </div>
                                <div class=module-body>
                                    <form class=form-horizontal row-fluid name=frm>
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>ID Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=$hasil class=span5 disabled>
                                                <input type=hidden id=basicinput value=$hasil class=span5>

                                            </div> </br>
                                            <label class=control-label for=basicinput>Tipe Peminjaman</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder=Penelitian class=span5 disabled>

                                            </div>
                                        </div>
                                        <div class=control-group>
                                            <label class=control-label for=basicinput>Nama Alat </label><label class=control-label for=basicinput><span>*Minimal diisikan satu</span></label></br></br><label class=control-label for=basicinput>Alat Ke-1</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt1 onChange='cekTxt1();' class=span5 required>

                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-2</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt2 onChange='cekTxt2();' class=span5 disabled=true>

                                            </div></br>
                                            <label class=control-label for=basicinput>Alat Ke-3</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt3 onChange='cekTxt3();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-4</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt4 onChange='cekTxt4();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-5</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt5 onChange='cekTxt5();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-6</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt6 onChange='cekTxt6();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-7</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt7 onChange='cekTxt7();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-8</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt8 onChange='cekTxt8();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-9</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt9 onChange='cekTxt9();' class=span5 disabled=true>

                                            </div></br> <label class=control-label for=basicinput>Alat Ke-10</label>
                                            <div class=controls>
                                                <input type=text id=basicinput placeholder='Masukkan Nama Alat' name=txt10 class=span5 disabled=true>

                                            </div></br>

                                        </div>
                                        </br>	

                                        <div class=control-group>
                                            <div class=controls>
                                                <button type=submit class=btn>Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
								";
                                ?>
                            </div><!--/.module-->

                            <br />

                        </div><!--/.content-->
                    </div><!--/.span9-->
                </div>
            </div><!--/.container-->
        </div><!--/.wrapper-->

        <div class="footer">
            <div class="container">


                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
            </div>
        </div>

        <script src="scripts/jquery-1.9.1.min.js"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="scripts/datatables/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $('.datatable-1').dataTable();
                $('.dataTables_paginate').addClass("btn-group datatable-pagination");
                $('.dataTables_paginate > a').wrapInner('<span />');
                $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
                $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
            });
        </script>
        <script src="scripts/jquery.min.js"></script>
        <script>
			function cekTxt1()
			{
				p1 = document.frm.txt1.value;
					
				if(p1!= '')
				{
					document.frm.txt2.disabled=false;
				}
				else{
					document.frm.txt2.disabled=true;
					document.frm.txt3.disabled=true;
					document.frm.txt4.disabled=true;
					document.frm.txt5.disabled=true;
					document.frm.txt6.disabled=true;
					document.frm.txt7.disabled=true;
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt2()
			{
				p2 = document.frm.txt2.value;
					
				if(p2!= '')
				{
					document.frm.txt3.disabled=false;
				}
				else{
					document.frm.txt3.disabled=true;
					document.frm.txt4.disabled=true;
					document.frm.txt5.disabled=true;
					document.frm.txt6.disabled=true;
					document.frm.txt7.disabled=true;
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt3()
			{
				p3 = document.frm.txt3.value;
					
				if(p3!= '')
				{
					document.frm.txt4.disabled=false;
				}
				else{
					document.frm.txt4.disabled=true;
					document.frm.txt5.disabled=true;
					document.frm.txt6.disabled=true;
					document.frm.txt7.disabled=true;
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt4()
			{
				p4 = document.frm.txt4.value;
					
				if(p4!= '')
				{
					document.frm.txt5.disabled=false;
				}
				else{
					document.frm.txt5.disabled=true;
					document.frm.txt6.disabled=true;
					document.frm.txt7.disabled=true;
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt5()
			{
				p5 = document.frm.txt5.value;
					
				if(p5!= '')
				{
					document.frm.txt6.disabled=false;
				}
				else{
					document.frm.txt6.disabled=true;
					document.frm.txt7.disabled=true;
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt6()
			{
				p6 = document.frm.txt6.value;
					
				if(p6!= '')
				{
					document.frm.txt7.disabled=false;
				}
				else{
					document.frm.txt7.disabled=true;
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt7()
			{
				p7 = document.frm.txt7.value;
					
				if(p7!= '')
				{
					document.frm.txt8.disabled=false;
				}
				else{
					document.frm.txt8.disabled=true;
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt8()
			{
				p8 = document.frm.txt8.value;
					
				if(p8!= '')
				{
					document.frm.txt9.disabled=false;
				}
				else{
					document.frm.txt9.disabled=true;
					document.frm.txt10.disabled=true;
				}
			}
			function cekTxt9()
			{
				p9 = document.frm.txt9.value;
					
				if(p9!= '')
				{
					document.frm.txt10.disabled=false;
				}
				else{
					document.frm.txt10.disabled=true;
				}
			}
		</script>
    </body>