<?php
	session_start();
?>
<html lang="en" dir="ltr">
<head>
<title>Tienda de videojuegos</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>
function validaraddadmin(){ 
   	if (document.formu.user.value.length==0){ 
      	alert("Tienes que escribir su nick") 
      	document.formu.user.focus() 
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
<script type='text/javascript'>
function validardeleteadmin(){ 
   	if (document.formu0.user.value.length==0){ 
      	alert("Tienes que escribir su nick") 
      	document.formu0.user.focus() 
      	return 0; 
   	}
	document.formu0.submit(); 
}				
</script>
<script type='text/javascript'>
function validaraddproduct(){ 
	
	extensiones_permitidas = new Array(".png", ".jpg"); 
   	if (document.formu2.nombre.value.length==0){ 
      	alert("Tienes que escribir el nombre") 
      	document.formu2.nombre.focus() 
      	return 0; 
   	} 	
	if (document.formu2.precio.value.length==0){ 
      	alert("Tienes que escribir el precio") 
      	document.formu2.precio.focus() 
      	return 0; 
   	} 	
	if (document.formu2.nom_del_archivo.value.length==0 ){ 
      	alert("Tienes que subir una caratula") 
      	document.formu2.nom_del_archivo.focus() 
      	return 0; 
   	} 
	permitida=false;
	extension=(document.formu2.nom_del_archivo.value.substring(document.formu2.nom_del_archivo.value.lastIndexOf("."))).toLowerCase();
   	for (var i = 0; i < extensiones_permitidas.length; i++) { 
         if (extensiones_permitidas[i] == extension) { 
         permitida = true; 
         break; 
         } 
      } 
	if (!permitida){ 
      	alert("No puedes subir un archivo que no sea una imagen") 
      	document.formu2.nom_del_archivo.focus() 
      	return 0; 
   	} 
	
	
	if (document.formu2.genero.value.length==0){ 
      	alert("Tienes que escribir el genero") 
      	document.formu2.genero.focus() 
      	return 0; 
   	} 	
	if (document.formu2.desarrollador.value.length==0){ 
      	alert("Tienes que escribir el desarrollador") 
      	document.formu2.desarrollador.focus() 
      	return 0; 
   	} 	
	if (document.formu2.distribuidor.value.length==0){ 
      	alert("Tienes que escribir el distribuidor") 
      	document.formu2.distribuidor.focus() 
      	return 0; 
   	} 	
	if (document.formu2.jugadores.value.length==0){ 
      	alert("Tienes que escribir el numero de jugadores") 
      	document.formu2.jugadores.focus() 
      	return 0; 
   	} 	
	if (document.formu2.fecha.value.length==0){ 
      	alert("Tienes que escribir la fecha de lanzamiento") 
      	document.formu2.fecha.focus() 
      	return 0; 
   	} 	
	if (document.formu2.descripcion.value.length==0){ 
      	alert("Tienes que escribir la descripcion") 
      	document.formu2.descripcion.focus() 
      	return 0; 
   	} 	
	if (document.formu2.os.value.length==0){ 
      	alert("Tienes que escribir para que sistema operativo") 
      	document.formu2.os.focus() 
      	return 0; 
   	} 	
	if (document.formu2.procesador.value.length==0){ 
      	alert("Tienes que escribir para que tipo de procesador es") 
      	document.formu2.procesador.focus() 
      	return 0; 
   	} 	
	if (document.formu2.ram.value.length==0){ 
      	alert("Tienes que escribir la ram necesaria") 
      	document.formu2.ram.value.focus() 
      	return 0; 
   	} 	
	if (document.formu2.grafica.value.length==0){ 
      	alert("Tienes que escribir la grafica necesaria") 
      	document.formu2.grafica.focus() 
      	return 0; 
   	} 	
	if (document.formu2.directx.value.length==0){ 
      	alert("Tienes que escribir para que directx funciona") 
      	document.formu2.directx.focus() 
      	return 0; 
   	} 	
	if (document.formu2.hdd.value.length==0){ 
      	alert("Tienes que escribir el tamaño que ocupa") 
      	document.formu2.hdd.focus() 
      	return 0; 
   	} 	
	if (document.formu2.sonido.value.length==0){ 
      	alert("Tienes que escribir el tipo de tarjeta de sonido") 
      	document.formu2.sonido.focus() 
      	return 0; 
   	} 	
	document.formu2.submit(); 
}	
				
</script>
<script type='text/javascript'>
function validardeleteproduct(){ 

   	if (document.formu11.nombre.value.length==0){ 
      	alert("Tienes que escribir el nombre") 
      	document.formu11.nombre.focus() 
      	return 0; 
   	} 	
	document.formu11.submit(); 
}				
</script>
<script type='text/javascript'>
function  validaraddoffers(){ 
   	if (document.formu3.nombre.value.length==0){ 
      	alert("Tienes que escribir el nombre del producto") 
      	document.formu3.nombre.focus() 
      	return 0; 
   	}
   	if (document.formu3.descuento.value.length==0){ 
      	alert("Tienes que indicar el descuento") 
      	document.formu3.descuento.focus() 
      	return 0; 
   	} 
	document.formu3.submit(); 
}	
				
</script>
<script type='text/javascript'>
function  validardeleteoffers(){ 
   	if (document.formu10.nombre.value.length==0){ 
      	alert("Tienes que escribir el nombre del producto") 
      	document.formu10.nombre.focus() 
      	return 0; 
   	}
   	
	document.formu10.submit(); 
}	
				
</script>
<script type='text/javascript'>
function  validaraddnews(){ 
   	if (document.formu4.titular.value.length==0){ 
      	alert("Tienes que escribir el titular de la noticia") 
      	document.formu4.titular.focus() 
      	return 0;
   	} 
	if (document.formu4.juego.value.length==0){ 
      	alert("Tienes que indicar el juego relacionado con la noticia") 
      	document.formu4.juego.focus() 
      	return 0; 
   	} 
   	if (document.formu4.contenido.value.length==0){ 
      	alert("Tienes que añadir el contenido de la noticia") 
      	document.formu4.contenido.focus() 
      	return 0; 
   	} 
	document.formu4.submit(); 
}	
				
</script>
<script type='text/javascript'>
function  validaradminnews(){ 	
   	if (document.formu5.nombre.value.length==0){ 
      	alert("Tienes que escribir el nombre del juego a buscar") 
      	document.formu5.nombre.focus() 
      	return 0;
   	} 
	document.formu5.submit(); 
}				
</script>
<script type='text/javascript'>
function  validaradminusers(){ 	
   	if (document.formu12.user.value.length==0){ 
      	alert("Tienes que escribir el nick del usuario") 
      	document.formu12.user.focus() 
      	return 0;
   	} 
	document.formu12.submit(); 
}				
</script>
<script type='text/javascript'>
function  validaradmintask(){ 	
   	if (document.formu13.nombre.value.length==0){ 
      	alert("Tienes que escribir el nick del usuario") 
      	document.formu13.nombre.focus() 
      	return 0;
   	} 
	document.formu13.submit(); 
}				
</script>
</head>
<body>
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
		$consultaSQL ="SELECT * FROM administradores WHERE nombre='$user' && pass='$contra'" ; 
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		if ($registro=$resultado->fetch_assoc()){
			echo "Pagina de administracion de keep calm and play games<br><br>";
		}
		$registro=$resultado->free();
		$conexion->close();
	
	?>
		<form name="buscar"  action="admin.php" method="get">
		<input type="submit" name="buscar" value="Agregar administradores" /><br>
		<input type="submit" name="buscar" value="Eliminar administradores" /><br>
		<input type="submit" name="buscar" value="Agregar productos" /><br>
		<input type="submit" name="buscar" value="Eliminar productos" /><br>
		<input type="submit" name="buscar" value="Agregar ofertas" /><br>
		<input type="submit" name="buscar" value="Eliminar ofertas" /><br>
		<input type="submit" name="buscar" value="Agregar noticias" /><br>
		<input type="submit" name="buscar" value="Administrar noticias" /><br>
		<input type="submit" name="buscar" value="Administrar usuarios" /><br>
		<input type="submit" name="buscar" value="Administrar pedidos" /><br>
		<input type="submit" name="buscar" value="Cerrar sesion" /><br>
		</form>
	<?php
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar administradores') {
			$_SESSION["addadmin"]="";
			?>
			<h1>Agregar administradores</h1>
			<form method="post"  name="formu">
			<p>Nombre<br><input type="text" name="user" value="" ></p>
			<p>Contraseña<br><input type="password" name="pass" value=""></p>
			<p><input type="button" name="commit" value="Agregar administrador" onclick="validaraddadmin()" ></p>
			<?php
	
				if (isset($_POST["user"]) && isset($_POST["pass"]) ){
					
					$user = $_POST["user"];
					$contra = $_POST["pass"];
							
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					$consultaSQL ="SELECT * FROM administradores  WHERE nombre='$user'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					
					if ($registro=$resultado->fetch_assoc()){
						$_SESSION["addadmin"]="Ese administrador ya existe";
					}
					else{
						$consultaSQL ="INSERT INTO administradores VALUES ('$user','$contra',NULL)" ;
						$stmt  = $conexion->query($consultaSQL);
						$_SESSION["addadmin"]="Administrador agregado";
						?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php				
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Eliminar administradores') {
			$_SESSION["deleteadmin"]="";
			?>
			<h1>Eliminar administradores</h1>
			<form method="post"  name="formu0">
			<p>Nombre<br><input type="text" name="user" value="" ></p>
			<p><input type="button" name="commit" value="Eliminar administrador" onclick="validardeleteadmin()" ></p>
			<?php
				$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
				if ($conexion->connect_errno) {
					die('Error de conexión: ' . $conexion->connect_error);
				}
				
				$consultaSQL ="SELECT * FROM administradores " ;
				$resultado = $conexion->query($consultaSQL);
				if (!$resultado) {
					die('No se puede realizar la consulta: ' . $conexion->connect_error);
				}
				
				if ($registro=$resultado->fetch_assoc()){
					echo "Listado de administradores<br>";
					echo "<table border=2><tr><th>Id.Pedido</th> <th>Estado</th> <th>Precio</th></tr>";
					do {	
						echo "<tr>
						<td>".$registro['nombre']."</td>
						<td>".$registro['pass']."</td>			
						<td>".$registro['id']."</td>
						</tr>";					
					}while ($registro=$resultado->fetch_assoc());
					echo "<tr>";
			
					echo "</table>";
				}
				if (isset($_POST["user"]) ){
					
					$user = $_POST["user"];
							
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					$consultaSQL ="SELECT * FROM administradores  WHERE nombre='$user'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					
					if ($registro=$resultado->fetch_assoc()){
						$consultaSQL ="delete from administradores where nombre='$user'" ;
						$stmt  = $conexion->query($consultaSQL);
						$_SESSION["deleteadmin"]="Administrador eliminido";
						?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
						
					}
					else{
						$_SESSION["deleteadmin"]="Ese administrador no existe";
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php				
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar productos') {
			$_SESSION["addproduct"]="";
			?>
			<h1>Agregar productos</h1>
			<form method="post" ENCTYPE="multipart/form-data" name="formu2">
			<p>Nombre<br><input type="text" name="nombre" value="" ></p>
			<p>Precio<br><input type="double" name="precio" value=""></p>
			<p>Caratula<br><input type="file" name="nom_del_archivo"></p>
			<p>Genero<br><input type="text" name="genero" value=""></p>
			<p>Desarrollador<br><input type="text" name="desarrollador" value=""></p>
			<p>Distribuidor<br><input type="text" name="distribuidor" value=""></p>
			<p>Jugadores<br><input type="integer" name="jugadores" value=""></p>
			<p>Idioma<br><input type="text" name="idioma" value=""></p>
			<p>Fecha de lanzamiento<br><input type="date" name="fecha" value=""></p>
			<p>Descripcion<br><textarea name="descripcion" cols="40" rows="5" ></textarea></p>
			<p>Requisitos<br>
			<p>OS<br><input type="text" name="os" value=""></p>
			<p>Procesador<br><input type="text" name="procesador" value=""></p>
			<p>Ram<br><input type="text" name="ram" value=""></p>
			<p>Grafica<br><input type="text" name="grafica" value=""></p>
			<p>Directx<br><input type="text" name="directx" value=""></p>
			<p>HDD<br><input type="text" name="hdd" value=""></p>
			<p>Sonido<br><input type="text" name="sonido" value=""></p>
			<p><input type="button" name="commit" value="Agregar producto" onclick="validaraddproduct()" ></p>
			<?php
	
				if (isset($_POST["nombre"]) && isset($_POST["precio"])  ){
					$nom=$_POST["nombre"];
					$pre=$_POST["precio"];
					$gen=$_POST["genero"];
					$des=$_POST["desarrollador"];
					$dis=$_POST["distribuidor"];
					$jug=$_POST["jugadores"];
					$idi=$_POST["idioma"];
					$fec=$_POST["fecha"];
					$des=$_POST["descripcion"];
					$os=$_POST["os"];
					$pro=$_POST["procesador"];
					$ra=$_POST["ram"];
					$gra=$_POST["grafica"];
					$dir=$_POST["directx"];
					$hhdd=$_POST["hdd"];
					$son=$_POST["sonido"];
						
					$ruta='./images/Caratulas/';
					$extension=$_FILES["nom_del_archivo"]['name'];
					$foto=$ruta.$extension;
					
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					$consultaSQL ="SELECT * FROM productos  WHERE Nombre='$nom'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					
					if ($registro=$resultado->fetch_assoc()){
						$_SESSION["addproduct"]="Ese producto ya existe";
					}
					else{
						$consultaSQL ="INSERT INTO productos VALUES (NULL,'$nom','$foto',100,'$pre')" ;
						$stmt  = $conexion->query($consultaSQL);
						move_uploaded_file($_FILES['nom_del_archivo']['tmp_name'],$foto);
						
						$consultaSQL ="SELECT * FROM productos  WHERE Nombre='$nom'" ;
						$resultado = $conexion->query($consultaSQL);
						if ($registro=$resultado->fetch_assoc()){
							$id=(int)$registro['Id_Producto'];
							$consultaSQL ="INSERT INTO product_info VALUES ($id,PC,'$des','$dis','$gen','$jug','$idi','$fec','$os','$pro','$ra','$gra','$dir','$hhdd','$son','$des')" ;
							$stmt  = $conexion->query($consultaSQL);
							$_SESSION["addproduct"]="Producto agregado";
							?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
						}
						else{
							$_SESSION["addproduct"]="Ha habido un problema";
						}
					}
					$conexion ->close();
				}
			?>
			</form>
			<?php					
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Eliminar productos') {
			$_SESSION["deleteproduct"]="";
			?>
			<h1>Eliminar productos</h1>
			<form method="post"  name="formu11">
			<p>Nombre<br><input type="text" name="nombre" value="" ></p>
			
			<p><input type="button" name="commit" value="Eliminar producto" onclick="validardeleteproduct()" ></p>
			<?php
	
				if (isset($_POST["nombre"])  ){
					$nom=$_POST["nombre"];
										
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					$consultaSQL ="SELECT * FROM productos  WHERE Nombre='$nom'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					
					if ($registro=$resultado->fetch_assoc()){
						
						$id=$registro['Id_Producto'];
						$consultaSQL ="delete FROM productos WHERE Nombre='$nom'";
						$stmt  = $conexion->query($consultaSQL);
						$consultaSQL ="SELECT * FROM product_info  WHERE Id_Producto='$id'" ;
						$resultado = $conexion->query($consultaSQL);
						if (!$resultado) {
							die('No se puede realizar la consulta: ' . $conexion->connect_error);
						}
						
						if ($registro=$resultado->fetch_assoc()){
							$consultaSQL ="delete FROM product_info WHERE Id_Producto='$id'";
							$stmt  = $conexion->query($consultaSQL);
							
							$_SESSION["deleteproduct"]="Producto eliminado";
							
							?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
							<?php
						}
						else{
							$_SESSION["deleteproduct"]="Ha habido un problema";
						}
					}
					else{
						$_SESSION["deleteproduct"]="Ese producto no existe";
					}
					$conexion ->close();
				}
			?>
			</form>
			<?php					
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar ofertas') {
			$_SESSION["addoffers"]="";
			?>
			<h1>Agregar ofertas</h1>
			<form method="post"  name="formu3">
			<p>Nombre<br><input type="text" name="nombre" value="" ></p>
			<p>Descuento a aplicar (en %)<br><input type="integer" name="descuento" value=""></p>
			<p><input type="button" name="commit" value="Agregar oferta" onclick="validaraddoffers()" ></p>
			<?php
	
				if (isset($_POST["nombre"]) && isset($_POST["descuento"]) ){
					
					$nom = $_POST["nombre"];
					$des = $_POST["descuento"];
							
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					//buscar producto
					$consultaSQL ="SELECT * FROM productos WHERE Nombre='$nom'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					//si lo encontramos
					if ($registro=$resultado->fetch_assoc()){
						//cogemos su id y buscamos si ese producto ya tiene una oferta
						$id=$registro['Id_Producto'];
						$consultaSQL ="SELECT * FROM ofertas WHERE Id_Producto='$id'" ;
						$resultado = $conexion->query($consultaSQL);
						if (!$resultado) {
							die('No se puede realizar la consulta: ' . $conexion->connect_error);
						}
						// si la tiene la borramos para meter otra nueva oferta
						if ($registro=$resultado->fetch_assoc()){
							$consultaSQL ="delete from ofertas where Id_Producto='$id'" ;
							$stmt  = $conexion->query($consultaSQL);
						}
						$consultaSQL ="INSERT INTO ofertas VALUES ('$id','$des')" ;
						$stmt  = $conexion->query($consultaSQL);
						$_SESSION["addoffers"]="Oferta agregada";
						?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
					}
					else{
						echo "Ese producto no existe";
						$_SESSION["addoffers"]="";
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php				
		}
		
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Eliminar ofertas') {
			$_SESSION["deleteoffers"]="";
			?>
			<h1>Eliminar ofertas</h1>
			<form method="post"  name="formu10">
			<p>Nombre<br><input type="text" name="nombre" value="" ></p>
			<p><input type="button" name="commit" value="Eliminar oferta" onclick="validardeleteoffers()" ></p>
			<?php
	
				if (isset($_POST["nombre"]) ){
					
					$nom = $_POST["nombre"];
							
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					//buscar producto
					$consultaSQL ="SELECT * FROM productos WHERE Nombre='$nom'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					//si lo encontramos
					if ($registro=$resultado->fetch_assoc()){
						//cogemos su id y buscamos si ese producto ya tiene una oferta
						$id=$registro['Id_Producto'];
						$consultaSQL ="SELECT * FROM ofertas WHERE Id_Producto='$id'" ;
						$resultado = $conexion->query($consultaSQL);
						if (!$resultado) {
							die('No se puede realizar la consulta: ' . $conexion->connect_error);
						}
						// si la tiene la borramos 
						if ($registro=$resultado->fetch_assoc()){
							$consultaSQL ="delete from ofertas where Id_Producto='$id'" ;
							$stmt  = $conexion->query($consultaSQL);
							$_SESSION["deleteoffers"]="Oferta eleminada";
							?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
							<?php
						}
						else{
							$_SESSION["deleteoffers"]="Ese producto no tiene ninguna oferta";
						}						
					}
					else{
						echo "Ese producto no existe";
						$_SESSION["deleteoffers"]="";
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php
		}
		
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar noticias') {
			$_SESSION["addnews"]="";
			?>
			<h1>Agregar noticias</h1>
			<form method="post" ENCTYPE="multipart/form-data" name="formu4">
			<p>Titular<br><input type="text" name="titular" value="" ></p>
			<p>Juego relacionado<br><input type="text" name="juego" value="" ></p>
			<p>Imagen<br><input type="file" name="imagen"></p>
			<p>Contenido<br><textarea name="contenido" cols="40" rows="5" ></textarea></p>
			<p><input type="button" name="commit" value="Agregar noticias" onclick="validaraddnews()" ></p>
			<?php
	
				if (isset($_POST["titular"]) && isset($_FILES["imagen"]) && isset($_POST["contenido"]) && isset($_POST["juego"]) ){
					
					$tit = $_POST["titular"];
					$con = $_POST["contenido"];
					$jue= $_POST["juego"]; 
							
					$ruta='./images/noticias/';
					$extension=$_FILES["imagen"]['name'];
					$foto=$ruta.$extension;
					
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					
					$consultaSQL ="SELECT * FROM productos WHERE Nombre='$jue'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					if ($registro=$resultado->fetch_assoc()){
						$id=$registro['Id_Producto'];
						$consultaSQL ="INSERT INTO noticias VALUES ('$id','$con','$tit','$foto')" ;
						$stmt  = $conexion->query($consultaSQL);
						move_uploaded_file($_FILES['imagen']['tmp_name'],$foto);
						$_SESSION["addnews"]="Noticia agregada";
						?>
							<script languaje="javascript">
							//location.href = "admin.php";
							</script>
						<?php					
					}
					else{
						$_SESSION["addnews"]="Ese producto no existe";
					}
					$conexion ->close();
				}
			?>
			</form>
			<?php
		}
		
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Administrar noticias') {
			$_SESSION["adminnews"]="";
			?>
			<h1>Administrar noticias</h1>
			<form method="post"  name="formu5">
			<p>Juego relacionado con la noticia<br><input type="text" name="nombre" value="" ></p>
			
			<p><input type="button" name="commit" value="Administrar noticias" onclick="validaradminnews()" ></p>
			<?php			
				if (isset($_POST["nombre"])){
					
					$nom = $_POST["nombre"];
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					//buscar producto
					$consultaSQL ="SELECT * FROM productos WHERE Nombre='$nom'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					//si lo encontramos
					if ($registro=$resultado->fetch_assoc()){
						$id=$registro['Id_Producto'];
						$consultaSQL ="SELECT * FROM noticias WHERE Id_Producto='$id'" ;
						$resultado = $conexion->query($consultaSQL);
						if (!$resultado) {
							die('No se puede realizar la consulta: ' . $conexion->connect_error);
						}
						if ($registro=$resultado->fetch_assoc()){
							echo "Listado de administradores<br>";
							echo "<table border=2><tr><th>Titular</th> <th>Contenido</th> </tr>";
							do {	
								echo "<tr>
								<td>".$registro['Titular']."</td>		
								<td>".$registro['Contenido']."</td>
								</tr>";					
							}while ($registro=$resultado->fetch_assoc());
							echo "<tr>";
					
							echo "</table>";
							$_SESSION["adminnews"]="Noticia administrada";
							//mostrar noticias de ese producto 
					
						}
						else{
							$_SESSION["adminnews"]="No hay noticias de ese producto";
						}
					}	
					else{
						$_SESSION["adminnews"]="Ese producto no existe";
					
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php
		}
		
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Administrar usuarios') {
			$_SESSION["adminusers"]="";
			?>
			<h1>Administrar usuarios</h1>
			<form method="post"  name="formu12">
			<p>Nick<br><input type="text" name="user" value="" ></p>
			<p><input type="button" name="commit" value="Administrar usuarios" onclick="validaradminusers()" ></p>
			<?php
				$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
				if ($conexion->connect_errno) {
					die('Error de conexión: ' . $conexion->connect_error);
				}
				
				$consultaSQL ="SELECT * FROM clientes " ;
				$resultado = $conexion->query($consultaSQL);
				if (!$resultado) {
					die('No se puede realizar la consulta: ' . $conexion->connect_error);
				}
				
				if ($registro=$resultado->fetch_assoc()){
					echo "Listado de clientes<br>";
					echo "<table border=2><tr><th>Id Cliente</th> <th>Email</th> <th>Nombre</th></tr>";
					do {	
						echo "<tr>
						<td>".$registro['Id_Cliente']."</td>
						<td>".$registro['email']."</td>			
						<td>".$registro['nombre']."</td>
						</tr>";					
					}while ($registro=$resultado->fetch_assoc());
					echo "<tr>";
			
					echo "</table>";
				}
				if (isset($_POST["user"]) ){
					
					$user = $_POST["user"];
							
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					$consultaSQL ="SELECT * FROM clientes WHERE nombre='$user'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					
					if ($registro=$resultado->fetch_assoc()){
						$consultaSQL ="delete from clientes where nombre='$user'" ;
						$stmt  = $conexion->query($consultaSQL);
						$_SESSION["adminusers"]="Cliente eliminido";
						?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
						
					}
					else{
						$_SESSION["adminusers"]="Ese cliente no existe";
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php	
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Administrar pedidos') {
			$_SESSION["admintask"]="";
			?>
			<h1>Administrar pedidos</h1>
			<form method="post"  name="formu13">
			<p>Nombre del cliente<br><input type="text" name="nombre" value="" ></p>
			<p><input type="button" name="commit" value="Administrar pedidos" onclick="validaradmintask()" ></p>
			<?php
				
				if (isset($_POST["nombre"]) ){
					
					$user = $_POST["nombre"];
							
					$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
					if ($conexion->connect_errno) {
						die('Error de conexión: ' . $conexion->connect_error);
					}	
					$consultaSQL ="SELECT * FROM clientes WHERE nombre='$user'" ;
					$resultado = $conexion->query($consultaSQL);
					if (!$resultado) {
						die('No se puede realizar la consulta: ' . $conexion->connect_error);
					}
					
					if ($registro=$resultado->fetch_assoc()){
						$id=$registro['Id_Cliente'];
						
						$consultaSQL ="SELECT * FROM pedidos WHERE Id_Cliente='$id'" ;
						$resultado = $conexion->query($consultaSQL);
						if (!$resultado) {
							die('No se puede realizar la consulta: ' . $conexion->connect_error);
						}
						
						if ($registro=$resultado->fetch_assoc()){
							echo "Listado de pedidos de ".$user."<br>";
							echo "<table border=2><tr><th>Id pedido</th> <th>Estado</th> <th>Precio</th></tr>";
							do {	
								echo "<tr>
								<td>".$registro['Id_Pedido']."</td>
								<td>".$registro['estado']."</td>			
								<td>".$registro['Precio_Total']."</td>
								</tr>";					
							}while ($registro=$resultado->fetch_assoc());
							echo "<tr>";
			
							echo "</table>";
						}
						else{
							$_SESSION["admintask"]="Ese cliente no ha comprado nada";
						}
					}
					else{
						$_SESSION["admintask"]="Ese cliente no existe";
					}
					$conexion ->close();
				}	
			?>
			</form>
			<?php	
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Cerrar sesion') {
			?>
				<script languaje="javascript">
				location.href = "logout.php";
				</script>
			<?php
		}
		if(isset($_SESSION["addadmin"])){
			if($_SESSION["addadmin"]!=""){
				echo $_SESSION["addadmin"];
			}	
		}
		if(isset($_SESSION["deleteadmin"])){
			if($_SESSION["deleteadmin"]!=""){
				echo $_SESSION["deleteadmin"];
			}	
		}
		if(isset($_SESSION["addproduct"])){
			if($_SESSION["addproduct"]!=""){
				echo $_SESSION["addproduct"];
			}	
		}
		if(isset($_SESSION["deleteproduct"])){
			if($_SESSION["deleteproduct"]!=""){
				echo $_SESSION["deleteproduct"];
			}	
		}
		if(isset($_SESSION["addoffers"])){
			if($_SESSION["addoffers"]!=""){
				echo $_SESSION["addoffers"];
			}	
		}
		if(isset($_SESSION["deleteoffers"])){
			if($_SESSION["deleteoffers"]!=""){
				echo $_SESSION["deleteoffers"];
			}	
		}
		if(isset($_SESSION["addnews"])){
			if($_SESSION["addnews"]!=""){
				echo $_SESSION["addnews"];
			}	
		}
		if(isset($_SESSION["adminnews"])){
			if($_SESSION["adminnews"]!=""){
				echo $_SESSION["adminnews"];
			}	
		}
		if(isset($_SESSION["adminusers"])){
			if($_SESSION["adminusers"]!=""){
				echo $_SESSION["adminusers"];
			}	
		}
		if(isset($_SESSION["admintask"])){
			if($_SESSION["admintask"]!=""){
				echo $_SESSION["admintask"];
			}	
		}
	}
	?>
</body>	