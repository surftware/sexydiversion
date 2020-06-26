<?php

// creador Moreno Tolentino Jose Armando 
require("mail.php");
$destinatario = 'ventas@sexydiversion.com.mx'; // en esta línea va el mail del destinatario.
//$destinatario = 'armando.moreno.tolentino@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta desde Página Web'; // acá se puede modificar el asunto del mail
$acceso = "";   
$mensaje ="";
$tipoAlerta="";
if (!empty($_POST)) {
    $nombre             = $_POST["nombre"];
    $telefono           = $_POST["telefono"];
    $direccion          = $_POST["direccion"];
    $texto              = $_POST["mensaje"];
    $correo             = $_POST["correo"];
    $archivo            = $_FILES['adjunto'];
    $recaptchaPrueba    = '22222222';
        //if (!empty($_POST['captcha'])) {
        if (!empty($recaptchaPrueba)) {
            if ($nombre == "" || $telefono== "" || $correo == "" || $direccion == "" || $texto == "" || strlen($telefono) != 10 || is_valid_email($correo) != true ) 
            {
                
                //echo "datos no llenados";
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
                if ($direccion == "") 
                {
                    $mensaje .="-Falta llenar <b>Dirección</b>.</br>";
                }
                if ($texto == "") 
                {
                    $mensaje .="-Falta llenar <b>Mensaje</b>.</br>";
                    $tipoAlerta="warning";            
                }
            }
            else
            {
                //3 
                if (
                    $_FILES['adjunto']['name'] != "" && $_FILES['adjunto']['name']!= null
                    
                    ) {
                    $nombre_dir=rand(1, 1000000);
                    $nombre_dir="temporal/mail/$nombre_dir";
            
                    mkdir($nombre_dir);
            
                    $directorio = $nombre_dir."/";
                    $subir_archivo = $directorio.basename($_FILES['adjunto']['name']);

                    if (move_uploaded_file($_FILES['adjunto']['tmp_name'], $subir_archivo)) 
                    {
                        //echo "El archivo es válido y se cargó correctamente.<br><br>";
                        $mailClase=mandarEmailFile($destinatario,$nombre,$correo,$telefono,$direccion,$texto,$nombre_dir.$_FILES['adjunto']['name']);
                        unlink($directorio.$_FILES['adjunto']['name']);    
                        rmdir($nombre_dir);  
                    } 
                    else 
                    {
                        //echo "La subida ha fallado";
                        rmdir($nombre_dir);
                        mandarEmail($destinatario,$nombre,$correo,$telefono,$direccion,$texto);
                    }
                }
                else
                {
                    mandarEmail($destinatario,$nombre,$correo,$telefono,$direccion,$texto);
                    //echo "no selecciono ningun archivo";
                }
                /*
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
                $acceso= "Exito!";
                $mensaje = "Su mensaje ha sido enviado!";
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
function is_valid_email($str)
{
  return (false !== strpos($str, "@") && false !== strpos($str, "."));
}
$return_arr = array("acceso" => $acceso,
                    "mensaje" => $mensaje,
                    "tipoAlerta" => $tipoAlerta);
echo json_encode($return_arr);
?>