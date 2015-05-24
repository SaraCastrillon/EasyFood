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
		<title>Login</title>
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
						<!--<li class="current"><a href="index.php">Inicio</a></li>-->
						<li class="submenu">
							<!--<a href="">Menús</a>-->
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
                                                <li><a href="ingredientes.php"><strong>Mis Ingredientes</strong></a></li>
						<li><a href="#" class="button special">Iniciar Sesión</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon"> <img src="images/easyfood.png"/></span>
					<h2>Registro</h2>
					
				</header>
				    

				<!-- One -->
					<section class="wrapper style4 special container 75%">
                    <div class="panel">
						<!-- Content -->
							<div class="content">
							  <form method="POST" action="registro.php">
								  <div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="text" name="nombre" placeholder="Nombre">
										</div>
									</div>
									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="text" name="apellidos" placeholder="Apellidos" />
										</div>
									</div>
                                    <div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="text" name="edad" placeholder="Edad" />
										</div>
									</div>
                                     <div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="email" name="correo" placeholder="Correo" required/>
										</div>
									</div>
                                   
                                    <div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="text" name="pass1" placeholder="Contraseña" />
										</div>
									</div>
                                    <div class="row 50%">
										<div class="12u 12u(mobile)">
											<input type="text" name="pass2" placeholder="Repita la contraseña" />
										</div>
									</div>
                                    
                                    <div class="row 50%">
                                    	<div class="12u 12u(mobile)">
										     <ul class="buttons">
												<li><input type="submit" class="special" value="Registrarse" name="registro" /></li>
											</ul>
										</div>
                                 </div>
				  <?php
                                       if($_POST["pss1"] != $_POST["pss2"] ){
                                       $message = "Las contraseñas no coinciden";
                                       echo "<script type='text/javascript'>alert('$message');</script>"; 
				       }elseif(isset($_POST["registro"])){
				       $nombre = $_POST["nombre"];
				       //echo "El nombre es: $nombre";
				       $apellido = $_POST["apellidos"];
				       //echo "Apellidos: $apellidos";
				       $edad = $_POST["edad"];
				       //echo "Edad: $edad";
				       $correo = $_POST["correo"];
				       //echo "Correo: $correo";
				       $contraseña = $_POST["pass1"];
				       //echo "Contraseña: $contraseña";
				       
				       
				       
				       $response = file_get_contents("http://54.148.184.231/easyfood/Easy_Food/services.php?funcion=createUser&name=".$nombre."&last=".$apellido."&age=".$edad."&email=".$correo."&pass=".$contraseña);
				     //echo 123;
				       //echo $response;
				       if($response==1){
				          echo "kjdshckjhdsckjehfdk";
				          $message = "Se ha registrado exitosamente";
				          echo "<script type='text/javascript'>alert('$message');";
				          echo "window.location = 'login.php';";
				          echo "</script>";
				       }else{
				          if($response==0) {
				             $message = "No se ha podido registrar el usuario";
				             echo "<script type='text/javascript'>alert('$message');";
				             echo "window.location = 'registro.php';";
				             echo "</script>";
				          } else {
				             if($response==2){
				                $message = "El usuario ya está registrado";
				                echo "<script type='text/javascript'>alert('$message');";
				                echo "window.location = 'registro.php';";
				                echo "</script>";
				           }
				       }
				       }
				       }
                                       ?>
				  

		
									</div>
                                 
								</form>
							</div>
                        </div>

					</section>

			</article>
	</body>
</html>
