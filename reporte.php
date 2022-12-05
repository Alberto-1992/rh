<?php

	require 'conexion.php';
	
	//Consulta
    $sql = $conexion2->query("SELECT personaloperativo.id_empleado, personaloperativo.apellidopaterno, personaloperativo.apellidomaterno, personaloperativo.nombre, personaloperativo.puesto, personaloperativo.descripcionestructura1, personaloperativo.descripcionestructura2, personaloperativo.descripcionestructura3, personaloperativo.descripcionestructura4, personaloperativo.descripcionestructura5, personaloperativo.id_jefe, personaloperativo.nombrejefe, personaloperativo.puestojefe, personaloperativo.lineaestrategica2021, personaloperativo.ejeestrategico2021, personaloperativo.lineaestrategica22021, personaloperativo.ejeestrategico22021, personaloperativo.lineaestrategica32021, personaloperativo.ejeestrategico32021, personaloperativo.lineaestrategica42021, personaloperativo.ejeestrategico42021, personaloperativo.lineaestrategica52021, personaloperativo.ejeestrategico52021, personaloperativo.vistobueno2021, personaloperativo.estadocompetencias2021, personaloperativo.correo, descripcionesmetas2021.comentario, descripcionesmetas2021.redacionMeta1, descripcionesmetas2021.indicadorMeta1, descripcionesmetas2021.resultadobtenido, descripcionesmetas2021.redacionMeta2, descripcionesmetas2021.indicadorMeta2, descripcionesmetas2021.resultadobtenido2, descripcionesmetas2021.redacionMeta3, descripcionesmetas2021.indicadorMeta3, descripcionesmetas2021.resultadobtenido3, descripcionesmetas2021.redacionMeta4, descripcionesmetas2021.indicadorMeta4, descripcionesmetas2021.resultadobtenido4, descripcionesmetas2021.redacionMeta5, descripcionesmetas2021.indicadorMeta5, descripcionesmetas2021.resultadobtenido5 FROM personaloperativo inner join descripcionesmetas2021 on personaloperativo.id_empleado = descripcionesmetas2021.id_empleado and personaloperativo.eliminado = 0");

$salida = "";
$salida .= "<table style='color: black; font-size: 14px;' border=1>";
$salida .= "<thead> <th>Num de Nomina</th> <th>Apellido paterno</th><th>Apellido materno</th><th>Nombre</th><th>Puesto</th><th>Estructura 1</th><th>Estructura 2</th><th>Estructura 3</th><th>Estructura 4</th><th>Estructura 5</th><th>Num. de nomina jefe</th><th>Nombre jefe</th><th>Puesto jefe</th><th>Linea estrategica</th><th>Eje estrategico</th><th>Redaccion meta </th><th>Indicador meta </th><th>Resutado obtenido</th><th>comentario</th><th>Estatus metas</th><th>Estatus competencias</th><th>Correo</th></thead>";
while($r = $sql->fetch_array()){
    $meta3 =$r['redacionMeta3'];
    $meta4 =$r['redacionMeta4'];
    $meta5 =$r['redacionMeta5'];
    $status=$r['vistobueno2021'];
    $comp = $r['estadocompetencias2021'];
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
    <td>".utf8_decode($r['apellidopaterno'])."</td>
    <td>".utf8_decode($r['apellidomaterno'])."</td>
    <td>".utf8_decode($r['nombre'])."</td>
    <td>".utf8_decode($r['puesto'])."</td>
    <td>".utf8_decode($r['descripcionestructura1'])."</td>
    <td>".utf8_decode($r['descripcionestructura2'])."</td>
    <td>".utf8_decode($r['descripcionestructura3'])."</td>
    <td>".utf8_decode($r['descripcionestructura4'])."</td>
    <td>".utf8_decode($r['descripcionestructura5'])."</td>
    <td>".$r['id_jefe']."</td>
    <td>".$r['nombrejefe']."</td>
    <td>".utf8_decode($r['puestojefe'])."</td>
    <td>".utf8_decode($r['lineaestrategica2021'])."</td>
    <td>".utf8_decode($r['ejeestrategico2021'])."</td>
    <td>".utf8_decode($r['redacionMeta1'])."</td>
    <td>".utf8_decode($r['indicadorMeta1'])."</td>
    <td>".utf8_decode($r['resultadobtenido'])."</td>
    <td>".utf8_decode($r['comentario'])."</td>
    <td>".$visto."</td>
    <td>".$compe."</td>
    <td>".$r['correo']."</td>
  
    <tr>
    <td>".$r['id_empleado']."</td> 
    <td>".utf8_decode($r['apellidopaterno'])."</td>
    <td>".utf8_decode($r['apellidomaterno'])."</td>
    <td>".utf8_decode($r['nombre'])."</td>
    <td>".utf8_decode($r['puesto'])."</td>
    <td>".utf8_decode($r['descripcionestructura1'])."</td>
    <td>".utf8_decode($r['descripcionestructura2'])."</td>
    <td>".utf8_decode($r['descripcionestructura3'])."</td>
    <td>".utf8_decode($r['descripcionestructura4'])."</td>
    <td>".utf8_decode($r['descripcionestructura5'])."</td>
    <td>".$r['id_jefe']."</td>
    <td>".utf8_decode($r['nombrejefe'])."</td>
    <td>".utf8_decode($r['puestojefe'])."</td>
    <td>".utf8_decode($r['lineaestrategica22021'])."</td>
    <td>".utf8_decode($r['ejeestrategico22021'])."</td>
    <td>".utf8_decode($r['redacionMeta2'])."</td>
    <td>".utf8_decode($r['indicadorMeta2'])."</td>
    <td>".utf8_decode($r['resultadobtenido2'])."</td>
    <td>".utf8_decode($r['comentario'])."</td>
    <td>".$visto."</td>
    <td>".$compe."</td>
    <td>".$r['correo']."</td>
  </tr>";
     if($meta3 != ''){
    $salida .= "
    <tr>
    <td>".$r['id_empleado']."</td> 
    <td>".utf8_decode($r['apellidopaterno'])."</td>
    <td>".utf8_decode($r['apellidomaterno'])."</td>
    <td>".utf8_decode($r['nombre'])."</td>
    <td>".utf8_decode($r['puesto'])."</td>
    <td>".utf8_decode($r['descripcionestructura1'])."</td>
    <td>".utf8_decode($r['descripcionestructura2'])."</td>
    <td>".utf8_decode($r['descripcionestructura3'])."</td>
    <td>".utf8_decode($r['descripcionestructura4'])."</td>
    <td>".utf8_decode($r['descripcionestructura5'])."</td>
    <td>".$r['id_jefe']."</td>
    <td>".utf8_decode($r['nombrejefe'])."</td>
    <td>".utf8_decode($r['puestojefe'])."</td>
    <td>".utf8_decode($r['lineaestrategica32021'])."</td>
    <td>".utf8_decode($r['ejeestrategico32021'])."</td>
    <td>".utf8_decode($r['redacionMeta3'])."</td>
    <td>".utf8_decode($r['indicadorMeta3'])."</td>
    <td>".utf8_decode($r['resultadobtenido3'])."</td>
    <td>".utf8_decode($r['comentario'])."</td>
    <td>".$visto."</td>
    <td>".$compe."</td>
    <td>".$r['correo']."</td>
   </tr>";
     }else{
         
     }
     if($meta4 != ''){
     $salida .="
    <tr>
    <td>".$r['id_empleado']."</td> 
    <td>".utf8_decode($r['apellidopaterno'])."</td>
    <td>".utf8_decode($r['apellidomaterno'])."</td>
    <td>".utf8_decode($r['nombre'])."</td>
    <td>".utf8_decode($r['puesto'])."</td>
    <td>".utf8_decode($r['descripcionestructura1'])."</td>
    <td>".utf8_decode($r['descripcionestructura2'])."</td>
    <td>".utf8_decode($r['descripcionestructura3'])."</td>
    <td>".utf8_decode($r['descripcionestructura4'])."</td>
    <td>".utf8_decode($r['descripcionestructura5'])."</td>
    <td>".$r['id_jefe']."</td>
    <td>".utf8_decode($r['nombrejefe'])."</td>
    <td>".utf8_decode($r['puestojefe'])."</td>
    <td>".utf8_decode($r['lineaestrategica42021'])."</td>
    <td>".utf8_decode($r['ejeestrategico42021'])."</td>
    <td>".utf8_decode($r['redacionMeta4'])."</td>
    <td>".utf8_decode($r['indicadorMeta4'])."</td>
    <td>".utf8_decode($r['resultadobtenido4'])."</td>
    <td>".utf8_decode($r['comentario'])."</td>
    <td>".$visto."</td>
    <td>".$compe."</td>
    <td>".$r['correo']."</td>

    </tr>";
     }else{
         
     }
     if($meta5 != ''){
     $salida .="
    <tr>
    <td>".$r['id_empleado']."</td> 
    <td>".utf8_decode($r['apellidopaterno'])."</td>
    <td>".utf8_decode($r['apellidomaterno'])."</td>
    <td>".utf8_decode($r['nombre'])."</td>
    <td>".utf8_decode($r['puesto'])."</td>
    <td>".utf8_decode($r['descripcionestructura1'])."</td>
    <td>".utf8_decode($r['descripcionestructura2'])."</td>
    <td>".utf8_decode($r['descripcionestructura3'])."</td>
    <td>".utf8_decode($r['descripcionestructura4'])."</td>
    <td>".utf8_decode($r['descripcionestructura5'])."</td>
    <td>".$r['id_jefe']."</td>
    <td>".utf8_decode($r['nombrejefe'])."</td>
    <td>".utf8_decode($r['puestojefe'])."</td>
    <td>".utf8_decode($r['lineaestrategica52021'])."</td>
    <td>".utf8_decode($r['ejeestrategico52021'])."</td>
    <td>".utf8_decode($r['redacionMeta5'])."</td>
    <td>".utf8_decode($r['indicadorMeta5'])."</td>
    <td>".utf8_decode($r['resultadobtenido5'])."</td>
    <td>".utf8_decode($r['comentario'])."</td>
    <td>".$visto."</td>
    <td>".$compe."</td>
    <td>".$r['correo']."</td>
 
    </tr>";
     }else{
         
     }
}

$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=usuarios_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>