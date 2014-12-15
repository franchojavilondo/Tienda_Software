<?php
   session_start(); 
   $carro=$_SESSION['carro'];
   $contador=0;
   $Precio_Total=0;
   $Cliente=0;
   
   $hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";
   
   function generateRandomString() {
    $length = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
		
		//Sacamos el Id_Cliente
		$nombre= $_SESSION ["user"];
		$query1="SELECT Id_Cliente from clientes where nombre='$nombre'";	
		$result1 = mysqli_query($conexion, $query1);
		$row1 = mysqli_fetch_assoc($result1);
		$Cliente = $row1["Id_Cliente"];

		//Creamos el pedido
		foreach($carro as $k => $v){ 
		$Precio=$v['Precio']; 
		$Precio_Total=$Precio_Total+$Precio;
		
		}
		$query2="INSERT INTO pedidos (Id_Cliente, Precio_total) VALUES ('$Cliente',$Precio_Total)";
		if ($conexion->query($query2) === TRUE) {
			echo "Nuevo pedido creado";
		} else {
			echo "Error: " . $query2 . "<br>" . $conexion->error;
		}

		//Creamos las lineas
		
		$query3= "SELECT Id_Pedido FROM pedidos order by Id_Pedido DESC";
		$result3 = mysqli_query($conexion, $query3);
		$row3 = mysqli_fetch_assoc($result3);
		$Id_Pedido = $row3["Id_Pedido"];
		
		foreach($carro as $k => $v){ 
		$contador++; 
		$id=$v['id'];
		$Id_Producto=$v['Id_Producto'];
		$Precio=$v['Precio']; 
		$query2="INSERT INTO lineas (Id_Producto, Id_Pedido, Id_Linea, Precio) VALUES ($Id_Producto,$Id_Pedido, $contador, $Precio)";
		$conexion->query($query2);
		
		//Generamos la clave y la insertamos
		$Clave = generateRandomString();
		$queryclave= "INSERT INTO claves (Id_Producto, Id_Cliente, Clave) VALUES ($Id_Producto,$Cliente, '$Clave')";
		$conexion->query($queryclave);
		unset($carro[$id]); 
		
		}
		$_SESSION['carro']=$carro;
		
		
		
		$conexion->close();
		header("Location:../index.php"); 
		
		
?>