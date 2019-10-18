<?php
    include 'inc/config.php';

    session_start();
     
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>

<div>index</div>

<a href="logout.php">Log Out</a>

<?php include 'inc/footer.php'; ?>