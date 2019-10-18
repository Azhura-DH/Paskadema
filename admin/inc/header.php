<?php
    include 'inc/config.php';
    
    session_start();
    
    if(!isset($_SESSION['nama']) AND !isset($_SESSION['password'])){
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$page?> - ADMIN</title>
        <!-- <link rel="icon" href="img/favicon.ico">
        <link href="css/style.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="../styles/bootstrap4.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="../script/jquery.js"></script>
        <script src="../script/popper.js"></script>
        <script src="../script/bootstrap4.js"></script>
        <script src="../script/main.js"></script>
    </head>

    <body>
