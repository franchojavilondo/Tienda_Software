<?php
	session_start();
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

 <script type='text/javascript'>
function validar(){ 
   	extensiones_permitidas = new Array(".png", ".jpg"); 
	
   	if (document.formu.usuario.value.length==0){ 
      	alert("Tienes que escribir su nick") 
      	document.formu.nombre.focus() 
      	return 0; 
   	} 

   	if (document.formu.pass.value.length==0){ 
      	alert("Tienes que escribir tu contrase�a") 
      	document.formu.pass.focus() 
      	return 0; 
   	} 
	if (document.formu.pass2.value.length==0){ 
      	alert("Tienes que repetir tu contrase�a") 
      	document.formu.pass2.focus() 
      	return 0; 
   	} 
	if(document.formu.pass2.value!=document.formu.pass.value){
		alert("Las contrase�as no coinciden") 
      	document.formu.pass2.focus() 
      	return 0; 
	}
	if (document.formu.email.value.length==0){ 
      	alert("Tienes que escribir tu email") 
      	document.formu.email.focus() 
      	return 0; 
   	} 
	email=document.formu.email.value;
	mail_correcto = false; 
	if ( email.indexOf('@') > -1){
		if (email.indexOf("'") <0 && email.indexOf("\"") <0 && email.indexOf("\\") <0 && email.indexOf("\$") <0 && email.indexOf(" ") <0) {
			//miro si tiene caracter . 
			if (email.indexOf('.') > -1){ 	
				mail_correcto = true; 
			} 
		} 		
	}
	if (!mail_correcto) {
		alert("Tienes que escribir un email valido") 
		document.formu.email.focus() 
		return 0;
	}
	
	if (document.formu.nom_del_archivo.value.length==0 ){ 
      	alert("Tienes que subir una foto") 
      	document.formu.nom_del_archivo.focus() 
      	return 0; 
   	} 
	
	
	permitida=false;
	extension=(document.formu.nom_del_archivo.value.substring(document.formu.nom_del_archivo.value.lastIndexOf("."))).toLowerCase();
   	for (var i = 0; i < extensiones_permitidas.length; i++) { 
         if (extensiones_permitidas[i] == extension) { 
         permitida = true; 
         break; 
         } 
      } 
	if (!permitida){ 
      	alert("No puedes subir un archivo que no sea una imagen") 
      	document.formu.nom_del_archivo.focus() 
      	return 0; 
   	} 
	
	
	document.formu.submit(); 
}	
				
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
    
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Buscar en la tienda&hellip;" onFocus="this.value=(this.value=='Buscar en la tienda&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="">
      </fieldset>
    </form>
    
    <div class="cajon_usu" >
		<div class="imagen_perfil">
			<img src="images/profile.png" alt="Usuario" class="profile_img">
		</div>
			
		<div class="titulo_perfil">
			<h1>Usuario an�nimo</h1>
		</div>
		
		<div class="botones_acceso">
			<a href="login.php"><input type="submit" class="boton_login" value="Iniciar sesi�n"></a>
			<a href="signin.php"><input type="submit" class="boton_registro" value="Registrarse"></a>
		</div>
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
	    <li><div class="enl"><a href="#">Juegos<div class="tri"></div></a></div>
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
    
	
    <!-- main content -->
    <div id="homepage" class="clear">
		 <section class="container">
    <div class="login">
      <h1>CREAR UNA CUENTA</h1>
      <form method="post" ENCTYPE="multipart/form-data" action="signin.php" name="formu">
	 
        <p>Nick<br><input type="text" name="usuario" value="<?php if (isset($_SESSION['regnombre'])){ echo $_SESSION['regnombre']; } ?>" ></p>
		<p>Contrase�a<br><input type="password" name="pass" value="<?php if (isset($_SESSION['regcontra'])){ echo $_SESSION['regcontra']; } ?>"></p>
		<p>Repite la Contrase�a<br><input type="password" name="pass2" value="<?php if (isset($_SESSION['regcontra2'])){ echo $_SESSION['regcontra2']; } ?>"></p>
		<p>Direccion de email<br><input type="text" name="email" value="<?php if (isset($_SESSION['regemail'])){ echo $_SESSION['regemail']; } ?>"></p>
		<p>Foto<br><input type="file" name="nom_del_archivo"></p>
		<p class="submit"><input type="button" name="commit" value="Crear la cuenta" onclick="validar()"></p>
		
<?php
	
	if (isset($_POST["usuario"]) && isset($_POST["pass"]) && isset($_POST["pass2"]) && isset($_POST["email"]) && isset($_FILES["nom_del_archivo"])){
		$hostname = "localhost";
		$usuario = "pma";
		$password = "pmapass";
		$basededatos = "tienda_software";
		$tabla="clientes";
	
		
		
		$ruta='./images/usuarios/';
		$user = $_POST["usuario"];
		$contra = $_POST["pass"];
		$contra2 = $_POST["pass2"];
		$email=$_POST["email"];
		$extension=$_FILES["nom_del_archivo"]['name'];
		$foto=$ruta.$_POST["usuario"].".".pathinfo($extension,PATHINFO_EXTENSION);
	
		$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if ($conexion->connect_errno) {
			die('Error de conexi�n: ' . $conexion->connect_error);
		}	
		$consultaSQL ="SELECT * FROM clientes  WHERE nombre='$user' || email='$email'" ;
		$resultado = $conexion->query($consultaSQL);
		if (!$resultado) {
			die('No se puede realizar la consulta: ' . $conexion->connect_error);
		}
		
		if ($registro=$resultado->fetch_assoc()){
			
			$_SESSION ["regnombre"] = $_POST["usuario"]; 
			$_SESSION ["regcontra"] = $_POST["pass"]; 
			$_SESSION ["regcontra2"] = $_POST["pass2"]; 
			$_SESSION ["regemail"] =  $_POST["email"];	
			?>
				<script languaje="javascript">
				location.href = "signin.php";
				</script>
			<?php
		}
		else{
			$_SESSION ["regnombre"] = " "; 
			$_SESSION ["regcontra"] = " "; 
			$_SESSION ["regemail"] =  " ";	
			$_SESSION ["regcontra2"] = " "; 
			//a�adimos el usuario a la base de datos con su contrase�a encriptada
			$encriptada=password_hash ( $contra ,PASSWORD_BCRYPT );
			$consultaSQL ="INSERT INTO clientes VALUES (NULL,'$email','$encriptada','$user','$foto')" ;
			$stmt  = $conexion->query($consultaSQL);
			 
			$_SESSION ["user"]=$user;
			$_SESSION ["pass"]=$encriptada;
	
			//comprobar carga de la foto
			move_uploaded_file($_FILES['nom_del_archivo']['tmp_name'], $foto);
			?>
				<script languaje="javascript">
				location.href = "index.php";
				</script>
			<?php
			
		}
		$conexion ->close();
	}
	if(isset($_SESSION["regnombre"])){
		if($_SESSION["regnombre"]!=" "){
			echo "Ese nick ya existe, o ese email ya figura como usuario";
		}
	}
	
?>
      </form>
	  
	 
    </div>
	

  </section>
		
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
