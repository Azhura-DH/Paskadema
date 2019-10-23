<?php
    if (isset($_POST['add_news'])) {
        $title_news = $_POST['title_news'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $check = mysqli_query($mysqli, "SELECT * FROM news WHERE title_news='$title_news'");
        if (mysqli_num_rows($check) == 0) {
            $tambah = mysqli_query($mysqli,"INSERT INTO news (title_news, description, date_news, id_category)
            VALUES ('$title_news', '$description', NOW(), '$category')");

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