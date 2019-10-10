<?php
    include 'helmet.php'
?>

<nav class="navbar navbar-expand-sm bg-primary-custom navbar-dark fixed-top">
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../main/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../events/event.php">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../news/news.php">News</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../about/about.php" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
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
</script>