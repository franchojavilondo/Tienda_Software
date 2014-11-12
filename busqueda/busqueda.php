<script type="text/javascript">
var carro = [];
function carrito(x,precio){
var cadena="Articulos del carrito:\n",i;
alert("Articulo metido al carrito");
carro.push(x);
carro.push(precio);
for(i=0;i<carro.length;i++){
cadena+="ID: "+carro[i]+" PRECIO: "+carro[i+1]+"\n";
i++;
}
alert(cadena);
var columnas=2;
crear_filas("tabla_carro",carro,columnas)
}
function crear_filas(tabla_pasada,elemento,columnas){
var i=0;
var celda = [];
var boton = document.createElement("input");
boton.setAttribute('name', "eliminar");
var tabla = document.getElementById(tabla_pasada);
var fila = tabla.insertRow(-1);
/* 	
	var celda1 = fila.insertCell(0);
	var celda2 = fila.insertCell(1);
	celda1.innerHTML = elemento[elemento.length-2];
	celda2.innerHTML = elemento[elemento.length-1]; */
	
	for(i=0;i<columnas;i++){
	celda[i] = fila.insertCell(i);
	celda[i].innerHTML = elemento[elemento.length-columnas+i];
	}
	celda[columnas] = fila.insertCell(i);
	
}
</script>

<html>  
<head>  
<TITLE>Listado de productos</TITLE> 
<link rel="stylesheet" href="../styles/layout.css"> 
</head>  

<body>  

<div align='left'> 
	<h1>CARRO DE LA COMPRA</h1>
	<table id="tabla_carro" border='1' cellpadding='0' cellspacing='0' width='300' bgcolor='#004C80' bordercolor='#1A3300' align="left">  
	<tr>
	<td width='150'align="center" style='font-weight: bold'>Id Producto</td> 
	<td width='150' align="center" style='font-weight: bold'>Precio</td>
	<td width='150' align="center" style='font-weight: bold'>Eliminar</td>
	</tr>
	
	
</table>

</div>

<div align='center'>  
	<a href="../index.html">VOLVER A INICIO</a>
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF' align="center">  
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
				<td><button><img src="../images/carrito.png" width="15" height="15" <?php echo 'onclick="carrito('.$Id_Producto.','.$Precio.')"' ;?>/></button></td>
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