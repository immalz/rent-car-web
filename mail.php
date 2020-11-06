<?php

    if(isset($_POST['enviar'])) {
        if(!empty($_POST['correo'])) {
            $email = $_POST['correo'];

            $destinatario = $email;

            
            $header = "Mime-Version: 1.0 \r\n";
            $header = "Content-Type: text/plain" . "\r\n";
            $header = "X-Mailer: PHP/" . phpversion() . "\r\n";
            
            $header = 'From: Viaje ya!' . "\r\n";
        
            $subject = "Gracias por sucribirte a nuestro boletin mensual";

            $message .= "<img src='https://alquilerautostalara.com/wp-content/uploads/2019/11/alquiler-de-autos-piura-talara-peru-6.jpg'>"  . "\r\n";
            $message .= "Muy pronto recibiras nuestras ofertas exclusivas solo para usuarios suscritos" . "\r\n";
            $message .= "visitanos en www.viajeYa.com" . "\r\n";
            

            mail($destinatario, $subject, $message, $header);

            echo "<script>alert('correo enviado exitosamente')</script>";
            echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";   
    }
}
?>