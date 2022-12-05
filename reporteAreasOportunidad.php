<?php

	require 'conexion.php';
	
	//Consulta
    $sql = $conexion2->query("SELECT comentarios2021.identificador, comentarios2021.comentario1, comentarios2021.comentario2, comentarios2021.comentario3 from comentarios2021 ");

$salida = "";
$salida .= "<table style='color: black; font-size: 14px;' border=1>";
$salida .= "<thead> <th>Numero trabajador</th><th>Puesto</th> <th>Correo</th><th>RFC</th><th>Nombre</th><th>Apellido paterno</th><th>Apellido materno</th><th>Areas de oportunidad</th><th>Fortalezas</th><th>Capacitacion</th><th>Nombre jefe</th></thead>";
while($r = $sql->fetch_array()){
    $rfc = $r['identificador'];
  $sql_r = $conexion2->query("select id_empleado, puesto, correo, rfc, nombre, apellidopaterno, apellidomaterno, nombrejefe from personaloperativo where rfc = '$rfc'");
  $result = mysqli_fetch_assoc($sql_r);
    $salida .= "<tr>
    <td>".$result['id_empleado']."</td> 
    <td>".$result['puesto']."</td>
    <td>".$result['correo']."</td>
    <td>".$result['rfc']."</td>
    <td>".$result['nombre']."</td>
    <td>".$result['apellidopaterno']."</td>
    <td>".$result['apellidomaterno']."</td>
    <td>".$r['comentario1']."</td>
    <td>".$r['comentario2']."</td>
    <td>".$r['comentario3']."</td>
    <td>".$result['nombrejefe']."</td>
    </tr>";
    
}

$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=ReporteCompetenciasJefe_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>