<?php
include '../library/conectar.php';
$id = $_GET['id_usuario'];
$borrarBD = "DELETE FROM usuario WHERE id_usuario = '$id'";
$borrarE =  $conect->query($borrarBD);  
if($borrarE > 0){
    header("location:../lista.php");
}
?>                                                         