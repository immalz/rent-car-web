<?php

//conexion con el servidor
$link = mysqli_connect("localhost", "root", "", "lbd") or die("No hubo conexion");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio de Transporte X</title>
    <link rel="icon" type="image/png" href="../images/logo-empresa.png" />
    <link rel="stylesheet" href="../styles/flota.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../styles/reutilizables/estilos-basicos.css">
    <link rel="stylesheet" href="../styles/reutilizables/footer.css">
</head>

<body bgcolor="WHITE">
    <div class="container">
        <!--SECCION PRINCIPAL-->

        <section class="principal">
            <div class="titulo">
                <h1>NUESTRA FLOTA</h1>
            </div>
            <div id="flota" class="flota">

                <?php
                $sql = "SELECT * FROM vehiculo";
                $result = mysqli_query($link, $sql);

                while ($row = mysqli_fetch_array($result)) {

                    $cod_v = $row['cod_v'];
                    $cod_tipov = $row['cod_tipov'];
                    $precio = $row['precio'];
                    $modelo = $row['modelo'];
                    $modo = $row['modo'];
                    $capacidad = $row['capacidad'];
                    $marca = $row['marca'];
                    $foto = $row['foto'];
                ?>

                    <!--PRIMER AUTO-->

                    <div class="tarjeta">
                        <div class="tarjeta__imagen">
                            <img src="<?php echo $foto ?>" alt="<?php echo $modelo ?>" class="flotaimg">

                        </div>
                        <div class="tarjeta__descripcion">
                            <h2><?php echo $modelo ?></h2>
                            <p><b>Marca:</b> <?php echo $marca ?></p>
                            <p><b>Capacidad maxima:</b> <?php echo $capacidad; ?></p>
                            <p><b>precio*dia:</b> <?php echo $precio ?></p>
                            <p><b>Modo:</b> <?php echo $modo?></p>
                            <div class="boton">
                            <button class="cotizarbtn"><a href="../pages/reserva.php">Reservar</a></button>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </section>
    </div>
    <!--FOOTER-->
    <footer>
        <div class="footer-container">
            <div class="columna-izquierda">
                <img src="../images/logo-empresa.png" alt="Viaje ya!" class="logo">
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <p class="rights-text">© 2020 Empresa de Transporter Viaje ya!</p>
            </div>

            <div class="columna-derecha">
                <h1>Enterate de lo nuevo</h1>
                <div class="borde"></div>
                <p>Ingresa tu correo electronico para enterarte de promociones y novedades.</p>
                <form action="" class="formulario-noticias">
                    <input type="text" class="correo" placeholder="ingresa tu correo">
                    <input type="submit" class="footerBtn" value="Enviar">
                </form>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="./../js/inventarioCliente.js"></script>
</body>

</html>