<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
ini_set('display_errors', 1);
error_reporting(0);
require 'conexion.php';
date_default_timezone_set('America/Mexico_City');    
$DateAndTime = date('Y-m-d', time());
$correojefe = "beto_1866@outlook.com";
//$correojefe = base64_decode($_GET['mail']);
$comoper = $_GET['comoper'];
$ident = base64_decode($_GET['ident']);
$nombre = base64_decode($_GET['nombre']);
$appaterno = base64_decode($_GET['appaterno']);
$apmaterno = base64_decode($_GET['apmaterno']);
$cumplidas = $_GET['cumplidas2'];
$usuario = $nombre.$appaterno;
$from = "capacitacion@hraei.gob.mx";
$to = $correojefe;
$subject = "SOLICITUD DE VISTO BUENO";
$message = "Te informamos que se ha capturado el resultado obtenido de las metas que comprendierón la consecución de resultados del periodo 1 de enero al 31 de diciembre de 2021 y quedan en espera de su Visto Bueno.

Recuerda que si no autorizas el resultado capturado por tu personal operativo no será posible la conclusión de la Evaluación de Desempeño.

Si los resultados de las metas que tu colaborador dio de alta no concuerdan con las metas desarrolladas en tu área, podrás rechazarlos y se deberán redactar nuevamente.

La fecha límite para concluir con todo el proceso de Evaluación de Desempeño del personal operativo es el 30 de abril de 2021, por lo que te solicitamos revisarlos lo antes posible.

Si tienes problemas con tu acceso comunícate con la Lic. Ma. Isabel Sandoval Espinosa (Ext. 1085)

Agradecemos tu participación.

Atentamente:
Dirección de Administración y Finanzas.
Usuario que solicita VoBo: ".$usuario;
$headers = "From:" .$from;
mail($to,$subject,$message,$headers);
$sql = $conexion2->query("UPDATE descripcionesmetas2022 set comentarioResultado2022 = '$comoper', cumplio = '$cumplidas' where id_empleado = $ident");
$sql = $conexion2->query("UPDATE personaloperativo2022 set vistobuenoResultado2022 = 2 where id_empleado = $ident");
$sql = $conexion2->query("UPDATE personaloperativo2022 set fechaFinalizoResultado2022 = '$DateAndTime' where id_empleado = $ident");
if(mail != false){
echo "<script>alert('El correo de solicitud de visto bueno ha sido enviado exitosamente, si viste este mensaje no hay necesidad de volver a solicitar visto bueno, el correo ya ha sido enviado satisfactoriamente');
location.href='principal';</script>";
}else{
 echo "<script>alert('Error al enviar el correo de solicitud de visto bueno, trate nuevamente, si el error persiste comuniquese al area de recursos humanos con la licenciada isabel, GRACIAS.');
window.history.back();</script>";  
}
?>