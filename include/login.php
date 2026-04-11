<?php
include '../library/conectar.php';
include '../include/login2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <!--navbar-->
    <?php
            include '../compoents/navbar.php';
        ?>
    <!--termina navbar-->
<h1 class="text-center mt-4">Inicio de sesion</h1>
<!--hero-->
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" methos="post">
        <div class="row mt-3 text-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <input type="text" name="Usuario" id="usuario" placeholder="Usuario" class="form-control">
                <input type="password" name="pass" id="pass" placeholder="password" class="form-control">
                <input type="submit" value="ingresar" class="btn btn-sm btn-mt=3 btn-success">
            </div>
        </div>
    </form>
</div>
    <script src="../assets/js/bootstrap.min.css"></script>
</body>
</html>