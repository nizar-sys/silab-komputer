<div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Sistem Praktikum Jurusan Elektro </a>
    <div class="nav-collapse collapse navbar-inverse-collapse">
        
        <ul class="nav pull-right">
            <li><a href="#"><?php echo "$_SESSION[username]";?> </a></li>
            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/user.png" class="nav-avatar" />
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a href="components/logout_proses.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.nav-collapse -->
</div>