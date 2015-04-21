<?PHP
$nombre="";
$descripcion="";
$personas="";
$puntuacion="";
$preparacion="";
$ingredientes="";
$tiempo="";
$categoria="";
$recetas = array("");
$ingredientes1 = array("papa","salsa","sal","repollo","tomate","limon","coco","cebolla");
$varmasvar="";
$ingredientes=array("");


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
$ingredientes=$_POST["ingredientes"];
$tiempo=$_POST["tiempo"];
$categoria=$_POST["categoria"];
    $recetas=array($nombre, $descripcion, $personas,$puntuacion, $preparacion, " ", $tiempo, $categoria);
    
}

for($i=0; $i<sizeof($recetas); $i++){
echo $recetas[$i];
//echo $ingredientes1[$i];
}


for($i=0; $i<sizeof($ingredientes1); $i++){
$ingredientes1[$i]=$ingredientes1[$i].".png";
//echo $ingredientes1[$i];
}


for($i=0; $i<sizeof($ingredientes1); $i++){
//echo "hola" .$i;
    $varmasvar=$i;
 //   echo $_POST["1"];
if(!empty($_POST[$varmasvar])){
       
 $ingredientes[$i]=$varmasvar;
    
}
}

for($i; $i< sizeof($ingredientes); $i++){
 echo $ingredientes[$i];
}


?>
