<?php

	require 'conexion.php';
	
	//Consulta
    $sql = $conexion2->query("SELECT personaloperativo2022.id_empleado, personaloperativo2022.rfc, personaloperativo2022.nombrejefe,personaloperativo2022.correojefe, personaloperativo2022.apellidopaterno, personaloperativo2022.apellidomaterno, personaloperativo2022.nombre, personaloperativo2022.puesto, personaloperativo2022.descripcionestructura1, personaloperativo2022.descripcionestructura2, personaloperativo2022.descripcionestructura3, personaloperativo2022.descripcionestructura4, personaloperativo2022.descripcionestructura5, personaloperativo2022.lineaestrategica12022, personaloperativo2022.ejeestrategico12022, personaloperativo2022.lineaestrategica22022, personaloperativo2022.ejeestrategico22022, personaloperativo2022.lineaestrategica32022, personaloperativo2022.ejeestrategico32022, personaloperativo2022.lineaestrategica42022, personaloperativo2022.ejeestrategico42022, personaloperativo2022.lineaestrategica52022, personaloperativo2022.ejeestrategico52022, personaloperativo2022.vistobueno, personaloperativo2022.correo FROM personaloperativo2022 where eliminado = 0");

$salida = "";
$salida .= "<table style='color: black; font-size: 14px;' border=1>";
$salida .= "<thead> <th>Num de Nomina</th><th>RFC</th> <th>Apellido paterno</th><th>Apellido materno</th><th>Nombre</th><th>Nombre jefe</th><th>Correo jefe</th><th>Puesto</th><th>Estructura 1</th><th>Estructura 2</th><th>Estructura 3</th><th>Estructura 4</th><th>Estructura 5</th><th>Linea estrategica</th><th>Eje estrategico</th><th>Redaccion meta 1</th><th>Indicador Meta1</th><th>Linea estrategica 2</th><th>Eje estrategico 2</th><th>Redaccion meta 2</th><th>Indicador Meta 2</th><th>Linea estrategica 3</th><th>Eje estrategico 3</th><th>Redaccion meta 3</th><th>Indicador Meta 3</th><th>Linea estrategica 4</th><th>Eje estrategico 4</th><th>Redaccion meta 4</th>><th>Indicador Meta 4</th><th>Linea estrategica 5</th><th>Eje estrategico 5</th><th>Redaccion meta 5</th><th>Indicador Meta 5</th><th>Estatus metas captura 2022</th><th>Correo</th></thead>";
while($r = $sql->fetch_array()){
    $id_empleado = $r['id_empleado'];
    $status=$r['vistobueno'];
  
    $sql_s = $conexion2->query("SELECT * from descripcionesmetas2022 where id_empleado = $id_empleado");
    $resultado = mysqli_fetch_assoc($sql_s);
 
    if($status == 4){
        $visto = "sin captura";
    }if($status == 2){
        $visto = "Pendiente de VoBo";
    }if($status == 3){
        $visto = "Rechazado";
    }if($status == 1){
        $visto = "Autorizado";
    }
    if($status2 == 4){
        $visto2 = "sin captura";
    }if($status2 == 2){
        $visto2 = "Pendiente de VoBo";
    }if($status2 == 3){
        $visto2 = "Rechazado";
    }if($status2 == 1){
        $visto2 = "Autorizado";
    }
    $salida .= "<tr>
    <td>".$r['id_empleado']."</td> 
    <td>".$r['rfc']."</td>
    <td>".utf8_decode($r['apellidopaterno'])."</td>
    <td>".utf8_decode($r['apellidomaterno'])."</td>
    <td>".utf8_decode($r['nombre'])."</td>
    <td>".utf8_decode($r['nombrejefe'])."</td>
    <td>".$r['correojefe']."</td>
    <td>".utf8_decode($r['puesto'])."</td>
    <td>".utf8_decode($r['descripcionestructura1'])."</td>
    <td>".utf8_decode($r['descripcionestructura2'])."</td>
    <td>".utf8_decode($r['descripcionestructura3'])."</td>
    <td>".utf8_decode($r['descripcionestructura4'])."</td>
    <td>".utf8_decode($r['descripcionestructura5'])."</td>
    <td>".utf8_decode($r['lineaestrategica12022'])."</td>
    <td>".utf8_decode($r['ejeestrategico12022'])."</td>
    <td>".utf8_decode($resultado['redacionMeta1'])."</td>
    <td>".utf8_decode($resultado['indicadorMeta1'])."</td>
    <td>".utf8_decode($r['lineaestrategica22022'])."</td>
    <td>".utf8_decode($r['ejeestrategico22022'])."</td>
    <td>".utf8_decode($resultado['redacionMeta2'])."</td>
    <td>".utf8_decode($resultado['indicadorMeta2'])."</td>
    <td>".utf8_decode($r['lineaestrategica32022'])."</td>
    <td>".utf8_decode($r['ejeestrategico32022'])."</td>
    <td>".utf8_decode($resultado['redacionMeta3'])."</td>
    <td>".utf8_decode($resultado['indicadorMeta3'])."</td>
    <td>".utf8_decode($r['lineaestrategica42022'])."</td>
    <td>".utf8_decode($r['ejeestrategico42022'])."</td>
    <td>".utf8_decode($resultado['redacionMeta4'])."</td>
    <td>".utf8_decode($resultado['indicadorMeta4'])."</td>
    <td>".utf8_decode($r['lineaestrategica52022'])."</td>
    <td>".utf8_decode($r['ejeestrategico52022'])."</td>
    <td>".utf8_decode($resultado['redacionMeta5'])."</td>
    <td>".utf8_decode($resultado['indicadorMeta5'])."</td>
    <td>".$visto."</td>
    <td>".$r['correo']."</td>";
    
}

$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte2021_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>