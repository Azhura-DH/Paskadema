<?php
    $page = "News Category";
    include 'inc/config.php';

    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: action/login.php");
        exit;
    }

    include 'inc/header.php';
    include 'inc/sidebar.php';

    include 'action/add_news_category.php'
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET['act']) AND $_GET['act']=='hapus') {
                    $hapus = mysqli_query($mysqli,"DELETE FROM news_category
                                        WHERE id_category = '$_GET[id]'");
                    $tes = $_GET['id'];
                    if($hapus) {
                        echo "<script>alert('Data berhasil dihapus!')</script>";
                    } else {
                        echo "<script>alert('Data gagal dihapus!')</script>";
                    }
                }

                $query = mysqli_query($mysqli,"SELECT * FROM news_category");
                
                if(mysqli_num_rows($query) > 0) {
                    while($data = mysqli_fetch_array($query)) {?>
                        <tr>
                            <td><?=$data["id_category"]?></td>
                            <td><?=$data["category"]?></td>
                            <td>
                                <a href='?act=edit&id=<?=$data["id_category"]?>'>
                                    <button type='button' class='btn btn-paski-edit bg-transparent'><i class="fa fa-edit"></i></button>
                                </a>
                                <a href='?act=hapus&id=<?=$data["id_category"]?>' OnClick="return confirm('Anda yakin menghapus data?')">
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

<div class="modal fade" id="modalAddCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Kategori Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" id="inputCategory">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="category">Category</label>
                        <input type="text" name="category" id="category" class="form-control" placeholder="Enter new category..." required>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" name="add_category" value="Submit" class="btn btn-primary btn-block rounded-pill">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="add-new" data-toggle="modal" data-target="#modalAddCategory">
    <i class="fas fa-plus"></i>
</div>

<?php include 'inc/footer.php'; ?>