<!DOCTYPE HTML>

<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include("easyFoodLogic.php");
session_start();
//$_SESSION["ii"]="";
//$arr = $_SESSION["ii"];
if(isset($_SESSION["ii"]))
{
//echo "tiene algo";
//echo $_SESSION["ii"][0];
header("location:recetas_consultas.php");

}
else
{
//echo "esta vacio";
}
 ?>
<html>
	<head>
		<title>Mis ingredientes</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		
    
        
    <script src="jquery-1.11.3.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="knockout.js"></script>
        <script src="controller.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="ingredientes">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.php"><img alt="" src="images/easyfood.png"></a></h1>
				<nav id="nav">
					<ul>
						<!--<li class="current"><a href="index.html">Inicio</a></li>-->
						<li class="submenu">
							<!--<a href="">Menús</a>-->
							<ul>
								<li><a href="ingredientes.html">Mis ingredientes</a></li>
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
						<li><a href="ingredientes.php"><strong>Mis Ingredientes</strong></a></li>
						<li><a href="login.php" class="button special">Iniciar Sesión</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<article id="main">

				<header class="special container">
					<!--<span class="icon fa-laptop"></span>-->
					<h2><strong>Selecciona tus ingredientes</strong></h2>
					<p>Los que tienes disponibles para cocinar</p>
				</header>

				<!-- One -->
					<section class="wrapper style4 container">

						<div class="row 150%">
							<div class="4u 12u(narrower)">

								<!-- Sidebar -->
									<div class="sidebar">
										<section>
											<header>
												<h3><strong>3 Frases para recordar</strong></h3>
											</header>
											<p><h4>"La comida <br>
                                            para ser perfecta,</h4>Debe ir acompañada de una buena compañía"</p>
										
										</section>

										<section>
									
											<p><h4>"El cocinero Sin probar bocado de los majares que ha hecho,<br>
                                            </h4>suele quedar satisfecho sin haberlos probado"</p>
										
										</section>
                            
                                        <section>
									
											<p><h4>"Una receta no tiene alma,<br>
                                            </h4>Es el cocinero quien debe darle alma a la receta"</p>
										
										</section>
									</div>

							</div>
							</body>
			<body>
  <input type="text" data-bind="textInput: ingredientsQuery"/>
  <ul data-bind="foreach: matchingIngredients">
    <li>
      <span data-bind="text: name"></span>
      <button data-bind="click: $parent.addIngredient">Agregar</button>
    </li>
  </ul>
  <div data-bind="if: selectedIngredients().length">
    <h2>Ingredientes seleccionados</h2>
    <ul data-bind="foreach: selectedIngredients">
      <li>
        <span data-bind="text: name"></span>
        <button data-bind="click: $parent.removeIngredient">Remover</button>
      </li>
    </ul>
  </div>
  <div data-bind="if: selectedIngredients().length">
    <button data-bind="click: searchRecipes">Buscar recetas</button>
  </div>
      <button id="test">ASDF</button>

    <script src="jquery-1.11.3.min.js"></script>
  <script src="knockout.js"></script>
  <script src="controller.js"></script>
    
    <form id="formRecetas" method="POST" action="phpn.php">
        <input type="hidden" name="arrayDeRecetas" />
    </form>
    
    <script>
        var arrayOfData;
        $(document).ready(function() {
          $('#test').click(function() {
            $.ajax({
                url: "http://localhost/easyf/phpn.php",
                method: 'POST',
                data: {arrayDeDatos : ['esto es', 'este es otro']}
            }).then(function(data) {
              console.log(data);
              arrayOfData = data;
            })
          });
        });
    </script>
    
    

                                        <?php /* getIngredientes();
                                           for($i=0;$i<sizeof($ingredientesMostrar);$i++){

                                                 $name=$i;
                                                   
                                                 echo "
                                                   
                                                     <label>
                                                      $ingredientesMostrar[$i]"."
                                                       <input type="."'checkbox'" ."name="."$name".">
                                                     </label>
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                   ";
                                                   if(($i % 4 )== 0 && $i !=0){
                                                   echo "
                                                         <br/>
                                                          <br/>
                                                          ";
                                                    }
                                                }
                                              
                                                    for($i=0; $i<sizeof($ingredientesMostrar); $i++){
                                                 
                                                        $varmasvar=$i;
                                                     if(!isset($_POST[$varmasvar])){
                                                            //array_push($ingredientesIngresados,$ingredientesMostrar[$varmasvar]);
				                         
							 //echo $ingredientesIngresados[0];				       
				                     }
                                                        else
                                                        {
							//	echo "Sarita";
                                                                  
                                                            if($_POST[$varmasvar]){

                                                             array_push($ingredientesIngresados,$ingredientesMostrar[$varmasvar]);
							//	$_SESSION["ii"]= $ingredientesIngresados;

                                                            }
                                                           }
                                                     }
 							$_SESSION["ii"]= $ingredientesIngresados;
										      
                                                for($i=0; $i< sizeof($ingredientesIngresados); $i++){
                                               // echo $ingredientesIngresados[$i];
						
						//	echo $_SESSION["ii"][$i];
						//$_SESSION["ii"]=$ingredientesIngresados;
                                                }
	
							      //validación Buscar Recetas

							     
							     
							    //  buscarReceta();
							      if(sizeof($ingredientesIngresados)>0){
                                                              // header("location:recetas_consultas.php");
                                                             }

                                         */?>

	       
                                                
                                         
        
				

			</div>
						</div>
					</section>

			
		<section>

		  <form action="recetas_consultas.php" method="POST">

		   <!--<select name="Colores" size="1">
		     <option value="r">Rojo</option>
		     <option value="v">Verde</option>
		   </select>
		   <input type="submit">-->
		   <?php
		      getIngredientes();
		      echo"
		   <select name=Colores multiple>";
		     for($i=0;$i<sizeof($ingredientesMostrar);$i++){
				   echo "<option value=r>"; echo $ingredientesMostrar[$i]; echo "</option>";
	             }
	           ?>

		     <option value="v">Verde</option>
		   </select>
		   <input type="submit" name="">
		  </form>
		</section>

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
