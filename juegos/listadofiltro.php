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
			<h1>Usuario anónimo</h1>
		</div>
		
		<div class="botones_acceso">
			<input type="submit" class="boton_login" value="Iniciar sesión">
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
    
	
	<?php
	$filtro=$_GET["filtro"];
   // Definimos los parámetros
   $hostname = "localhost";
   $usuario = "pma";
   $password = "pmapass";
   $basededatos = "tienda_software";
   $tabla="productos";
   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}

	$query1 = "SELECT * FROM productos where Id_Producto= any(SELECT Id_Producto from product_info where Genero='$filtro')";
	
	if ($result1 = mysqli_query($conexion, $query1)) 
				while ($row1 = mysqli_fetch_assoc($result1)) {
	
	?>
	<div>
				<a href="../producto/product_info.php?id=<?php echo $row1["Id_Producto"] ?>" <?php echo 'title="'.$row1["Nombre"].'"'?> target="_blank">
					<img <?php echo 'src="..'.$row1["Caratula"].'"' ?> WIDTH="50" HEIGHT="80" /></a>
                <input type="text" name="my-item-id" <?php echo 'value="'.$row1["Id_Producto"].'"' ?>/>
				<input type="text" name="my-item-name" <?php echo 'value="'.$row1["Nombre"].'"' ?>/>
    			<input type="text" name="my-item-amount" <?php echo 'value="'.$row1["Cantidad"].'"' ?>/>
    			<input type="text" name="my-item-price" <?php echo 'value="'.$row1["Precio"].'"' ?> />
			<?php
		if($row1["Cantidad"]>0)
				{
                ?>
				<input type="image" src="../images/tick.png" WIDTH="15" HEIGHT="15"> </input>
				<?php }
		if($row1["Cantidad"]<1){
			?>
				<input type="image" src="../images/cross.png" WIDTH="15" HEIGHT="15"> </input>
				<?php }?>
				</div>
				<?php
				
			}
	$conexion->close();
   
?>
			
		
	
	
	
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
