<?php require_once 'includes/redireccionar.php';?>

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



<!--Caja principal-->
<div id="principal">
  <h1>Editar Entradas</h1>

  <p>Edita tu entrada<?=$entrada_actual['titulo'] ?></p><br/>
 
  <form action="guardar-entrada.php?editar=<?=$entrada_actual['id'];?>" method="POST">


    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" placeholder="ingrese su tituto" value="<?=$entrada_actual['titulo']?>"><br/>
    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'titulo') : '';?>

 

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>

    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'descripcion') : '';?>


    <label for="categoria"></label>
    <select name="categoria">
	<?php 
	$categorias = consegirCategorias($conexion);
	if(!empty($categorias)):
    	  while($categoria = mysqli_fetch_assoc($categorias)):
	?>

	<option value="<?=$categoria['id']?>"
	
	       <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>

	  <?=$categoria['nombre']?>
	  </option>
	<?php
	   endwhile;
        endif;
	?>
      
    </select>



    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'categoria') : '';?>



    <input type="submit" value="guardar">

  </form>
  
  <?php borrarErrores();?>



</div>







<?php require_once 'includes/pie.php'?>
