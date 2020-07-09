<?php
//  Surftware (colaboradores): 

//  -José Armando Moreno Tolentino.
//  -Juan Miguel Días Teran.

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
    
    $recaptchaPrueba    = '22222222';// se comenta solo en caso de pruebas
        if (!empty($_POST['captcha'])) {
        //if (!empty($recaptchaPrueba)) { // se comenta solo en caso de pruebas
        // importan aqui se hacen pruebas "no se quitara" 
            if ($nombre == "" || $telefono== "" || $correo == "" || $texto == "" || strlen($telefono) != 10 || is_valid_email($correo) != true ) 
            {
                $acceso= "Error!";
                $mensaje = "<b>Faltan o llene correctamente los datos indicados</b></br>";
                $mensaje .= "<b>Estas son las causas que impiden el correcto llenado del formulario:</b></br>";
                if ($nombre == "") 
                {
                    $mensaje .="-Falta llenar <b>Nombre</b>.</br>";
                }
                if ($telefono == "" || strlen($telefono) != 10) 
                {
                    if ($telefono == "") 
                    {
                        $mensaje .="-Falta llenar <b>Teléfono</b>.</br>";
                    }
                    if (strlen($telefono) != 10) 
                    {
                        $mensaje .="-Ponga 10 dígitos como mínimo en <b>Teléfono</b>.</br>";
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
                        $mensaje .="-Ingreso un <b>Correo</b> valido!.</br>";
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
                $acceso= "Exito!";
                $mensaje = "Mensaje enviado exitosamente";
                $tipoAlerta="success";
            
            }      
        }
        else
        {
            $acceso= "Error!";
            $mensaje = "Llene el recaptcha";
            $tipoAlerta="warning";
        }
}
else
{
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
    $mail->Subject  =  "sexydiversion contacto";
    $mail->Body     =  
        "Nombre: $nombre \n<br />".   
        "Email: $correo \n<br />".  
        "Telefono: $telefono \n<br />".   
        "Direccion: $direccion \n<br />". 
        "Mensaje: $texto";
    if ($archivo['name'] == null || $archivo['name'] == "") {
        // pasa sin archivo
    }else{
        $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    }
    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "armando.moreno.tolentino@gmail.com";  // Correo Electrónico
    $mail->Password = "capcom12"; // Contraseña

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