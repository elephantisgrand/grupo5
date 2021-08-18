<?php require_once 'includes/herlpers.php';?>
<?php require_once 'conexion.php';?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <!--Ingresar el Stylo Css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <meta charset="UTF-8">
    <title>programadno</title>
</head>

<body>
<header id="cabecera">
	<!--MENU-->
<div class="wrapper">
        <nav>
            <div class="content">
    <div class="logo"><a href="index.php">RiconDeProgramadores</a></div>
    <!--menu -->  
    <ul class="links">
                <li><a href="index.php">Inicio</a></li>
                <?php
		    $categorias = consegirCategorias($conexion);
		    if(!empty($categorias)):
	  		while($categoria = mysqli_fetch_assoc($categorias)):

                 ?>
                <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                </li>
		<?php 
			  endwhile;
		     endif;
		?>
        
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div id="contenedor">
