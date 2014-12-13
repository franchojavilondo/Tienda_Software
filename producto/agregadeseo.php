<?php
   session_start(); 

   extract($_REQUEST); 
   
   $hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";

   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
		

		//Creamos el pedido
		
		$query2="INSERT INTO deseos (Id_Cliente, Id_Producto) VALUES ($idc,$idp)";
		if ($conexion->query($query2) === TRUE) {
			echo "Deseo añadido";
		} else {
			echo "Error: " . $query2 . "<br>" . $conexion->error;
		}

		$conexion->close();
		header("Location:./product_info.php?id=$idp"); 
		
		
?>