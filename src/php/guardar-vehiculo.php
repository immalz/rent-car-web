<?php 

	//conexion con base de datos
	$link = mysqli_connect("localhost","root","","lbd") or die("No hubo conexion");

	//obtener valores
	$codigo = $_POST['cod_v'];
	$tipo = $_POST['cbtipo'];
	$capacidad = $_POST['capacidad'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$precio = $_POST['precio'];
	$img = $_POST['imagen'];


	//ingresar vehiculo
	mysqli_query($link,"INSERT INTO vehiculo VALUES ('$codigo','$tipo','$precio','$modelo','$capacidad','$marca','')") or die("<h2>Error en guardado 2 </h2>"); 

	echo '
		<h2>Guardado exitoso</h2>
		<a href="../admin/pages/inventario.php">regresar</a>

	'; 

	
 ?>