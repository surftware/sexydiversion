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

function mandarEmail($Destinatario,$Nombre,$Email,$Mensaje,$Telefono,$Direccion,$archivo){

    require("class.phpmailer.php");
    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Mensaje = $_POST['Mensaje'];
    $archivo = $_FILES['adjunto'];


    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->AddAddress("ventas@sexydiversion.com.mx"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "sexydiversion contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br />".   
    "Email: $Email \n<br />".  
    "Telefono: $Telefono \n<br />".   
    "Direccion: $Direccion \n<br />". 
    "Mensaje: $Mensaje \n<br />";
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    
// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "ventassexydiversion@gmail.com";  // Correo Electrónico
    $mail->Password = "admin2020"; // Contraseña
    
    if ($mail->Send())
    return 1;//exito
    else
    return 0;//fallo
}
    /*
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
    */
?>