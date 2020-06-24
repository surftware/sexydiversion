Formulario.php:

<form name='formulario' id='formulario' method='post' action='index2.php' target='_self' enctype="multipart/form-data">
<p>Nombre <input type='text' name='Nombre' id='Nombre'></p>
<p>E-mail
<input type='text' name='email' id='email' value="mtjamx95@gmail.com">
</p>
<p>Asunto
<input type='text' name='asunto' id='asunto' />
</p>
<p>Mensaje
<textarea name="mensaje" cols="50" rows="10" id="mensaje"></textarea>
</p>
<p>Adjuntar archivo: <input type='file' name='archivo1' id='archivo1'></p>
<p>
<input type='submit' value='Enviar'>
</p>
</form>

 Como podéis ver, en el form del código anterior, se manda a enviar.php, ese archivo es el que va a mandar el email con el archivo adjunto. Aquí os dejo el codigo
enviar.php:

<?php
function form_mail($sPara, $sAsunto, $sTexto, $sDe)
{
$bHayFicheros = 0;
$sCabeceraTexto = "";
$sAdjuntos = "";

if ($sDe)$sCabeceras = "From:".$sDe."\n";
else $sCabeceras = "";
$sCabeceras .= "MIME-version: 1.0\n";
foreach ($_POST as $sNombre => $sValor)
$sTexto = $sTexto."\n".$sNombre." = ".$sValor;

foreach ($_FILES as $vAdjunto)
{
if ($bHayFicheros == 0)
{
$bHayFicheros = 1;
$sCabeceras .= "Content-type: multipart/mixed;";
$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
$sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

$sTexto = $sCabeceraTexto.$sTexto;
}
if ($vAdjunto["size"] > 0)
{
$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
$sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
$sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

$oFichero = fopen($vAdjunto["tmp_name"], 'r');
$sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
$sAdjuntos .= chunk_split(base64_encode($sContenido));
fclose($oFichero);
}
}

if ($bHayFicheros)
$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
}

//cambiar aqui el email
if (form_mail("mtjamx95@gmail.com", $_POST[asunto],
"Los datos introducidos en el formulario son:\n\n", $_POST[email]))
echo "Su formulario ha sido enviado con exito";
?>