<?php 

	//conexion con base de datos
	$link = mysqli_connect("localhost","root","","lbd") or die("No hubo conexion");

	//obtener valores
	$nombre = $_POST['usuario'];
	$email = $_POST['correo'];
	$pass = $_POST['contraseña'];
	$rpass = $_POST['repetir-contraseña'];

	//validar
	$req = (strlen($nombre)*strlen($email)*strlen($pass)*strlen($rpass)) or die("Faltan llenar campos");

	//confirmar contraseña
	if($pass != $rpass){
		die('las contraseñas no coinsiden <br><br> <a href="../pages/login.html">Logearse</a>');
	}

	//encriptar contraseña
	//$contraseñaUsuario = md5($pass)

	//ingresar datos
	mysqli_query($link,"INSERT INTO t_usuario VALUES ('','$pass')") or die("<h2>Error en guardado</h2>");

	//conexion cliente_usuario
	$cliente1 = "SELECT * FROM t_usuario";
	$cliente2 = mysqli_query($link,$cliente1);

	while ($row = mysqli_fetch_array($cliente2)) {
		
		$cod = $row['cod'];
		$passwd = $row['contraseña'];

		if ($passwd == $pass) {
			$cod2 = $cod;
		}
	}	

	//ingresar cliente
	mysqli_query($link,"INSERT INTO cliente VALUES ('','$cod2','$nombre','$email','$pass')") or die("<h2>Error en guardado 2</h2>");

	echo '
		<h2>Registro Completo</h2>
		<h5>Gracias por registrarse en nuestra web, ya puede ingresar como usuario</h5>
		<a href="../pages/login.html">Logearse</a>

	';

 ?>