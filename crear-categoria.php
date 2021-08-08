<?php require_once 'includes/redireccionar.php'?>
<?php require_once 'includes/cabecera.php'?>
<?php require_once 'includes/lateral.php'?>
<!--caja principal-->
<div id="principal">
  <h1>Crear categorias</h1>
  <p>Añade una nueva entrada para que los usuarios puedan crear una entrada</p><br/>
  <form action="guardar-categoria.php" method="POST">

    
    <label for="nombre"> Nombre</label>
    <input type="text" name="nombre"/>


    <input type="submit" value="guardar"/>      

  </form>
</div>
<?php require_once 'includes/pie.php'?>