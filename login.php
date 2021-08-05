<?php
/*Iniciar la secion y conectar la base de datos ya tiene iniciada la seccion*/
require_once 'includes/conexion.php';
/*Recoger los datos del formulario */
if(isset($_POST)){
    
    //Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    //recogo datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    //consulta para cpm´robar las credenciales del usuarios
    $sql ="SELECT * FROM usuarios WHERE email ='$email' LIMIT 1";
    $login = mysqli_query($conexion,$sql);
    /*Si login es true y el numero de columnas es igual a 1  */
    if($login && mysqli_num_rows($login)==1){
        $usuario = mysqli_fetch_assoc($login);
        //comprobar la contrasea
        $verify = password_verify($password,$usuario['password']);

        if($verify){
    //secion de que el eusuario esta logueado
            $_SESSION['usuario'] = $usuario;

            

        }else{
            $_SESSION['error_login'] = "login incorrecto";
        }
        
    }else{
        $_SESSION['error_login'] = "login incorrecto";
        //mensaje de error;
    }
    
}
//REGIRIGIR al indes
header('location: index.php');
?>