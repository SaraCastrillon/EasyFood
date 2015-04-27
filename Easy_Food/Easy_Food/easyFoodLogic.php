<?PHP

//Conneccion a Mongodb
$conexion = new MongoClient();
$coleccion = $conexion->easyfood->receta;

//Variables globales
$ingredientesMostrar = array();  //Ingredientes que el usuario tendrá la posibilidad de seleccionar.
session_start();
 $ingredientesIngresados = array(); //Arreglo que que contiene los ingredientes seleccionados por el usuario.
//$ingredientesIngresados = array();
//unset($_SESSION["ii"]);
//$ingredientesIngresados = array("uno", "dos");
$recetasIngresadas = array();	 //Arreglo que contiene la receta que se va a insertar.
$ingredientes_recetas = array();	 //Arreglo que contiene los ingrdientes de la receta que se va a insertar.
$recetas = array(); 	       //Arrego que será retornado hacia el frontend.
$recetasInicio = array();       //Arrego que contiene las recetas clasificadas por puntuación.
$totalrecetas = 3; 	       //Cantidad de recetas que serán devueltas
$recetaid = array();	       //Arreglo solo para uso de la funcion "buscarReceta()"
$arrayaux = $_SESSION["ii"];

/*
//Función que guarda los datos ingresados para una receta en un arreglo
function guardarReceta(){
//Fragmento que coge las recetas ingresadas
	 global $nombre="";
	 global $descripcion="";
	 global $personas="";
	 global $puntuacion="";
	 global $preparacion="";
	 global $ingredientesr="";
	 global $tiempo="";
	 global $categoria="";
	 global $recetasIngresadas;
	 global $ingredientes_recetas;
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
    			  $recetasIngresadas=array($nombre, $descripcion, $personas,$puntuacion, $preparacion, " ", $tiempo, $categoria);
    			  $ingredientes_recetas=explode(',', $ingredientesr);
                          if(sizeof($recetasIngresadas)>0){
				$message = "Su receta fue guardada con exito";
                        	echo "<script type='text/javascript'>alert('$message');</script>";                            
			  }
			  insertarRecetas();
			}
		}
}
*/
//Función que inserta las recetas en la BD
function insertarRecetas(){
   global $recetasIngresadas;
   global $ingredientes_recetas;
   global $coleccion;
   $coleccion->insert($recetasIngresadas);
}	 



//Función que devuelve las resetas ordenadas por puntuación
function recetasInicio(){
   global $recetasInicio;
   global $coleccion;
   
   $cursor = $coleccion->find(array())->sort(array("puntuacion" => 1));

   //cargando las recetas al arreglo $recetas
   while ($cursor->hasNext()){
   	 $tmp = $cursor -> getNext();
	 //print_r ($tmp);
     	 array_push($recetasInicio, $tmp);
   }
}


//Función para consultar recetas con base a los ingredientes ingresados por el usuario
function buscarReceta(){

//echo count($ingredientesIngresados);

	 //Variables globales
	 global $coleccion;
	 global $ingredientesIngresados;
	 global $recetas;
	 global $totalrecetas;
	 global $recetaid;
	
//print_r($ingredientesIngresados);
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
	 for($i=0;$i<count($ingredientesIngresados);$i++){
		$cursor = $coleccion->find(array("ingredientes" => $ingredientesIngresados[$i]), array("_id" => 1));
	 	while ($cursor->hasNext()){
	 	      //var_dump($cursor->getNext());
	 	      aumentar(array_pop($cursor->getNext()));
	 	}
	 }

	 //Moviendo $recetaid a $arr con valor y clave
	 for($i=0;$i<count($recetaid);$i++){
		$h = array('id' => $recetaid[$i][0], 'count' => $recetaid[$i][1]);
	 	array_push($arr, $h);
	 }

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

   global $coleccion;
   global $ingredientesMostrar;

   //get ingredientes
   $tmp = ($coleccion->distinct("ingredientes"));

   //tamaño del arreglo
   $total =  count($tmp);

   //$ingredientes1 = array();

   for($i=0;$i<$total;$i++){
	$tmp2 = $tmp[$i];
   	array_push($ingredientesMostrar, $tmp2);
   }
  //print_r($ingredientesMostrar);
}

?>