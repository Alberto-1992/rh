<?php

$ID_usuario = $_GET['ID_usuario'];
$id_jefe = $_GET['id_jefe'];
require 'conexion.php';

$sql= $conexion2->query("update jefes set ejeestrategico = '$ID_usuario' where id_jefe = $id_jefe");

if($sql != false){
    echo "good";
}else{
    echo "error";
    
}
?>