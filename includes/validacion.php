<?php
// creador Moreno Tolentino Jose Armando 
$destinatario = 'ventas@sexydiversion.com.mx'; // en esta línea va el mail del destinatario.
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
    $recaptchaPrueba    = '22222222';
        if (!empty($_POST['captcha'])) {
        //if (!empty($recaptchaPrueba)) {
        //echo "Se acepta recatcha";
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
                }
                $tipoAlerta="warning";            
            }
            else
            {
                //3 
                $acceso= "Exito!";
                $mensaje = "Su mensaje ha sido enviado!";
                $tipoAlerta="success";

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
                //echo $ok;
                mail($destinatario, $asunto, $cuerpo, $headers);
                // mensaje mandado exitosamente
            }      
        }
        else
        {
            //2
            $acceso= "Error!";
            $mensaje = "Llene el recaptcha";
            $tipoAlerta="warning";
            //echo "No acepta recatcha";
        }
}
else
{
    //1
    $acceso= "Error!";
    $mensaje = "Llene los datos";
    $tipoAlerta="warning";
    //echo 'estoy vacio';
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