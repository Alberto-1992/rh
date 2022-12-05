<?php
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
error_reporting(0);

require 'conexion.php';

$sql = $conexion2->query("SELECT correo from personaloperativo where vistobuenoResultado2021 = 4 and vistobueno2021 = 1 and eliminado = 0");

//$correojefe = 'infobeto91@gmail.com';
//$correojefe = base64_decode($_GET['mailJefe']);
//$id = base64_decode($_GET['id']);
$var = $_POST['notificar'];
//$usuario = $nombre.$appaterno;
$from = "capacitacion.hraei@outlook.com";
while($row= $sql->fetch_assoc())
        {
$to = $row['correo'];
$subject = utf8_decode("CAPACITACIÓN");
$message = $var;

$headers = "From:" .$from;
mail($to,$subject,$message,$headers);

if(mail != false){
    echo "<script>alert('Correo enviado exitosamente');</script>";
    $sql_s = $conexion2->query("UPDATE personaloperativo SET notificarCorreo = 1 where vistobuenoResultado2021 = 4 and  vistobueno2021 = 1 and eliminado = 0");
}else{
  
    }
}
?>