<?php 

    //conexion con el servidor
    $link = mysqli_connect("localhost","root","","lbd") or die("No hubo conexion");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaje ya! | Inventario</title>
    <link rel="stylesheet" href="../styles/inventario.css">
    <link rel="stylesheet" href="../styles/reutilizables/general.css">
    <link rel="stylesheet" href="../styles/reutilizables/header.css">
    <link rel="stylesheet" href="../styles/reutilizables/footer.css">
</head>

<body>
    <h1>CONTROL DE FLOTA</h1>
    <div class="container">
        <!--SECCION PRINCIPAL-->
        <section class="guardar-vehiculo">
            <h2>Añadir un vehiculo</h2>
            <form action="../../php/guardar-vehiculo.php"  method="POST" id="formulario">
                <img src="../images/logo-empresa.png" alt="viaje ya!">
                <input name="cod_v" type="text" placeholder="codigo vehiculo" required>
                <p>Tipo de Vehiculo</p>
                <select name="cbtipo" required>
                    <option value="">...</option>
                    <?php

                            $tipo1 = "SELECT * FROM t_vehiculo";
                            $tipo2 = mysqli_query($link,$tipo1);

                            while ($row = mysqli_fetch_array($tipo2))
                            {
                                $cod_tipov = $row['cod_tipov'];
                                $capacidad = $row['capacidad'];
                                $nombre = $row['nombre'];
                    ?>

                    <option value="<?php echo $cod_tipov ?>"><?php echo $nombre ?></option>

                    <?php 
                            } 
                    ?>
                    

                </select>
                <input name="capacidad" type="number" placeholder="capacidad de pasajeros" required>
                <input name="marca" type="text" placeholder="marca" required>
                <input name="modelo" type="text" placeholder="modelo" required>
                <input name="precio" type="number" placeholder="precio diario" required>
                <input name="imagen" type="text" placeholder="link img" required>
                <input name="guardar-vehiculo" type="submit" value="GUARDAR">
            </form>
        </section>
        <section class="principal">
            <div class="flota" id="flota">


                <?php
                $sql = "SELECT * FROM vehiculo";
                $result = mysqli_query($link,$sql);

                while($row = mysqli_fetch_array($result)){

                    $cod_v = $row['cod_v'];
                    $cod_tipov = $row['cod_tipov'];
                    $precio = $row['precio'];
                    $modelo = $row['modelo'];
                    $capacidad = $row['capacidad'];
                    $marca = $row['marca'];
                    $foto = $row['foto'];
                  ?>

                <!--PRIMER AUTO-->

                <div class="tarjeta">
                    <div class="tarjeta__imagen">
                        <img src="<?php echo $foto ?>" width="40%" alt="toyota" class="flotaimg">
                    </div>
                    <div class="tarjeta__descripcion">
                        <h2><?php echo $modelo." ".$marca ?></h2>
                        <p><b>Codigo:</b> <?php echo $cod_v ?> </p>
                        <p><b>Capacidad maxima:</b> <?php echo $capacidad; ?></p>
                        <p><b>precio*dia:</b> <?php echo $precio ?></p>
                        <button><a class="eliminar"href="../pages/login.html">Remover</a></button>
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
            <img src="../images/logo-empresa.png" alt="Viaje ya!" class="logo">
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="rights-text">© 2020 Empresa de Transporter Viaje ya!</p>
        </div>
    </footer>
    <script src="../../js/inventario.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>