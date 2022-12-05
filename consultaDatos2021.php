<?php session_start();
if(isset($_SESSION['usuario'])) {

$id = base64_decode($_GET['id']);
$correo = base64_decode($_GET['correo']);
$correojefe = base64_decode($_GET['correojefe']);
    
require 'conexion.php';
error_reporting(0);
$sql = $conexion2->query("SELECT descripcionesmetas2021.id_empleado, 
descripcionesmetas2021.redacionMeta1, 
descripcionesmetas2021.indicadorMeta1, 
descripcionesmetas2021.ponderacionMeta1, 
descripcionesmetas2021.fechaCumpMeta1, 
descripcionesmetas2021.NivelCumpNoAproMeta1, 
descripcionesmetas2021.NivelCumpAproMeta1, 
descripcionesmetas2021.NivelCumpSatisfMeta1, 
descripcionesmetas2021.NivelCumpSobreMeta1, 
descripcionesmetas2021.redacionMeta2, 
descripcionesmetas2021.indicadorMeta2, 
descripcionesmetas2021.ponderacionMeta2, 
descripcionesmetas2021.fechaCumpMeta2, 
descripcionesmetas2021.NivelCumpNoAproMeta2, 
descripcionesmetas2021.NivelCumpAproMeta2, 
descripcionesmetas2021.NivelCumpSatisfMeta2, 
descripcionesmetas2021.NivelCumpSobreMeta2, 
descripcionesmetas2021.redacionMeta3, 
descripcionesmetas2021.indicadorMeta3, 
descripcionesmetas2021.ponderacionMeta3, 
descripcionesmetas2021.fechaCumpMeta3, 
descripcionesmetas2021.NivelCumpNoAproMeta3, 
descripcionesmetas2021.NivelCumpAproMeta3, 
descripcionesmetas2021.NivelCumpSatisfMeta3, 
descripcionesmetas2021.NivelCumpSobreMeta3, 
descripcionesmetas2021.redacionMeta4, 
descripcionesmetas2021.indicadorMeta4, 
descripcionesmetas2021.ponderacionMeta4, 
descripcionesmetas2021.fechaCumpMeta4, 
descripcionesmetas2021.NivelCumpNoAproMeta4, 
descripcionesmetas2021.NivelCumpAproMeta4, 
descripcionesmetas2021.NivelCumpSatisfMeta4, 
descripcionesmetas2021.NivelCumpSobreMeta4,
descripcionesmetas2021.redacionMeta5, 
descripcionesmetas2021.indicadorMeta5, 
descripcionesmetas2021.ponderacionMeta5, 
descripcionesmetas2021.fechaCumpMeta5, 
descripcionesmetas2021.NivelCumpNoAproMeta5, 
descripcionesmetas2021.NivelCumpAproMeta5, 
descripcionesmetas2021.NivelCumpSatisfMeta5, 
descripcionesmetas2021.NivelCumpSobreMeta5,
descripcionesmetas2021.resultadobtenido,
descripcionesmetas2021.resultadobtenido2,
descripcionesmetas2021.resultadobtenido3,
descripcionesmetas2021.resultadobtenido4,
descripcionesmetas2021.resultadobtenido5,
descripcionesmetas2021.resultadobtenido6,
descripcionesmetas2021.nivelescumplimiento1,
descripcionesmetas2021.nivelescumplimiento2,
descripcionesmetas2021.nivelescumplimiento3,
descripcionesmetas2021.nivelescumplimiento4,
descripcionesmetas2021.nivelescumplimiento5,
descripcionesmetas2021.nivelescumplimiento6,
descripcionesmetas2021.comentario,
descripcionesmetas2021.comentarioJefe,
personaloperativo.ejeestrategico2021, personaloperativo.lineaestrategica2021,
personaloperativo.ejeestrategico22021, personaloperativo.lineaestrategica22021,
personaloperativo.ejeestrategico32021, personaloperativo.lineaestrategica32021,
personaloperativo.ejeestrategico42021, personaloperativo.lineaestrategica42021,
personaloperativo.ejeestrategico52021, personaloperativo.lineaestrategica52021,
personaloperativo.vistobuenoResultado2021,
personaloperativo.correo, personaloperativo.correojefe FROM descripcionesmetas2021 inner join personaloperativo on personaloperativo.id_empleado = '$id' where descripcionesmetas2021.id_empleado = '$id'");
$row = mysqli_fetch_assoc($sql);

    
if($row['vistobuenoResultado2021'] == 2 or $row['vistobuenoResultado2021'] == 1){
    require 'frontend/metasResultado2021Vista.php'; 
    
}elseif($row['vistobuenoResultado2021'] == 4 or $row['vistobuenoResultado2021'] == 3){
require 'frontend/metasResultado2021.php';
}
if(isset($_SESSION['operativo'])) {


$sql = $conexion2->query("SELECT * FROM descripcionesmetas2021 where id_empleado = '$valor'");
$row = mysqli_fetch_assoc($sql);

    require 'frontend/metasResultado2021.php'; 
    
}else{

    
    header('location: login.php');
    }
}
?>