<nav class="navbar hide-small fixed-top navbar-expand-sm bg-paski navbar-dark navbar-fixed">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        </li>
    </ul>
    <a class="navbar-brand" href="../index.php">Paskadema</a>
</nav> 

<div class="page-wrapper toggled chiller-theme">
    <a id="show-sidebar" class="btn btn-sm bg-transparent text-white" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand" id="close-sidebar">
                <a><?=date("d/m/Y")?></a>
                <div>
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <!-- <div class="sidebar-header">
                <div class="profile-header">
                    <img class="rounded-circle profile-img" src="../images/logo.jpg" alt="">
                    <p>Paskadema Senanjaya</p>
                </div>
            </div> -->

            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="../images/logo.jpg"
                    alt="User picture">
                </div>
                <div class="user-info">
                    <span class="user-name">
                        <?=$_SESSION["username"]?>
                    </span>
                    <span class="user-role">Administrator</span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>
                        <span>Online</span>
                    </span>
                </div>
            </div>
            
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>Menu</span>
                    </li>
                    <li class="<?= basename($_SERVER['PHP_SELF']) == "index.php" ? "sidebar-active" : "" ?>">
                        <a class="menu-item-paski" href="index.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-dropdown <?= basename($_SERVER['PHP_SELF']) == "news.php" || basename($_SERVER['PHP_SELF']) == "news_category.php" ? "sidebar-active" : "" ?>">
                        <a class="menu-item-paski" href="#">
                            <i class="fas">&#xf1ea;</i>
                            <span>News</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="submenu-item-paski">
                                <li>
                                    <a href="news.php">News</a>
                                </li>
                                <li>
                                    <a href="news_category.php">News Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="<?= basename($_SERVER['PHP_SELF']) == "event.php" ? "sidebar-active" : "" ?>">
                        <a class="menu-item-paski" href="event.php">
                            <i class="material-icons">event</i>
                            <span>Event</span>
                        </a>
                    </li>

                    <li class="<?= basename($_SERVER['PHP_SELF']) == "anggota.php" ? "sidebar-active" : "" ?>">
                        <a class="menu-item-paski" href="anggota.php">
                            <i class="fas">&#xf0c0;</i>
                            <span>Anggota</span>
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