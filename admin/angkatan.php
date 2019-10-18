<?php
    $page = "Angkatan";
    include 'inc/config.php';

    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: action/login.php");
        exit;
    }

    include 'inc/header.php';
    include 'inc/sidebar.php';
?>

<div class="container">
    <p>angkatan</p>
</div>

<?php include 'inc/footer.php'; ?>