<?php
error_reporting(0);
session_start();
include '../library/conectar.php';

if (isset($_POST['btnLogin'])) {
    $usuario = $conect->real_escape_string($_POST['usuario']);
    $password =$conect->real_escape_string(md5($_POST['password']));

    $q = "SELECT * FROM usuarios  WHERE nombre = '$usuario' and contraseña = '$password' AND EstatusUser ='1'";

    if ($resultado = $conect->query($q)) {
        while ($row = $resultado->fetch_array()){
            $userok =$row['nombre'];
            $passwordok = $row['contraseña'];
        }
        $resultado->close();
    }
    $conectar->close();

    if(isset($usuario) && isset($password)) {
        if ($usuario == $userok && $password == $passwordok) {
            $_SESSION['loguin'] = TRUE;
            $_SESSION['usuario'] = $usuario;

            header("location.AppProgres");

        }else{
            $alerta .="esta mal";
        }
    } else{
        header("location.index");
    }
}
?>