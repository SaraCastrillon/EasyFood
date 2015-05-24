<!DOCTYPE HTML>
<?php include("easyFoodLogic.php"); ?>
<html>
	<head>
		<title>EasyFood</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <meta charset="utf-8">
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
            <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">

		</noscript>
        <!--css-->




		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="index">

		<!-- Header -->
			<header id="header" class="alt">
				<h3><a href="index.html">EASY FOOD</a></h3>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">Inicio</a></li>
						<li class="submenu">
							<a href="">Menús</a>
							<ul>
								<li><a href="ingredientes.php">Mis ingredientes</a></li>
								<li><a href="recetario.html">Recetario</a></li>
								<li><a href="no-sidebar.html">Estoy de afán</a></li>
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

		<!-- Banner -->
			<section id="banner">

				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner" >
				  <form action="receta_completa.php" method = "post">
				    <?php
				       buscarReceta();
				       if($variable =" receta1"){
				       echo "
				        <header>
						<h2>"; echo $recetas[0]["nombre"]; echo"</h2>
					</header>";
					echo "<br />";
					echo "<table border =1>
					  <tr>
					  <td><strong> Número de personas: </strong></td>";
					  echo "<td>";echo $recetas[0]["personas"]; echo "</td>"; echo "</tr></table>";
					echo "<strong> Numero de personas: </strong>" ; echo $recetas[0]["personas"]; echo "<br />";
					echo "<strong> Descripcion: </strong>" ; echo $recetas[0]["descripcion"]; echo "<br />";
					echo "<strong> Puntuacion: </strong>" ; echo $recetas[0]["puntuacion"]; echo "<br />";
					echo "<strong> Tiempo: </strong>" ; echo $recetas[0]["tiempo"]; echo "<br />";
					
					echo "<p><strong> Preparacion: </strong>"; echo $recetas[0]["preparacion"]; echo "</p><br />";
					echo "ingredientes: "; echo $recetas[0]["ingredientes"][0]; echo "<br />";//pilas toca hacer el for
					
					};
					/*<footer>
						<ul class="buttons vertical">
							<li><a href="#main" class="button fit scrolly">Ver más</a></li>
						</ul>
					</footer>

				</div>*/
				?>
				</form>
			</section>
			

		<!-- Main -->
		

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
