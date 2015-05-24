<!DOCTYPE HTML>
<?php include("easyFoodLogic.php");
session_start();
 ?>
<html>
	<head>
		<title>EasyFood</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <meta charset="utf-8">
       
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/vendor/modernizr.js"></script>
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


 <link rel="stylesheet" href="css/foundation.css">

  <!-- This is how you would link your custom stylesheet -->
  <link rel="stylesheet" href="css/app.css">

  


</head>


		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

	<body class="index">

		<!-- Header -->
			<header id="header" class="alt">
				<!--<h1><a href="index.php"><img alt="" src="images/easyfood.png"></a></h1>-->
				<nav id="nav">
					<ul>
						<!--<li class="current"><a href="index.php">Inicio</a></li>-->

						<li class="submenu">
							<!--<a href="">Menús</a>-->
							<ul>
								<li><a href="contacto.html">Contáctenos</a></li>
								<li><a href="ingredientes.php">Mis ingredientes</a></li>
								<li><a href="insert_receta.php">Ingresar receta</a></li>
                                
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
						<li><a href="ingredientes.php">Mis ingredientes</a></li>
						<?php
						  if(isset($_SESSION["user"])){
                                                  echo "<li><a href=".'"'."index.php".'"' ."class=".'"'."button special".'"'.">".$_SESSION["user"]."</a></li>";
                                                echo "<li><a href=".'"'."logout.php".'"' ."class=".'"'."button special".'"'.">"."Cerrar Sesion"."</a></li>";
						   }
                                                   else
                                                   {
                                                   echo "<li><a href=".'"'."login.php".'"'."class=".'"'."button special".'"'.">"."Iniciar sesion"."</a></li>";
                                                   }
						   ?>
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
/*
				       echo" <div class="."row 50%".">
										<div class="."12u 12u(mobile)".">
										
					    <a href=# class=image featured><img src="; echo $recetasInicio[$result-1]["imagen"]; echo " alt= /></a>";
					    echo "<br />";
				       echo "<strong>Nombre: </strong>"; echo $recetasInicio[$result-1]["nombre"]; echo "<br />";
				       echo "<strong>Número de personas: </strong>"; echo $recetasInicio[$result-1]["personas"]; echo "<br />";
				       echo "<strong>Descripción: </strong>"; echo $recetasInicio[$result-1]["descripcion"]; echo " <br />";
				       echo "<strong>Puntuación: </strong>"; echo $recetasInicio[$result-1]["puntuacion"]; echo "<br />";
				       echo "<strong>Tiempo: </strong>"; echo $recetasInicio[$result-1]["tiempo"]; echo "<br />";
                        	echo "</div>"."</div>";*/
                                    ?>
				    </form>
                           <ul class="example-orbit" data-orbit>
  <li>
    <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                <img src=" <?php echo $recetasInicio[$result-1]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-1]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-1]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-1]["tiempo"]; ?>
				Descripción: <?php echo $recetasInicio[$result-1]["descripcion"]; ?>
                                </p>
                                <form action="receta_completa.php" method ="POST">
				  <center><input type="submit" name="inicio1" value="Leer Más"/></center>
				</form>
                            </div>
       <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                 <img src=" <?php echo $recetasInicio[$result-2]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-2]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-2]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-2]["tiempo"]; ?>
                                Descripción: <?php echo $recetasInicio[$result-2]["descripcion"]; ?>
 
                                </p>
                                <form action="receta_completa.php" method ="POST">
				  <center><input type="submit" name="inicio2" value="Leer Más"/></center>
				</form>
                            </div>
       <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                  <img src=" <?php echo $recetasInicio[$result-3]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-3]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-3]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-3]["tiempo"]; ?>
			        Descripción: <?php echo $recetasInicio[$result-3]["descripcion"]; ?>

                                </p>
                                <form action="receta_completa.php" method ="POST">
				  <center><input type="submit" name="inicio3" value="Leer Más"/></center>
				</form>
                            </div>
       <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                  <img src=" <?php echo $recetasInicio[$result-4]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-4]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-4]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-4]["tiempo"]; ?>
                                Descripción: <?php echo $recetasInicio[$result-4]["descripcion"]; ?>
 
                                </p>
				<form action="receta_completa.php" method ="POST">
				  <center><input type="submit" name="inicio4" value="Leer Más"/></center>
				</form>
                                
                            </div>

  </li>
<li>
 <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                <img src=" <?php echo $recetasInicio[$result-5]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-5]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-5]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-5]["tiempo"]; ?>
                                Descripción: <?php echo $recetasInicio[$result-5]["descripcion"]; ?>
                                </p>
                                <form action="receta_completa.php" method ="POST">
                                  <center><input type="submit" name="inicio5" value="Leer Más"/></center>
                                </form>
                            </div>
 <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                <img src=" <?php echo $recetasInicio[$result-6]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-6]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-6]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-6]["tiempo"]; ?>
                                Descripción: <?php echo $recetasInicio[$result-6]["descripcion"]; ?>
                                </p>
                                <form action="receta_completa.php" method ="POST">
                                  <center><input type="submit" name="inicio6" value="Leer Más"/></center>
                                </form>
                            </div>
 <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                <img src=" <?php echo $recetasInicio[$result-7]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-7]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-7]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-7]["tiempo"]; ?>
                                Descripción: <?php echo $recetasInicio[$result-7]["descripcion"]; ?>
                                </p>
                                <form action="receta_completa.php" method ="POST">
                                  <center><input type="submit" name="inicio7" value="Leer Más"/></center>
                                </form>
                            </div>
 <div class="medium-3 large-3 text-center columns">
                                <a class="th" href="">
                                <img src=" <?php echo $recetasInicio[$result-8]["imagen"];?>">
                                </a>
                                <h4><?php echo $recetasInicio[$result-8]["nombre"];?></h4>
                                <p>Puntuación: <?php echo $recetasInicio[$result-8]["puntuacion"];  ?>
                                Tiempo: <?php echo $recetasInicio[$result-8]["tiempo"]; ?>
                                Descripción: <?php echo $recetasInicio[$result-8]["descripcion"]; ?>
                                </p>
                                <form action="receta_completa.php" method ="POST">
                                  <center><input type="submit" name="inicio8" value="Leer Más"/></center>
                                </form>
                            </div>





</li>
    
</ul>         
                     </section>

							</div>
                            <!--
							<div class="6u 12u(narrower)">

								<section>
                                    <!--<header>
										<h3><strong><center>Carnes Rápidas</center></strong></h3>
									</header>-->
				  <!--  <form action="index.php" method ="post">
				    <?php/*
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
				     /*  recetasInicio();
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
                                    */?>
				    </form>
                                    

									
									
								</section>

							</div>
							<div class="6u 12u(narrower)">

								<section>
                                    <!--<header>
										<h3><strong><center>Carnes Rápidas</center></strong></h3>
									</header>-->

				     <form action="index.php" method ="post">
				    <?php
				      /* recetasInicio();
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
                                   */ ?>
				    </form>
                                    
					
									
								</section>

							</div>
						</div>
						
		
					</section>

			</article>
       



		<!-- Footer -->
			<footer id="footer">

				<!--<ul class="icons">
					<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
				
				</ul>-->
			</footer>
<script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
	</body>
</html>
