<?php
ini_set('display_errors', 1);
error_reporting(0);
require 'conexion.php';
$correo = 'infobeto91@gmail.com';
//$correo = base64_decode($_GET['mail']);
$empleado = base64_decode($_GET['empleado']);

$from = "capacitacion@hraei.gob.mx";
$to = $correo;
$subject = "SOLICITUD DE VISTO BUENO";
$message = "Te informamos que tus Metas han sido autorizadas por tu Jefe Inmediato.


Agradecemos tu participación.

Atentamente:
Dirección de Administración y Finanzas.";
$headers = "From:" .$from;
mail($to,$subject,$message,$headers);

$sql = $conexion2->query("UPDATE personaloperativo2022 set vistobueno = 1 where id_empleado = $empleado");
$sql_l = $conexion2->query("UPDATE personaloperativo2022 set actualiza = 2 where id_empleado = $empleado");

if(mail != false){
echo "<script>alert('El correo de autorizacion de metas ha sido enviado exitosamente');
location.href='competenciasJefe';</script>";
}else{
 echo "<script>alert('Error al enviar el correo de autorizacion de metas, intente nuevamente si el error persiste comuniquese al area de recursos humanos con la licenciada isabel, GRACIAS.');
location.href='competenciasJefe';</script>";  
}
?>