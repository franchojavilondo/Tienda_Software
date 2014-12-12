<?php
	session_start();
	if(isset($_SESSION['carro'])) {
$carro=$_SESSION['carro'];
$contador = count($carro);
}
else {$carro=false; $contador=0;}
?>

<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
<title>Tienda de videojuegos</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
<style type="text/css">
</style>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

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
				scrollTop: 0
			}, 300);
			return false;
		});
	});

});
</script>

 <script type="text/javascript">
 $(document).ready(function() {
	 $('ul li:has(ul)').hover(
	 function(e)
	 {
		$(this).find('ul').css({display: "block"});
	 },
	 function(e)
	 {
		$(this).find('ul').css({display: "none"});
	 }
	 );
 });
 </script>
 <script type="text/javascript">
$(function(){
    $('#slider2 div:gt(0)').hide();
    setInterval(function(){
      $('#slider2 div:first-child').fadeOut(0)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider2');}, 8000);
});
</script>
<script type='text/javascript'>
function  recargar(){ 
	cri=document.formu.criterio.value;
   	location.href="listado.php?pagina=1&criterio="+cri;
   	
	
}	
				
</script>
<script type="text/javascript">
 $(document).ready(function() {
  $("#parametro").keydown( //Evento de presionar una tecla en el campo cuyo id sea "parametro"
   function(event)
   {
    var param = $("#parametro").attr("value"); //Se obtiene el valor del campo de texto
    $("#resultado").load('busqueda.php',{parametro:param}); //Y se envía por vía post al archivo busqueda.php para luego recargar el div con el resultado obtenido
	document.forms.busqueda.action="../juegos/listadobusqueda.php?pagina=1&criterio=genero&prod_name="+param;
   }
  );
 });
 
 $(document).ready(function() {
  $("#parametro").keyup( //Evento de soltar una tecla en el campo cuyo id sea "parametro"
   function(event)
   {
    var param = $("#parametro").attr("value"); //Se obtiene el valor del campo de texto
    $("#resultado").load('busqueda.php',{parametro:param}); //Y se envía por vía post al archivo busqueda.php para luego recargar el div con el resultado obtenido
	document.forms.busqueda.action="../juegos/listadobusqueda.php?pagina=1&criterio=genero&prod_name="+param;
   }
  );
 });
</script>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="../css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>

</head>
<body>
<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>




<div class="wrapper row1">
<div class="cabecera"></div>
  <header id="header" class="clear">
  
    <div id="hgroup">
	<a href="../index.php"> <img src="../images/keep.png" width="220" style="margin-left:-50px" height="63" alt="logo"> <a/> </div>
    
    <form id="busqueda" action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input id="parametro" type="text" value="Buscar en la tienda&hellip;" onFocus="this.value=(this.value=='Buscar en la tienda&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="">
		       <br />
<br />
<div id="resultado" class="cuadro_busqueda" ></div>
      </fieldset>
    </form>
    
    <div class="cajon_usu" >
		<?php
	
	if (isset($_SESSION["user"])  && isset($_SESSION["pass"])){
		$hostname = "localhost";
		$usuario = "pma";
		$password = "pmapass";
		$basededatos = "tienda_software";
		$tabla="clientes";	 
		
		$user= $_SESSION ["user"];
		$contra = $_SESSION ["pass"];
		$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if ($conexion->connect_errno) {
			die('Error de conexión: ' . $conexion->connect_error);
		}	
		
		$consultaSQL ="SELECT * FROM clientes  WHERE (nombre='$user' || email='$user')&& pass='$contra'" ; 
	  
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		
		//  mysqli_fetch_array devuelve un array con cada fila de la consulta
		if ($registro=$resultado->fetch_assoc()){
		
			$ruta=$registro['foto'];
			
			?>
	
	
			<div class="imagen_perfil">
					<img <?php echo 'src=".'.$ruta.'"'; ?> alt="Usuario" >
				</div>
					
				<div class="titulo_perfil">
					<h1><?php echo $registro["nombre"]; ?> </h1>
				</div>
				
				<div class="botones_acceso">
					<a href="profile.php"><input type="submit" class="boton_login" value="Mi Perfil"></a>
					<a href="logout.php"><input type="submit" class="boton_registro" value="Cerrar Sesión"></a>
				</div>
			<?php
		
		}
		else{
			$consultaSQL ="SELECT * FROM administradores WHERE nombre='$user' && pass='$contra'" ; 
	  
			$resultado = $conexion->query($consultaSQL);
			if (!$resultado) {
				die('No se puede realizar la consulta: ' . $conexion->connect_error);
			}
			
			//  mysqli_fetch_array devuelve un array con cada fila de la consulta
			if ($registro=$resultado->fetch_assoc()){
				?>
	
		
				<div class="imagen_perfil">
				
						<img src="../images/usuarios/admin.png" alt="Usuario" >
					</div>
						
					<div class="titulo_perfil">
						<h1><?php echo "Administrador: ".$registro["nombre"]; ?> </h1>
					</div>
					
					<div class="botones_acceso">
						<a href="admin.php"><input type="submit" class="boton_login" value="Pagina administracion"></a>
						<a href="logout.php"><input type="submit" class="boton_registro" value="Cerrar Sesión"></a>
					</div>
				<?php
			}
		}
		$registro=$resultado->free();
		$conexion->close();
	
	
	
	
	}
	
	else{
	
	?>
		<div class="imagen_perfil">
			<img src="../images/profile.png" alt="Usuario" class="profile_img">
		</div>
			
		<div class="titulo_perfil">
			<h1>Usuario anónimo</h1>
		</div>
		
		<div class="botones_acceso">
			<a href="login.php"><input type="submit" class="boton_login" value="Iniciar sesión"></a>
			<a href="signin.php"><input type="submit" class="boton_registro" value="Registrarse"></a>
		</div>
		
		<?php
		}
		?>
	</div>
    <nav>
      <div class="menu">
      <ul>
	  <li><a href="../index.php"><img class="iconos_navegacion" src="../images/home.png">INICIO</a></li>
		<li>|</li>

	    <li><div class="enl"><a href="./listado.php?pagina=1&criterio=alfa"><img class="iconos_navegacion" src="../images/gamepad.png">Juegos<div class="tri"></div></a></div>

	    

		<ul>
		<div class="sub">
			<li><a href="./listadofiltro.php?filtro=free_to_play&pagina=1&criterio=alfa">Free to Play</a></li>
            <li><a href="./listadofiltro.php?filtro=acceso_anticipado&pagina=1&criterio=alfa">Acceso anticipado</a></li>
            <li><a href="./listadofiltro.php?filtro=accion&pagina=1&criterio=alfa">Acción</a></li>
            <li><a href="./listadofiltro.php?filtro=aventura&pagina=1&criterio=alfa">Aventura</a></li>
			<li><a href="./listadofiltro.php?filtro=carreras&pagina=1&criterio=alfa">Carreras</a></li>
            <li><a href="./listadofiltro.php?filtro=casual&pagina=1&criterio=alfa">Casual</a></li>
            <li><a href="./listadofiltro.php?filtro=deportes&pagina=1&criterio=alfa">Deportes</a></li>
            <li><a href="./listadofiltro.php?filtro=estrategia&pagina=1&criterio=alfa">Estrategia</a></li>
			<li><a href="./listadofiltro.php?filtro=indie&pagina=1&criterio=alfa">Indie</a></li>
            <li><a href="./listadofiltro.php?filtro=mmo&pagina=1&criterio=alfa">Multijugador masivo</a></li>
            <li><a href="./listadofiltro.php?filtro=rol&pagina=1&criterio=alfa">Rol</a></li>
            <li><a href="./listadofiltro.php?filtro=simuladores&pagina=1&criterio=alfa">Simuladores</a></li>
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li><a href="#"><img class="iconos_navegacion" src="../images/menu.png">Secciones<div class="tri"></div></a>
		<ul>
		<div class="sub">
			<li><a href="../news.php">Noticias</a></li>
            <li><a href="../latest.php">Lo último</a></li>
            <li><a href="../offers.php">Ofertas</a></li>
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li class="last"><a href="#"><img class="iconos_navegacion" src="../images/demo.png">Demos</a></li>
        
      </ul>
	  
	  
	  <div class="seccion_carrito">
	  <ul>

	  <li><a href="#"><div class="contador_lista">0</div><img class="icono_deseos" src="../images/favoritos.png">Lista de deseos</a></li>
		<li>|</li>
	  

	  <li><a href="../carro/vercarrito.php"><div class="contador_carrito"><?php echo $contador?></div><img class="imagen_carrito" src="../images/cart.png">Mi Cesta</a></li>

      </ul>
	  </div>
	  
	  
	  </div>
    </nav>      
    
  </header>
</div>

<!-- content -->


<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- main content -->
	
	<div class="listado_juegos">
					<div class="cuadro_juegos">
					<div class="titulo_nove">
						<h2>JUEGOS DISPONIBLES</h2>
					
	<form method="post" name="formu" class="formulario_juegos">
	Ordenar por
    <select id="list" name="criterio" onChange="recargar()">  
		<?php
		if ($_GET["criterio"]=="alfa"){ 
			?>
			<option value="alfa" selected="selected">Alfabetico</option>
			<option value="predesc">Precio (Mayor a Menor)</option>
			<option value="preasc">Precio (Menor a mayor)</option>
			<option value="genero">Genero</option>
			<option value="oferta" >Oferta</option>
			<?php
		}
		if ($_GET["criterio"]=="predesc"){ 
			
			?>
			<option value="alfa" >Alfabetico</option>
			<option value="predesc" selected="selected">Precio (Mayor a Menor)</option>
			<option value="preasc">Precio (Menor a mayor)</option>
			<option value="genero">Genero</option>
			<option value="oferta" >Oferta</option>
			<?php
		}
		if ($_GET["criterio"]=="preasc"){ 
			
			?>
			<option value="alfa" >Alfabetico</option>
			<option value="predesc" >Precio (Mayor a Menor)</option>
			<option value="preasc" selected="selected">Precio (Menor a mayor)</option>
			<option value="genero">Genero</option>
			<option value="oferta" >Oferta</option>
			<?php
		}
		if ($_GET["criterio"]=="genero"){ 
			
			?>
			<option value="alfa" >Alfabetico</option>
			<option value="predesc" >Precio (Mayor a Menor)</option>
			<option value="preasc" >Precio (Menor a mayor)</option>
			<option value="genero" selected="selected">Genero</option>
			<option value="oferta" >Oferta</option>
			<?php			
		}
		if ($_GET["criterio"]=="oferta"){ 
			
			?>
			<option value="alfa" >Alfabetico</option>
			<option value="predesc" >Precio (Mayor a Menor)</option>
			<option value="preasc" >Precio (Menor a mayor)</option>
			<option value="genero" >Genero</option>
			<option value="oferta" selected="selected">Oferta</option>
			<?php			
		}
		?>
       
   </select>
		
	</form></div><br>
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
		if(isset($_GET["pagina"]) && isset($_GET["criterio"])){
		$pagina = $_GET["pagina"]; 
		if (!$pagina) { 
			$inicio = 0; 
			$pagina=1; 
		} 
		else { 
			$inicio = ($pagina - 1) * $TAMANO_PAGINA; 
		}
		
		//inicializo el criterio y recibo cualquier cadena que se desee buscar 
		
		if(!isset($_SESSION["elegido"])){
			$_SESSION["elegido"]="";
		}
		$criterio = ""; 
		
		if ($_GET["criterio"]!=""){ 
			if ($_GET["criterio"]=="alfa"){ 
				$criterio = " order by Nombre asc";
				$_SESSION["elegido"]="alfa";
			}
			if ($_GET["criterio"]=="predesc"){ 
				$criterio = " order by Precio desc"; 
				$_SESSION["elegido"]="predesc";
			}
			if ($_GET["criterio"]=="preasc"){ 
				$criterio = " order by Precio asc";
				$_SESSION["elegido"]="preasc";				
			}
			if ($_GET["criterio"]=="genero"){ 
				$criterio = " order by Genero asc"; 
				$_SESSION["elegido"]="genero";
			}
			if ($_GET["criterio"]=="oferta"){ 
				$criterio = " order by Porcentaje desc"; 
				$_SESSION["elegido"]="oferta";
			}
		}
		//miro a ver el número total de campos que hay en la tabla con esa búsqueda 
		$consultaSQL ="SELECT * FROM productos" ; 
		$resultado = $conexion->query($consultaSQL);
		$num_total_registros = $resultado->num_rows;
		//calculo el total de páginas 
		$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 
		?>
		
		<a name="Ancla"></a>
		<?php
		
		$consultaSQL = "SELECT * FROM productos" . $criterio . " limit " . $inicio . "," . ($TAMANO_PAGINA+1); 
		if($_SESSION["elegido"]=="genero"){
			$consultaSQL = "SELECT *,Genero FROM productos,product_info where productos.Id_Producto=product_info.Id_Producto". $criterio . " limit " . $inicio . "," . ($TAMANO_PAGINA+1); 
			
		}
		if($_SESSION["elegido"]=="oferta"){
			$consultaSQL0 ="SELECT * FROM ofertas" ; 
			$resultado0 = $conexion->query($consultaSQL0);
			$num_total_registros = $resultado0->num_rows;
			//calculo el total de páginas 
			$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
			$consultaSQL = "SELECT *,Porcentaje FROM productos,ofertas where ofertas.Id_Producto=productos.Id_Producto". $criterio. " limit " . $inicio . "," . ($TAMANO_PAGINA+1) ; 
			
			
		}
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		if ($registro=$resultado->fetch_assoc()){
		?>
					
					
					<?php
				do {
					$id=$registro["Id_Producto"];
					$precio=$registro["Precio"];
					$descuento="";
					$consultaSQL2 = "SELECT * FROM product_info where Id_Producto='$id'"; 
					$resultado2 = $conexion->query($consultaSQL2);
					if (!$resultado2) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					if ($registro2=$resultado2->fetch_assoc()){
						$genero=$registro2["Genero"];
					}
					
					$consultaSQL3 = "SELECT * FROM ofertas where Id_Producto='$id'"; 
					$resultado3 = $conexion->query($consultaSQL3);
					if (!$resultado3) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					if ($registro3=$resultado3->fetch_assoc()){
						$descuentosi=true;
						$descuento=$registro3["Porcentaje"]."%";
						$precio=$precio-($precio*($descuento/100));
					}
					else{
						$descuentosi=false;
					}
					
				?>
				<div>
				
				
				
			<div class="item_noticias">
				<div class="imagen_juegos">
					<a href="../producto/product_info.php?id=<?php echo $registro["Id_Producto"] ?>" <?php echo 'title="'.$registro["Nombre"].'"'?> >
						<img <?php echo 'src="..'.$registro["Caratula"].'"' ?>></a>
				</div>
				<a href="../producto/product_info.php?id=<?php echo $registro["Id_Producto"] ?>" <?php echo 'title="'.$registro["Nombre"].'"'?> ><h3><?php echo ''.$registro["Nombre"].'' ?></h3></a>
				<genero_p><?php echo ''.$genero.'' ?></genero_p>
				<?php
				if($descuentosi){
				?>
				<descuento_p><?php echo 'Descuento: '.$descuento.'' ?></descuento_p></br>
				<?php
				}
				?>
				</br>
				<?php
				if($descuentosi){
				?>
				<precio_sin><?php echo ''."Antes: ".$registro["Precio"]." Euros".'' ?></precio_sin></br>
				<precio_con><?php echo ''."Ahora: ".$precio." Euros".'' ?></precio_con>
				<?php
				}
				else{
				?>
				<precio_con><?php echo ''.$precio." Euros".'' ?></precio_con>
				<?php
				}
				?>
				
			</div>
			
			
			<div class="separador_items">
			</div>
			
			
			
		  </div>
				
				
				
				
				
				<?php
				
				}while ($registro=$resultado->fetch_assoc()); 
				?>
				</div>
				
				<div class="paginador">
				
				<?php
		}
		
		
		
		//muestro los distintos índices de las páginas, si es que hay varias páginas 
		
		if(($pagina-1)>=1){
				echo "<a href='listado.php?pagina=" . 1 . "&criterio=" . $_SESSION["elegido"] .'#Ancla'."'><<</a> "; 
				echo "<a href='listado.php?pagina=" . ($pagina-1) . "&criterio=" . $_SESSION["elegido"] .'#Ancla'."'>Anterior</a> "; 
			}
		if ($total_paginas >= 1){ 
			for ($i=1;$i<=$total_paginas;$i++){ 
				if ($pagina == $i) {
					//si muestro el índice de la página actual, no coloco enlace 
					echo $pagina . " "; 
					
					}
				else {
					//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
					echo "<a href='listado.php?pagina=" . $i . "&criterio=" . $_SESSION["elegido"] .'#Ancla'."'>" . $i."</a> "; 
					}
			} 
			
			
			if(($pagina+1)<=$total_paginas){
				echo "<a href='listado.php?pagina=" . ($pagina+1) . "&criterio=" . $_SESSION["elegido"] .'#Ancla'."'>Siguiente</a> ";
				echo "<a href='listado.php?pagina=" . $total_paginas . "&criterio=" . $_SESSION["elegido"] .'#Ancla'."'>>></a> "; 				
			}
		}
		
		$num=(($TAMANO_PAGINA*$pagina)-$TAMANO_PAGINA);
		$total=($TAMANO_PAGINA*$pagina);
		if($num<=0){
			$num=1;
		}
		if($total_paginas==$pagina){
			$total=$num_total_registros ;
		}
		
		echo "Mostrando " .$num."-".$total ." de " . $num_total_registros . " resultados"."<br>"; 
		
		
		$registro=$resultado->free();
		$conexion->close();
		}
		else{
			?>
			 <p>La url introducida no es correcta, seleccione la opcion JUEGOS en la barra principal.</p>
			<?php
		}
?>
			</div>
			
			</div>
			
	<div class="banner_imagenes">
			<div class="titulo_noticias">
			
				<h2>PUBLICIDAD</h2>
			
			</div>
			<div class="bimagen">
			
				<img src="../images/extras/ryse.jpg">
				<img src="../images/extras/dai.jpg">
				<img src="../images/extras/MW3.jpg">
				<img src="../images/extras/batman.jpg">
				
			</div>
		
		</div>
	
	
  </div>
 
    <!-- / content body -->
  </div>
   
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
    <!-- Section One -->
    <section class="one_quarter">
      <h2 class="title">Conócenos</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">Información corporativa</a></li>
          <li><a href="#">Departamento de prensa</a></li>
          <li><a href="#">Trabaja con nosotros</a></li>
          <li class="last"><a href="#">La tienda en la Comunidad</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Two -->
    <section class="one_quarter">
      <h2 class="title">Métodos de pago</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">Métodos de pago</a></li>
          <li><a href="#">Conversor de divisas</a></li>
          <li class="last"><a href="#">Cheques Regalo</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Three -->
    <section class="one_quarter">
      <h2 class="title">Secciones</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">Noticias</a></li>
          <li><a href="#">Artículos</a></li>
          <li><a href="#">Lanzamientos</a></li>
          <li class="last"><a href="#">Juegos</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Four -->
    <section class="one_quarter lastbox">
      <h2 class="title">¿Necesitas ayuda?</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">Localizar o gestionar compras</a></li>
          <li><a href="#">Tarifas y políticas de envío</a></li>
          <li><a href="#">Devoluciones</a></li>
          <li><a href="#">Ayuda</a></li>
          <li class="last"><a href="#">IVA sobre los bienes</a></li>
        </ul>
      </nav>
    </section>
    <!-- / Section -->
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left" style="color:#FFFFFF">Copyright &copy; 2012 - All Rights Reserved</p>
  </footer>
</div>

</body>


</html>