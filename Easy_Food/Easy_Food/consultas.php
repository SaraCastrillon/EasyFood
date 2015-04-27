<?PHP

/*
//trabajando con elasticserch
//dependencia
require '/var/www/html/vendor/autoload.php';

//instancia de clientes
$client = new Elasticsearch\Client();

//Definiendo index y type
$params = array();
$params['index'] = 'easyfood';
$params['type']  = 'receta';


//consulta ingredientes existentes en la bd
$params['body']['aggs']['all_interests']['terms']['field'] = 'ingredientes';

//respuesta de la consulta
$results = $client->search($params);

//arreglo con solo los ingredientes de la respuesta
$tmp = $results['aggregations']['all_interests']['buckets'];

//tamaño del arreglo
$total =  count($tmp);

$ingredientes1 = array();

for($i=0;$i<$total;$i++){
	$tmp2 = $tmp[$i];
	array_push($ingredientes1, $tmp2);
	
}
*/

//Trabajando con mongodb

$conexion = new MongoClient();
$coleccion = $conexion->easyfood->receta;

//get ingredientes
$tmp = ($coleccion->distinct("ingredientes"));

//tamaño del arreglo
$total =  count($tmp);

$ingredientes1 = array();

for($i=0;$i<$total;$i++){
	$tmp2 = $tmp[$i];
	array_push($ingredientes1, $tmp2);
}

//---------------------------------------------------------------------


/*$ingredientes1 = array("papa","salsa","sal","repollo","tomate","limon","coco","cebolla","carne","pollo","huevos","queso","pescado","zanahoria","pan"
,"brocoli","manzana");*/

for($i=0; $i<sizeof($ingredientes1); $i++){
$ingredientes1[$i]=$ingredientes1[$i].".png";
//echo $ingredientes1[$i];
}

for($i=0; $i<=sizeof($ingredientes1); $i++){
$varmasvar=$ingredientes[$i];
echo $varmasvar;
if(isset($_POST[$varmasvar])){
 $ingredientes[$i]=$varmasvar;
 echo $ingredientes[$i];

}
}

?>
