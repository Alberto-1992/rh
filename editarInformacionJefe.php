<?php

$rfc = $_POST['rfc'];
$correojefe = $_POST['correojefe'];
$puestojefe = $_POST['puestojefe'];
$nombre = $_POST['nombrejefe'];

require 'conexion.php';

$sql = $conexion2->query("UPDATE jefes2022 set correo = '$correojefe', puesto = '$puestojefe', nombre = '$nombre' where rfc = '$rfc'");

if($sql != false){
    echo "<script>swal({
  title: 'Good job!',
  text: 'Los datos han sido actualizados exitosamente!',
  icon: 'success',
});</script>";
}else{
   echo "<script>swal({
  title: 'Good job!',
  text: 'Error al actualizar, intente nuevamente!',
  icon: 'error',
});</script>"; 
}


?>