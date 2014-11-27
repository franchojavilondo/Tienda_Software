<?php
	session_start();
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
    
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Buscar en la tienda&hellip;" onFocus="this.value=(this.value=='Buscar en la tienda&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="">
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
		
	$consultaSQL ="SELECT * FROM clientes  WHERE nombre='$user' && pass='$contra'" ; 
	  
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		
		//  mysqli_fetch_array devuelve un array con cada fila de la consulta
		if ($registro=$resultado->fetch_assoc()){
			
		
		}
		$registro=$resultado->free();
		$conexion->close();
	?>
	
	
	<div class="imagen_perfil">
			<img src="images/profile.png" alt="Usuario" class="profile_img">
		</div>
			
		<div class="titulo_perfil">
			<h1><?php echo $user; ?> </h1>
		</div>
		
		<div class="botones_acceso">
			<a href="cuenta/login.php"><input type="submit" class="boton_login" value="Mi Perfil"></a>
			<a href="logout.php"><input type="submit" class="boton_registro" value="Cerrar Sesión"></a>
		</div>
	<?php
	
	
	
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
		 <li><a href="#">Destacados<div class="tri"></div></a>
		 <ul>
		 <div class="sub">
		 <li><a href="#">Juegos</a></li>
		 <li><a href="#">Software</a></li>
		 <li><a href="#">Demos</a></li>
		 <li><a href="#">Genero</a></li>
		 </div>
		 
		 </ul>
		 </li>
		<li>|</li>
	    <li><div class="enl"><a href="./juegos/listado.php">Juegos<div class="tri"></div></a></div>
		<ul>
		<div class="sub">
		 <li><a href="#">Accion</a></li>
		 <li><a href="#">Aventura</a></li>
		 <li><a href="#">Carreras</a></li>
		 <li><a href="#">Casual</a></li>
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li><a href="#">Software<div class="tri"></div></a></li>
		<li>|</li>
        <li><a href="#">Demos<div class="tri"></div></a></li>
		<li>|</li>
        <li class="last"><a href="#">Noticias<div class="tri"></div></a></li>
      </ul>
	  </div>
    </nav>      
    
  </header>
</div>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
	<div id="sidebar" >
	<h6>POR GÉNERO </h6>
        <ul>
            <li><a href="#">Free to Play</a></li>
            <li><a href="#">Acceso anticipado</a></li>
            <li><a href="#">Acción</a></li>
            <li><a href="#">Aventura</a></li>
			<li><a href="#">Carreras</a></li>
            <li><a href="#">Casual</a></li>
            <li><a href="#">Deportes</a></li>
            <li><a href="#">Estrategia</a></li>
			<li><a href="#">Indie</a></li>
            <li><a href="#">Multijugador masivo</a></li>
            <li><a href="#">Rol</a></li>
            <li><a href="#">Simuladores</a></li>
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
      <div class="fl_right">
	  
		  <div class="cuadro_noticias">
		  <div class="titulo_nove">
          <h2>LO ÚLTIMO</h2>
		  </div>
			<div class="item_noticias">
				<a href="#"><img class="imagen_noticias" src="images/destinyT.jpg"></a>
				<h3><br>NOTICIA</h3>
				<a href="#" class="texto_noticias" >Destiny 2 ya se encuentra en los planes de futuro de Activision</a>
			</div>
			<div class="separador_items">
			</div>
			<div class="item_noticias">
				<a href="#"><img class="imagen_noticias" src="images/justcauseT.jpg"></a>
				<h3><br>NOTICIA</h3>
				<a href="#" class="texto_noticias" >Filtradas varias imágenes de Just Cause 3</a>
			</div>
			<div class="separador_items">
			</div>
			<div class="item_noticias">
				<a href="#"><img class="imagen_noticias" src="images/thiefT.jpg"></a>
				<h3><br>NOTICIA</h3>
				<a href="#" class="texto_noticias" >Thief y Murdered: Soul Suspect en las ofertas de Xbox Live Gold</a>
			</div>
			<div class="separador_items">
			</div>
			<div class="item_noticias">
				<a href="#"><img class="imagen_noticias" src="images/falloutT.jpg"></a>
				<h3><br>NOTICIA</h3>
				<a href="#" class="texto_noticias" >Vuelve a aparecer el nombre Fallout: Shadow of Boston</a>
			</div>
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
				<a href="./producto/product_info.php?id=<?php echo $Id_Prod ?>" <?php echo 'title="'.$row3["nombre"].'"'?>><img class="imagen_noticias" <?php echo 'src=".'.$row2["Imagen"].'"' ?>></a>
				<h3><br>OFERTA</br></h3>
				<a title="" href="./producto/product_info.php?id=<?php echo $Id_Prod ?>"  class="texto_noticias" ><?php echo $row3["nombre"].' Ahora con un '.$row1["Porcentaje"].'% de descuento' ?></a>
			</div>
			
			<div class="separador_items">
			</div>
		  <?php 
		  }
		  }
		  ?>
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
