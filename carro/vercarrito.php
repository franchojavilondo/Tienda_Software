<?php  
session_start(); 
//Iniciamos o retomamos la 
//sesión 
if(isset($_SESSION['carro'])) 
$carro=$_SESSION['carro'];else $carro=false; 
//La asignamos a la variable 
//$carro si existe o ponemos a false $carro 
//en caso contrario 
?> 
<html> 
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
<?php }else{ ?> 
<p align="center"> <span class="prod">No hay productos seleccionados</span> 
<a href="../juegos/listado.php"> 
<img src="continuar.gif" width="13" height="13" border="0"></a>  
<?php }?> 
</p> 
</body> 
</html>