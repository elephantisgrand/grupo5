	<aside id="sidebar">



<div id="buscador" class="bloque">
<h3>Buscar</h3>

<form action="buscar.php" method="POST">
<input type="text" name="busqueda" placeholder="que deseas buscar?" />
<input type="submit" value="buscar" />

</form>
</div>












<!--Mostrar bloque solo cuando la cecion es pepa-->
            <?php if(isset($_SESSION['usuario'])):?>
            <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'] ;?></h3>
            <!--Botones-->
            <a href="crear-entrada.php"  class="boton boton-naranja">Crear entrada<a/>
            <a href="crear-categoria.php"  class="boton boton-naranja">Crear categorias<a/>
            <a href="misdatos.php"  class="boton boton-verde">Mis datos<a/>
            <a href="cerrar.php" class="boton">cerrar sesion</a>
        </div>
            <?php endif;?>


	    <?php if(!isset($_SESSION['usuario'])):?>  <!--Esta linear de código hace que cuando el usuario este logueado retire las demas cajas de identificate y registrate-->
	    <div id="login" class="bloque">
		<h3>Identificate</h3>

	    <?php if(isset($_SESSION['error_login'])):?>
	    <div class="alerta alerta-error">
	    <?= $_SESSION['error_login'] ;?></h3>
	    </div>
	    <?php endif;?>



		<form action="login.php" method="POST">
		    <label for="email">Email</label>
		    <input type="email" name="email" placeholder="email" />

		    <label for="password">Contraseña</label>
		    <input type="password" name="password" placeholder="password" />

		    <input type="submit" value="Entrar" />

		</form>
	    </div>
	    <!--Registo-->
            <div id="register" class="bloque">
                <h3>Registrate</h3>
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



                <form action="register.php" method="POST">
                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre" placeholder="nombre" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'nombre') : '';?>

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" placeholder="apellido" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'apellido') : '';?>
                    

                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="email" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'email') : '';?>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="pass" />
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'password') : '';?>

                    <input type="submit" value="registrar" name="submit" />
                </form>
                <?php borrarErrores();?>
            </div>
	    <?php endif ?>
        </aside>
