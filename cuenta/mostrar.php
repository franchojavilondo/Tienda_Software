<html>  
<head>  
<TITLE>Listado de productos adquiridos</TITLE> 
<link rel="stylesheet" href="../css/login.css"> 
</head>  

<body>  
<div align='center'>  
	<a href="../index.html">VOLVER A INICIO</a>
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>  
    <tr>  
      <td width='150' style='font-weight: bold'>Id_Pedido</td>  
      <td width='150' style='font-weight: bold'>Precio</td> 
    </tr>  


<?php
session_start();
   // Definimos los parámetros
   $hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";
   $tabla="pedidos";
   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
		
   	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	//STMT ORIENTADO A OBJETOS
	
	$user = $_SESSION["user"];
	

	
	?><h1>Cliente:  <?php
	echo $user;
	?></h1> <?php
	$stmt = $conexion->prepare("SELECT Id_Cliente FROM clientes WHERE nombre='$user'");
	$stmt->execute();
	$stmt->bind_result($Id_Cliente);
	echo $Id_Cliente;
	
if ($stmt->fetch())
   {
		do {	
			
			}while ($stmt->fetch());

	} 

	
	
	//MOSTRAR DATOS ACTUALES
	
	$stmt2 = $conexion->prepare("SELECT Id_Pedido,Precio_Total FROM $tabla WHERE Id_Cliente=$Id_Cliente");
	$stmt2->execute();
	$stmt2->bind_result($Id_Pedido,$Precio);

	if ($stmt2->fetch())
   {
	// Mostramos una tabla con el resultado de la consulta

		do {	
			echo "<tr>
				<td>".$Id_Pedido."</td>			
				<td>".$Precio."</td>
				</tr>";					
			}while ($stmt2->fetch());
		echo "<tr>";
		

			

	}
	else echo "No hay productos!";
	//CERRAMOS LA CONSULTA
	$stmt->close();
	$stmt2->close();
	//CERRAMOS LA CONEXION
	$conexion->close();
   
?>

   </table>  
</div>  
</body>  

</html> 
  