<nav class="navbar hide-small fixed-top navbar-expand-sm bg-primary navbar-dark navbar-fixed">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        </li>
    </ul>
    <a class="navbar-brand" href="../index.php">Paskadema</a>
</nav> 

<div class="page-wrapper toggled chiller-theme">
    <a id="show-sidebar" class="btn btn-sm text-white" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand" id="close-sidebar">
                <a>Tutup</a>
                <div>
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="siswa-info">
                    <span class="siswa-name"><?=$_SESSION["username"]?></span>
                </div>
            </div>
            
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>Menu</span>
                    </li>
                    <li>
                        <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="news.php">
                            <i class="fas">&#xf1ea;</i>
                            <span>News</span>
                        </a>
                    </li>

                    <li>
                        <a href="event.php">
                            <i class="material-icons">event</i>
                            <span>Event</span>
                        </a>
                    </li>

                    <li>
                        <a href="angkatan.php">
                            <i class="fas">&#xf0c0;</i>
                            <span>Angkatan</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="spp.php">
                            <i class="fas fa-book"></i>
                            <span>SPP</span>
                        </a>
                    </li>

                    <li>
                        <a href="transaksi.php">
                            <i class="fas fa-history"></i>
                            <span>Transaksi Siswa</span>
                        </a>
                    </li>

                    <li>
                        <a href="jurnal.php">
                            <i class="fas fa-journal-whills"></i>
                            <span>Jurnal Admin</span>
                        </a>
                    </li> -->
                     
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="setting.php">
                <i class="fa fa-cog"></i>
            </a>
            <a href="action/logout.php">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content"> 
    <div class="container-fluid" id="mainbody">