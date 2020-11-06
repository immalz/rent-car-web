<?php 

    //conexion con el servidor
    $link = mysqli_connect("localhost","root","","lbd") or die("No hubo conexion");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva | Viaje ya!</title>
    <link rel="icon" type="image/png" href="../images/logo-empresa.png" />
    <link rel="stylesheet" href="../styles/reserva.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../styles/reutilizables/estilos-basicos.css">
    <link rel="stylesheet" href="../styles/reutilizables/footer.css">
</head>

<body>
    <section class="centro">
        <div class="formulario">
            <form id="enviar" action="../php/reserva.php" method="POST">
                <div class="formulario__derecho">
                    <p>Nombre y Apellido:</p>
                    <input type="text" name="txtnom" required>
                    <p>Correo electronico:</p>
                    <input type="email" name="txtcor" required>
                    <p>Numero de contacto:</p>
                    <input type="number" name="texnum" required>
                </div>
                <div class="formulario__izquierdo">
                    <p>Fecha Recojo:</p>
                    <input type="date" name="txtfecha" required>
                    <p>Fecha Entrega:</p>
                    <input type="date" name="txtfecha2" required>
                    <p>Tipo de vehiculo:</p>
                    <select name="cbvehiculo" required>
                        <option value="">...</option>
                        <?php

                                $vehiculo1 = "SELECT * FROM vehiculo";
                                $vehiculo2 = mysqli_query($link,$vehiculo1);

                                while ($row = mysqli_fetch_array($vehiculo2))
                                {
                                    $cod_v = $row['cod_v'];
                                    $cod_tipov = $row['cod_tipov'];
                                    $precio = $row['precio'];
                                    $modelo = $row['modelo'];
                                    $capacidad = $row['capacidad'];
                                    $marca = $row['marca'];
                                    $foto = $row['foto'];
                        ?>

                        <option value="<?php echo $cod_v ?>"><?php echo $modelo." ".$marca ?></option>

                        <?php 
                                    } 
                        ?>

                    </select>
                    <p><input type="checkbox" name="chdatos" value="Acepto" required> <a id="terminos" href="terminos.html">Acepto Términos y condiciones</a></p>
                    <input type="submit" value="RESERVAR">
                </div>
            </form>
        </div>
    </section>
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
    <script src="../js/reserva.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>