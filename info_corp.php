<?php
	session_start();
	if(isset($_SESSION['carro'])) {
$carro=$_SESSION['carro'];
$contador = count($carro);
}
else {$carro=false; $contador=0;}
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
   	extensiones_permitidas = new Array(".png", ".jpg"); 
	
   	if (document.formu.usuario.value.length==0){ 
      	alert("Tienes que escribir su nick") 
      	document.formu.nombre.focus() 
      	return 0; 
   	} 

   	if (document.formu.pass.value.length==0){ 
      	alert("Tienes que escribir tu contraseña") 
      	document.formu.pass.focus() 
      	return 0; 
   	} 
	if (document.formu.pass2.value.length==0){ 
      	alert("Tienes que repetir tu contraseña") 
      	document.formu.pass2.focus() 
      	return 0; 
   	} 
	if(document.formu.pass2.value!=document.formu.pass.value){
		alert("Las contraseñas no coinciden") 
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
			<h1>Usuario anónimo</h1>
		</div>
		
		<div class="botones_acceso">
			<a href="login.php"><input type="submit" class="boton_login" value="Iniciar sesión"></a>
			<a href="signin.php"><input type="submit" class="boton_registro" value="Registrarse"></a>
		</div>
	</div>
    <nav>
      <div class="menu">
      <ul>
	  <li><a href="../index.html"><img class="iconos_navegacion" src="images/home.png">INICIO</a></li>
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
            <li><a href="#">Lo último</a></li>
            <li><a href="#">Ofertas</a></li>
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
    
	
    <!-- main content -->
    <div id="homepage" class="clear">
		 
		 <div class="info_legal">
		 
			<div class="titulo_legal">
				<h2>INFORMACIÓN LEGAL</h2>
			</div>
			
			<div class="titulo_legal_seccion">
			
				Identidad del editor
			
			</div>
			<p>En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la 
			Sociedad de la Información y del Comercio Electrónico, a continuación se reflejan los siguientes datos de información general
			de este sitio web: La empresa titular de este website es KCAPG, con domicilio en Plaza 
			del Altozano 7, 1A, 02002 de Albacete, con número de C.I.F: B-1111111.</p>

			
			<ul>
				<li>Teléfono: +34 123456789</li>
				<li>Fax : +34 123 123456789</li>
				<li>Email: correo@direccion.com</li>
			</ul>
		
		
		<div class="titulo_legal_seccion">
			
				Ley aplicable y jurisdicción
			
			</div>
		
		
			<p>Todas las Condiciones Generales, Política de Protección de Datos y el Aviso Legal sobre Propiedad Intelectual insertadas
			en el website se rigen por la normativa española vigente. Cualquier controversia se someterá a los Juzgados y Tribunales de
			la ciudad de Albacete.</p>

			<p>Copyright KCAPG. 2014. Todos los derechos reservados.</p>
		
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
