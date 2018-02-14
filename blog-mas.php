	<?php
//Conectamos a la base de datos
	require('conex.php');

//Evitamos que salgan errores por variables vacías
	error_reporting(E_ALL ^ E_NOTICE);

//Cantidad de resultados por página (debe ser INT, no string/varchar)
	$cantidad_resultados_por_pagina = 6;

//Comprueba si está seteado el GET de HTTP
	if (isset($_GET["pagina"])) {

	//Si el GET de HTTP SÍ es una string / cadena, procede
		if (is_string($_GET["pagina"])) {

		//Si la string es numérica, define la variable 'pagina'
			if (is_numeric($_GET["pagina"])) {

			 //Si la petición desde la paginación es la página uno
			 //en lugar de ir a 'index.php?pagina=1' se iría directamente a 'index.php'
				if ($_GET["pagina"] == 1) {
					header("Location: blog.php");
					die();
			 } else { //Si la petición desde la paginación no es para ir a la pagina 1, va a la que sea
			 	$pagina = $_GET["pagina"];
			 };

		 } else { //Si la string no es numérica, redirige al index (por ejemplo: index.php?pagina=AAA)
		 	header("Location: blog.php");
		 	die();
		 };
		};

} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
	$pagina = 1;
};

//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
$empezar_desde = ($pagina-1) * $cantidad_resultados_por_pagina;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Blog - Residencial Polo Club</title>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet"> 	

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/hover-min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--JS-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

</head>
<body>
	<!-- Nav -->
	<header>
		<div id="social" class="row">
        <div id="socialcontain">
          <span class="light col s12 m6 socialtext">Informes (55)1408-6072 & (55)2690-1218 | info@residencialpolo.mx</span>
          <div class="col s12 m6 socialimg">
            <a href="" class="right"><img src="img/instagram.png" alt=""></a>
            <a href="" class="right"><img src="img/facebook.png" alt=""></a>
          </div>
        </div>
      </div>
		<div id="nav" class="row">
        <div class="container center light" style="height: 100%;">
          <a href="index.html"><div class="col l1 navtext hvr-bubble-bottom" hovered>Inicio</div></a>
          <a href="master-plan.html"><div class="col l2 navtext hvr-bubble-bottom">Master Plan</div></a>
          <a href="vinedos-del-polo.html"><div class="col l2 navtext hvr-bubble-bottom">Viñedos del polo</div></a>
          <a href="albacara.html"><div class="col l2 navtext hvr-bubble-bottom">Albacara</div></a>
          <a class='dropdown-button col l2 navtext' href='#' data-activates='dropdown1'>Recorrido Virtual</a>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="recorrido1.html" id="droptext" class="center navtext" >Casa Uno</a></li>
            <li><a href="recorrido2.html" id="droptext" class="center navtext">Casa Dos</a></li>
          </ul>
          <a href="blog.php"><div class="col l1 navtext hvr-bubble-bottom">Blog</div></a>
          <a href="contacto.html"><div class="col l2 navtext hvr-bubble-bottom">Contacto</div></a>
        </div>
      </div>
	</header>
	<script type="text/javascript"> $(".button-collapse").sideNav();</script>
	<!-- Nav -->

	<main>
		<div class="row">
				<div class="container">
				<div class="col s12 animated fadeIn"><h4 style="margin-left: 10px">Ultimas entradas:</h4></div>
				<?php
				include 'conex.php';
//Obtiene TODO de la tabla
				$obtener_todo_BD = "SELECT * FROM entrada";

//Realiza la consulta
				$consulta_todo = mysql_query($obtener_todo_BD);

//Cuenta el número total de registros
				$total_registros = mysql_num_rows($consulta_todo);

//Obtiene el total de páginas existentes
				$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina); 

//Realiza la consulta en el orden de ID ascendente (cambiar "id" por, por ejemplo, "nombre" o "edad", alfabéticamente, etc.)
//Limitada por la cantidad de cantidad por página
				$consulta_resultados = mysql_query("SELECT * FROM entrada ORDER BY idEntrada DESC LIMIT $empezar_desde,$cantidad_resultados_por_pagina");

//Crea un bluce 'while' y define a la variable 'datos' ($datos) como clave del array
//que mostrará los resultados por nombre
				while($registro = mysql_fetch_array($consulta_resultados)) {

					?>

					<span>
						<p><strong><?php include 'formatoPrevio.php'; ?></strong> <br></p>
					</span>

					<?php
				};
				?>

				<div class="col s12">	
				<ul class="pagination">
					<div class="divider"></div><br>
					<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					<li class="disabled"><a href="#!">Más entradas</a></li>

					<?php
//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
//Nota: X = $total_paginas
					for ($i=1; $i<=$total_paginas; $i++) {
	//En el bucle, muestra la paginación
						echo "<li class='active red darken-3'><a href='?pagina=".$i."'>".$i."</a></li> ";

					}; ?>
					<li class="waves-effect"><a href="#"><i class="material-icons">chevron_right</i></a></li>
				</ul>
				</div>
			</div>
		</div>
	</main>

	<!--Footer -->
	<footer class="page-footer">
      <div class="container">
        <div class="row center" id="logo-footer">
          <img src="img/logowhite.svg" alt="">
        </div>
      </div>
      <div class="copyright row">
        <div class="container center">
          <span class="col s12"> © Koot Solutions Agencia de Marketing Digital | RESIDENCIAL POLO CLUB EL MARQUÉS 2017 </span>
          <br><br>
          <div class="col s12">
            <a href="" ><img src="img/instagram.png" alt=""></a>
             <a href="" ><img src="img/facebook.png" alt=""></a>
          </div>
        </div>
      </div>
    </footer>
	<!--Footer-->
	<script>
      

      $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
    </script>

</body>
</html>