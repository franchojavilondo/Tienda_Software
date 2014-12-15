<?php  
session_start(); 
//con session_start() creamos la sesión 
//si no existe o la retomamos si ya ha 
//sido creada 
extract($_REQUEST); 
//la función extract toma las claves 
//de una matriz asoiativa y las 
//convierte en nombres de variable, 
//asignándoles a esas variables 
//valores iguales a los que tenía 
//asociados en la matriz. Es decir, 
//convierte a $_GET['id'] en $id, 
//sin que tengamos que tomarnos el 
//trabajo de escribir 
//$id=$_GET['id'];  








$hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";

   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
//incluímos la conexión a nuestra 
//base de datos 
//if(!isset($cantidad)){$cantidad=1;} 
//Como también vamos a usar este 
//archivo para actualizar las 
//cantidades, hacemos que cuando 
//la misma no esté indicada sea 
//igual a 1 


function existe($conexion,$id) {

	if (isset($_SESSION["user"])  && isset($_SESSION["pass"])){
	$user = $_SESSION["user"];
	$querydes = "SELECT * from clientes where Nombre='$user'";
	$resultdes = mysqli_query($conexion, $querydes); 
	$rowdes = mysqli_fetch_assoc($resultdes);
	$Cliente = $rowdes["Id_Cliente"];
	
    $querye = "SELECT * from claves where Id_Producto=$id AND Id_Cliente=$Cliente";
	$resulte = $conexion->query($querye);
	echo $id;
	echo $Cliente;
	if($registro = $resulte->fetch_assoc()){
	echo "entra";
	return true;
	}
	else return false;
	}
	else return false;
}

if (!existe($conexion,$id)){
$query="select * from productos where Id_Producto='".$id."'";
$query2="select Porcentaje from ofertas where Id_Producto='".$id."'";
//$qry=mysql_query("select * from productos where Id_Producto='".$id."'"); 
$result = mysqli_query($conexion, $query);
//$row=mysql_fetch_array($qry); 
//Si ya hemos introducido algún 
//producto en el carro lo 
//tendremos guardado temporalmente 
//en el array superglobal 
//$_SESSION['carro'], de manera 
//que rescatamos los valores de 
//dicho array y se los asignamos 
//a la variable $carro, previa  
//comprobación con isset de que 
//$_SESSION['carro'] ya haya sido 
//definida 
if(isset($_SESSION['carro'])) 
$carro=$_SESSION['carro']; 
//Ahora introducimos el nuevo 
//producto en la matriz $carro, 
//utilizando como índice el id 
//del producto en cuestión, 
//encriptado con md5. 
//Utilizamos md5 porque genera 
//un valor alfanumérico que luego, 
//cuando busquemos un producto 
//en particular dentro de la 
//matriz, no podrá ser confundido 
//con la posición que ocupa dentro 
//de dicha matriz, como podría 
//ocurrir si fuera sólo numérico. 
//Cabe aclarar que si el producto 
//ya había sido agregado antes, 
//los nuevos valores que le 
//asignemos reemplazarán a los 
//viejos.  
//Al mismo tiempo, y no porque 
//sea estrictamente necesario 
//sino a modo de ejemplo, 
//guardamos más de un valor en 
//la variable $carro, valiéndonos 
//de nuevo de la herramienta array. 
if($result2 = mysqli_query($conexion, $query2))
if($row2 = mysqli_fetch_assoc($result2)){
$row = mysqli_fetch_assoc($result);
$precio=$row['Precio']-($row['Precio']*$row2['Porcentaje']/100);



$carro[md5($id)]=array('id'=>md5($id), 
'Nombre'=>$row['Nombre'], 
'Precio'=>$precio,'Id_Producto'=>$id); }


else {

$row = mysqli_fetch_assoc($result);
$carro[md5($id)]=array('id'=>md5($id), 
'Nombre'=>$row['Nombre'], 
'Precio'=>$row['Precio'],'Id_Producto'=>$id);

}
//Ahora dentro de la sesión 
//($_SESSION['carro']) tenemos 
//sólo los valores que teníamos 
//(si es que teníamos alguno)  
//antes de ingresar a esta página 
//y en la variable $carro tenemos 
//esos mismos valores más el que 
//acabamos de sumar. De manera que  
//tenemos que actualizar (reemplazar) 
//la variable de sesión por la 
//variable $carro. 
$_SESSION['carro']=$carro; 
//Y volvemos a nuestro catálogo de 
//artículos. La cadena SID representa 
//al identificador de la sesión, que, 
//dependiendo de la configuración del 
//servidor y de si el usuario tiene 
//o no activadas las cookies puede 
//no ser necesario pasarla por la url. 
//Pero para que nuestro carro funcione, 
//independientemente de esos factores, 
//conviene escribirla siempre. 
}
header("Location:vercarrito.php"); 
?> 