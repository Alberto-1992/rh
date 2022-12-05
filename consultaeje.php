<?php

$id = $_POST['id'];
$linea1 = $_POST['linea1'];
require 'conexion.php';

$sql_l = $conexion2->query("SELECT * from descripcioneeje where id_descripcion = $linea1");
$rw = mysqli_fetch_assoc($sql_l);
$nombreeje = $rw['descripcion'];
$sql = $conexion2->query("UPDATE personaloperativo2022 set lineaestrategica12022 = '$nombreeje' where id_empleado = $id");
?>