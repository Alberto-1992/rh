<?php
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require'conexion.php';

$sql = "SELECT COUNT(*) total, correo FROM personaloperativo where vistobueno2021 = 5 and eliminado = 0";
    $result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);

$a = $fila['total'];
$from = "capacitacion.hraei@outlook.com";
for($i = 1; $i <= $a; $i++) {
  $destinatario = $fila['correo'];
  $asunto = utf8_decode("NOTIFICACIÓN CAPTURA DE METAS 2021");
  $cuerpo = "Como estas?";
  $headers = "From:" .$from;
  mail($destinatario,$asunto,$cuerpo,$headers);
  echo "<h1>Correos enviados</h1>";
  // Duerme el programa 5 segundos, luego continúa
  //sleep(10);
}
$conexion2->close();
?>