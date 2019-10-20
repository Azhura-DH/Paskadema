<body>
    <?php
        include 'headers/head.php';
        include 'admin/inc/config.php';
    ?>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($mysqli,"SELECT * FROM news ORDER BY id_news DESC");
                    
                    if(mysqli_num_rows($query) > 0) {
                        while($data = mysqli_fetch_array($query)) {?>
                            <tr>
                                <td><?=$data["id_news"]?></td>
                                <td><?=$data["title_news"]?></td>
                                <td><?=$data["description"]?></td>
                                <td><?=$data["date_news"]?></td>
                            </tr>
                        <?php
                        }
                    } else {
                        echo "
                            <tr>
                                <td>Tidak ada data.</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>