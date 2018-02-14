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

      <!-- FB ROOT -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1685336578382700";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
	<div id="social" class="row">
        <div id="socialcontain">
          <span class="light col s12 m6 socialtext">Informes (55)1408-6072 & (55)2690-1218 | info@residencialpolo.mx</span>
          <div class="col s12 m6 socialimg">
            <a href="" class="right"><img src="img/instagram.png" alt=""></a>
            <a href="" class="right"><img src="img/facebook.png" alt=""></a>
          </div>
        </div>
      </div>

      <div id="header" class="center">
        <img src="img/logowhite.svg" alt="" id="headerlogo">
      </div>

      <div id="nav" class="row">
        <div class="container center light" style="height: 100%;">
          <a href="index.html"><div class="col l1 navtext hvr-bubble-bottom" hovered>Inicio</div></a>
          <a href="master-plan.html"><div class="col l2 navtext hvr-bubble-bottom">Master Plan</div></a>
          <a href="vinedos-del-polo.html"><div class="col l2 navtext hvr-bubble-bottom">Viñedos del polo</div></a>
          <a href="albacara.html"><div class="col l2 navtext hvr-bubble-bottom">Albacara</div></a>
          <a href="recorrido.html"><div class="col l2 navtext hvr-bubble-bottom">Recorrido Virtual</div></a>
          <a href="#"><div class="col l1 navtext hvr-bubble-bottom">Blog</div></a>
          <a href="contacto.html"><div class="col l2 navtext hvr-bubble-bottom">Contacto</div></a>
        </div>
      </div>

      <!--Contenido-->
	<main>
		<div class="row">
			<div class="container">
			<div class="col s12"><h4 class="animated fadeIn" style="margin-left: 10px">Ultimas entradas:</h4></div>

			<div class="col s12 m12 l8" id="entradas">
				<?php 
					include 'recuperarEntradas.php';

				?>

			</div>
			<br>
			<!--FB Page -->
			<div class="col s12 m12 l4 center" >
				<hr>
				<h5 class="animated fadeIn">Nosotros en Facebook:</h5>

				<div class="fb-page" data-href="https://www.facebook.com/RESIDENCIAL.POLO.CLUB.EL.MARQUES/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RESIDENCIAL.POLO.CLUB.EL.MARQUES/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RESIDENCIAL.POLO.CLUB.EL.MARQUES/"></a></blockquote></div>
			</div>

			<div class="col l12 m6 s12 center" style="padding-top: 5%">
				<a href="blog-mas.php"><div class="btn-large " id="masbtn">VER MÁS</div></a>
				</div>
			</div>	
		</div>
	</main>
	<!--Contenido-->
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
</body>
</html>
