<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <img src="images/keep.png" width="220" style="margin-left:-50px" height="63" alt="logo"> </div>
    
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
			<input type="submit" class="boton_login" value="Iniciar sesi�n">
			<input type="submit" class="boton_registro" value="Registrarse">
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
		<div class="cont_imagen_producto">
		
			<img class="imagen_producto" src="images/rocksmith.jpg" alt="logo"> 
		
		</div>
			
			<div class="info_producto">
				
				<div  class="titulo_producto"><h2>ROCKSMITH</h2></div>
				<dl id="titulo_producto">
					<dt>Plataforma: </dt>
						<dd>PC</dd>
					<dt>Desarrollador: </dt>
						<dd>Ubisoft</dd>
					<dt>Distribuidor: </dt>
						<dd>Ubisoft</dd>
					<dt>G�nero: </dt>
						<dd>M�sica</dd>
					<dt>Jugadores: </dt>
						<dd>1</dd>
					<dt>Idioma: </dt>
						<dd>Manual: Espa�ol, Textos: Espa�ol</dd>
					<dt>Lanzamiento: </dt>
						<dd>25 de octubre de 2012</dd>
						
				</dl>
				
			</div>
			
			<div class="precio_producto">
				
				<div class="titulo_precio_producto"><h2>PRECIO</h2></div>
				<div class="cantidad_precio"><precio>29.99�</precio></div>
				<p>Precio con IVA incluido.</p>
				<a href="login.php" style="text-decoration:none;"><button type="button" class="boton_a�adir_carrito">
					A�adir al carrito</button></a>
				<p>O tambi�n puedes guardarlo:</p>
				<a href="login.php" style="text-decoration:none;"><button type="button" class="boton_a�adir_lista">
					A�adir a la lista de deseos</button></a>
				
			</div>
			
			<div class="desc_producto">
				
				<div  class="titulo_producto"><h2>Descripci�n del producto</h2></div>
				<p>Videojuego que viene acompa�ado de una guitarra el�ctrica y que pretende ense�ar a tocar la 
				guitarra real incluyendo un plug-in que permite que se enchufen directamente a PlayStation 3 
				la mayor parte de 'seis cuerdas' con su dispositivo, en un t�tulo que traer� consigo 45 canciones 
				entre las que se incluyen pistas de Rolling Stones, David Bowie o Nirvana.</p>
				
				<div class="requisitos">
				
					<h3>Requisitos del sistema</h3>
					
					<dl id="requisitos_producto">
					<dt>OS: </dt>
						<dd>Windows Vista, Windows 7</dd>
					<dt>Procesador: </dt>
						<dd>2.0 GHz Intel� Core�2 Duo E4400 o 2.0 GHz AMD Athlon� 64 X2 3800+</dd>
					<dt>RAM: </dt>
						<dd>2 GB</dd>
					<dt>Tarjeta gr�fica: </dt>
						<dd>256 MB DirectX 9 / NVIDIA� GeForce� 8600 GT o ATI Radeon� HD 2600 XT</dd>
					<dt>DirectX�: </dt>
						<dd>9.0</dd>
					<dt>Disco Duro: </dt>
						<dd>12 GB</dd>
					<dt>Sonido: </dt>
						<dd>DirectX 9.0</dd>
						
				</dl>

				
				</div>
				
			</div>
			
			<div class="comentarios_producto">
				<div  class="titulo_producto"><h2>Comentarios de usuarios</h2></div>
				hola
				
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
