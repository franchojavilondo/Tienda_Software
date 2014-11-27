<?php
// If your page calls session_start() be sure to include jcart.php first
include_once('../jcart/jcart.php');
?>
<!--<link rel="stylesheet" type="text/css" media="screen, projection" href="../jcart/css/jcart.css" />


<script type="text/javascript" src="../jcart/js/jcart.min.js"></script>
<script type="text/javascript" src="../jcart/js/jcart.js"></script> -->

<script type="text/javascript" src="../jcart/js/jquery-1.4.4.min.js"></script>
<html>  
<head>  
<TITLE>Listado de productos</TITLE> 
<link rel="stylesheet" href="../styles/layout.css"> 
</head>  

<body>  

<!--<div align="left" id="jcart"><?php $jcart->display_cart();?></div>

<form method="post" action="" class="jcart">  -->
<form method="post" action="" >
	<a href="../index.php">VOLVER A INICIO</a>
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

	$query1 = "SELECT * FROM productos ORDER BY Id_Producto";
	if ($result1 = mysqli_query($conexion, $query1)) {
				while ($row1 = mysqli_fetch_assoc($result1)) {
	
	// Mostramos una tabla con el resultado de la consulta
	
	?>
				<a href="../producto/product_info.php?id=<?php echo $row1["Id_Producto"] ?>" <?php echo 'title="'.$row1["Nombre"].'"'?> target="_blank">
					<img <?php echo 'src="..'.$row1["Caratula"].'"' ?> WIDTH="50" HEIGHT="80" /></a>
                <input type="text" name="my-item-id" <?php echo 'value="'.$row1["Id_Producto"].'"' ?>/>
				<input type="text" name="my-item-name" <?php echo 'value="'.$row1["Nombre"].'"' ?>/>
    			<input type="text" name="my-item-amount" <?php echo 'value="'.$row1["Cantidad"].'"' ?>/>
    			<input type="text" name="my-item-price" <?php echo 'value="'.$row1["Precio"].'"' ?> />
			<?php
		if($row1["Cantidad"]>0){
				
                ?>
				<input type="image" src="../images/tick.png" WIDTH="15" HEIGHT="15"> </input>
				<?php
				}
		if($row1["Cantidad"]==0){
			?>
				<input type="image" src="../images/cross.png" WIDTH="15" HEIGHT="15"> </input>
				<?php
				}
			}
		
			
	}
	
	
	$conexion->close();
   
?>


</form>  
</body>  

</html> 