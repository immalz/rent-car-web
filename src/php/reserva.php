<?php 

	//conexion con base de datos
	$link = mysqli_connect("localhost","root","","lbd") or die("No hubo conexion");

	//obtener valores
	$nombre = $_POST['txtnom'];
	$email = $_POST['txtcor'];
	$num = $_POST['texnum'];
	$frecojo = $_POST['txtfecha'];
	$fentrega = $_POST['txtfecha2'];
	$vehiculo = $_POST['cbvehiculo'];

	//conexion cliente_usuario
	$cliente1 = "SELECT * FROM cliente";
	$cliente2 = mysqli_query($link,$cliente1);
	$cod_clien2 = "";

	while ($row = mysqli_fetch_array($cliente2)) {
		
		$cod_clien = $row['cod_clien'];
		$cod = $row['cod'];
		$nom = $row['nom'];
		$correo = $row['correo'];
		// $numcel = $row['numcel'];
		// $dni = $row['dni'];

		if ($correo == $email) {
			$cod_clien2 = $cod_clien;
		}
	}

	//validar
	$req = (strlen($cod_clien2)) or die("No se encontro usuario"); 	


	//ingresar reserva
	mysqli_query($link,"INSERT INTO pedido VALUES ('','$vehiculo','$frecojo','$fentrega','$cod_clien2','reservado','pendiente')") or die("<h2>Error en guardado</h2>"); 

	echo '
		<h2>Reserva Completo</h2>
		<h5>Le llegara a su correo un mensaje con el codigo de pago</h5>
		<h5>Las reservas que no son canceladas en las 24 horas seran canceladas</h5>
		<a href="../pages/inicio.html">regresar</a>

	';

 ?>