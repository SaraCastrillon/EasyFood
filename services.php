<?php
include 'easyFoodLogic.php';

//Conneccion a Mongodb
$conexion = new MongoClient();
$coleccion = $conexion->easyfood->usuarios;
$coleccion2 = $conexion->easyfood->receta;

$ingredientesMostrar = array();

$funcion = $_GET["funcion"];

switch ($funcion)  {
//global $ingredientesMostrar;
case "login":
	$user = $_GET["user"];
	$pass = $_GET["pass"];

	$cursor = $coleccion->find(array("correo" => $user ,"contrasena" => $pass), array("nombre" => 1));
	$tmp;
	while ($cursor->hasNext()){
		$tmp = array_pop($cursor->getNext());
	}
	if(count($tmp) == 1) echo $tmp;
	else echo "0";
	
  	break;

case "getIngredientesInicio":

   //get ingredientes
   $tmp = ($coleccion2->distinct("ingredientes"));

   //tamaño del arreglo
   $total =  count($tmp);

   $tmp2 = array();

   for($i=0;$i<$total;$i++){
	$h = array('ingrediente' => $tmp[$i]);
	array_push($tmp2, $h);
   }
	 //Ordenando el arreglo $arr
	 foreach ($tmp2 as $clave => $fila) {
	 	 $ingrediente[$clave] = $fila['ingrediente'];
	 }
	 array_multisort( $ingrediente, SORT_ASC, $tmp2);

   for($i=0;$i<$total;$i++){
	foreach($tmp2[$i] as $ingrediente => $valor){
  	   array_push($ingredientesMostrar, $valor);
	}
   }

  print_r($ingredientesMostrar);
//echo count($ingredientesMostrar);

  break;
  
case "createUser":
     $name = $_GET["name"]; 
     $last = $_GET["last"];
     $age = $_GET["age"];
     $email = $_GET["email"];
     $pass = $_GET["pass"];


/*echo $name;
echo $last;
echo $age;
echo $email;
echo $pass;*/

     $cursor = $coleccion->find(array("correo" => $email), array("nombre" => 1));
     $tmp;
     while ($cursor->hasNext()){
     	   $tmp = array_pop($cursor -> getNext());
     }
     if(count($tmp) == 1) $res = 1;
     else $res = 0;

     if($res == 1){
     	     echo 2;
     }else{

	$usuario = array("nombre" => $name, "apellido" => $last, "edad" => $age, "correo" => $email, "contrasena" => $pass);
     	$coleccion -> insert($usuario);

     	$cursor = $coleccion->find(array("correo" => $email ,"contrasena" => $pass), array("nombre" => 1));
     	$tmp;
     	while ($cursor->hasNext()){
     	      $tmp = array_pop($cursor->getNext());
     	}
     	if(count($tmp) == 1) echo 1;
     	       else echo 0;
        }
     	break;
}
?>

