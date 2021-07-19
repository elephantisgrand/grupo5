<!Doctype>
<html lang="es">
  <head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <meta charset="utf-8"/>
    <title>Blog de programacion</title>

  </head>
  <body>
    <!--CABECERA-->
    <header id="cabecera">
      <!--logo-->
      <div id ="logo">
	<a>Blog programacion git</a>
      </div>

    <!--MENU-->
    <nav id="menu">
      <ul>
	<li><a href="index.php">Inicio</a></li>
	<li><a href="index.php">Lenguaje 1</a></li>
	<li><a href="index.php">Lenguaje 2</a></li>
	<li><a href="index.php">Lenguaje 3</a></li>
	<li><a href="index.php">Lenguaje 4</a></li>
	<li><a href="index.php">Contacto</a></li>
      </ul>
    </nav>
    
    </header>

    <div id="contenedor">
    <!--BARRA LATERAL-->
      <aside id="sidebar">
	<div id="login" class="bloque">
	  <h3>Identificate</h3>
	  <form action="login.php" method="POST">
	    <label for="email">Email</label>
	    <input type="email" name="email"/>

	    <label for="password">Contraseña</label>
	    <input type="password" name="password"/>

	    <input type="submit">
	  </form>
	</div>

	<div id="register" class="bloque">
	  <h3>registrate</h3>
	  <form action="registro.php" method="POST">

	    <label for="nombre">nombre</label>
	    <input type="text" name="nombre"/>

	    <label for="apellidos">apellido</label>
	    <input type="text" name="apellidos"/>

	    <label for="email">Email</label>
	    <input type="email" name="email"/>

	    <label for="password">Contraseña</label>
	    <input type="password" name="password"/>

	    <input type="registrar">
	  </form>
	</div>

      </aside>
    <!--CAJA PRINCIPAL-->
      <div id="principal">
	<h1>Ultimas entradas</h1>

	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>

      </div>
    </div>
    
    <!--PIE DE PAGINA-->
    <footer if="pie">
      <p>Desarrollado por el grupo 5 &copy; 2020</p>
    </footer>
  </body>

</html>