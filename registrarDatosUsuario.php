<?php

if(isset($_POST['almacenar'])){
    error_reporting(0);
    $idEmpleado = $_POST['idEmpleado'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $nombre = $_POST['nombre'];
    $claveArea = $_POST['claveArea'];
    $clavePuestoUsuario = $_POST['clavePuestoUsuario'];
    $nivelGerarquico = $_POST['nivelGerarquico'];
    $empresa = $_POST['empresa'];
    $rfc = $_POST['rfc'];
    $curp = $_POST['curp'];
    $correoElectronico = $_POST['correoElectronico'];
    $clave1 = $_POST['clave1'];
    $descripcion1 = $_POST['descripcion1'];
    $clave2 = $_POST['clave2'];
    $descripcion2 = $_POST['descripcion2'];
    $clave3 = $_POST['clave3'];
    $descripcion3 = $_POST['descripcion3'];
    $clave4 = $_POST['clave4'];
    $descripcion4 = $_POST['descripcion4'];
    $clave5 = $_POST['clave5'];
    $descripcion5 = $_POST['descripcion5'];
    $clave6 = $_POST['clave6'];
    $descripcion6 = $_POST['descripcion6'];
    $clave7 = $_POST['clave7'];
    $descripcion7 = $_POST['descripcion7'];
    $clave8 = $_POST['clave8'];
    $descripcion8 = $_POST['descripcion8'];
    $clave9 = $_POST['clave9'];
    $descripcion9 = $_POST['descripcion9'];
    $clave10 = $_POST['clave10'];
    $descripcion10 = $_POST['descripcion10'];
    $clavePuesto = $_POST['clavePuesto'];
    $idEmpleadoJefe = $_POST['idEmpleadoJefe'];
    $nombreJefe = $_POST['nombreJefe'];

}

require 'conexion.php';

$sql = $conexion2->query("INSERT INTO usuarios(id_usuario, id_unico, apellidoPaterno, apellidoMaterno, nombre, puesto, nivelGerarquico, empresa, rfc, curp, correo, claveEstructura1, descripcionEstructura1, claveEstructura2, descripcionEstructura2, claveEstructura3, descripcionEstructura3, claveEstructura4, descripcionEstructura4, claveEstructura5, descripcionEstructura5, claveEstructura6, descripcionEstructura6, claveEstructura7, descripcionEstructura7, claveEstructura8, descripcionEstructura8, claveEstructura9, descripcionEstructura9, claveEstructura10, descripcionEstructura10, puestoJefe, id_jefe, nombreJefe)
values(null, '$idEmpleado', '$apellidoPaterno', '$apellidoMaterno', '$nombre', '$clavePuestoUsuario', '$nivelGerarquico', '$empresa', '$rfc', '$curp', '$correoElectronico', '$clave1', '$descripcion1', '$clave2', '$descripcion2', '$clave3', '$descripcion3', '$clave4', '$descripcion4', '$clave5', '$descripcion5', '$clave6', '$descripcion6', '$clave7', '$descripcion7', '$clave8', '$descripcion8', '$clave9', '$descripcion9', '$clave10', '$descripcion10', '$clavePuesto', '$idEmpleadoJefe', '$nombreJefe')");

if($sql != false){
   echo "<script>alert('Registro exitoso');
    window.history.back();</script>";
}else{
    echo "<script>alert('Error en el registro');
    window.history.back();</script>";

}

?>