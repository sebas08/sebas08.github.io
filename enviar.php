<?php
// Mensaje que se enviara a tu correo
$mensaje="";
$mensaje.="Formulario de Contacto:". "\n\n";
$mensaje.="Nombre: ".$_POST['nombre']."\n";
$mensaje.="Apellido: ".$_POST['apellido']."\n";
$mensaje.="Email: ".$_POST['email']."\n";
$mensaje.="Teléfono: ".$_POST['telefono']."\n";
$mensaje.="Asunto: ".$_POST['asunto']."\n";
$mensaje.=": ".$_POST['mensaje']."\n";
// Aqui pon el correo donde llegaran los mensajes
$tucorreo="sebasmar_08@hotmail.com";
$sujeto=['email'];
// Vamos a verificar si funciono el envio
if (@mail($tucorreo,$sujeto,$mensaje,"Desde: Contacto<".$_POST['femail'].">")) {
    echo '<p align="center"><strong>Su mensaje a sido enviado, Gracias por comunicarse.</strong></p>';
} else {
    echo '<p align="center"><strong>Su mensaje no se pudo enviar, verifica si llenaste todos los campos</strong> '.@$_POST['fname'].'</p>';
}
?>
