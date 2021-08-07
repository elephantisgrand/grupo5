
<?php require_once 'includes/conexion.php'?>
<!--CEBECERA -->
<?php require_once 'includes/cabecera.php'?>
<!--contenedor-->
<?php require_once 'includes/lateral.php'?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1> TODAS LAS  ENTRADAS</h1>
    <?php 
	$entradas = consegirTodasEntradas($conexion, null);
	if(!empty($entradas)):
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
	endif;
    ?>

</div>

<?php require_once 'includes/pie.php'?>
