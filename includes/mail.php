<?php
//require("archivosformulario/class.phpmailer.php");
function mandarEmailFile($Destinatario,$Nombre,$Email,$Telefono,$Direccion,$Mensaje,$archivo){
    $asunto = 'Consulta desde Página Web'; // acá se puede modificar el asunto del mail

    $cuerpo =  "Nombre: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Teléfono: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["correo"] . "\r\n";
    $cuerpo .= "direccion: " . $_POST["direccion"] . "\r\n";
    $cuerpo .= "mensaje: " . $_POST["mensaje"] . "\r\n";
     
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']."\" <".$_POST["correo"].">\n";

    // archivo
    if(!empty($file) > 0){ 
        if(is_file($file)){ 
            $message .= "--{$mime_boundary}\n"; 
            $fp =    @fopen($file,"rb"); 
            $data =  @fread($fp,filesize($file)); 
     
            @fclose($fp); 
            $data = chunk_split(base64_encode($data)); 
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
            "Content-Description: ".basename($file)."\n" . 
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
        } 
    } 
    $message .= "--{$mime_boundary}--"; 
    $returnpath = "-f" . $from; 
    mail($destinatario, $asunto, $cuerpo, $headers,$returnpath);
    
}

function mandarEmail($Destinatario,$Nombre,$Email,$Telefono,$Direccion,$Mensaje){
    $asunto = 'Consulta desde Página Web'; // acá se puede modificar el asunto del mail

    $cuerpo =  "Nombre: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Teléfono: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["correo"] . "\r\n";
    $cuerpo .= "direccion: " . $_POST["direccion"] . "\r\n";
    $cuerpo .= "mensaje: " . $_POST["mensaje"] . "\r\n";
     
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']."\" <".$_POST["correo"].">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
}
?>