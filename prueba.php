<?php
	session_start();
?>
<html lang="en" dir="ltr">
<head>
<title>Tienda de videojuegos</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>
// Bot�n para Ir Arriba
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
Criterio de b�squeda: 
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
			die('Error de conexi�n: ' . $conexion->connect_error);
		}		
		//Limito la busqueda 
		$TAMANO_PAGINA = 10; 

		//examino la p�gina a mostrar y el inicio del registro a mostrar 
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
		//miro a ver el n�mero total de campos que hay en la tabla con esa b�squeda 
		$consultaSQL ="SELECT * FROM productos" ; 
		$resultado = $conexion->query($consultaSQL);
		$num_total_registros = $resultado->num_rows;
		//calculo el total de p�ginas 
		$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 

		//pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra 
		echo "N�mero de registros encontrados: " . $num_total_registros . "<br>"; 
		echo "Se muestran p�ginas de " . $TAMANO_PAGINA . " registros cada una<br>"; 
		echo "Mostrando la p�gina " . $pagina . " de " . $total_paginas . "<p>";
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
		//muestro los distintos �ndices de las p�ginas, si es que hay varias p�ginas 
		if ($total_paginas >= 1){ 
			for ($i=1;$i<=$total_paginas;$i++){ 
				if ($pagina == $i) 
					//si muestro el �ndice de la p�gina actual, no coloco enlace 
					echo $pagina . " "; 
				else 
					//si el �ndice no corresponde con la p�gina mostrada actualmente, coloco el enlace para ir a esa p�gina 
					echo "<a href='prueba.php?pagina=" . $i . "&criterio=" . $txt_criterio .'#Ancla'."'>" . $i."</a> "; 
			} 
		}
		
		$registro=$resultado->free();
		$conexion->close();
		
?>
<br><br>
</body>