<?php
$server="localhost";
$user="root";
$password="";
$nameBD="rincondeprogramadores";
$conexion = mysqli_connect($server,$user,$password,$nameBD);
mysqli_query($conexion,"SET NAMES 'UTF-8'");
//iniciar la secion
if(!isset($_SESSION)){
session_start();
}

?>
