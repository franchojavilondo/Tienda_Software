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

<?php
$Id_Prod=$_GET["id"];


// Definimos los parámetros
   $hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";

   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
		
		if(ISSET ($_SESSION ["user"])){
			$nombre= $_SESSION ["user"];
			$queryx="SELECT Id_Cliente from clientes where nombre='$nombre'";	
			$resultx = mysqli_query($conexion, $queryx);
			$rowx = mysqli_fetch_assoc($resultx);
			$Cliente = $rowx["Id_Cliente"];}
		else $Cliente = -1;
   	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	//STMT ORIENTADO A OBJETOS
	
	$query1 = "SELECT * FROM product_info where Id_Producto=$Id_Prod";
	$query2 = "SELECT * FROM productos where Id_Producto=$Id_Prod";
	$query3="SELECT * from ofertas where Id_Producto=$Id_Prod";

				
				
				
	
?>
<head>
<link rel="icon" type="image/png"  href="../images/ico.png">
<title>Tienda de videojuegos</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="../styles/layout.css" type="text/css">
<style type="text/css">
</style>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<link type="text/css" href="../styles/bottom.css" rel="stylesheet" />
	
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="../lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="../lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="../lib/jquery.touchwipe.min.js"></script>
		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
				});
		</script>


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
					<a href="../profile.php"><input type="submit" class="boton_login" value="Mi Perfil"></a>
					<a href="../logout.php"><input type="submit" class="boton_registro" value="Cerrar Sesión"></a>
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
						<a href="../admin.php"><input type="submit" class="boton_login" value="Pagina administracion"></a>
						<a href="../logout.php"><input type="submit" class="boton_registro" value="Cerrar Sesión"></a>
					</div>
				<?php
			}
		}
		$registro=$resultado->free();
		
	
	
	
	
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
			<a href="../login.php"><input type="submit" class="boton_login" value="Iniciar sesión"></a>
			<a href="../signin.php"><input type="submit" class="boton_registro" value="Registrarse"></a>
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

	    <li><div class="enl"><a href="../juegos/listado.php?pagina=1&criterio=alfa"><img class="iconos_navegacion" src="../images/gamepad.png">Juegos<div class="tri"></div></a></div>

	    

		<ul>
		<div class="sub">
			<li><a href="../juegos/listadofiltro.php?filtro=free_to_play&pagina=1&criterio=alfa">Free to Play</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=acceso_anticipado&pagina=1&criterio=alfa">Acceso anticipado</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=accion&pagina=1&criterio=alfa">Acción</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=aventura&pagina=1&criterio=alfa">Aventura</a></li>
			<li><a href="../juegos/listadofiltro.php?filtro=carreras&pagina=1&criterio=alfa">Carreras</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=casual&pagina=1&criterio=alfa">Casual</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=deportes&pagina=1&criterio=alfa">Deportes</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=estrategia&pagina=1&criterio=alfa">Estrategia</a></li>
			<li><a href="../juegos/listadofiltro.php?filtro=indie&pagina=1&criterio=alfa">Indie</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=mmo&pagina=1&criterio=alfa">Multijugador masivo</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=rol&pagina=1&criterio=alfa">Rol</a></li>
            <li><a href="../juegos/listadofiltro.php?filtro=simuladores&pagina=1&criterio=alfa">Simuladores</a></li>
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

	  <?php 
	  if (isset($_SESSION["user"])  && isset($_SESSION["pass"])){
	  $variable = "./profile.php";}
	  else $variable = "./login.php";
	  ?>
	  <li><a href="<?php echo $variable?>"><div class="contador_lista"><?php echo $contador_deseos?></div><img class="icono_deseos" src="../images/favoritos.png">Lista de deseos</a></li>
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
					<dt>Género: </dt>
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
				<div class="cantidad_precio">
				<?php
				if($result3 = mysqli_query($conexion, $query3))
						if($row3 = mysqli_fetch_assoc($result3)){
				
				?>
				
				<div class="precio_sin_d"><anterior><?php echo $row2["Precio"]?>€</anterior>
				</div>
				<div class="discount">
				<porcentaje>-<?php echo $row3["Porcentaje"] ?>%</porcentaje>
				</div>
				<precio><?php echo $row2["Precio"]-($row2["Precio"]*$row3["Porcentaje"]/100)?>€</precio>
				
				<?php }
				
				else{
				?>
				
				<precio><?php echo $row2["Precio"]?>€</precio>
				<?php }?>
				</div>
				<p>Precio con IVA incluido.</p>
				<a href="../carro/agregacar.php?id=<?php echo $Id_Prod ?>" style="text-decoration:none;"><button type="button" class="boton_añadir_carrito">
					Añadir al carrito</button></a>
					<?php if($Cliente != -1) {?>
				<p>O también puedes guardarlo:</p>
				
				<a href="./agregadeseo.php?idp=<?php echo $Id_Prod?>&idc=<?php echo $Cliente?>" style="text-decoration:none;"><button type="button" class="boton_añadir_lista">
					Añadir a la lista de deseos</button></a>
					<?php 
					}else{?>
					
					<p>O también puedes guardarlo:</p>
				
				<a href="../login.php" style="text-decoration:none;"><button type="button" class="boton_añadir_lista">
					Añadir a la lista de deseos</button></a>
					<?php }?>
				
			</div>
			
			<div class="desc_producto">
				
				<div  class="titulo_producto"><h2>Descripción del producto</h2></div>
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
					<dt>Tarjeta gráfica: </dt>
						<dd><?php echo $row1["Grafica"] ?></dd>
					<dt>DirectX®: </dt>
						<dd><?php echo $row1["Directx"] ?></dd>
					<dt>Disco Duro: </dt>
						<dd><?php echo $row1["HDD"] ?></dd>
					<dt>Sonido: </dt>
						<dd><?php echo $row1["Sonido"] ?></dd>
						
				</dl>

				
				</div>
				
			</div>
			
			
			<!--visor de imagenes -->
			
				<?php
				$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
				if ($conexion->connect_errno) {
					die('Error de conexión: ' . $conexion->connect_error);
				}		
				
				
				$consultaSQL ="SELECT * FROM capturas,productos where productos.Id_Producto=capturas.Id_Producto and capturas.Id_Producto='$Id_Prod'" ; 
				$resultado = $conexion->query($consultaSQL);
				if (!$resultado) {
					die('No se puede realizar la consulta: ' . $conexion->connect_error);
				}
				if ($registro=$resultado->fetch_assoc()){
				?>
				<div class="pikachoose">
				<ul id="pikame" class="jcarousel-skin-pika">
				<?php
				do {
				?>
					<li><img  <?php echo 'src="..'.$registro["ruta"].'"' ?>/></li>
					
					<?php
				
				}while ($registro=$resultado->fetch_assoc()); 
				?>
				</ul>
				</div>
				<?php
				}
				?>
				
			
			
			<div class="comentarios_producto">
				<div  class="titulo_producto"><h2>Comentarios de usuarios</h2></div>
				
				<div class="comentario_usuario">
					<div  class="titulo_comentario"><h2>Nombre de usuario</h2></div>
					<div  class="imagen_comentario"><img src="../images/gaben.jpg" alt="Usuario"></div>
					<div  class="comentario_texto">
					
						<p>El sitio web Códigos de colores HTML le proporciona herramientas gratuitas de colores para encontrar colores HTML para su sitio web. Las excelentes herramientas Tabla de colores HTML y Selector de colores HTML harán que esta tarea sea pan comido.

Para empezar rápidamente a usar Colores HTML en su sitio web, échele un vistazo a ¿Cómo usar los códigos de colores HTML?. Si desea aprender qué significa realmente esta combinación de caracteres en Códigos de colores HTML échele un vistazo a la sección Teoría sobre los códigos de colores HTML.

Colores seguros para la Web es la lista de colores que se ven igual en todos los sistemas operativos. Si es daltónico consulte los Nombres de colores HTML para superar ese problema.</p>
					
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
