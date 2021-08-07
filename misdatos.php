<?php require_once 'includes/conexion.php';?>
<?php require_once 'includes/redireccionar.php';?>
<?php require_once 'includes/cabecera.php';?>
<?php require_once 'includes/lateral.php';?>

<div id="principal">
  <h2>Mis Datos</h2>


        <!--mostrar errores-->
                <?php if(isset($_SESSION['completado'])) :?>
                    <div class="alerta alerta-exito">
                    <?=$_SESSION['completado']?>
                    </div>
                <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alerta alerta-exito">
                    <?= $_SESSION['errores']['general'] ?>
                    </div>
                <?php endif; ?>



                <form action="actualizar-usuario.php" method="POST">
                    <label for="nombre">nombre</label>
		    <input type="text" name="nombre" placeholder="nombre" value="<?=$_SESSION['usuario']['nombre']?>" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'nombre') : '';?>

                    <label for="apellido">Apellido</label>
		      <input type="text" name="apellido" placeholder="apellido" value="<?=$_SESSION['usuario']['apellido']?>" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'apellido') : '';?>
                    

                    <label for="email">Email</label>
		      <input type="email" name="email" placeholder="email" value="<?=$_SESSION['usuario']['email']?>" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'email') : '';?>


                    <input type="submit" value="actualizar" name="actualizar" />
                </form>
                <?php borrarErrores();?>


</div>

<?php require_once 'includes/pie.php'?>
