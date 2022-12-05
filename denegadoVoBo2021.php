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
$message = "Te informamos que tus Metas fueron Rechazados por tu Jefe Inmediato, te pedimos que te pongas en contacto con él lo más pronto posible, para hacer los ajustes correspondientes dentro del sistema.

Recuerda que también puedes consultar el estatus en la página de inicio del sistema, por lo que te solicitamos revisarlas lo antes posible.

Si tienes problemas con tu acceso comunícate con la Lic. Ma. Isabel Sandoval Espinosa (Ext. 1085)

Agradecemos tu participación.

Atentamente:
Dirección de Administración y Finanzas. ";
$headers = "From:" .$from;
$sql = $conexion2->query("UPDATE personaloperativo2022 set vistobueno = 3 where id_empleado = $empleado");
$sql_l = $conexion2->query("UPDATE personaloperativo2022 set actualiza = 1 where id_empleado = $empleado");
mail($to,$subject,$message,$headers);

if(mail != false){
echo "<script>alert('El correo de rechazo de autorizacion de metas ha sido enviado exitosamente');
location.href='competenciasJefe';</script>";
}else{
 echo "<script>alert('Error al enviar el correo de recghazo de autorizacion de metas, trate nuevamente si el error persiste comuniquese al area de recursos humanos con la licenciada isabel, GRACIAS.');
location.href='competenciasJefe';</script>";  
}
?>