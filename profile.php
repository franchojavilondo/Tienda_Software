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
<html lang="en" dir="ltr">


<head>
<title>Tienda de videojuegos</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
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

<script type='text/javascript'>
function validar(){ 
   	
	
   	if (document.formu.user.value.length==0){ 
      	alert("Tienes que escribir su nick") 
      	document.formu.nombre.focus() 
      	return 0; 
   	} 

   	if (document.formu.pass.value.length==0){ 
      	alert("Tienes que escribir tu contraseña") 
      	document.formu.pass.focus() 
      	return 0; 
   	} 
	
	document.formu.submit(); 
}	
				
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
        <input id="parametro"type="text" value="Buscar en la tienda&hellip;" onFocus="this.value=(this.value=='Buscar en la tienda&hellip;')? '' : this.value ;">
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
		<li><a href="./index.php"><img class="iconos_navegacion" src="images/home.png">INICIO</a></li>
		<li>|</li>

	    <li><div class="enl"><a href="./juegos/listado.php?pagina=1&criterio=alfa"><img class="iconos_navegacion" src="images/gamepad.png">Juegos<div class="tri"></div></a></div>

	    

		<ul>
		<div class="sub">
			<li><a href="./juegos/listadofiltro.php?filtro=free_to_play&pagina=1&criterio=alfa">Free to Play</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=acceso_anticipado&pagina=1&criterio=alfa">Acceso anticipado</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=accion&pagina=1&criterio=alfa">Acción</a></li>
            <li><a href="./juegos/listadofiltro.php?filtro=aventura&pagina=1&criterio=alfa">Aventura</a></li>
			<li><a href="./juegos/listadofiltro.php?filtro=carreras&pagina=1&criterio=alfa">Carreras</a></li>
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


<div class="wrapper row2">
  <div id="container" class="clear">
    
	
    
    <div id="homepage" class="clear">
		 <?php
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
				$id=$registro["Id_Cliente"];
		?>
		 <div class="cont_imagen_producto">
			<img class="imagen_usuario"<?php echo 'src="'.$ruta.'"'; ?> alt="Usuario" alt="logo" >
			
		
		</div>
		
		<div class="tarjeta_datos">
		
		<div class="titulo_nove">
		<h2>MI PERFIL</h2>
		</div>
				<p><b>Nombre de usuario: </b><br><br><?php echo $registro["nombre"]; ?> </p>
				<p><b>Email: </b><br><br><?php echo $registro["email"]; ?> </p>
		
			
			
		</div>
		<div class="tarjeta_estadisticas">
		
		<?php
		
		$hostname = "localhost";
		$usuario = "pma";
		$password = "pmapass";
		$basededatos = "tienda_software";

   
		$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
			if(!$conexion) {
				die ("conexion no se pudo realizar");
			}
		//Sacamos el Id_Cliente
		$nombre= $_SESSION ["user"];
		$query1="SELECT Id_Cliente from clientes where nombre='$nombre'";	
		$result1 = mysqli_query($conexion, $query1);
		$row1 = mysqli_fetch_assoc($result1);
		$Cliente = $row1["Id_Cliente"];
		//Variables a declarar
		$contador_juegos = 0;
		$dinero_total = 0;
		$contador_deseos = 0;
		$ultimo_juego = 0;
	
		//Contamos los juegos y el dinero
		
		$querye1 = "SELECT * from pedidos where Id_Cliente=$Cliente";
		$resulte1 = mysqli_query($conexion, $querye1);
		while ($rowe1 = mysqli_fetch_assoc($resulte1))
		{
		$Pedido = $rowe1["Id_Pedido"];
		$querye2 = "SELECT * from lineas where Id_Pedido=$Pedido order by Id_Linea ASC";
		$resulte2 = mysqli_query($conexion, $querye2);
		$rowe2 = mysqli_fetch_assoc($resulte2);
		
		
		$contador_juegos = $contador_juegos + count($rowe2);
		$dinero_total = $dinero_total + $rowe1["Precio_Total"];
		while($rowe2 = mysqli_fetch_assoc($resulte2))
		$ultimo_juego = $rowe2["Id_Producto"];
		}
		
		//contamos los deseos
		$querye3 = "SELECT * from deseos where Id_Cliente=$Cliente";
		$resulte3 = mysqli_query($conexion, $querye3);
		while($rowe3 = mysqli_fetch_assoc($resulte3))
		$contador_deseos ++;
		
		//juego mas caro
		$consultaSQL ="SELECT * FROM pedidos,lineas,productos  WHERE Id_Cliente='$id' and 
		pedidos.Id_Pedido=lineas.Id_Pedido and productos.Id_Producto=lineas.Id_Producto and lineas.Precio= (SELECT max(Precio)from lineas)" ;
		$resultado1 = $conexion->query($consultaSQL);
		$registro1=$resultado1->fetch_assoc();
		if (!$resultado1) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		
		//juego mas barato
		$consultaSQL ="SELECT * FROM pedidos,lineas,productos  WHERE Id_Cliente='$id' and 
		pedidos.Id_Pedido=lineas.Id_Pedido and productos.Id_Producto=lineas.Id_Producto and lineas.Precio= (SELECT min(Precio)from lineas)" ;
		$resultado2 = $conexion->query($consultaSQL);
		$registro2=$resultado2->fetch_assoc();
		if (!$resultado2) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		
		//Ultimo juego
		$querye4 = "SELECT * from productos where Id_Producto=$ultimo_juego";
		$resulte4 = mysqli_query($conexion, $querye4);
		$rowe4 = mysqli_fetch_assoc($resulte4);
		
		?>
		
		<div class="titulo_nove">
		<h2>ÚLTIMOS MOVIMIENTOS</h2>
		</div>
				<p><b>Juegos comprados:</b> <?php echo $contador_juegos?></p>
				<p><b>Dinero empleado:</b> <?php echo $dinero_total?> €</p>
				<p><b>Juego más caro:</b> <?php echo $registro1["Nombre"]." con un precio de ".$registro1["Precio"]."€ "; ?></p>
				<p><b>Juego más barato:</b> <?php echo $registro2["Nombre"]." con un precio de ".$registro2["Precio"]."€ "; ?></p>
				<p><b>Número de deseos:</b> <?php echo $contador_deseos?></p>
				<p><b>Último juego comprado:</b> <?php echo $rowe4["Nombre"]?></p>
		
			
			
		</div>
		
		<div class="contenedor_trafico_usuario">
		
		
		
		<div class="tarjeta_pedidos">
		
		<div class="titulo_nove">
					<h2>MIS PEDIDOS</h2>
				</div>
		<?php
		$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if ($conexion->connect_errno) {
			die('Error de conexión: ' . $conexion->connect_error);
		}	
		//consulto el cliente actual
		$consultaSQL ="SELECT * FROM clientes  WHERE (nombre='$user' || email='$user')&& pass='$contra'" ; 
	  
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		
		
		if ($registro=$resultado->fetch_assoc()){
			$id=$registro["Id_Cliente"];
			//si existe busco sus pedidos
			$consultaSQL ="SELECT * FROM pedidos,lineas,productos,product_info  WHERE Id_Cliente='$id' and pedidos.Id_Pedido=lineas.Id_Pedido && productos.Id_Producto=lineas.Id_Producto and productos.Id_Producto=product_info.Id_Producto" ; 
	  
			$resultado = $conexion->query($consultaSQL);
			if (!$resultado) {
				die('No se puede realizar la consulta: ' . $conexion->connect_error);
			}
		
			
			if ($registro=$resultado->fetch_assoc()){
			
			do {
			
			$producto=$registro["Id_Producto"];
			$consultaSQL2 = "SELECT * from claves where Id_Cliente='$id' AND Id_Producto='$producto'";
			
			$resultado2 = $conexion ->query($consultaSQL2);
			if ($registro2=$resultado2->fetch_assoc()){
			?>
			<div class="pedido_usuario">
				<?php
					$ruta=$registro["Caratula"];
				?>
				<a href="producto/product_info.php?id=<?php echo $registro["Id_Producto"] ?>"><img class="imagen_pedido" <?php echo 'src=".'.$ruta.'"'; ?>  alt="logo">
				<titulo_juego><?php echo $registro["Nombre"]; ?></titulo_juego></a>
				<br><titulo_desarrollador><?php echo $registro["Desarrollador"]; ?></titulo_desarrollador>
				<br><titulo_juego>Clave:<?php echo $registro2["Clave"]; ?></titulo_juego>
			</div>
			
			
			<?php
			}}while ($registro=$resultado->fetch_assoc());
			}
			
		}
		?>
		</div>
		
		<div class="tarjeta_deseos">
		
		<div class="titulo_nove">
					<h2>MI LISTA DE DESEOS</h2>
				</div>
		
		<?php 
		
		$queryd1= "SELECT * from deseos where Id_Cliente = $Cliente";
		$resultd1 = mysqli_query($conexion, $queryd1);
		while($rowd1 = mysqli_fetch_assoc($resultd1)){
		
		
		$Producto = $rowd1["Id_Producto"];
		$queryd2= "SELECT * from productos where Id_Producto = $Producto";
		$resultd2 = mysqli_query($conexion, $queryd2);
		$rowd2 = mysqli_fetch_assoc($resultd2);
		
		$queryd3= "SELECT * from product_info where Id_Producto = $Producto";
		$resultd3 = mysqli_query($conexion, $queryd3);
		$rowd3 = mysqli_fetch_assoc($resultd3);
		
		$consultaSQL2 = "SELECT * from claves where Id_Cliente='$Cliente' AND Id_Producto='$Producto'";
		$resultado2 = $conexion ->query($consultaSQL2);
		
		if(!$registro2=$resultado2->fetch_assoc()){
		
		
		?>
			<div class="pedido_usuario">
			
				<a href="producto/product_info.php?id=<?php echo $Producto ?>"><img class="imagen_pedido" <?php  echo 'src=".'.$rowd2["Caratula"].'"' ?>" alt="logo"> </a>
				<a href="producto/product_info.php?id=<?php echo $Producto ?>"><titulo_juego><?php echo $rowd2["Nombre"]?></titulo_juego></a>
				</br><titulo_desarrollador><?php echo $rowd3["Desarrollador"] ?></titulo_desarrollador>	
			</div>
			
			<?php }
			else {$sqldelete = "DELETE FROM deseos WHERE Id_Producto='$Producto' AND Id_Cliente='$Cliente'";
					$conexion -> query($sqldelete);	
					}
			}?>
		</div>
		
		 
		 </div>
		
		<?php
		}
		?>
	  </div>
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
