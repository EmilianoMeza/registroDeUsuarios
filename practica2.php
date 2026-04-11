<?php
include 'library/conectar.php';
if($_POST['btn']){
    $Email = $conect ->real_escape_string($_POST['Email']);
    echo "Tu email es: ".$Email;
    if($Email == " "){
        echo "por favor digite su email";
    }
    else{
        $inserta = "INSERT INTO newletter(Email) values('$Email')";
        $insertaTo = $CONECT->QUERY($inserta);

        if($insertaTo){
            echo "registro exitoso";
        }
        else{
            echo "Error al insertar";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Bienvenido a boostrap :D</title>
</head>

<body>
    <?php
        include "compoents/navbar.php";
    ?>
    <!--Inicia el hero-->
    <div class="row ">
        <div class="col-sm-6 col-md-6 col-lg-6 ">
            <div class="row">
                <h1 class="text-center">Bienvenidos</h1>
            </div>
            <div class="row">
                <p class="text-secondary text-center">esto es una practica de maquetado</p>
            </div>
            <div class="row ">
                <div class="col-md-1"></div>
                <div class="col-md-4 text-center">
                    <button class="btn btn-primary">Contactanos</button>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 bg-success">2</div>
    </div>
    <!--Inicia el hero-->
    <!--Inicia cards-->
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-4 col-col-lg-4 ">
                <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-col-lg-4 ">
                <div class="row mt-6">
                    <div class="card" style="width: 25rem;">
                    <img src="img/unnamed.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn btn-primary">Ir al blog</a>
                    </div>
                </div>
            </div>
                </div>
                
            <div class="col-sm-12 col-md-4 col-col-lg-4 ">
                <div class="row mt-6">
                    <div class="card" style="width: 25rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
   
    <!--Inician cards-->
    <div class="container"></div>
    <div class="row mt-5">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="p justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, voluptas. Enim quasi sunt ratione et ea eius, hic modi culpa laudantium recusandae molestiae distinctio nulla molestias dolores eos suscipit neque!
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <video src="..." class="object-fit-contain" autoplay></video>
        </div>
    </div>
    <div class="row mt-3">

    </div>
    <div class="row mt-2">
        <div class="col">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="row mt-2">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <input type="email" name="Email" id="email" placeholder="digite tu email class">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <input type="submit" value="Registrar" class="btn btn-success" name="btn">
                </div>
            </div>    
        </form>
    </div>
    </div>
    
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>