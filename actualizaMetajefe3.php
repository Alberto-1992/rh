<?php

    $meta3 = $_POST['meta3'];
    $indicador3 = $_POST['indicador3'];
    $id = $_POST['id'];
    $input9 = $_POST['input9'];
    $input10 = $_POST['input10'];
    $input11 = $_POST['input11'];
    $input12 = $_POST['input12'];
    $ponderacion3 = $_POST['ponderacion3'];
    $fecha3 = $_POST['fecha3'];
    $unidadMedida3 = $_POST['unidadMedida3'];
    
    require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetasjefes2023 set redacionMeta3 = '$meta3', indicadorMeta3 = '$indicador3', NivelCumpNoAproMeta3 ='$input9', NivelCumpAproMeta3 = '$input10', NivelCumpSatisfMeta3 = '$input11', NivelCumpSobreMeta3 ='$input12', ponderacionMeta3='$ponderacion3', fechaCumpMeta3='$fecha3', unidadmedida3='$unidadMedida3' where id_jefe = '$id'");
    
    
?>