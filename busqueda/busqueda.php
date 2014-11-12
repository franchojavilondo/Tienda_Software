<?php

// If your page calls session_start() be sure to include jcart.php first
include_once('../jcart/jcart.php');

?>
<link rel="stylesheet" type="text/css" media="screen, projection" href="../jcart/css/jcart.css" />

<script type="text/javascript" src="../jcart/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../jcart/js/jcart.min.js"></script>
<script type="text/javascript" src="../jcart/js/jcart.js"></script>

<html>  
<head>  
<TITLE>Listado de productos</TITLE> 
<link rel="stylesheet" href="../styles/layout.css"> 
</head>  

<body>  

<div align="left" id="jcart"><?php $jcart->display_cart();?></div>

<form method="post" action="" class="jcart">  
	<a href="../index.html">VOLVER A INICIO</a>
<fieldset>
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
				?>
                <input type="image" name="my-item-caratula" <?php echo 'src="..'.$Caratula.'"' ?> WIDTH="50" HEIGHT="80"> </input>
                <input type="text" name="my-item-id" <?php echo 'value="'.$Id_Producto.'"' ?>/>
				<input type="text" name="my-item-name" <?php echo 'value="'.$Nombre.'"' ?>/>
    			<input type="text" name="my-item-price" <?php echo 'value="'.$Cantidad.'"' ?>/>
    			<input type="text" name="my-item-url" <?php echo 'value="'.$Precio.'"' ?> />
				<input type="image" src="../images/tick.png" WIDTH="15" HEIGHT="15"> </input>
				<?php

				}
		if($Cantidad==0){
			?>
            	<input type="image" name="my-item-caratula" <?php echo 'src="..'.$Caratula.'"' ?> WIDTH="50" HEIGHT="80"> </input>
                <input type="text" name="my-item-id" <?php echo 'value="'.$Id_Producto.'"' ?>/>
				<input type="text" name="my-item-name" <?php echo 'value="'.$Nombre.'"' ?>/>
    			<input type="text" name="my-item-price" <?php echo 'value="'.$Cantidad.'"' ?>/>
    			<input type="text" name="my-item-url" <?php echo 'value="'.$Precio.'"' ?> />
				<input type="image" src="../images/cross.png" WIDTH="15" HEIGHT="15"> </input>
				<?php
				}
			}while ($stmt->fetch());
		
			
	}
	else echo "No hay productos!";
	//CERRAMOS LA CONSULTA
	$stmt->close();
	//CERRAMOS LA CONEXION
	$conexion->close();
   
?>


</form>  
</body>  

</html> 