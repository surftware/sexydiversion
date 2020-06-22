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
        if (!empty($_POST["g-recaptcha-response"])) {
        //if (!empty($recaptchaPrueba)) {
        //echo "Se acepta recatcha";
            if ($nombre == "" || $telefono== "" || $correo == "" || $direccion == "" || $texto == "" || strlen($telefono) != 10 || is_valid_email($correo) != true ) 
            {
                //echo "datos no llenados";
                $acceso= "Error!";
                $mensaje = "<b>Faltan o llene correctamente los datos indicados:</b></br>";
                if ($nombre == "") {
                    $mensaje .="Falta <b>nombre</b></br>";
                }
                if ($telefono == "" || strlen($telefono) != 10) {
                    $mensaje .="Falta <b>telefono</b></br>";
                }
                if ($correo == "" || is_valid_email($correo) != true) {
                    $mensaje .="Falta <b>correo</b></br>";
                }
                if ($direccion == "") {
                    $mensaje .="Falta <b>direccion</b></br>";
                }
                if ($texto == "") {
                    $mensaje .="Falta <b>mensaje</b></br>";
                }
                $tipoAlerta="question";
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

                $headers  = "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/plain; charset=utf-8\n";
                $headers .= "X-Priority: 3\n";
                $headers .= "X-MSMail-Priority: Normal\n";
                $headers .= "X-Mailer: php\n";
                $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";
                //echo $ok;
                mail($destinatario, $asunto, $cuerpo, $headers);
                // mensaje mandado exitosamente
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
function is_valid_email($str)
{
  return (false !== strpos($str, "@") && false !== strpos($str, "."));
}
$return_arr = array("acceso" => $acceso,
                    "mensaje" => $mensaje,
                    "tipoAlerta" => $tipoAlerta);
echo json_encode($return_arr);
?>