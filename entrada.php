
<?php require_once 'includes/conexion.php'?>
<?php require_once 'includes/herlpers.php'?>

<?php  
$entrada_actual =  consegirEntrada($conexion, $_GET['id']);


     if(!isset($entrada_actual['id'])){
       header("Location: index.php");
     } 
?>
 

<!--CEBECERA -->
<?php require_once 'includes/cabecera.php'?>
<!--contenedor-->
<?php require_once 'includes/lateral.php'?>
<!--CAJA PRINCIPAL-->
<div id="principal">


   <h1><?=$entrada_actual['titulo']?></h1>
   <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>"
      <h2>
	<?=$entrada_actual['categoria']?>
      </h2>
   </a>
   <h3><?=$entrada_actual['fecha']?> | <?=$entrada_actual['usuario']?></h3>
    <p><?=$entrada_actual['descripcion']?></p>

<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']):?>
</br>
	    <a href="editar-entrada.php?id=<?=$entrada_actual['id']?>"  class="boton boton-naranja">Editar entrada<a/>
</br>
<a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-naranja">Eliminar entrada<a/>

<?php endif ?>

</div>

<?php require_once 'includes/pie.php'?>
