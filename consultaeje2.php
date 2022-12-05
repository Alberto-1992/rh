<?php

$id = $_POST['id'];
$linea3 = $_POST['linea3'];
require 'conexion.php';

$sql_l = $conexion2->query("SELECT * from descripcioneeje where id_descripcion = $linea3");
$rw = mysqli_fetch_assoc($sql_l);
$nombreeje = $rw['descripcion'];
$sql = $conexion2->query("UPDATE personaloperativo2022 set lineaestrategica22022 = '$nombreeje' where id_empleado = $id");
?>