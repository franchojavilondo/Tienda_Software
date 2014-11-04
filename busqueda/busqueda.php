<?php 
session_start();

if (isset($_SESSION["carro"]))
$carro = $_SESSION["carro"];

else $_SESSION['carro']=array(); 


//array_push($_SESSION['carro'],'apple','mango','banana');
//echo $_SESSION['carro'][8];
?>

<script type="text/javascript">


var carro = <?php 
if (isset($_SESSION["carro"]))
echo json_encode($_SESSION["carro"]);
else 
echo "[]";
?>;


function carrito(x){
alert("Articulo metido al carrito");

<?php
$mivarPHP=
    '<script type="text/javascript">;
    document.writeln (x.toString());
</script>';


array_push($_SESSION['carro'],$mivarPHP);
?>


var columnas=2;
crear_filas("tabla_carro",carro,columnas)


}


function crear_filas(tabla_pasada,elemento,columnas){
var i=0;
var celda = [];
var tabla = document.getElementById(tabla_pasada);
var fila = tabla.insertRow(-1);
//se crea el boton
var boton = document.createElement("input");
boton.setAttribute('onClick',"eliminar_filas("+tabla_pasada+","+tabla.rows+","+columnas+")"); 
boton.setAttribute('name', "boton");

/* 	
	var celda1 = fila.insertCell(0);
	var celda2 = fila.insertCell(1);
	celda1.innerHTML = elemento[elemento.length-2];
	celda2.innerHTML = elemento[elemento.length-1]; */
	
	for(i=0;i<columnas;i++){
	celda[i] = fila.insertCell(i);
	celda[i].innerHTML = elemento[elemento.length-columnas+i];
	}



	
}

function eliminar_filas(tabla_pasada,fila,columnas){
	
	
	}


</script>

<html>  
<head>  
<TITLE>Listado de productos</TITLE> 
<link rel="stylesheet" href="../styles/login.css"> 
</head>  

<body>  

<div align='left'> 
	<h1>CARRO DE LA COMPRA</h1>
	<table id="tabla_carro" border='1' cellpadding='0' cellspacing='0' width='300' bgcolor='#004C80' bordercolor='#1A3300'>  
	<tr>
	<td width='150'align="center" style='font-weight: bold'>Id Producto</td> 
	<td width='150' align="center" style='font-weight: bold'>Precio</td>
	<td width='150' align="center" style='font-weight: bold'>Eliminar</td>
	</tr>
	
	
</table>

</div>

<div align='center'>  
	<a href="../index.html">VOLVER A INICIO</a>
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>  
    <tr>  
	  <td width='150' align="center" style='font-weight: bold'>Caratula</td> 	
      <td width='150' align="center" style='font-weight: bold'>Id Producto</td> 
	  <td width='150' align="center" style='font-weight: bold'>Nombre</td> 
	  <td width='150' align="center" style='font-weight: bold'>Cantidad</td> 	  
      <td width='150' align="center" style='font-weight: bold'>Precio</td> 
	  <td width='150' align="center" style='font-weight: bold'>Estado</td> 
	  <td width='150' align="center" style='font-weight: bold'>Sumar al Carrito</td>
  
		
    </tr>  



<?php

   // Definimos los parámetros
   $hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";
   $tabla="productos";
   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
		
   	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	//STMT ORIENTADO A OBJETOS
	
	$stmt = $conexion->prepare("SELECT caratula,Id_Producto,nombre,Cantidad,precio FROM $tabla ORDER BY Id_Producto");
	$stmt->execute();
	$stmt->bind_result($Caratula,$Id_Producto,$Nombre,$Cantidad,$Precio);

	if ($stmt->fetch())
   {


	// Mostramos una tabla con el resultado de la consulta

		do {	

		if($Cantidad>0){
			echo "<tr>";
				?><td><IMG <?php echo 'SRC="..'.$Caratula.'"' ?> WIDTH="50" HEIGHT="80"></td><?php
		  echo "<td> ".$Id_Producto."</td>
				<td>".$Nombre."</td>
				<td>".$Cantidad."</td>			
				<td>".$Precio."</td>";
				?><td> <IMG SRC="../images/tick.png" WIDTH="15" HEIGHT="15"></td>
				<td><button><img src="../images/carrito.png" width="15" height="15" <?php echo 'onclick="carrito('.$Id_Producto.')"' ;?>/></button></td>
				<?php
			echo "</tr>";
				}
		if($Cantidad==0){
			echo "<tr>";
				?><td><IMG <?php echo 'SRC="..'.$Caratula.'"' ?> WIDTH="50" HEIGHT="80"></td><?php
		  echo  "<td>".$Id_Producto."</td>
				<td>".$Nombre."</td>
				<td>".$Cantidad."</td>			
				<td>".$Precio."</td>";
				?><td> <IMG SRC="../images/cross.png" WIDTH="15" HEIGHT="15"></td>

				<?php
			echo "</tr>";
				}
			}while ($stmt->fetch());

		

			
		echo "</table>";
	}
	else echo "No hay productos!";
	//CERRAMOS LA CONSULTA
	$stmt->close();
	//CERRAMOS LA CONEXION
	$conexion->close();
   
?>

   </table>  
</div>  
</body>  

</html> 