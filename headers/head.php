<?php
    include 'helmet.php'
?>

<nav class="navbar navbar-expand-sm bg-primary-custom navbar-dark fixed-top">
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="event.php">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="profile.php" data-toggle="dropdown">About</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="sejarah.php">Sejarah</a>
                    <a class="dropdown-item" href="#">Anggota</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script>
    $('.navbar-nav .nav-item').click(function(){
        $('.navbar-nav .nav-item').removeClass('active');
        $(this).addClass('active');
    })

    $(".dropdown-toggle").on("mouseenter", function () {
        // make sure it is not shown:
        if (!$(this).parent().hasClass("show")) {
            $(this).click();
        }
    });

    $(".btn-group, .dropdown").on("mouseleave", function () {
        // make sure it is shown:
        if ($(this).hasClass("show")){
            $(this).children('.dropdown-toggle').first().click();
        }
    });
</script>