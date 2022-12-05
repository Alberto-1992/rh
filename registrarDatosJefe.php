<?php

if(isset($_POST['guardarJefes'])){
$idJefe = $_POST['idJefe'];
$nombre = $_POST['nombreJefe'];
$puesto = $_POST['puestoJefe'];
}
require 'conexion.php';

$sql = $conexion2->query("INSERT INTO cargoJefe(id_cargo, cargo, nombreCompleto, id_empleado) values(null, '$puesto', '$nombre', '$idJefe')");
if($sql == true){
    echo "<script>alert('registro exitoso');
    window.history.back();</script>";

}else{
    echo "<script>alert('Error');
    window.history.back();</script>";
}

?>