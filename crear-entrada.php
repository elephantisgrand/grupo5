<?php require_once 'includes/conexion.php';?>
<?php require_once 'includes/redireccionar.php';?>
<?php require_once 'includes/cabecera.php';?>
<?php require_once 'includes/lateral.php';?>

<!--Caja principal-->
<div id="principal">
  <h1>Crear Entradas</h1>

  <p>Ingrese nuevas entradas al blog!</p><br/>
 
  <form action="guardar-entrada.php" method="POST">


    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" placeholder="ingrese su tituto"><br/>
    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'titulo') : '';?>

 

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion"></textarea>

    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'descripcion') : '';?>


    <label for="categoria"></label>
    <select name="categoria">
	<?php 
	$categorias = consegirCategorias($conexion);
	if(!empty($categorias)):
    	  while($categoria = mysqli_fetch_assoc($categorias)):
	?>

	  <option value="<?=$categoria['id']?>">
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
