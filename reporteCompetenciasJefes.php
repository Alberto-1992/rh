<?php

	require 'conexion.php';
	
	//Consulta
    $sql = $conexion2->query("SELECT DISTINCT personaloperativo.nombrejefe, personaloperativo.id_empleado, personaloperativo.nombre, personaloperativo.rfc, personaloperativo.correojefe FROM personaloperativo where estadocompetenciasjefe = 0 ");

$salida = "";
$salida .= "<table style='color: black; font-size: 14px;' border=1>";
$salida .= "<thead> <th>Nombre Jefe</th><th>Correo Jefe</th> <th>Nombre empleado</th><th>Num Trabajador</th><th>RFC</th><th></thead>";
while($r = $sql->fetch_array()){
  
    $salida .= "<tr>
    <td>".$r['nombrejefe']."</td> 
    <td>".$r['correojefe']."</td>
    <td>".$r['nombre']."</td>
    <td>".$r['id_empleado']."</td>
    <td>".$r['rfc']."</td>";
    
}

$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=ReporteCompetenciasJefe_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>