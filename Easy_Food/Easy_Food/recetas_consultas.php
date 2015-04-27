<!DOCTYPE HTML>
<?php include("easyFoodLogic.php");
session_start();
 
print_r($_SESSION["ii"]);
 ?>
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
				<h1><a href="index.html">Easy Food</a></h1>
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


		<!-- Main -->
			<article id="main">
      
			<!--Sección más populares-->
					<section class="wrapper style2 container special-alt">

						<header class="major">
							<h2><strong><center>Recetas Recomendadas</center></strong></h2>
						</header>

						<div class="row">
							<div class="6u 12u(narrower)" id ="receta1">

								<section>
                                    <header>
										<h3><strong><center>Receta número 1</center></strong></h3>
                                    </header>
									<a href="#" class="image featured"><img src="images/comidapeque2.jpg" alt="" /></a>
				<form action="recetas_consultas.php" method = "post">
				<?php
				   //for($row = 0; $row < sizeof($recetas); $row++)){
					//for($col = 0; $col < 7; $col++){
					/*	echo"
						     <p><strong>Nombre:<strong> $recetas[0][9]</p>
						 ";*/
					//}
				   //}
		                //$cualquier = $_SESSION["ii"];
				buscarReceta(); 
                                    echo "<strong>Nombre: </strong> " ; echo $recetas[0]["nombre"]; echo "<br>";
                                    echo "<strong>Número Personas: </strong> " ; echo $recetas[0]["personas"]; echo "<br>";
                                    echo "<strong>Descripción: </strong> " ; echo $recetas[0]["descripcion"]; echo "<br>";
                                    echo "<strong>Puntuación: </strong> " ; echo $recetas[0]["puntuacion"]; echo "<br>";
                                    echo "<strong>Tiempo: </strong> " ; echo $recetas[0]["tiempo"]; echo "<br>";

                                ?>
				</form>
				<form  method = post action = "receta_completa.php?var=receta1">
				  <center> <input type="submit" value= "Leer Más"></center>
			
				</form>					
									
								</section>

							</div>
							<div class="6u 12u(narrower)">

								<section>
                                    <header>
										<h3><strong><center>Receta número 2</center></strong></h3>
									</header>
									<a href="#" class="image featured"><img src="images/comidapeque1.jpg" alt="" /></a>
                                    
				<form action="recetas_consultas.php" method = "post">
				<?php
                                    echo "<strong>Nombre: </strong> " ; echo $recetas[1]["nombre"]; echo "<br>";
                                    echo "<strong>Número Personas: </strong> " ; echo $recetas[1]["personas"]; echo "<br>";
                                    echo "<strong>Descripción: </strong> " ; echo $recetas[1]["descripcion"]; echo "<br>";
                                    echo "<strong>Puntuación: </strong> " ; echo $recetas[1]["puntuacion"]; echo "<br>";
                                    echo "<strong>Tiempo: </strong> " ; echo $recetas[1]["tiempo"]; echo "<br>";
                                    
                                ?>
				</form>
                                    <ul class="buttons">
								        <center><li><a href="#" class="button">Leer Más</a></li></center>
							        </ul>
									
									
								</section>

							</div>
						</div>
                        <div class="row">
							<div class="6u 12u(narrower)">

								<section>
                                    <header>
										<h3><strong><center>Receta número 3</center></strong></h3>
                                    </header>
									<a href="#" class="image featured"><img src="images/comidapeque2.jpg" alt="" /></a>
				<form action="recetas_consultas.php" method = "post">
				<?php
                                    echo "<strong>Nombre: </strong> " ; echo $recetas[2]["nombre"]; echo "<br>";
                                    echo "<strong>Número Personas: </strong> " ; echo $recetas[2]["personas"]; echo "<br>";
                                    echo "<strong>Descripción: </strong> " ; echo $recetas[2]["descripcion"]; echo "<br>";
                                    echo "<strong>Puntuación: </strong> " ; echo $recetas[2]["puntuacion"]; echo "<br>";
                                    echo "<strong>Tiempo: </strong> " ; echo $recetas[2]["tiempo"]; echo "<br>";
                                    
                                ?>
				</form>
                                    <ul class="buttons">
								        <center><li><a href="#" class="button">Leer Más</a></li></center>
							        </ul>
									
									
								</section>

							</div>
							<div class="6u 12u(narrower)">

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
