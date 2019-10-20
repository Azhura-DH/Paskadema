<?php
    if (isset($_POST['add_category'])) {
        $category = $_POST['category'];

        $check = mysqli_query($mysqli, "SELECT * FROM news_category WHERE category='$category'");
        if (mysqli_num_rows($check) == 0) {
            $tambah = mysqli_query($mysqli,"INSERT INTO news_category (category)
            VALUES ('$category')");

            if($tambah) {
                echo "<script>alert('Data berhasil ditambahkan!')</script>";
            } else {
                echo "<script>alert('Data gagal ditambahkan!')</script>";
            }
        } else {
            echo "<script>alert('Data sudah ada!')</script>";
        }
    }
?>