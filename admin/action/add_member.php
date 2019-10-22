<?php
    if (isset($_POST['add_member'])) {
        $name_member = $_POST['name_member'];
        $angkatan_ke = $_POST['angkatan_ke'];

        $check = mysqli_query($mysqli, "SELECT * FROM member WHERE name_member='$name_member'");
        if (mysqli_num_rows($check) == 0) {
            $tambah = mysqli_query($mysqli,"INSERT INTO member (name_member, angkatan_ke, date_member)
            VALUES ('$name_member', '$angkatan_ke', NOW())");

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