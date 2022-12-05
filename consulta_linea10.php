<?php

$linea = $_POST['linea'];
$id_jefe = $_POST['id_jefe'];
require 'conexion.php';
$sql_l = $conexion2->query("SELECT * from descripcioneeje where id_descripcion = $linea");
$rw = mysqli_fetch_assoc($sql_l);
$nombreeje = $rw['descripcion'];
$sql = $conexion2->query("UPDATE jefes set lineaestrategica5 = '$nombreeje' where id_jefe = $id_jefe");
?>