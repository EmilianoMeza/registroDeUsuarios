<?php
error_reporting(0);
$server = "localhost";
$userDB = "root";
$Password ="";
$Bd = "proyecto";
$conect = new mysqli($server, $userDB, $Password, $Bd);
if($conect -> conect_error){
    die("error al conectar la base de datos".$conect->conect_error());
}
else{
    echo "conexion exitosa";
}
?>