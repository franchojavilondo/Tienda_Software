<!DOCTYPE html>


<html lang="en" dir="ltr">

<?php
session_start(); 
//Iniciamos o retomamos la 
//sesión 
if(isset($_SESSION['carro'])) {
$carro=$_SESSION['carro'];
$contador = count($carro);
}else $carro=false; 
//La asignamos a la variable 
//$carro si existe o ponemos a false $carro 
//en caso contrario 
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
		 <li><a href="../index.php">PÁGINA PRINCIPAL</a></li>
		<li>|</li>
	    <li><a href="#">Juegos<div class="tri"></div></a>
		<ul>
		<div class="sub">
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
		 </div>
		 </ul>
		</li>
		<li>|</li>
        <li><a href="#">Secciones<div class="tri"></div></a>
		<ul>
		<div class="sub">
			<li><a href="../news.php">Noticias</a></li>
            <li><a href="#">Lo último</a></li>
            <li><a href="#">Ofertas</a></li>
		 </div>
		 </ul>
		
		</li>
		<li>|</li>
        <li class="last"><a href="#">Demos</a></li>
        
      </ul>
	  
	  
	  <div class="seccion_carrito">
	  <ul>
	  <li><a href="vercarrito.php"><div class="contador_carrito"><?php echo $contador?></div><img class="imagen_carrito" src="../images/cart.png">Mi Cesta</a></li>
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
<head> 
<title>PRODUCTOS AGREGADOS AL CARRITO</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
<!--  
.tit { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 9px; 
    color: #FFFFFF; 
} 
.prod { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 9px; 
    color: #333333; 
} 
h1 { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 20px; 
    color: #990000; 
} 
--> 
</style> 
</head> 
<body> 
<h1 align="center">Carrito</h1> 
<?php  
if($carro){ 
//si el carro no está vacío, 
//mostramos los productos  
?> 
<table width="500" border="0" cellspacing="0" cellpadding="0" align="center"> 
<tr bgcolor="#333333" class="tit">  
<td align="center">Producto</td> 
<td align="center">Precio</td> 
<td align="center">Borrar</td> 
</tr> 
<?php 
$color=array("#ffffff","#F0F0F0"); 
$contador=0; 
//las 2 líneas anteriores 
//sirven sólo para hacer 
//una tabla con colores  
//alternos 
$suma=0; 
//antes de recorrer todos 
//los valores de la matriz 
//$carro, ponemos a cero la 
//variable $suma, en la que 
//iremos sumando los subtotales 
//del costo de cada item por la 
//cantidad de unidades que se 
//especifiquen  
foreach($carro as $k => $v){ 
//recorremos la matriz que tiene 
//todos los valores del carro,  
//calculamos el subtotal y el 
// total  
$subto=$v['Precio']; 
$suma=$suma+$subto; 
$contador++; 
//este es el contador que usamos 
//para los colores alternos  
?> 
<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'>  
<td align="center"><?php echo $v['Nombre'] ?></td> 
<td align="center"><?php echo $v['Precio'] ?></td> 
<td align="center"><a href="borrarcar.php?&id=<?php echo $v['id'] ?>"><img src="trash.gif" width="12" height="14" border="0"></a></td> 
</tr>
<?php 
//por cada item creamos un 
//formulario que submite a 
//agregar producto y un link 
//que permite eliminarlos  
} 
?> 
</table> 
<div align="center"><span class="prod">Total de Artículos: <?php echo count($carro); 
//el total de items va a ser igual 
//a la cantidad de elementos que 
//tenga la matriz $carro, valor 
//que obtenemos con la función 
//count o con sizeof  
 ?></span>  
</div><br> 
<div align="center"><span class="prod">Total: $<?php echo number_format($suma,2); 
//mostramos el total de la variable 
//$suma formateándola a 2 decimales  
?></span>  
</div><br> 
<div align="center"><span class="prod">Continuar la selección de productos</span>  
<a href="../juegos/listado.php"> 
<img src="continuar.gif" width="13" height="13" border="0"></a>  
</div> 

<!--Seccion de pago con paypal-->
<div align="center"><span class="prod">Continuar al metodo de pago</span>  
<form action="https://www.sandbox.paypal.com/es/cgi-bin/webscr" method="post">

<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value='rizaruky-facilitator@hotmail.com'>
<input type="hidden" name="upload" value="1">

<?php 
$contador=0;
foreach($carro as $k => $v){ 
$contador++; 
$nombre=$v['Nombre'];
$precio=$v['Precio']; 

?>
<input type="hidden" name="item_name_<?php echo $contador?>" value="<?php echo $nombre?>">
<input type="hidden" name="amount_<?php echo $contador?>" value="<?php echo $precio?>">

<?php }?>

<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="return" value="http://localhost/control/pagorealizado.html">
<input type="hidden" name="cancel_return" value="http://localhost/control/pagocancelado.html">

<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but6.gif" name="submit" >
</form> 
</div> 
<?php }else{ ?> 
<p align="center"> <span class="prod">No hay productos seleccionados</span> 
<a href="../juegos/listado.php"> 
<img src="continuar.gif" width="13" height="13" border="0"></a>  
<?php }?> 
</p> 
</body> 
	
		
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
