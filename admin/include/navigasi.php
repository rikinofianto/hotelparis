<?php
// var_dump($_SESSION["menu_aktif"]);
?>
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Profil</a>
                    </li>
                    <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a class="" href="home.php" id="menu-status"><i class="fa fa-dashboard"></i> Status</a>
                </li>
                <li>
                    <a href="messages.php" id="menu-inbox"><i class="fa fa-desktop"></i> Pesan Masuk</a>
                </li>
                <li>
                    <a href="roombook.php" id="menu-booking"><i class="fa fa-bar-chart-o"></i> Pemesanan Kamar</a>
                </li>
                <li>
                    <a href="payment.php" id="menu-payment"><i class="fa fa-qrcode"></i> Pembayaran</a>
                </li>
                <li>
                    <a  href="profit.php" id="menu-profit"><i class="fa fa-qrcode"></i> Status Keuntungan</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                </li>
                </ul>

        </div>

    </nav>