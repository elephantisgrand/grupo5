<?php

if(isset($_POST)){
  //conexion a la base de datos

  require_once 'includes/conexion.php';

  if(!isset($_SESSION)){
    session_start();
  }

  $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;


  $errores=array();

  if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
    $nombre_validado = true;

  } else{
    $nombre_validado = false;
    $errores['nombre'] = "El nombre no es valido mi brow";
  }



  if(count($errores) == 0){
    $sql = "INSERT INTO categorias VALUES(NULL,'$nombre');";
    $guardar = mysqli_query($conexion, $sql);
  }

}
header("Location: index.php");
?>
