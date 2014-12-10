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
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<style type="text/css">
</style>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.11.1.js"></script>
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
	 $('').hover(
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

<script type="text/javascript">
 $(document).ready(function() {
  $("#parametro").keydown( //Evento de presionar una tecla en el campo cuyo id sea "parametro"
   function(event)
   {
    var param = $("#parametro").attr("value"); //Se obtiene el valor del campo de texto
    $("#resultado").load('busqueda.php',{parametro:param}); //Y se envía por vía post al archivo busqueda.php para luego recargar el div con el resultado obtenido
   }
  );
 });
 
 $(document).ready(function() {
  $("#parametro").keyup( //Evento de soltar una tecla en el campo cuyo id sea "parametro"
   function(event)
   {
    var param = $("#parametro").attr("value"); //Se obtiene el valor del campo de texto
    $("#resultado").load('busqueda.php',{parametro:param}); //Y se envía por vía post al archivo busqueda.php para luego recargar el div con el resultado obtenido
   }
  );
 });
</script>
	
	
<script type="text/javascript">
			$(function() {
				
				var Page = (function() {
					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
								$navArrows.show();
								$shadow.show();
							},
							orientation : 'r',
							cuboidsRandom : true
						} ),
						
						init = function() {
							initEvents();
							
						},
						initEvents = function() {
							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {
								slicebox.next();
								return false;
							} );
							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;
							} );
						};
						setInterval(function(){
							  slicebox.next();}, 6000);
						
						return { init : init };
				})();
				Page.init();
			});
		</script>
	

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
    
    <form   action="#" method="post">
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
					<a href="cuenta/login.php"><input type="submit" class="boton_login" value="Mi Perfil"></a>
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
		<li><a href="./index.php"><img class="iconos_navegacion" src="images/home.png">INICIO</a></li>
		<li>|</li>

	    <li><div class="enl"><a href="./juegos/listado.php"><img class="iconos_navegacion" src="images/gamepad.png">Juegos<div class="tri"></div></a></div>

	    

		<ul>
		<div class="sub">
			<li><a href="./juegos/listadofiltro.php?filtro=free_to_play">Free to Play</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=acceso_anticipado">Acceso anticipado</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=accion">Acción</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=aventura">Aventura</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=carreras">Carreras</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=casual">Casual</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=deportes">Deportes</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=estrategia">Estrategia</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=indie">Indie</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=mmo">Multijugador masivo</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=rol">Rol</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=simuladores">Simuladores</a></li>
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

	  <li><a href="#"><div class="contador_lista">0</div><img class="icono_deseos" src="images/favoritos.png">Lista de deseos</a></li>
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
	<div id="sidebar" >
	<h6>Explorar por género</h6>
        <ul>
            <li><a href="./juegos/listadofiltro.php?filtro=free_to_play">Free to Play</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=acceso_anticipado">Acceso anticipado</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=accion">Acción</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=aventura">Aventura</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=carreras">Carreras</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=casual">Casual</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=deportes">Deportes</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=estrategia">Estrategia</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=indie">Indie</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=mmo">Multijugador masivo</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=rol">Rol</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=simuladores">Simuladores</a></li>
        </ul>
    </div>
	<div class="ppt">
	<div class="containerslide">
			<div class="wrapperslide">

			
			
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
		
   	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	//STMT ORIENTADO A OBJETOS
	
	$query1 = "SELECT Id_Producto,descripcion FROM destacados ORDER BY Id_Producto";
	?>
			
				<ul id="sb-slider" class="sb-slider">
				<?php 
				
				if ($result1 = mysqli_query($conexion, $query1)) {
				while ($row1 = mysqli_fetch_assoc($result1)) {
				
				$Id_Prod=$row1["Id_Producto"];
				$query2 = "SELECT Imagen FROM imagenes_extra where Id_Producto=$Id_Prod";
				$query3 = "SELECT nombre FROM productos where Id_Producto=$Id_Prod";
				if ($result2 = mysqli_query($conexion, $query2)) 
				if ($row2 = mysqli_fetch_assoc($result2))
				if ($result3 = mysqli_query($conexion, $query3)) 
				if ($row3 = mysqli_fetch_assoc($result3))
				?>
			<li>
						<a href="./producto/product_info.php?id=<?php echo $Id_Prod ?>" <?php echo 'title="'.$row3["nombre"].'"'?> target="_blank"><img <?php echo 'src=".'.$row2["Imagen"].'"' ?> style="width:auto" /></a>
						<div class="sb-description">
							<h1><?php echo $row3["nombre"] ?></h1>
							<?php echo $row1["descripcion"] ?>
						</div>
					</li>
					<?php }
			}	
					?>	
					<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
					
				</div>
				</ul>

				

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->

			

		</div>
		</div>
		
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		
    <!-- main content -->
    <div id="homepage" class="clear">
      <!-- Left Box -->
	  </br></br></br>
		  <div class="cuadro_novedades">
		  <div class="titulo_nove">
			<h2>ÚLTIMOS LANZAMIENTOS </h2>
		  </div>
		  <section id="main">
		<div class="inner clearfix">
			<div id="primary">

				<script type="text/javascript">
					$(document).ready(function(){
    
						$('.bxslider').bxSlider({
							minSlides: 4,
							maxSlides: 4,
							slideWidth: 1038,
							slideMargin: 5
						});
					});
				</script>



<div class="slider">
<ul class="bxslider" >
		   <?php
		   $query1="SELECT Id_Producto,nombre from productos order by Id_Producto DESC";
		   $contador=0;
		  
		   ?>
		   
<?php 
		if ($result1 = mysqli_query($conexion, $query1)) {
		  while (($row1 = mysqli_fetch_assoc($result1)) && $contador<8) {
		 
				$contador=$contador + 1;
				$Id_Prod=$row1["Id_Producto"];
				$query2 = "SELECT Imagen FROM imagenes_extra where Id_Producto=$Id_Prod";
				if ($result2 = mysqli_query($conexion, $query2)) 
				if ($row2 = mysqli_fetch_assoc($result2))
		  ?>
		  <li><a href="./producto/product_info.php?id=<?php echo $Id_Prod ?>" <?php echo 'title="'.$row1["nombre"].'"'?>><img class="imagen_novedades" <?php echo 'src=".'.$row2["Imagen"].'" '?> > </a></li>
		  <?php
		  
		  }
		  }
?>

 
</ul></div>
</div>
		</div>
	</section>
		  
		  
		  
		  	
		  
		  
		  </div>
      <!-- Right Box -->
     
	  
		  <div class="cuadro_noticias">
		  <div class="titulo_nove">
          <h2>ÚLTIMAS NOTICIAS</h2>
		  </div>
		  
		  <?php $queryn="SELECT * from noticias";
		  
		  $contador = 0;
		  if ($resultn = mysqli_query($conexion, $queryn)) 
		  while (($rown = mysqli_fetch_assoc($resultn)) && $contador<4) {
		  $ID=$rown["Id_Producto"];
		  $queryn2="SELECT Imagen from imagenes_extra where Id_Producto=$ID";
		  if ($resultn2 = mysqli_query($conexion, $queryn2)) 
		  if($rown2 = mysqli_fetch_assoc($resultn2)){
		  ?>
			<div class="item_noticias">
				<div class="imagen_noticias">
					<a href="#"><img class="imagen_noticias" <?php echo 'src=".'.$rown2["Imagen"].'"' ?>></a>
				</div>
				<h3><br>NOTICIA</h3>
				<a href="#" class="texto_noticias" ><?php echo $rown["Titular"]?></a>
			</div>
			
			
			<div class="separador_items">
			</div>
			<?php $contador++;}}?>
			
			
			
		  </div>
		  
		   <?php
		   $query1="SELECT Id_Producto,Porcentaje from ofertas";
		   ?>
		  <div class="cuadro_ofertas">
		 <div class="titulo_nove">
          <h2>OFERTAS ESPECIALES</h2>
		  </div>
		  
		  <?php  
		  if ($result1 = mysqli_query($conexion, $query1)) {
		  while ($row1 = mysqli_fetch_assoc($result1)) {
		        $Id_Prod=$row1["Id_Producto"];
				$Porct=$row1["Porcentaje"];
				
				$query2 = "SELECT Imagen FROM imagenes_extra where Id_Producto=$Id_Prod";
				$query3 = "SELECT nombre FROM productos where Id_Producto=$Id_Prod";
				if ($result2 = mysqli_query($conexion, $query2)) 
				if ($row2 = mysqli_fetch_assoc($result2))
				if ($result3 = mysqli_query($conexion, $query3)) 
				if ($row3 = mysqli_fetch_assoc($result3))
		  ?>
			<div class="item_ofertas">
				<div class="imagen_noticias">
					<a href="/producto/product_info.php?id=<?php echo $Id_Prod ?>" <?php echo 'title="'.$row3["nombre"].'"'?>><img <?php echo 'src=".'.$row2["Imagen"].'"' ?>></a>
				</div>
				<h3><br>OFERTA</br></h3>
				<a title="" href="/producto/product_info.php?id=<?php echo $Id_Prod ?>"  class="texto_noticias" ><?php echo $row3["nombre"].' Ahora con un '.$row1["Porcentaje"].'% de descuento' ?></a>
			</div>
			
			<div class="separador_items">
			</div>
		  <?php 
		  }
		  }
		  ?>
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