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

<?php
$Id_Prod=$_GET["id"];


// Definimos los par�metros
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
	
	$query1 = "SELECT * FROM product_info where Id_Producto=$Id_Prod";
	$query2 = "SELECT * FROM productos where Id_Producto=$Id_Prod";
	

				
				
				
	
?>
<head>
<title>Tienda de videojuegos</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
<style type="text/css">
</style>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

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
    
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Buscar en la tienda&hellip;" onFocus="this.value=(this.value=='Buscar en la tienda&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="">
      </fieldset>
    </form>
    
    <div class="cajon_usu" >
		<div class="imagen_perfil">
			<img src="../images/profile.png" alt="Usuario" class="profile_img">
		</div>
			
		<div class="titulo_perfil">
			<h1>Usuario an�nimo</h1>
		</div>
		
		<div class="botones_acceso">
			<input type="submit" class="boton_login" value="Iniciar sesi�n">
			<input type="submit" class="boton_registro" value="Registrarse">
		</div>
	</div>
	
    <nav>
      <div class="menu">
      <ul>
		 <li><a href="../index.php"><img class="iconos_navegacion" src="../images/home.png">INICIO</a></li>
		<li>|</li>

	    <li><div class="enl"><a href="../juegos/listado.php"><img class="iconos_navegacion" src="../images/gamepad.png">Juegos<div class="tri"></div></a></div>

	    

		<ul>
		<div class="sub">
			<li><a href="../juegos/listadofiltro.php?filtro=free_to_play">Free to Play</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=acceso_anticipado">Acceso anticipado</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=accion">Acci�n</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=aventura">Aventura</a></li>
			<li><a href="../juegos/listadofiltro.php?filtro=carreras">Carreras</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=casual">Casual</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=deportes">Deportes</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=estrategia">Estrategia</a></li>
			<li><a href="../juegos/listadofiltro.php?filtro=indie">Indie</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=mmo">Multijugador masivo</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=rol">Rol</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=simuladores">Simuladores</a></li>
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li><a href="#"><img class="iconos_navegacion" src="../images/menu.png">Secciones<div class="tri"></div></a>
		<ul>
		<div class="sub">
			<li><a href="../news.php">Noticias</a></li>
            <li><a href="#">Lo �ltimo</a></li>
            <li><a href="#">Ofertas</a></li>
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
    <div id="homepage" class="clear">
	
	<?php $error=1;
	if($result1 = mysqli_query($conexion, $query1)) 
					if($row1 = mysqli_fetch_assoc($result1))
						if($result2 = mysqli_query($conexion, $query2))
						if($row2 = mysqli_fetch_assoc($result2)){
						$error=0;
						?>
						
		<div class="cont_imagen_producto">
		
			<img class="imagen_producto" <?php echo 'src="..'.$row2["Caratula"].'"' ?> alt="logo"> 
		
		</div>
			
			<div class="info_producto">
				
				<div  class="titulo_producto"><h2><?php echo $row2["Nombre"]?></h2></div>
				<dl id="titulo_producto">
					<dt>Plataforma: </dt>
						<dd><?php echo $row1["Plataforma"] ?></dd>
					<dt>Desarrollador: </dt>
						<dd><?php echo $row1["Desarrollador"] ?></dd>
					<dt>Distribuidor: </dt>
						<dd><?php echo $row1["Distribuidor"] ?></dd>
					<dt>G�nero: </dt>
						<dd><?php echo $row1["Genero"] ?></dd>
					<dt>Jugadores: </dt>
						<dd><?php echo $row1["Jugadores"] ?></dd>
					<dt>Idioma: </dt>
						<dd><?php echo $row1["Idioma"] ?></dd>
					<dt>Lanzamiento: </dt>
						<dd><?php echo $row1["Lanzamiento"] ?></dd>
						
				</dl>
				
			</div>
			
			<div class="precio_producto">
				
				<div class="titulo_precio_producto"><h2>PRECIO</h2></div>
				<div class="cantidad_precio"><precio><?php echo $row2["Precio"]?>�</precio></div>
				<p>Precio con IVA incluido.</p>
				<a href="../carro/agregacar.php?id=<?php echo $Id_Prod ?>" style="text-decoration:none;"><button type="button" class="boton_a�adir_carrito">
					A�adir al carrito</button></a>
				<p>O tambi�n puedes guardarlo:</p>
				<a href="login.php" style="text-decoration:none;"><button type="button" class="boton_a�adir_lista">
					A�adir a la lista de deseos</button></a>
				
			</div>
			
			<div class="desc_producto">
				
				<div  class="titulo_producto"><h2>Descripci�n del producto</h2></div>
				<p><?php echo $row1['Descripcion']?></p>
				
				<div class="requisitos">
				
					<h3>Requisitos del sistema</h3>
					
					<dl id="requisitos_producto">
					<dt>OS: </dt>
						<dd><?php echo $row1["OS"] ?></dd>
					<dt>Procesador: </dt>
						<dd><?php echo $row1["Procesador"] ?></dd>
					<dt>RAM: </dt>
						<dd><?php echo $row1["Ram"] ?></dd>
					<dt>Tarjeta gr�fica: </dt>
						<dd><?php echo $row1["Grafica"] ?></dd>
					<dt>DirectX�: </dt>
						<dd><?php echo $row1["Directx"] ?></dd>
					<dt>Disco Duro: </dt>
						<dd><?php echo $row1["HDD"] ?></dd>
					<dt>Sonido: </dt>
						<dd><?php echo $row1["Sonido"] ?></dd>
						
				</dl>

				
				</div>
				
			</div>
			
			<div class="comentarios_producto">
				<div  class="titulo_producto"><h2>Comentarios de usuarios</h2></div>
				
				<div class="comentario_usuario">
					<div  class="titulo_comentario"><h2>Nombre de usuario</h2></div>
					<div  class="imagen_comentario"><img src="../images/gaben.jpg" alt="Usuario"></div>
					<div  class="comentario_texto">
					
						<p>El sitio web C�digos de colores HTML le proporciona herramientas gratuitas de colores para encontrar colores HTML para su sitio web. Las excelentes herramientas Tabla de colores HTML y Selector de colores HTML har�n que esta tarea sea pan comido.

Para empezar r�pidamente a usar Colores HTML en su sitio web, �chele un vistazo a �C�mo usar los c�digos de colores HTML?. Si desea aprender qu� significa realmente esta combinaci�n de caracteres en C�digos de colores HTML �chele un vistazo a la secci�n Teor�a sobre los c�digos de colores HTML.

Colores seguros para la Web es la lista de colores que se ven igual en todos los sistemas operativos. Si es dalt�nico consulte los Nombres de colores HTML para superar ese problema.</p>
					
					</div>				
				
				</div>
				
			</div>
			
			
		
		<?php }if($error==1){ ;
 ?>
 <div ><center>
				<div  class="titulo_producto"><h2>ERROR, PRODUCTO NO DISPONIBLE</h2> 
				

				
				</div> 
				
				<img   src="../images/error404.png" height="400" width="800" alt="error"> </center>
			</div>
 <?php
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
      <h2 class="title">Con�cenos</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">Informaci�n corporativa</a></li>
          <li><a href="#">Departamento de prensa</a></li>
          <li><a href="#">Trabaja con nosotros</a></li>
          <li class="last"><a href="#">La tienda en la Comunidad</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Two -->
    <section class="one_quarter">
      <h2 class="title">M�todos de pago</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">M�todos de pago</a></li>
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
          <li><a href="#">Art�culos</a></li>
          <li><a href="#">Lanzamientos</a></li>
          <li class="last"><a href="#">Juegos</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Four -->
    <section class="one_quarter lastbox">
      <h2 class="title">�Necesitas ayuda?</h2>
      <nav>
	  </br>
        <ul>
          <li><a href="#">Localizar o gestionar compras</a></li>
          <li><a href="#">Tarifas y pol�ticas de env�o</a></li>
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
