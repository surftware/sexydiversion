<?php
require("archivosformulario/class.phpmailer.php");
function mandarEmail($Destinatario,$Nombre,$Email,$Telefono,$Direccion,$Mensaje,$archivo){
    $mail = new PHPMailer();
    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->AddAddress($Destinatario); // Dirección a la que llegaran los mensajes.

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Consulta desde Página Web";
    
    $mail->Body     =  
    "Nombre: $Nombre \n<br />".    
    "Email: $Email \n<br />".  
    "Telefono: $Telefono \n<br />".      
    "Direccion: $Direccion \n<br />".   
    "Mensaje: $Mensaje \n<br />";
    
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);

    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "armando.moreno.tolentino@gmail.com";  // Correo Electrónico
    $mail->Password = "capcom12"; // Contraseña

    if ($mail->Send()){
        return true;
    }
    else{
        return false;
    }
}
?>