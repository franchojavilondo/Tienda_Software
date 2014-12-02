<html lang="en" dir="ltr">
<head>
<title>Tienda de videojuegos</title>
<script type='text/javascript'>
function validaraddadmin(){ 
   	
	
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
</head>
<body>
<?php
	session_start();
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
		
		//  mysqli_fetch_array devuelve un array con cada fila de la consulta
		if ($registro=$resultado->fetch_assoc()){
			echo "Pagina de administracion de keep calm and play games<br><br>";
		}
		$registro=$resultado->free();
		$conexion->close();
	}
	?>
		<form name="buscar"  action="admin.php" method="get">
		<input type="submit" name="buscar" value="Agregar administradores" /><br>
		<input type="submit" name="buscar" value="Agregar productos" /><br>
		<input type="submit" name="buscar" value="Agregar ofertas" /><br>
		<input type="submit" name="buscar" value="Agregar noticias" /><br>
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
						echo "Ese administrador ya existe";
						$_SESSION["addadmin"]="";
					}
					else{
						$consultaSQL ="INSERT INTO administradores VALUES ('$user','$contra',NULL)" ;
						$stmt  = $conexion->query($consultaSQL);
						$_SESSION["addadmin"]="1";
						?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
					}
					$conexion ->close();
				}		
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar productos') {
			$_SESSION["addadmin"]="";
			?>
			<h1>Agregar productos</h1>
			<form method="post"  name="formu">
			<p>Nombre<br><input type="text" name="nombre" value="" ></p>
			<p>Precio<br><input type="text" name="precio" value=""></p>
			<p>Genero<br><input type="text" name="genero" value=""></p>
			<p>Desarrollador<br><input type="text" name="desarrollador" value=""></p>
			<p>Distribuidor<br><input type="text" name="distribuidor" value=""></p>
			<p>Jugadores<br><input type="integer" name="jugadores" value=""></p>
			<p>Idioma<br><input type="text" name="idioma" value=""></p>
			<p>Fecha de lanzamiento<br><input type="date" name="fecha" value=""></p>
			<p>Descripcion<br><textarea name="descripcion" cols="40" rows="5" ></textarea></p>
			<p>Requisitos<br><textarea name="requisitos" cols="40" rows="5" ></textarea></p>
			<p><input type="button" name="commit" value="Agregar producto" onclick="validaraddproduct()" ></p>
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
						echo "Ese administrador ya existe";
						$_SESSION["addadmin"]="";
					}
					else{
						$consultaSQL ="INSERT INTO administradores VALUES ('$user','$contra',NULL)" ;
						$stmt  = $conexion->query($consultaSQL);
						$_SESSION["addadmin"]="1";
						?>
							<script languaje="javascript">
							location.href = "admin.php";
							</script>
						<?php
					}
					$conexion ->close();
				}		
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar ofertas') {
			
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar noticias') {
			
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar usuarios') {
			
		}
		if (isset($_GET['buscar']) && $_GET['buscar'] == 'Agregar pedidos') {
			
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
				echo "Administrador agregado con exito<br>";
			}	
		}

	
	?>
</body>	