
<?php require_once 'includes/conexion.php'?>
<?php require_once 'includes/herlpers.php'?>

<?php  
     $categoria_actual =  consegirCategoria($conexion, $_GET['id']);
     if(!isset($categoria_actual['id'])){
       header("Location: index.php");
     }
?>
 

<!--CEBECERA -->
<?php require_once 'includes/cabecera.php'?>
<!--contenedor-->
<?php require_once 'includes/lateral.php'?>
<!--CAJA PRINCIPAL-->
<div id="principal">
   <h1>Entradas de <?=$categoria_actual['nombre']?></h1>
    <?php 
	$entradas = consegirTodasEntradas($conexion, null, $_GET['id']);
	if(!empty($entradas) && mysqli_num_rows($entradas) >=1 ):
	    while($entrada = mysqli_fetch_assoc($entradas)):
    ?>
	<article class="entrada">
	<a href="entrada.php?id=<?=$entrada['id']?>">
	<h2><?=$entrada['titulo']?></h2>
	<span class="fecha"><?=$entrada['categoria'].'|'.$entrada['fecha']?></span>
	<p>
	  <?=substr($entrada['descripcion'],0, 300)."..."?>
        </p>
        </a>
    </article>

    <?php
	      endwhile;
	else:

	
?>
<div class="alerta">No hay entradas en esta categoria</div>
<?php
	endif;?>

</div>

<?php require_once 'includes/pie.php'?>

