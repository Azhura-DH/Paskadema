<?php
    include 'verify.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN ADMIN</title>
        <!-- <link rel="icon" href="img/favicon.ico">
        <link href="css/style.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="../../styles/bootstrap4.css">
        <script src="../../script/bootstrap4.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-4 offset-sm-4 rounded-lg p-5 bg-dark shadow-lg">
                    <h3 class="text-center text-light">Login</h3>
                    <form name="login" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" class="mt-5">
                        <div class="form-group">
                            <input type="username" name="username" class="form-control" placeholder="Username">
                            <span class="text-primary"><?=$username_err?></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <span class="text-primary"><?=$password_err?></span>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>