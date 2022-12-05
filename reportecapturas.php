<?php

	require 'conexion.php';
	
	//Consulta
    $sql = $conexion2->query("SELECT personaloperativo.id_empleado, personaloperativo.correojefe, personaloperativo.apellidopaterno, personaloperativo.apellidomaterno, personaloperativo.nombre, personaloperativo.puesto, personaloperativo.descripcionestructura1, personaloperativo.descripcionestructura2, personaloperativo.descripcionestructura3, personaloperativo.descripcionestructura4, personaloperativo.descripcionestructura5, personaloperativo.id_jefe, personaloperativo.nombrejefe, personaloperativo.puestojefe, personaloperativo.lineaestrategica, personaloperativo.ejeestrategico, personaloperativo.vistobueno, personaloperativo.estadocompetencias, personaloperativo.correo, descripcionesmetas.comentario, descripcionesmetas.redacionMeta1, descripcionesmetas.indicadorMeta1, descripcionesmetas.resultadobtenido, descripcionesmetas.redacionMeta2, descripcionesmetas.indicadorMeta2, descripcionesmetas.resultadobtenido2, descripcionesmetas.redacionMeta3, descripcionesmetas.indicadorMeta3, descripcionesmetas.resultadobtenido3, descripcionesmetas.redacionMeta4, descripcionesmetas.indicadorMeta4, descripcionesmetas.resultadobtenido4, descripcionesmetas.metacolectiva, descripcionesmetas.cumplio FROM personaloperativo inner join descripcionesmetas on personaloperativo.id_empleado = descripcionesmetas.id_empleado and personaloperativo.eliminado = 0");

$salida = "";
$salida .= "<table style='color: black; font-size: 14px;' border=1>";
$salida .= "<thead> <th>Num de Nomina</th> <th>Apellido paterno</th><th>Apellido materno</th><th>Nombre</th><th>Puesto</th><th>Estructura 1</th><th>Estructura 2</th><th>Estructura 3</th><th>Estructura 4</th><th>Estructura 5</th><th>Num. de nomina jefe</th><th>Nombre jefe</th><th>Correo Jefe</th><th>Puesto jefe</th><th>Linea estrategica</th><th>Eje estrategico</th><th>Redaccion meta </th><th>Indicador meta </th><th>Resutado obtenido</th><th>comentario</th><th>Estatus metas</th><th>Estatus competencias</th><th>Metas no cumplidas</th><th>Correo</th><th>Meta colectiva</th></thead>";
while($r = $sql->fetch_array()){
    $meta3 =$r['redacionMeta3'];
    $meta4 =$r['redacionMeta4'];
    $status=$r['vistobueno'];
    $comp = $r['estadocompetencias'];
    if($status == 4){
        $visto = "sin captura";
    }if($status == 2){
        $visto = "Pendiente de VoBo";
    }if($status == 3){
        $visto = "Rechazado";
    }if($status == 1){
        $visto = "Autorizado";
    }if($comp == 1){
        $compe = "Terminado";
    }if($comp == 2){
        $compe = "Sin iniciar";
    }if($comp == 3){
        $compe = "Pendiente por finalizar";
    }
    $salida .= "<tr>
    <td>".$r['id_empleado']."</td> 
    <td>".$r['apellidopaterno']."</td>
    <td>".$r['apellidomaterno']."</td>
    <td>".$r['nombre']."</td>
    <td>".$r['puesto']."</td>
    <td>".$r['descripcionestructura1']."</td>
    <td>".$r['descripcionestructura2']."</td>
    <td>".$r['descripcionestructura3']."</td>
    <td>".$r['descripcionestructura4']."</td>
    <td>".$r['descripcionestructura5']."</td>
    <td>".$r['id_jefe']."</td>
    <td>".$r['nombrejefe']."</td>
    <td>".$r['correojefe']."</td>
    <td>".$r['puestojefe']."</td>
    <td>".$r['lineaestrategica']."</td>
    <td>".$r['ejeestrategico']."</td>
    <td>".$r['redacionMeta1']."</td>
    <td>".$r['indicadorMeta1']."</td>
    <td>".$r['resultadobtenido']."</td>
    <td>".$r['comentario']."</td>
    <td>".$visto."</td>
    <td>".$compe."</td>
    <td>".$r['cumplio']."</td>
    <td>".$r['correo']."</td>
    <td>".$r['metacolectiva']."</td></tr>";
    
}

$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=usuarios_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>