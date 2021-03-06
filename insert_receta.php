<!DOCTYPE HTML>
<?php
include("easyFoodLogic.php");
session_start();
?>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Insertar Recetas</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="contact">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.php"><img alt="" src="images/easyfood.png"></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Inicio</a></li>
						<li class="submenu">
							<a href="">Menús</a>
							<ul>
								<li><a href="ingredientes.php">Mis ingredientes</a></li>
								<li><a href="recetario.html">Recetario</a></li>
								<li><a href="no-sidebar.html">Estoy de afán</a></li>
                                <li><a href="insert_receta.php">Insertar Recetas</a></li>
								<li><a href="contacto.html">Contáctenos</a></li>
                                <!--Posibilidad de hacer un sumenú-->
								<!--<li class="submenu">
									<a href="">Chefs</a>
									<ul>
										<li><a href="#">Chef</a></li>
										<li><a href="#">Cuentanos tu experiencia</a></li>
									</ul>
								</li>-->
							</ul>
						</li>
						<li><a href="#" class="button special">Iniciar Sesión</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon"> <img src="images/easyfood.png"/></span>
					<h2>Ingresar Receta</h2>
					<p>Para ingresar una receta es necesario que llene todo los campos </p>
				</header>
				<!-- One -->
					<section class="wrapper style4 special container 75%">

						<!-- Content -->
							<div class="content">
								<form method="post" action="easyFoodLogic.php">
								  <div class="row 50%">
										<div class="12u 12u(mobile)">
											<?php echo "<input type=text name=name placeholder=Nombre />"; ?>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="text" name="descripcion" placeholder="Descripción" />
										</div>
									</div>
									<div class="row 50%">
										<div class="6u">
											<input type="text" name="porciones" placeholder="Número de porciones" >
										</div>
										<div class="6u">
											<input type="text" name="puntuacion" placeholder="Puntuación" >
										</div>
									</div>
                                    <div class="row 50%">
										<div class="12u">
											<textarea name="preparacion" placeholder="Preparación" rows="7"></textarea>
										</div>
									</div>
                                    <div class="row 50%">
										<div class="12u">
											<input type="text" name="ingredientes" placeholder="Ingredientes" >
										</div>
									</div>
                                    <div class="row 50%">
										<div class="12u">
											<input type="text" name="tiempo" placeholder="Tiempo" >
										</div>
									</div>
                                    <div class="row 50%">
                                        <label>Categoria</label>
										<div class="12u">
											<select name="categoria">
                                              <option value="sopasycremas">Sopas Y Cremas</option>
                                              <option value="ensaladas">Ensaladas</option>
                                              <option value="arroz">Arroz</option>
                                              <option value="pasta">Pastas</option>
                                            <option value="carne">Carnes</option>
                                            <option value="pollo">Pollos</option>
                                            <option value="pescado">Pescados</option>
					    <option value="desayunos">Desayunos</option>
                                           </select>
                                                                                    </div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><input type="submit" class="special" value="Enviar Receta" name="insert" /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>

					</section>

			</article>

		<!-- Footer -->
			<footer id="footer">

				<ul class="icons">
					<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>

				

			</footer>

	</body>
</html>
