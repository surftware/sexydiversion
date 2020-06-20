<?php
$destinatario = 'ventas@sexydiversion.com.mx'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta desde Página Web'; // acá se puede modificar el asunto del mail
$acceso = "";   
$mensaje ="";
$tipoAlerta="";
if (!empty($_POST)) {
    if (!empty($_POST["g-recaptcha-response"])) {
        //echo "Se acepta recatcha";
        if ($_POST["nombre"] == "" && $_POST["telefono"]== "" && $_POST["correo"] == "" && $_POST["direccion"] == "") {
            //echo "datos no llenados";
            $acceso= "Error!";
            $mensaje = "datos no llenados";
            $tipoAlerta="question";
        }
        else{
            //3 
            $acceso= "Exito!";
            $mensaje = "Su mensaje ha sido enviado!";
            $tipoAlerta="success";
            $cuerpo =  "Nombre: " . $_POST["nombre"] . "\r\n"; 
            $cuerpo .= "Teléfono: " . $_POST["telefono"] . "\r\n";
            $cuerpo .= "Email: " . $_POST["correo"] . "\r\n";
            $cuerpo .= "direccion: " . $_POST["direccion"] . "\r\n";
            //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
            // Si se agrega un campo al formulario, hay que agregarlo acá.
            $headers  = "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/plain; charset=utf-8\n";
            $headers .= "X-Priority: 3\n";
            $headers .= "X-MSMail-Priority: Normal\n";
            $headers .= "X-Mailer: php\n";
            $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";
            //echo $ok;
            mail($destinatario, $asunto, $cuerpo, $headers);
        }      
    }
    else
    {
        //2
        $acceso= "Error!";
        $mensaje = "llene el recatcha";
        $tipoAlerta="warning";
        //echo "No acepta recatcha";
    }
}
else
{
    //1
    $acceso= "Error!";
    $mensaje = "llene los datos";
    $tipoAlerta="question";
    //echo 'estoy vacio';
}
$return_arr = array("acceso" => $acceso,
                    "mensaje" => $mensaje,
                    "tipoAlerta" => $tipoAlerta);
echo json_encode($return_arr);
?>