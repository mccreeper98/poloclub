<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nueva Entrada - Blog - Residencial Polo Club</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

	<!--JS-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="dist/sweetalert-dev.js"></script>
	

	<!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/hover-min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/style.css">

	<!-- Editor -->
	<script type="text/javascript" src="tinymce/tinymce.min.js"></script>

	<script type="text/javascript">
		tinymce.init({
			selector: '#contenido',
			height: 500,
			theme: 'modern',
			plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
			],
			toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
			image_advtab: true,
			templates: [
			{ title: 'Test template 1', content: 'Test 1' },
			{ title: 'Test template 2', content: 'Test 2' }
			],
			content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//www.tinymce.com/css/codepen.min.css'
			]
		});
	</script>
	<style type="text/css">
		.row .col {
			float: left;
			box-sizing: border-box;
			padding: 0;
			min-height: 1px;
		}
	</style>
</head>
<body class="row">

	<!-- Nav -->
	<header>
		<nav class="blue-grey lighten-1">
			<div class="nav-wrapper">
				<a href="blog.php" class="brand-logo"><span style="margin-left: 20px"><b>Regresar</b></span></a>
				<!--a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Cerrar Sesión</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Cerrar Sesión</a></li>
				</ul-->
			</div>
		</nav>
	</header>
	<script type="text/javascript"> $(".button-collapse").sideNav();</script>
	<!-- Nav -->

	<!-- confirmacion de entrada creada -->	
	<?php 
	if (isset($_GET["created"])) {
		echo "<script type='text/javascript'>swal({
			title: '¡Entrada publicada!',
			text: 'Buen trabajo',
			type: 'success',
			confirmButtonText: 'Confirmar'
		});</script>";
	}

	?>
	<!-- confirmacion de entrada creada -->

	<!-- Erro imagen -->	
	<?php 
	if (isset($_GET["imgError"])) {
		echo "<script type='text/javascript'>swal({
			title: '¡Formato no soportado o archivo muy grande!',
			text: 'Intenta con otra imagen',
			type: 'error',
			confirmButtonText: 'Confirmar'
		});</script>";
	}

	?>
	<!-- Erro imagen -->

		<!-- Erro imagen -->	
	<?php 
	if (isset($_GET["errorPost"])) {
		echo "<script type='text/javascript'>swal({
			title: '¡Entrada no creada!',
			text: 'Intenta de nuevo',
			type: 'error',
			confirmButtonText: 'Confirmar'
		});</script>";
	}

	?>
	<!-- Error imagen -->
	
	<!-- editor -->
	<div id="editor" class="col s12 m12 l12">
		<form onsubmit="return validarEntrada()" action="agregarEntrada.php" method="POST" name="entradas" enctype="multipart/form-data" >

			<div class="col s12 blue-grey lighten-5">		
				<div class="col s0 m1 l1"></div>
				<div class="col s12 m7 l7">	
					<h5 class="black-text">Titulo de la entrada</h5>	
					<input type="text" name="titulo" id="titulo" placeholder="Titulo de la entrada" maxlength="80">
				</div>
				<div class="col s12 m4 l4 center">
					<br>
					<input type="submit" value="Publicar entrada" class="btn waves-effect waves-light  green darken-1 hoverable">
					<br>
				</div>
			</div>
			

			<div class="col s12  blue-grey lighten-5 ">
				<div class="col s0 m1 l1">
					
				</div>
				<div class="col s12 m7 l7">		
					<textarea name="contenido" id="contenido" placeholder="Escribe tu entrada completa" ></textarea>
				</div>

				<div class="col s12 m4 l4">
					<div class="container">
						<div class="input-field col s12 m12 l12">
							<select name="categoria" id="categoria">
								<option value="" disabled selected>Seleciona alguna categoria</option>
								<option value="Comunicado">Comunicados</option>
								<option value="Evento">Eventos</option>
								<option value="Noticias">Noticias</option>
							</select>
							<label>Categoria</label>
						</div> 
						<script>$(document).ready(function() {$('select').material_select(); }); </script>

						<div class="file-field input-field col s12 m12 l12">
							<div class="btn light-blue accent-4">
								<span>Subir imagen</span>
								<input type="file" name="imagen">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>

						<div class="input-field col s12">
							<textarea id="descripcion" name="descripcion" maxlength="150" class="materialize-textarea"></textarea>
							<label for="textarea1">Descripción de tu entrada</label>
						</div>

					</div>
				</div>	

			</div>	

		</form>
	</div>
	<!-- editor -->
	<!-- Validaciones -->
	<script type="text/javascript" src="js/panel.js"></script>

</body>
</html>