<?php
    include 'inc/config.php';
    
    session_start();
    
    if(!isset($_SESSION['nama']) AND !isset($_SESSION['password'])){
        header('location:login.php');
    } else {
        header('location:index.php');
    }
?>