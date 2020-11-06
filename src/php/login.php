<?php

$link = mysqli_connect("localhost", "root", "", "lbd") or die("No hubo conexion");

//obtener valores
$nombre = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if (!empty($nombre) && !empty($email)) {
    $sql = "SELECT * FROM cliente";

    $result = mysqli_query($link, $sql);

    $row = mysqli_fetch_array($result);

    $usuario = $row['nom'];
    $pass = $row['contraseña'];

    if ($nombre == $usuario && $contraseña == $pass) {
        echo '<h1>Login Completo</h1>';
    } else {
        echo '<h1>usuario incorrecto</h1>';
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asdasdasd</title>
</head>

<body>
    
    <main>
        <div class="titulo">
        <h1>Bienvenido <?php echo $nombre ?></h1>
        </div>
        <div class="contenido"></div>
    </main>
</body>

</html>