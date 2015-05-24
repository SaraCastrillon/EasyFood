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
				<h1><a href="index.html"><img alt="" src="images/easyfood.png"></a></h1>
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

					<header>
						<h2>EASYFOOD</h2>
					</header>
					<p>Esta es la herramienta que<br />
                    te permitirá cocinar de manera<br />
                    <strong>fácil y rápida</strong><br />
                    Dependiendo de los ingredientes<br />
                    que tengas en tu cocina.
                    
					</p>
					<footer>
						<ul class="buttons vertical">
							<li><a href="#main" class="button fit scrolly">Ver más</a></li>
						</ul>
					</footer>

				</div>

			</section>

		<!-- Main -->
			<article id="main">
      
			<!--Sección más populares-->
					<section class="wrapper style2 container special-alt">

						<header class="major">
							<h2><strong><center>Populares</center></strong></h2>
						</header>
				
						<div class="row">
							<div class="6u 12u(narrower)">

								<section>
                                   <!--<header>
										<h3><strong><center>Pastas Fáciles</center></strong></h3>
                                    </header>-->

				    <form action="index.php" method ="post">
				    <?php
				       recetasInicio();
				       $result = count($recetasInicio);
				       //echo $result;
				       //echo count($recetasInicio);
				       //echo $recetasInicio[$result-2]["nombre"];
				       echo"
					    <a href=# class=image featured><img src="; echo $recetasInicio[$result-1]["imagen"]; echo " alt= /></a>";
					    echo "<br />";
				       echo "<strong>Nombre: </strong>"; echo $recetasInicio[$result-1]["nombre"]; echo "<br />";
				       echo "<strong>Número de personas: </strong>"; echo $recetasInicio[$result-1]["personas"]; echo "<br />";
				       echo "<strong>Descripción: </strong>"; echo $recetasInicio[$result-1]["descripcion"]; echo " <br />";
				       echo "<strong>Puntuación: </strong>"; echo $recetasInicio[$result-1]["puntuacion"]; echo "<br />";
				       echo "<strong>Tiempo: </strong>"; echo $recetasInicio[$result-1]["tiempo"]; echo "<br />";
                                    ?>
				    </form>
                                    
                                    <ul class="buttons">
								        <center><li><a href="#" class="button">Leer Más</a></li></center>
							        </ul>
									
									
								</section>

							</div>
							<div class="6u 12u(narrower)">

								<section>
                                    <!--<header>
										<h3><strong><center>Carnes Rápidas</center></strong></h3>
									</header>-->
				    <form action="index.php" method ="post">
				    <?php
				       recetasInicio();
				       $result = count($recetasInicio);
				       echo $receetasInicio[25]["nombre"];
				       echo"
				     <a href=# class=image featured><img src="; echo $recetasInicio[$result-2]["imagen"]; echo " alt= /></a>";
                                       echo "<br />";
                                       echo "<strong>Nombre: </strong>"; echo $recetasInicio[$result-2]["nombre"]; echo "<br />";
                                       echo "<strong>Número de personas: </strong>"; echo $recetasInicio[$result-2]["personas"]; echo " <br />";
				       echo "<strong>Descripción: </strong>"; echo $recetasInicio[$result-2]["descripcion"]; echo " <br />";
				       echo "<strong>Puntuación: </strong>"; echo $recetasInicio[$result-2]["puntuacion"]; echo "<br />";
				       echo "<strong>Tiempo: </strong>"; echo $recetasInicio[$result-2]["tiempo"]; echo "<br />";
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
                                   <!--<header>
										<h3><strong><center>Pastas Fáciles</center></strong></h3>
                                    </header>-->
				    <form action="index.php" method ="post">
				    <?php
				       recetasInicio();
				       $result = count($recetasInicio);
				       //echo $result;
				       //echo count($recetasInicio);
				       //echo $recetasInicio[$result-4]["nombre"];
				       echo"
					    <a href=# class=image featured><img src="; echo $recetasInicio[$result-3]["imagen"]; echo " alt= /></a>";
					    echo "<br />";
				       echo "<strong>Nombre: </strong>"; echo $recetasInicio[$result-3]["nombre"]; echo "<br />";
				       echo "<strong>Número de personas: </strong>"; echo $recetasInicio[$result-3]["personas"]; echo "<br />";
				       echo "<strong>Descripción: </strong>"; echo $recetasInicio[$result-3]["descripcion"]; echo " <br />";
				       echo "<strong>Puntuación: </strong>"; echo $recetasInicio[$result-3]["puntuacion"]; echo "<br />";
				       echo "<strong>Tiempo: </strong>"; echo $recetasInicio[$result-3]["tiempo"]; echo "<br />";
                                    ?>
				    </form>
                                    
                                    <ul class="buttons">
								        <center><li><a href="#" class="button">Leer Más</a></li></center>
							        </ul>
									
									
								</section>

							</div>
							<div class="6u 12u(narrower)">

								<section>
                                    <!--<header>
										<h3><strong><center>Carnes Rápidas</center></strong></h3>
									</header>-->

				     <form action="index.php" method ="post">
				    <?php
				       recetasInicio();
				       $result = count($recetasInicio);
				       //echo $result;
				       //echo count($recetasInicio);
				       //echo $recetasInicio[$result-4]["nombre"];
				       echo"
					    <a href=# class=image featured><img src="; echo $recetasInicio[$result-4]["imagen"]; echo " alt= /></a>";
					    echo "<br />";
				       echo "<strong>Nombre: </strong>"; echo $recetasInicio[$result-4]["nombre"]; echo "<br />";
				       echo "<strong>Número de personas: </strong>"; echo $recetasInicio[$result-4]["personas"]; echo "<br />";
				       echo "<strong>Descripción: </strong>"; echo $recetasInicio[$result-4]["descripcion"]; echo " <br />";
				       echo "<strong>Puntuación: </strong>"; echo $recetasInicio[$result-4]["puntuacion"]; echo "<br />";
				       echo "<strong>Tiempo: </strong>"; echo $recetasInicio[$result-4]["tiempo"]; echo "<br />";
                                    ?>
				    </form>
                                    
                                    <ul class="buttons">
								        <center><li><a href="#" class="button">Leer Más</a></li></center>
							        </ul>
									
									
								</section>

							</div>
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