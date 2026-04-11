<?php
include 'library/conectar.php';
error_reporting(0);
if($_POST['btnRegistrar']){
    $Nombre = $conect->real_escape_string($_POST['Nombre']);
    $Ap = $conect->real_escape_string($_POST['AP']);
    $Am = $conect->real_escape_string($_POST['AM']);
    $Tel = $conect->real_escape_string($_POST['Tel']);
    $Email = $conect->real_escape_string($_POST['Email']);
    $P = $conect->real_escape_string($_POST['Pw']);
    $P2 = $conect->real_escape_string($_POST['Pw2']);
    $FechaR = $conect->real_escape_string($_POST['FechaR']);
    $TipoUser = 2;
    $Mensaje.="";
    if($Nombre == "") {
    $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo nombre esta vacio, digite su nombre.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } elseif($Ap == "") {
         $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo Apellido Paterno esta vacio, digite su Apellido Paterno.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } elseif($Am == "") {
         $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo Apellido Materno esta vacio, digite su Apellido Materno.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } elseif($Tel == "") {
         $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo correo esta vacio, digite su telefono.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } elseif($Email == "") {
         $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo Telefono esta vacio, digite su Email.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } elseif($P == "") {
         $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo Contraseña esta vacio, digite su contraseña.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } elseif($FechaR == "") {
         $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> El campo Fecha de registro esta vacio, digite su Fecha de registro.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else{
        if($P != $P2){
             $Mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>ERROR! </strong> Las contraseñas no coinciden.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
        }
        else {
            //Registrar el usuario
            $Registro = "INSERT INTO usuario(nombre, apellidoP, apellidoM, telefono, email, contraseña, fechaNac, id_tuser) VALUES('$Nombre', '$Ap', '$Am', '$Tel', '$Email', '$P', '$FechaR', '$TipoUser')";
            $RegistroE = $conect->query($Registro);
            if($RegistroE > 0 ) {
                 $Mensaje="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Registro Exitoso !</strong> Lo datos estan en la base de datos.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
        }
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Registro de usuario</title>
</head>
<body>
    <div class="contailer">
        <h1 class="text-center mt-5">Registro de usuario</h1>
        <p class="text-center text-success">registra tus datos para iniciar sesion</p>
        <div class="row mt-2">
            <?php  echo $Mensaje; ?>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-2 col lg-2"></div>
             <div class="col-sm-10 col-md-8 col-lg-8">
                    <div>
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="row mt-2">
                                <input type="text" name="Nombre" id="nombre" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" name="AP" id="ap" placeholder="Apellido Paterno" class="form-control">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" name="AM" id="am" placeholder="Apellido Materno" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="tel" name="Tel" id="atel" placeholder="55-55-55-55-55" class="form-control">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="email" name="Email" id="email" placeholder="Correo@domino.com" class="form-control">
                                </div>
                                <div class="row mt-2">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="password" name="Pw" id="pw" placeholder="Digite su password" class="form-control">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="password" name="Pw2" id="pw2" placeholder="Confirmar password" class="form-control">
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <input type="date" name="FechaR" id="fechar"  class="form-control">
                                </div>
                        </form>
                                <div class="row mt-2">
                                    <input type="submit" value="Registrar" name="btnRegistrar" class="btn btn-success">
                                </div>
                    </div>
                </div>
            <div class="col-sm-1 col-md-2 col lg-2"></div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.css"></script>
</body>
</html>
