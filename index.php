<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RiconDeProgramadores</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <header id="cabecera">
<div class="wrapper">
  <nav>
    <div class="content">
    <div class="logo"><a href="#">RiconDeProgramadores</a></div>
    <!--menu -->  
    <ul class="links">
        <li><a href="#">Inicio</a></li>
	<li><a href="#">Lenguaje1</a></li>
	<li><a href="#">Lenguaje2</a></li>
	<li><a href="#">Lenguaje3</a></li>
	<li><a href="#">Lenguaje4</a></li>
      </div>
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

	    <input type="submit">
	  </form>
	</div>

      </aside>
    <!--CAJA PRINCIPAL-->
      <div id="principal">
	<h1>Ultimas Publicaciones</h1>

	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>

	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>

      </div>
    </div> 


    <!--PIE DE PAGINA-->
    <footer id="pie">
      <p>Desarrollado por el grupo 5 &copy; 2020</p>
    </footer>
  </body>
</html>
=======
<?php require_once 'includes/cabecera.php' ?>
<!--BARRA LATERAL-->
<?php require_once 'includes/latereal.php' ?>
<!--CAJA PRINCIPAL-->
      <div id="principal">
	<h1>Ultimas Publicaciones</h1>

	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>

	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>
	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>
	<article class="entrada">
	  <h2>Titulo de mi entrada</h2>
	  <p>
	    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
	  </p>
	<article>
      <div id="ver-todas">
	<a href="#">ver toda las entradas</a>		
      </div>
    </div>

<?php require_once 'includes/pie.php' ?>
>>>>>>> origin/freddyLobato
