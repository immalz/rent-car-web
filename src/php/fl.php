

<?php

//primer auto
error_reporting(0);
if (isset($_POST['submit'])) {
    $marca=$_POST['marca-vehiculo1'];
    $numdias=$_POST['dias'];
    switch ($marca) {
        case 'Toyota': $costo=150; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo;
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Chevrolet': $costo=200; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Audi': $costo=300; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Mitsubishi': $costo=350; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;    
    }
}

//segundo

error_reporting(0);
if (isset($_POST['submit'])) {
    $marca=$_POST['marca-vehiculo2'];
    $numdias=$_POST['dias'];
    switch ($marca) {
        case 'Toyota': $costo=450; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo;
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Chevrolet': $costo=500; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Audi': $costo=510; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Mitsubishi': $costo=350; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;    
    }
}

//tercero

error_reporting(0);
if (isset($_POST['submit'])) {
    $marca=$_POST['marca-vehiculo3'];
    $numdias=$_POST['dias'];
    switch ($marca) {
        case 'Toyota': $costo=250; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo;
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Chevrolet': $costo=300; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Audi': $costo=320; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Mitsubishi': $costo=350; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;     
    }
}


//cuarto

error_reporting(0);
if (isset($_POST['submit'])) {
    $marca=$_POST['marca-vehiculo4'];
    $numdias=$_POST['dias'];
    switch ($marca) {
        case 'Toyota': $costo=300; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo;
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Chevrolet': $costo=350; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Audi': $costo=400; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Mitsubishi': $costo=450; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;    
    }
}



//quinto

error_reporting(0);
if (isset($_POST['submit'])) {
    $marca=$_POST['marca-vehiculo5'];
    $numdias=$_POST['dias'];
    switch ($marca) {
        case 'Toyota': $costo=300; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo;
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Chevrolet': $costo=350; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Audi': $costo=380; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Mitsubishi': $costo=400; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;    
    }
}

//sexto

error_reporting(0);
if (isset($_POST['submit'])) {
    $marca=$_POST['marca-vehiculo6'];
    $numdias=$_POST['dias'];
    switch ($marca) {
        case 'Toyota': $costo=600; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo;
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Chevrolet': $costo=620; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Audi': $costo=640; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;
        case 'Mitsubishi': $costo=660; $costototal=$costo*$numdias; $carga=$costo+0.1*$costo; 
        echo "el costo del vehiculo elegido por dia".$costo;
        echo "<br>";
        echo "Uso por solo carga".$carga;
        echo "el monto total a pagar por ".$numdias."dias es de".$costototal; break;    
    }
}