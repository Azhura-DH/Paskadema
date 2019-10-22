<?php
    $page = "Anggota";
    include 'inc/config.php';

    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: action/login.php");
        exit;
    }

    include 'inc/header.php';
    include 'inc/sidebar.php';
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Angkatan</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET['act']) AND $_GET['act']=='hapus') {
                    $hapus = mysqli_query($mysqli,"DELETE FROM member
                                        WHERE id_member = '$_GET[id]'");
                    $tes = $_GET['id'];
                    if($hapus) {
                        echo "<script>alert('Data berhasil dihapus!')</script>";
                    } else {
                        echo "<script>alert('Data gagal dihapus!')</script>";
                    }
                }

                $query = mysqli_query($mysqli,"SELECT * FROM member");
                
                if(mysqli_num_rows($query) > 0) {
                    while($data = mysqli_fetch_array($query)) {?>
                        <tr>
                            <td><?=$data["id_member"]?></td>
                            <td><?=$data["name_member"]?></td>
                            <td><?=$data["angkatan_ke"]?></td>
                            <td><?=$data["date_member"]?></td>
                            <td>
                                <a href='?act=edit&id=<?=$data["id_member"]?>'>
                                    <button type='button' class='btn btn-paski-edit bg-transparent'><i class="fa fa-edit"></i></button>
                                </a>
                                <a href='?act=hapus&id=<?=$data["id_member"]?>' OnClick="return confirm('Anda yakin menghapus data?')">
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

<div class="modal fade" id="modalAddMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-paski">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Anggota Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" id="inputMember">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="name_member">Name</label>
                        <input type="text" name="name_member" id="name_member" class="form-control" placeholder="Type the title here..." required/>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="inputAngkatanKe">Angkatan-ke</label>
                        <input type="text" id="inputAngkatanKe" class="form-control" rows="4" cols="50" name="angkatan_ke" form="inputMember" placeholder="Enter text here..." required/>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="inputDateMember">Date</label>
                        <input type="date" id="inputDateMember" class="form-control" rows="4" cols="50" name="date_member" form="inputMember" placeholder="Enter text here..." required/>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" name="add_member" value="Submit" class="btn btn-primary btn-block rounded-pill">
                </div>
            </form>
            <?php include 'action/add_member.php' ?>
        </div>
    </div>
</div>

<div class="add-new" data-toggle="modal" data-target="#modalAddMember">
    <i class="fas fa-plus"></i>
</div>

<?php include 'inc/footer.php'; ?>