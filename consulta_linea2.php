<?php

$ID_usuario = $_POST['ID_usuario'];
$id = $_POST['id'];
require 'conexion.php';
$sql_l = $conexion2->query("SELECT * from estrategicoeje where id_eje = $ID_usuario");
$rw = mysqli_fetch_assoc($sql_l);
$nombreeje = $rw['nombreEje'];
$sql = $conexion2->query("UPDATE personaloperativo2022 set ejeestrategico22022 = '$nombreeje' where id_empleado = $id");
$sql_s = $conexion2->query ("SELECT id_descripcion, descripcion FROM descripcioneeje where referenciaEje = '$ID_usuario' ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['id_descripcion'];
  $nombre = $row_s['descripcion'];
  ?>
 
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
