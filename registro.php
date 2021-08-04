<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';

    if(!isset($_SESSION)){
    session_start(); 
    }
    /*If ternario lo mismo de arriva */
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']): false;  
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conexion,$_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conexion,$_POST['password']) : false;

    //array de errores
    $errores = array();
    //validar los datos antes de ir ala base de datos
    //VALIDANDO NOMBRRE
    if(!empty($nombre) && !is_numeric($nombre) &&  !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] ="el nombre no es valido";
    }
    //VALIDANDO APELLIDO
    if(!empty($apellido) && !is_numeric($apellido) &&  !preg_match("/[0-9]/", $apellido)){
        $apellido_validado = true;
    }else{
        $apellido_validado = false;
        $errores['apellido'] ="el apellido no es valido";
    }
    //VALIDANDO EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] ="email no valido";
        
    }
    //VALIDANDO contrasena
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] ="la contrasena esta vacia";
    }
    
    if(count($errores) == 0)
    {
        //insertar en la base de datos los datos ingresados
        //cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        //INSERTAR USUARIOS EN LA TABLA 
        $sql ="INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$email','$password_segura',CURDATE())";
        $guardar = mysqli_query($conexion, $sql);
 
        if($guardar){
            $_SESSION['completado'] ="registro realizado con exitoff!";
        }else{
            $_SESSION['errores']['general'] ="Fallo al guardar los usuarios";
        }
    }else{
        $_SESSION['errores'] = $errores;
        header('location: index.php');
    }
}
header('location: index.php');
?>
