<?php
	session_start();
?>
<html lang="en" dir="ltr">
<head>
<title>Tienda de videojuegos</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>
// Botón para Ir Arriba
jQuery(document).ready(function() {
	jQuery("#IrArriba").hide();
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#IrArriba').fadeIn();
			} 
			else {
				jQuery('#IrArriba').fadeOut();
			}
		});
		jQuery('#IrArriba a').click(function () {
			jQuery('body,html').animate({
				scrollTop: $("#arriba").offset().top
			}, 300);
			return false;
		});
	});

});
</script>
<script type='text/javascript'>

jQuery(document).ready(function() {
	jQuery(function () {
		jQuery('#pagina').click(function () {
			jQuery('body,html').animate({
				scrollTop: $("#arriba").offset().top
			}, 300);
			return false;
		});
	});

});
</script>
</head>
<body>

	
	<!--<form action="index.php" method="get"> 
Criterio de búsqueda: 
<input type="text" name="criterio" size="22" maxlength="150"> 
<input type="submit" value="Buscar"> 
</form>-->
<?php
		$hostname = "localhost";
		$usuario = "pma";
		$password = "pmapass";
		$basededatos = "tienda_software";
		$tabla="clientes";	 
		
	
		$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if ($conexion->connect_errno) {
			die('Error de conexión: ' . $conexion->connect_error);
		}		
		//Limito la busqueda 
		$TAMANO_PAGINA = 10; 

		//examino la página a mostrar y el inicio del registro a mostrar 
		$pagina = $_GET["pagina"]; 
		if (!$pagina) { 
			$inicio = 0; 
			$pagina=1; 
		} 
		else { 
			$inicio = ($pagina - 1) * $TAMANO_PAGINA; 
		}
		//inicializo el criterio y recibo cualquier cadena que se desee buscar 
		$criterio = ""; 
		$txt_criterio="";
		if ($_GET["criterio"]!=""){ 
			$txt_criterio = $_GET["criterio"]; 
			$criterio = " where nombre_pais like '%" . $txt_criterio . "%'"; 
		}
		//miro a ver el número total de campos que hay en la tabla con esa búsqueda 
		$consultaSQL ="SELECT * FROM productos" ; 
		$resultado = $conexion->query($consultaSQL);
		$num_total_registros = $resultado->num_rows;
		//calculo el total de páginas 
		$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 

		//pongo el número de registros total, el tamaño de página y la página que se muestra 
		echo "Número de registros encontrados: " . $num_total_registros . "<br>"; 
		echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>"; 
		echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>";
		echo $inicio;
		?>
		<div id='IrArriba'>
		<a href='#Arriba' ><span/></a>
		</div>
		<div  id="arriba"></div>
		<a name="Ancla"></a>
		<?php
		
		$consultaSQL = "SELECT * FROM productos" . $criterio . " limit " . $inicio . "," . ($TAMANO_PAGINA+1); 
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		if ($registro=$resultado->fetch_assoc()){
		
				while ($row1 = mysqli_fetch_assoc($resultado)) {
				?>
				<div>
				<a href="../producto/product_info.php?id=<?php echo $row1["Id_Producto"] ?>" <?php echo 'title="'.$row1["Nombre"].'"'?> target="_blank">
					<img <?php echo 'src=".'.$row1["Caratula"].'"' ?> WIDTH="50" HEIGHT="80" /></a>
                <!--<input type="text" name="my-item-id" <?php echo 'value="'.$row1["Id_Producto"].'"' ?>/>-->
				<input type="text" name="my-item-name" <?php echo 'value="'.$row1["Nombre"].'"' ?>/>
    			<!--<input type="text" name="my-item-amount" <?php echo 'value="'.$row1["Genero"].'"' ?>/>-->
    			<input type="text" name="my-item-price" <?php echo 'value="'.$row1["Precio"]." Euros".'"' ?> />
				</div>
				
				<?php
				}
		}
		//muestro los distintos índices de las páginas, si es que hay varias páginas 
		if ($total_paginas >= 1){ 
			for ($i=1;$i<=$total_paginas;$i++){ 
				if ($pagina == $i) 
					//si muestro el índice de la página actual, no coloco enlace 
					echo $pagina . " "; 
				else 
					//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
					echo "<a href='prueba.php?pagina=" . $i . "&criterio=" . $txt_criterio .'#Ancla'."'>" . $i."</a> "; 
			} 
		}
		
		$registro=$resultado->free();
		$conexion->close();
		
?>
<br><br>
</body>