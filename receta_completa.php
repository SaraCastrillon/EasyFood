<!DOCTYPE HTML>
<?php include("easyFoodLogic.php"); 
session_start();


?>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Receta Completa</title>
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
	<body class="right-sidebar">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1 id="logo"><a href="index.php">Easy Food</a></h1>
				<nav id="nav">
					<ul>
					  <li class="current"><a href="ingredientes.php">Mis ingredientes</a></li>
						<li class="submenu">
						  <!--<a href="">Menús</a>-->
							<ul>
								<li><a href="ingredientes.php">Mis ingredientes</a></li>
								<!--<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>-->
								<li><a href="contact.html">Contacto</a></li>
								<!--<li class="submenu">
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Dolore Sed</a></li>
										<li><a href="#">Consequat</a></li>
										<li><a href="#">Lorem Magna</a></li>
										<li><a href="#">Sed Magna</a></li>
										<li><a href="#">Ipsum Nisl</a></li>
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
			  
			  
			 <!-- <form action="receta_completa.php" method="post">-->
			        <header class="special container">
				    <?php
				       buscarReceta();
				       if(isset($_POST["receta1"])){
				          echo "<h2><strong>"; echo $recetas[0]["nombre"]; echo "</h2></strong>
				          <p>...Atrévete a cocinarla...</p>";
				       } elseif(isset($_POST["receta2"])){
				            echo "<h2><strong>"; echo $recetas[1]["nombre"]; echo "</h2></strong>
				            <p>...Atrévete a cocinarla...</p>";
					 } elseif(isset($_POST["receta3"])){
					      echo "<h2><strong>"; echo $recetas[2]["nombre"]; echo "</h2></strong>
					      <p>...Atrévete a cocinarla...</p>";
					   } elseif(isset($_POST["inicio1"])){
					        recetasInicio();
					        $result= count($recetasInicio);
					        echo "<h2><strong>"; echo $recetasInicio[$result-1]["nombre"]; echo "</h2></strong>
					        <p>...Atrévete a cocinarla...</p>";
					     } elseif(isset($_POST["inicio2"])){
					          recetasInicio();
					          $result= count($recetasInicio);
					          echo "<h2><strong>"; echo $recetasInicio[$result-2]["nombre"]; echo "</h2></strong>
					          <p>...Atrévete a cocinarla...</p>";
					       } elseif(isset($_POST["inicio3"])){
					            recetasInicio();
					            $result= count($recetasInicio);
					            echo "<h2><strong>"; echo $recetasInicio[$result-3]["nombre"]; echo "</h2></strong>
					            <p>...Atrévete a cocinarla...</p>";
					         } elseif(isset($_POST["inicio4"])){
					              recetasInicio();
					              $result= count($recetasInicio);
					              echo "<h2><strong>"; echo $recetasInicio[$result-4]["nombre"]; echo "</h2></strong>
					              <p>...Atrévete a cocinarla...</p>";
					           } elseif(isset($_POST["inicio5"])){
					                recetasInicio();
					                $result= count($recetasInicio);
					                echo "<h2><strong>"; echo $recetasInicio[$result-5]["nombre"]; echo "</h2></strong>
					                <p>...Atrévete a cocinarla...</p>";
						     } elseif(isset($_POST["inicio6"])){
							  recetasInicio();
					                  $result= count($recetasInicio);
					                  echo "<h2><strong>"; echo $recetasInicio[result-6]["nombre"]; echo "</h2></strong>
					                  <p>...Atrévete a cocinarla...</p>";
					               } elseif(isset($_POST["inicio7"])){
							    recetasInicio();
					                    $result= count($recetasInicio);
					                    echo "<h2><strong>"; echo $recetasInicio[result-7]["nombre"]; echo "</h2></strong>
					                    <p>...Atrévete a cocinarla...</p>";
					                 } elseif(isset($_POST["inicio8"])){
						              recetasInicio();
					                      $result= count($recetasInicio);
					                      echo "<h2><strong>"; echo $recetasInicio[result-8]["nombre"]; echo "</h2></strong>
					                     <p>...Atrévete a cocinarla...</p>";
					                   }   
					      ?>
				  
				  
				</header>
			</form>
			  

				<!-- One -->
					<section class="wrapper style4 container">

						<div class="row 150%">
							<div class="12u 12u(narrower)">

								<!-- Content -->
									<div class="content">
									 
										<section>
										  <?php
										     buscarReceta();
										     //if(isset($_POST["receta1"])){
											//echo "<center><a href=# class=image featured><img src="; echo $recetas[0]["imagen"]; echo "alt= /></a></center>";
										     //}
										     								    
											echo"<center><a href=# class=image featured><img src= images/pic04.jpg alt /></a></center>";
										  ?>
										</section>
									</div>

							</div>
							
						</div>
					</section>

				<!-- Two -->
					<section class="wrapper style1 container special">
						<div class="row">
							<div class="4u 12u(narrower)">

								<section>
								  <?php
								     buscarReceta();
								     
								     if(isset($_POST["receta1"])){
								        echo "<header>
										<h3><strong>Número de personas: </strong> "; echo $recetas[0]["personas"]; echo"</h3>
									</header>";
								    } elseif(isset($_POST["receta2"])){
								        echo "<header>
								                <h3><strong>Número de personas: </strong> "; echo $recetas[1]["personas"]; echo "</h3>
									</header>";
								    } elseif(isset($_POST["receta3"])){
								        echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetas[2]["personas"]; echo "</h3>
									</header>";
								    } elseif(isset($_POST["inicio1"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-1]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio2"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-2]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio3"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-3]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio4"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-4]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio5"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-5]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio6"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-6]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio7"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-7]["personas"]; echo "</h3>
									</header>";
								    }  elseif(isset($_POST["inicio8"])){
								         recetasInicio();
					                                 $result= count($recetasInicio);
								         echo "<header>
								            <h3><strong>Número de personas: </strong> "; echo $recetasInicio[$result-8]["personas"]; echo "</h3>
									</header>";
								    }
								  ?>
									<!--<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>-->
								</section>

							</div>
							<div class="4u 12u(narrower)">

								<section>
								  <?php
								     buscarReceta();
								     if(isset($_POST["receta1"])){
								        echo"
									<header>
										<h3><strong>Puntuación: </strong>"; echo $recetas[0]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["receta2"])){
									echo"
									<header>
									        <h3><strong>Puntuación: </strong>"; echo $recetas[1]["puntuacion"]; echo "</h3>
									</header>";
                                                                     } elseif(isset($_POST["receta3"])){
                                                                        echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetas[2]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio1"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-1]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio2"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-2]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio3"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-3]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio4"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-4]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio5"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-5]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio6"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-6]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio7"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-7]["puntuacion"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio8"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Puntuación: </strong>"; echo $recetasInicio[$result-8]["puntuacion"]; echo "</h3>
									</header>";
								     }
								  ?>

									<!--<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>-->
								
								</section>

							</div>
							<div class="4u 12u(narrower)">

								<section>
								  <?php
								     buscarReceta();
								     if(isset($_POST["receta1"])){
								        echo"
									<header>
										<h3><strong>Tiempo: </strong>"; echo $recetas[0]["tiempo"]; echo"</h3>
									</header>";
								     } elseif(isset($_POST["receta2"])){
									echo"
									<header>
									        <h3><strong>Tiempo: </strong>"; echo $recetas[1]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["receta3"])){
									echo"
									<header>
									        <h3><strong>Tiempo: </strong>"; echo $recetas[2]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio1"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-1]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio2"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-2]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio3"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-3]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio4"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-4]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio5"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-5]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio6"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-6]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio7"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-7]["tiempo"]; echo "</h3>
									</header>";
								     } elseif(isset($_POST["inicio8"])){
                                                                        recetasInicio();
									$result = count($recetasInicio);
									echo"
                                                                        <header>
									        <h3><strong>Tiempo: </strong>"; echo $recetasInicio[$result-8]["tiempo"]; echo "</h3>
									</header>";
								     }
									?>
									<!--<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>-->
								
								</section>
							</div>
							<div class="12u 12u(narrower)">
							  <section>
							    <?php
							       buscarReceta();
							       recetasInicio();
							       echo"
							       <header>
                                  				 <h3><strong>Ingredientes: </strong></h3></header>";
								    $resultado = count($recetas[0]["ingredientes"]);
							            $resultado2 = count($recetasInicio[0]["ingredientes"]);
							            $resultado3 = count($recetasInicio);
								    //echo $resultado2;
								    $ingredientes = array();
								    for($i=0; $i<$resultado; $i++){
								       $ingredientes[$i] =($recetas[0]["ingredientes"][$i]);
								    }
							            for($i=0; $i<$resultado; $i++){
			                                               $ingredientes2[$i]=($recetas[1]["ingredientes"][$i]);
							            }
						                    for($i=0; $i<$resultado; $i++){
								       $ingredientes3[$i]=($recetas[2]["ingredientes"][$i]);
							            }
								    for($i=0; $i<$resultado2; $i++){
							               $ingredientes4[$i]=($recetasInicio[$resultado3-1]["ingredientes"][$i]);
							            } 
							            for($i=0; $i<$resultado2; $i++){
							               $ingredientes5[$i]=($recetasInicio[$resultado3-2]["ingredientes"][$i]);
							            }
							            for($i=0; $i<$resultado2; $i++){
							               $ingredientes6[$i]=($recetasInicio[$resultado3-3]["ingredientes"][$i]);
							            }
					                            for($i=0; $i<$resultado2; $i++){
							               $ingredientes7[$i]=($recetasInicio[$resultado3-4]["ingredientes"][$i]);
							            }
					                            for($i=0; $i<$resultado2; $i++){
							               $ingredientes8[$i]=($recetasInicio[$resultado3-5]["ingredientes"][$i]);
							            }
		                                                    for($i=0; $i<$resultado2; $i++){
							               $ingredientes9[$i]=($recetasInicio[$resultado3-6]["ingredientes"][$i]);
							            }
	                                                            for($i=0; $i<$resultado2; $i++){
							               $ingredientes10[$i]=($recetasInicio[$resultado3-7]["ingredientes"][$i]);
							            }
							            for($i=0; $i<$resultado2; $i++){
							               $ingredientes11[$i]=($recetasInicio[$resultado3-8]["ingredientes"][$i]);
							            }
							            //foreach ($ingredientes as $ing){
				                                      // echo $ing."\n - ";
				                                    //}
							            if(isset($_POST["receta1"])){
									foreach($ingredientes as $ing){
										echo $ing."\n - ";
							                }
								    } elseif(isset($_POST["receta2"])){
									foreach($ingredientes2 as $ing){
										echo $ing."\n - ";
									}
								    } elseif(isset($_POST["receta3"])){
									foreach($ingredientes3 as $ing){
										echo $ing."\n - ";
									}
								    }  elseif(isset($_POST["inicio1"])){
									foreach($ingredientes4 as $ing){
										echo $ing."\n - ";
									}
								    
								   } elseif(isset($_POST["inicio2"])){
									foreach($ingredientes5 as $ing){
										echo $ing."\n - ";
									}
								  }  elseif(isset($_POST["inicio3"])){
									foreach($ingredientes6 as $ing){
										echo $ing."\n - ";
									}
								  } elseif(isset($_POST["inicio4"])){
									foreach($ingredientes7 as $ing){
										echo $ing."\n - ";
									}
								  } elseif(isset($_POST["inicio5"])){
									foreach($ingredientes8 as $ing){
										echo $ing."\n - ";
									}
								  } elseif(isset($_POST["inicio6"])){
									foreach($ingredientes9 as $ing){
										echo $ing."\n - ";
									}
								  } elseif(isset($_POST["inicio7"])){
									foreach($ingredientes10 as $ing){
										echo $ing."\n - ";
									}
								  } elseif(isset($_POST["inicio8"])){
									foreach($ingredientes11 as $ing){
										echo $ing."\n - ";
									}
								  } 
                                                            ?>
                                                          </section>
							</div>
							<div class="12u 12u(narrower)">
							  <section>
							    <?php
							       buscarReceta();
							       recetasInicio();
							       $result = count($recetasInicio);
							       echo"
								    <header>
								      <h3><strong>Preparación: </strong></h3></header>";
							       if(isset($_POST["receta1"])){
							          echo 
								    "<table style=color: blue border=1>
								      <tr>
									<td>"; echo $recetas[0]["preparacion"]; echo "</td></tr></table>";
							       } elseif(isset($_POST["receta2"])){
							             echo $recetas[1]["preparacion"];
							       } elseif(isset($_POST["receta3"])){
							             echo $recetas[2]["preparacion"];
							       } elseif(isset($_POST["inicio1"])){
							            echo $recetasInicio[$result-1]["preparacion"];
							       } elseif(isset($_POST["inicio2"])){
							             echo $recetasInicio[$result-2]["preparacion"];
							       } elseif(isset($_POST["inicio3"])){
							             echo $recetasInicio[$result-3]["preparacion"];
							       } elseif(isset($_POST["inicio4"])){
							             echo $recetasInicio[$result-4]["preparacion"];
							       } elseif(isset($_POST["inicios5"])){
							             echo $recetasInicio[$result-5]["preparacion"];
							       } elseif(isset($_POST["inicio6"])){
							             echo $recetasInicio[$result-6]["preparacion"];
							       } elseif(isset($_POST["inicio7"])){
							             echo $recetasInicio[$result-7]["preparacion"];
							       } elseif(isset($_POST["inicio8"])){
							             echo $recetasInicio[$result-8]["preparacion"];
							       }
							    ?>
							  </section>
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

	</body>
</html>
