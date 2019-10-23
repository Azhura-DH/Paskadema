<body>
    <?php
        include 'headers/head.php';
        include 'admin/inc/config.php';
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-9">
                <?php
                    $query = mysqli_query($mysqli,"SELECT * FROM news ORDER BY id_news DESC");
                    
                    if(mysqli_num_rows($query) > 0) {
                        while($data = mysqli_fetch_array($query)) {?>
                            <div class="card mb-2">
                                <div class="date">
                                    <p><?=$data['date_news']?></p>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$data['title_news']?></h4>
                                    <p class="card-text"><?=$data['description']?></p>
                                </div>
                            </div>
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
            </div>
            <div class="col-sm-3">
                <?php
                    $query = mysqli_query($mysqli,"SELECT * FROM news_category ORDER BY category");
                    
                    if(mysqli_num_rows($query) > 0) {
                        while($data = mysqli_fetch_array($query)) {?>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <p class="card-text"><?=$data['category']?></p>
                                </div>
                            </div>
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
            </div>
        </div>
    </div>
</body>
</html>