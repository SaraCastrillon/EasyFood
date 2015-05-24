<?PHP
session_start();
//Conneccion a Mongodb
$conexion = new MongoClient();
$coleccion = $conexion->easyfood->receta;

//Variables globales
$ingredientesMostrar = array();  //Ingredientes que el usuario tendrá la posibilidad de seleccionar.

 $ingredientesIngresados = array(); //Arreglo que que contiene los ingredientes seleccionados por el usuario.
//$ingredientesIngresados = array();
//$ingredientesIngresados = array("uno", "dos");
$recetasIngresadas = array();	 //Arreglo que contiene la receta que se va a insertar.
$ingredientes_recetas = array();	 //Arreglo que contiene los ingrdientes de la receta que se va a insertar.
$recetas = array(); 	       //Arrego que será retornado hacia el frontend.
$recetasInicio = array();       //Arrego que contiene las recetas clasificadas por puntuación.
$totalrecetas = 3; 	       //Cantidad de recetas que serán devueltas
$recetaid = array();	       //Arreglo solo para uso de la funcion "buscarReceta()"
//$arrayaux = $_SESSION["ii"];
if(isset($_SESSION[ii2])){
//$_SESSION[ii]=$_SESSION[ii2];
//unset($_SESSION[ii2]);
}
$lala = 7;
//getIngredientes();
//echo count($ingredientesMostrar);

//Fragmento que coge el user y password

$user="";
$pass="";
if($_POST["ingresar"]){
$user=$_POST["user"];
$pass=$_POST["pass"];
//$login = array("user"=> $user,"pass"=> $pass);
// header("location:index.php");
$response = file_get_contents("http://54.148.184.231/easyfood/Easy_Food/services.php?funcion=login&user=".$user."&pass=".$pass);
//print_r($response);
if(strcmp($response, "0")){
$message = "La clave o el usuario es incorrecto";
echo "<script type='text/javascript'>alert('$message');";
echo "window.location = 'login.php';";
echo "</script>";
// header('Location: login.php');
}
else
{
$_SESSION["user"]=$response;
header('Location: index.php');

}
}

//Fragmento que coge las recetas ingresadas
	 $nombre="";
	 $descripcion="";
	 $personas="";
	 $puntuacion="";
	 $preparacion="";
	 $ingredientesr="";
	 $tiempo="";
	 $categoria="";
	 $recetasIngresadas;
	 $ingredientes_recetas;
	if(isset($_POST["insert"])){
		if(empty($_POST["name"])||empty($_POST["descripcion"])||empty($_POST["porciones"])||empty($_POST["puntuacion"])||empty($_POST["preparacion"])||empty($_POST["ingredientes"])||empty($_POST["tiempo"])||empty($_POST["categoria"])){
			$message = "Por favor digite todos los campos";	
			echo "<script type='text/javascript'>alert('$message');</script>";
			}    
			else
			{
  			  $nombre=$_POST["name"];
			  $descripcion=$_POST["descripcion"];
			  $personas=$_POST["porciones"];
			  $puntuacion=$_POST["puntuacion"];
			  $preparacion=$_POST["preparacion"];
			  $ingredientesr=$_POST["ingredientes"];
			  $tiempo=$_POST["tiempo"];
			  $categoria=$_POST["categoria"];
			  $ingredientes_recetas=explode(',', $ingredientesr);
    			  $recetasIngresadas=array("nombre"=> $nombre,"descripcion"=> $descripcion,"personas"=> $personas,"puntuacion"=> $puntuacion,"preparacion"=> $preparacion,"ingredientes"=> $ingredientes_recetas,"tiempo"=> $tiempo,"categoria"=> $categoria);
    			 // $ingredientes_recetas=explode(',', $ingredientesr);
                          if(sizeof($recetasIngresadas)>0){
				$message = "Su receta fue guardada con exito";
                        	echo "<script type='text/javascript'>alert('$message');</script>";
	                                                
			  }

			  insertarRecetas();
			
			}
			 header("location:insert_receta.php"); 
		}

//Función que inserta las recetas en la BD
function insertarRecetas(){
   global $recetasIngresadas;
   global $coleccion;
   $coleccion->insert($recetasIngresadas);
}	 



//Función que devuelve las resetas ordenadas por puntuación
function recetasInicio(){
   global $recetasInicio;
   global $coleccion;
   
   $cursor = $coleccion->find(array())->sort(array("puntuacion" => 1));

   //cargando las recetas al arreglo $recetasInicio
   while ($cursor->hasNext()){
   	 $tmp = $cursor -> getNext();
	 //print_r ($tmp);
     	 array_push($recetasInicio, $tmp);
   }
}


function test(){
global $lala;
$lala = 10;
}

//Función para consultar recetas con base a los ingredientes ingresados por el usuario
function buscarReceta(){

	 session_start();
	 //print_r($_SESSION["ii"]);
	 //$arrayaux = $_SESSION["ii"];
	 //unset($_SESSION["ii"]);

	 //Variables globales
	 global $coleccion;
	 global $ingredientesIngresados;
	 global $recetas;
	 global $totalrecetas;
	 global $recetaid;

	 //Variables locales
	 $arr = array();

	 $consulta = array("_id" => 1);
	 $cursor = $coleccion->find(array(), $consulta);

	 //cargando todos los ids de las recetas existentes
	 while ($cursor->hasNext()){
	       $h = array(array_pop($cursor->getNext()), 0);
    	       array_push($recetaid, $h);
	 }

	 //Aumentando el contador de las recetas que tienen un ingrediente, depende de la función aumentar()
	 for($i=0;$i<count($_SESSION["ii"]);$i++){
		//echo $_SESSION["ii"][$i];
		$cursor = $coleccion->find(array("ingredientes" => $_SESSION["ii"][$i]), array("_id" => 1));
 		while ($cursor->hasNext()){
	 	      //var_dump($cursor->getNext());
	 	      aumentar(array_pop($cursor->getNext()));
	 	}
	 }
	// unset($_SESSION["ii"]);
//.......................................................................................................
	//contando la cantidad de ingredientes que tiene cada receta
	$contador = 0;
	for($i=0;$i<count($recetaid);$i++){
		$cursor = $coleccion->find(array("_id" => $recetaid[$i][0]), array("ingredientes" => 1));
		
	 	while ($cursor->hasNext()){
	 	      $contador =  count((array_pop($cursor -> getNext())));
	 	}

		$recetaid[$i][1] = ($recetaid[$i][1] * 100)/$contador;
		$contador = 0;
	}

	 //Moviendo $recetaid a $arr con valor y clave
	 for($i=0;$i<count($recetaid);$i++){
		$h = array('id' => $recetaid[$i][0], 'count' => $recetaid[$i][1]);
	 	array_push($arr, $h);
	 }
//.......................................................................................................

	 //Ordenando el arreglo $arr
	 foreach ($arr as $clave => $fila) {
	 	 $count[$clave] = $fila['count'];
	 	 $id[$clave] = $fila['id'];
	 }
	 array_multisort( $count, SORT_DESC, $id, SORT_ASC, $arr);

	 //Imprimir arreglo $arr ordenado
	 //print_r($arr);

	 //Llevando al arreglo $recetas las recetas a mostrar con la información completa
	 for($i=0;$i<$totalrecetas;$i++){
		$contador = 0;
	 	$id;
	 	foreach ( $arr[$i] as $idd ) {
	 		if($contador == 0){
	 			$id = $idd;
	 		}
	 		$contador++;
	 	}

	 	$consulta = array('_id' => new MongoId($id));
	 	$cursor = $coleccion->find($consulta);

	 	while ($cursor->hasNext()){
	 	      $tmp = $cursor -> getNext();
	 	      //print_r ($tmp);
	 	      //echo "<br>";
	 	      array_push($recetas, $tmp);
	 	}
	 }
	 //Imprimir arreglo $recetas
	 //print_r($recetas);
}

//Función que aumenta la importancia de cada receta
function aumentar($id){
	 global $recetaid;
	 for($i=0;$i<count($recetaid);$i++){
		if($recetaid[$i][0]==$id){
			$recetaid[$i][1]++;
			$i = count($recetaid);
		}
	 }
}

//Funcion que lista los ingredientes existentes
function getIngredientes(){
echo 1;
   global $coleccion;
   global $ingredientesMostrar;

   //get ingredientes
   $tmp = ($coleccion->distinct("ingredientes"));
echo 2;
echo count($tmp);
   //tamaño del arreglo
   $total =  count($tmp);

   $tmp2 = array();

   for($i=0;$i<$total;$i++){
	$h = array('ingrediente' => $tmp[$i]);
	array_push($tmp2, $h);
   }
echo 3;
	 //Ordenando el arreglo $arr
	 foreach ($tmp2 as $clave => $fila) {
	 	 $ingrediente[$clave] = $fila['ingrediente'];
	 }
	 array_multisort( $ingrediente, SORT_ASC, $tmp2);
echo 4;

   for($i=0;$i<$total;$i++){
	foreach($tmp2[$i] as $ingrediente => $valor){
  	   array_push($ingredientesMostrar, $valor);
	}
   }
echo 5;
  //print_r($ingredientesMostrar);
echo count($ingredientesMostrar);
}

?>
