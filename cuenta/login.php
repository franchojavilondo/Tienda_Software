<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Accede a Tu cuenta</title>
  <link rel="stylesheet" href="../css/login.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Logea a tu cuenta</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="user" value="" placeholder="Usuario o Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Contraseña"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recuerdame en este PC
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
		
		<?php
	session_start();
	
	if (isset($_POST["user"],$_POST["pass"])){
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	
	
	
	$_SESSION ["user"]=$user;
	$_SESSION["idsession"] = session_id();

	
	
	   $hostname = "localhost";
	   $usuario = "pma";
	   $password = "pmapass";
	   $basededatos = "tienda_software";
	   $tabla="clientes";
   
	$conexion = new mysqli($hostname, $usuario, $password,$basededatos);
		if(!$conexion) {
		die ("conexion no se pudo realizar");
		}
	$stmt = $conexion->prepare("SELECT pass FROM clientes WHERE nombre='$user'");
	$stmt->execute();
	$stmt->bind_result($password);
	
	if ($stmt->fetch()){
	if($pass==$password){?>
	
		<a href="mostrar.php">MOSTRAR ARTICULOS COMPRADOS</a>
		
	<?php }
		else {?>
		<a href="index.php">REINTENTAR</a>
		<?php }
	
	 }

	}
	?>
      </form>
	  
	  
    </div>

  </section>

  
</body>
</html>

