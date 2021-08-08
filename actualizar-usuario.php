<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';

    /*If ternario lo mismo de arriva */
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']): false;  
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($conexion,$_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])) : false;

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
        $errores['email'] ="el email no es valido";
        
    }
    
    if(count($errores) == 0)
    {
      $usuario =$_SESSION['usuario'];
      $guardar_usuario=true;
      //COMPROBAR SI EL EMAIL YA EXISTE
      $sql ="SELECT id,email FROM usuarios WHERE email ='$email'";
      $isset_email = mysqli_query($conexion,$sql);
      $isset_user = mysqli_fetch_assoc($isset_email);
      if($isset_user['id']  == $usuario['id'] || empty($isset_user)  ){
        //insertar en la base de datos los datos ingresados
        //ACTUALIZAR USUARIOS EN LA TABLA 
        $usuario =$_SESSION['usuario'];
      
      $sql ="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id =".$usuario['id'].";";

        $guardar = mysqli_query($conexion, $sql);

    
      if($guardar){
	$_SESSION['usuario']['nombre'] = $nombre;
	$_SESSION['usuario']['apellido'] = $apellido;
	$_SESSION['usuario']['email'] = $email;
     
	      
            $_SESSION['completado'] ="completado con exito";
        }else{
            $_SESSION['errores']['general'] ="Fallo al actualizar los usuarios";
        }

      
      }
      else{ 
         $_SESSION['errores']['general'] ="El usuario ya existe";
      }
    }else{
        $_SESSION['errores'] = $errores;
        header('location: index.php');
    }
    
   }
header('location: misdatos.php');
?>
