<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'paskadema';
    
    $mysqli = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi database gagal!");
    
?>