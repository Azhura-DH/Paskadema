<?php
    $page = "News";
    include 'inc/config.php';

    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: action/login.php");
        exit;
    }

    include 'inc/header.php';
    include 'inc/sidebar.php';

    include 'action/add_news.php';
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Date</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
                function ellipsis($str, $len){
                    return strlen($str) > $len ? substr($str, 0, $len)."..." : $str;
                }

                if(isset($_GET['act']) AND $_GET['act']=='hapus') {
                    $hapus = mysqli_query($mysqli,"DELETE FROM news
                                        WHERE id_news = '$_GET[id]'");
                    $tes = $_GET['id'];
                    if($hapus) {
                        echo "<script>alert('Data berhasil dihapus!')</script>";
                    } else {
                        echo "<script>alert('Data gagal dihapus!')</script>";
                    }
                }

                $query = mysqli_query($mysqli,"SELECT news.id_news, news.title_news, news.description, news.date_news, news_category.category FROM news INNER JOIN news_category ON news.id_category = news_category.id_category ORDER BY news.id_news DESC");

                if(mysqli_num_rows($query) > 0) {
                    while($data = mysqli_fetch_array($query)) {?>
                        <tr>
                            <td><?=$data["id_news"]?></td>
                            <td><?=ellipsis($data["title_news"], 15)?></td>
                            <td><?=ellipsis($data['description'], 70)?></td>
                            <td><?=$data["category"]?></td>
                            <td><?=$data["date_news"]?></td>
                            <td>
                                <button type="button" name="view" id="<?php echo $data["id_news"]; ?>" class="btn btn-paski-view bg-transparent btn-xs view_data">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <a href='?act=edit&id=<?=$data["id_news"]?>'>
                                    <button type='button' class='btn btn-paski-edit bg-transparent'><i class="fa fa-edit"></i></button>
                                </a>
                                <a href='?act=hapus&id=<?=$data["id_news"]?>' OnClick="return confirm('Anda yakin menghapus data?')">
                                    <button type='button' class='btn btn-paski-delete bg-transparent'><i class="fa fa-trash"></i></button>
                                </a>
                            </td>
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

<div class="modal fade" id="modalAddNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-paski">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Berita Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" id="inputNews">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="titleNews">Title</label>
                        <input type="text" name="title_news" id="titleNews" class="form-control" placeholder="Type the title here..." required>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="inputDescription">Description</label>
                        <textarea id="inputDescription" class="form-control" rows="4" cols="50" name="description" form="inputNews" placeholder="Enter text here..." required></textarea>
                    </div>
                    <!-- <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="inputDate">Date</label>
                        <input id="inputDate" type="date" id="orangeForm-pass" class="form-control validate" required>
                    </div> -->
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="category">Category</label>
                        <?php
                            $data_category = mysqli_query($mysqli, "SELECT * FROM news_category ORDER BY category ASC");
                        ?>
                        <select name="category" class="form-control">
                            <?php while ($opsi = mysqli_fetch_array($data_category)) { ?>
                            <option value="<?=$opsi["id_category"]?>"><?=$opsi["category"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" name="add_news" value="Submit" class="btn btn-primary btn-block rounded-pill">
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content border-paski">
            <div class="modal-header">
                <h4 class="modal-title">News Detail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="news_detail">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-paski-dark text-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="add-new" data-toggle="modal" data-target="#modalAddNews">
    <i class="fas fa-plus"></i>
</div>

<script src="script/modal_view.js"></script>

<?php include 'inc/footer.php'; ?>