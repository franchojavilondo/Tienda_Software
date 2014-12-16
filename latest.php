<?php
	session_start();
	if(isset($_SESSION['carro'])) {
$carro=$_SESSION['carro'];
$contador = count($carro);
}
else {$carro=false; $contador=0;}

$contador_deseos=0;
if (isset($_SESSION["user"])  && isset($_SESSION["pass"])){
                                      
		$hostname = "localhost";
		$usuario = "pma";
		$password = "pmapass";
		$basededatos = "tienda_software";
		$user = $_SESSION["user"];
		
		$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if ($conexion->connect_errno) {
			die('Error de conexión: ' . $conexion->connect_error);
		}	
		
		$querydes = "SELECT * from clientes where Nombre='$user'";
		$resultdes = mysqli_query($conexion, $querydes); 
		$rowdes = mysqli_fetch_assoc($resultdes);
		$Cliente = $rowdes["Id_Cliente"];
		
		$querydes = "SELECT * from deseos where Id_Cliente=$Cliente";
		$resultdes = mysqli_query($conexion, $querydes); 
		while($rowdes = mysqli_fetch_assoc($resultdes)){
		$contador_deseos ++;
		}
		
		
		
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
<title>Tienda de videojuegos</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<style type="text/css">
</style>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
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
 $(document).ready(function() {
  $("#parametro").keydown( //Evento de presionar una tecla en el campo cuyo id sea "parametro"
   function(event)
   {
    var param = $("#parametro").attr("value"); //Se obtiene el valor del campo de texto
    $("#resultado").load('busqueda.php',{parametro:param}); //Y se envía por vía post al archivo busqueda.php para luego recargar el div con el resultado obtenido
	document.forms.busqueda.action="./juegos/listadobusqueda.php?pagina=1&criterio=genero&prod_name="+param;
   }
  );
 });
 
 $(document).ready(function() {
  $("#parametro").keyup( //Evento de soltar una tecla en el campo cuyo id sea "parametro"
   function(event)
   {
    var param = $("#parametro").attr("value"); //Se obtiene el valor del campo de texto
    $("#resultado").load('busqueda.php',{parametro:param}); //Y se envía por vía post al archivo busqueda.php para luego recargar el div con el resultado obtenido
	document.forms.busqueda.action="./juegos/listadobusqueda.php?pagina=1&criterio=genero&prod_name="+param;
   }
  );
 });
</script>
<title>Basic 75</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
<meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
<meta name="author" content="Pedro Botelho for Codrops" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content="content slider, responsive image gallery, responsive image gallery, image slider, image fade, image rotator" />
<meta name="description" content="Respsonsive jQuery content slider." />
<meta name="google-site-verification" content="25AuAMRK4hudMM4ZYCQnmQp9W9XtTtsutIDiZmKnjOo" />

<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
<link rel="stylesheet" href="css/github.css" type="text/css" />

<script src="js/jquery.min.js"></script>
	
	
<script src="js/jquery.bxslider.js"></script>
<script src="js/rainbow.min.js"></script>
<script src="js/scripts.js"></script>
	

</head>
<body>
<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>


<div class="wrapper row1">
<div class="cabecera"></div>
  <header id="header" class="clear">
  
    <div id="hgroup">
     <a href="index.php"> <img src="images/keep.png" width="220" style="margin-left:-50px" height="63" alt="logo"></a> </div>
    
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
					<img <?php echo 'src="'.$ruta.'"'; ?> alt="Usuario" >
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
				
						<img src="./images/usuarios/admin.png" alt="Usuario" >
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
			<img src="images/profile.png" alt="Usuario" class="profile_img">
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
	  <li><a href="../index.html"><img class="iconos_navegacion" src="images/home.png">INICIO</a></li>
		<li>|</li>

	    <li><div class="enl"><a href="./juegos/listado.php?pagina=1&criterio=alfa"><img class="iconos_navegacion" src="images/gamepad.png">Juegos<div class="tri"></div></a></div>

	    

		<ul>
		<div class="sub">
			<li><a href="./juegos/listadofiltro.php?filtro=free_to_play&pagina=1&criterio=alfa">Free to Play</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=acceso_anticipado&pagina=1&criterio=alfa">Acceso anticipado</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=accion&pagina=1&criterio=alfa">Acción</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=aventura&pagina=1&criterio=alfa">Aventura</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=&pagina=1&criterio=alfa">Carreras</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=casual&pagina=1&criterio=alfa">Casual</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=deportes&pagina=1&criterio=alfa">Deportes</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=estrategia&pagina=1&criterio=alfa">Estrategia</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=indie&pagina=1&criterio=alfa">Indie</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=mmo&pagina=1&criterio=alfa">Multijugador masivo</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=rol&pagina=1&criterio=alfa">Rol</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=simuladores&pagina=1&criterio=alfa">Simuladores</a></li>
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li><a href="#"><img class="iconos_navegacion" src="images/menu.png">Secciones<div class="tri"></div></a>
		<ul>
		<div class="sub">
			<li><a href="./news.php">Noticias</a></li>
            <li><a href="./latest.php">Lo último</a></li>
            <li><a href="./offers.php">Ofertas</a></li>
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li class="last"><a href="#"><img class="iconos_navegacion" src="images/demo.png">Demos</a></li>
        
      </ul>
	  
	  
	  <div class="seccion_carrito">
	  <ul>

	 <?php 
	  if (isset($_SESSION["user"])  && isset($_SESSION["pass"])){
	  $variable = "./profile.php";}
	  else $variable = "./login.php";
	  ?>
	  <li><a href="<?php echo $variable?>"><div class="contador_lista"><?php echo $contador_deseos?></div><img class="icono_deseos" src="images/favoritos.png">Lista de deseos</a></li>
		<li>|</li>
	  

	  <li><a href="./carro/vercarrito.php"><div class="contador_carrito"><?php echo $contador?></div><img class="imagen_carrito" src="images/cart.png">Mi Cesta</a></li>

      </ul>
	  </div>
	  
	  
	  </div>
    </nav>      
    
  </header>
</div>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
	
		
    <!-- main content -->
    <div id="homepage" class="clear">
	
		<div class="contenedor_ultimos">
		
			<div class="titulo_noticias">
			
				<h2>ÚLTIMOS LANZAMIENTOS EN LA TIENDA</h2>
			
			</div>
			
			
			<?php 
			// Definimos los parámetros
		   $hostname = "localhost";
		   $usuario = "pma";
		   $password = "pmapass";
		   $basededatos = "tienda_software";
		   
			$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
				if(!$conexion) {
				die ("conexion no se pudo realizar");
				}
					$queryl="SELECT * from productos order by Id_Producto desc";
					
		  
		  $contador = 0;
		  if ($resultl = mysqli_query($conexion, $queryl)) 
		  while (($rowl = mysqli_fetch_assoc($resultl)) && $contador<10) {
		  
		  $ID=$rowl["Id_Producto"];
		  $queryl2="SELECT * from imagenes_extra where Id_Producto=$ID";
		  $queryl3="SELECT * from ofertas where Id_Producto=$ID";
		  if ($resultl2 = mysqli_query($conexion, $queryl2)) 
			if(($rowl2 = mysqli_fetch_assoc($resultl2)))
			
		  ?>
			<div class="item_noticias">
				<div class="imagen_noticias_pagina">
					<a href="./producto/product_info.php?id=<?php echo $ID ?>"><img class="imagen_noticias" style="width:25%" <?php echo 'src=".'.$rowl2["Imagen"].'"' ?>></a>
				</div>
				<a href="./producto/product_info.php?id=<?php echo $ID ?>" class="texto_noticias" ><h3><?php echo $rowl["Nombre"]?></h3></a>
				
				<div class="espacio_precios">
				
				<?php if ($resultl3 = mysqli_query($conexion, $queryl3)) 
			if(($rowl3 = mysqli_fetch_assoc($resultl3))){
			?>
					<div class="discount_right">
						
						<descuento_p><?php echo 'Descuento: '.$rowl3["Porcentaje"].'%' ?></descuento_p>
					</div>
					</br>
					<div class="price">
						<anterior><?php echo 'Antes: '.$rowl["Precio"].' €'?></anterior></br>
						<costo><?php echo 'Ahora: '.($rowl["Precio"]-($rowl["Precio"]*$rowl3["Porcentaje"]/100)).' €'?></costo>
					</div>		
						<?php }
						else{
					?>
					
					
					
					<div class="price">
						</br>
						<costo><?php echo $rowl["Precio"].' €'?></costo>
					</div>	
					<?php }?>
				</div>
			</div>
			<div class="separador_items">
			</div>
			
		<?php $contador++;}?>
		</div>
	
	
		<div class="banner_imagenes">
			<div class="titulo_noticias">
			
				<h2>PUBLICIDAD</h2>
			
			</div>
			<div class="bimagen">
			
				<img src="images/extras/ryse.jpg">
				<img src="images/extras/dai.jpg">
				<img src="images/extras/MW3.jpg">
				<img src="images/extras/batman.jpg">
				
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
          <li><a href="http://www.xe.com/es/currencyconverter/Conversor de divisas">Conversor de divisas</a></li>
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
          <li><a href="./news.php">Noticias</a></li>
          <li><a href="./latest.php">Lo último</a></li>
          <li class="last"><a href="./offers.php">Ofertas</a></li>
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
    <p class="fl_left" style="color:#FFFFFF">Copyright &copy KCAPG. 2014. Todos los derechos reservados.</p>
  </footer>
</div>
</body>
</html>
