<?php session_start();
if(isset($_SESSION['usuario'])) {

$valor = base64_decode($_GET['id']);
$correo = base64_decode($_GET['correo']);
$correojefe = base64_decode($_GET['correojefe']);
    
require 'conexion.php';
error_reporting(0);
$sql = $conexion2->query("SELECT descripcionesmetas.id_empleado, 
descripcionesmetas.redacionMeta1, 
descripcionesmetas.indicadorMeta1, 
descripcionesmetas.ponderacionMeta1, 
descripcionesmetas.fechaCumpMeta1, 
descripcionesmetas.NivelCumpNoAproMeta1, 
descripcionesmetas.NivelCumpAproMeta1, 
descripcionesmetas.NivelCumpSatisfMeta1, 
descripcionesmetas.NivelCumpSobreMeta1, 
descripcionesmetas.redacionMeta2, 
descripcionesmetas.indicadorMeta2, 
descripcionesmetas.ponderacionMeta2, 
descripcionesmetas.fechaCumpMeta2, 
descripcionesmetas.NivelCumpNoAproMeta2, 
descripcionesmetas.NivelCumpAproMeta2, 
descripcionesmetas.NivelCumpSatisfMeta2, 
descripcionesmetas.NivelCumpSobreMeta2, 
descripcionesmetas.redacionMeta3, 
descripcionesmetas.indicadorMeta3, 
descripcionesmetas.ponderacionMeta3, 
descripcionesmetas.fechaCumpMeta3, 
descripcionesmetas.NivelCumpNoAproMeta3, 
descripcionesmetas.NivelCumpAproMeta3, 
descripcionesmetas.NivelCumpSatisfMeta3, 
descripcionesmetas.NivelCumpSobreMeta3, 
descripcionesmetas.redacionMeta4, 
descripcionesmetas.indicadorMeta4, 
descripcionesmetas.ponderacionMeta4, 
descripcionesmetas.fechaCumpMeta4, 
descripcionesmetas.NivelCumpNoAproMeta4, 
descripcionesmetas.NivelCumpAproMeta4, 
descripcionesmetas.NivelCumpSatisfMeta4, 
descripcionesmetas.NivelCumpSobreMeta4, 
descripcionesmetas.resultadobtenido,
descripcionesmetas.resultadobtenido2,
descripcionesmetas.resultadobtenido3,
descripcionesmetas.resultadobtenido4,
descripcionesmetas.resultadobtenido5,
descripcionesmetas.resultadobtenido6,
descripcionesmetas.nivelescumplimiento1,
descripcionesmetas.nivelescumplimiento2,
descripcionesmetas.nivelescumplimiento3,
descripcionesmetas.nivelescumplimiento4,
descripcionesmetas.nivelescumplimiento5,
descripcionesmetas.nivelescumplimiento6,
descripcionesmetas.comentario,
descripcionesmetas.comentarioJefe,
personaloperativo.ejeestrategico, personaloperativo.lineaestrategica, personaloperativo.correo, personaloperativo.correojefe FROM descripcionesmetas inner join personaloperativo on personaloperativo.id_empleado = '$valor' where descripcionesmetas.id_empleado = '$valor'");
$row = mysqli_fetch_assoc($sql);

    require 'frontend/metas.php'; 
    
}else{


if(isset($_SESSION['operativo'])) {


$sql = $conexion2->query("SELECT * FROM descripcionesmetas where id_empleado = '$valor'");
$row = mysqli_fetch_assoc($sql);

    require 'frontend/metas.php'; 
    
}else{

    
    header('location: login.php');
}
}
?>