
<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">MAIN MENU </a>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Profile</a>
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
                <a href="settings.php" id="menu-status"><i class="fa fa-dashboard"></i>Status Kamar</a>
            </li>
			<li>
                <a href="room.php" id="menu-tambah"><i class="fa fa-plus-circle"></i>Tambah Kamar</a>
            </li>
            <li>
                <a  href="roomdel.php" id="menu-hapus"><i class="fa fa-trash-o"></i>Hapus Kamar</a>
            </li>



    </div>

</nav>
<!-- /. NAV SIDE  -->