<?php
// creador Moreno Tolentino Jose Armando 
require("archivosformulario/class.phpmailer.php");
$acceso = "";   
$mensaje ="";
$tipoAlerta="";
if (!empty($_POST)) {
    $nombre             = $_POST["nombre"];
    $telefono           = $_POST["telefono"];
    $direccion          = $_POST["direccion"];
    $texto              = $_POST["mensaje"];
    $correo             = $_POST["correo"];
    $archivo = $_FILES['adjunto'];
    $recaptchaPrueba    = '22222222';
        if (!empty($_POST['captcha'])) {
        //if (!empty($recaptchaPrueba)) {
            if ($nombre == "" || $telefono== "" || $correo == "" || $texto == "" || strlen($telefono) != 10 || is_valid_email($correo) != true ) 
            {
                //echo "datos no llenados";
                $acceso= "Error!";
                $mensaje = "<b>Llene correctamente los datos indicados</b></br>";
                $mensaje .= "<b>Estas son posibles causas que impiden el env&iacute;o del formulario:</b></br>";
                
                if ($nombre == "") 
                {
                    $mensaje .="-Falta llenar <b>Nombre</b>.</br>";
                }
                if ($telefono == "" || strlen($telefono) != 10) 
                {
                    if ($telefono == "") 
                    {
                        $mensaje .="-Falta llenar <b>Tel&eacute;fono</b>.</br>";
                    }
                    if (strlen($telefono) != 10) 
                    {
                        $mensaje .="-Ponga 10 d&iacute;gitos como m&iacute;nimo en <b>Tel&eacute;fono</b>.</br>";
                    }
                    
                }
                if ($correo == "" || is_valid_email($correo) != true) 
                {
                    if ($correo == "") 
                    {
                        $mensaje .="-Falta llenar <b>Correo</b>.</br>";
                    }
                    if (is_valid_email($correo) != true) 
                    {
                        $mensaje .="-Ingreso un <b>Correo</b> v&aacute;lido!.</br>";
                    }
                }
                if ($texto == "") 
                {
                    $mensaje .="-Falta llenar <b>Mensaje</b>.</br>";
                    $tipoAlerta="warning";            
                }
            }
            else
            {
                enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto);    
                $acceso= "&Eacute;xito!";
                $mensaje = "Mensaje enviado exitosamente";
                $tipoAlerta="success";
            
            }      
        }
        else
        {
            //2 
            $acceso= "Error!";
            $mensaje = "Llene el recaptcha";
            $tipoAlerta="warning";
        }
}
else
{
    //1
    $acceso= "Error!";
    $mensaje = "Llene los datos";
    $tipoAlerta="warning";
}
function enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto){
    $mail = new PHPMailer();

    $mail->From     = $correo;
    $mail->FromName = $nombre; 
    $mail->AddAddress("ventas@sexydiversion.com.mx"); // Dirección a la que llegaran los mensajes.
                        
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "sexydiversi&oacute;n contacto";
    $mail->Body     =  
        "Nombre: $nombre \n<br />".   
        "Email: $correo \n<br />".  
        "Tel&eacute;fono: $telefono \n<br />".   
        "Direcci&oacute;n: $direccion \n<br />". 
        "Mensaje: $texto";
    if ($archivo['name'] == null || $archivo['name'] == "") {
        // pasa sin archivo
    }else{
        $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    }
    $mail->IsSMTP(); 
    $mail->Host = "ssl://mx98.hostgator.mx:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "ventas@sexydiversion.com.mx";  // Correo Electrónico
    $mail->Password = "\$M1r1am\$"; // Contraseña
    $mail->Send();                
}
function is_valid_email($str)
{
  return (false !== strpos($str, "@") && false !== strpos($str, "."));
}
$return_arr = array("acceso" => $acceso,
                    "mensaje" => $mensaje,
                    "tipoAlerta" => $tipoAlerta);
echo json_encode($return_arr);
?>