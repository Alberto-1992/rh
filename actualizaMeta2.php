<?php

    $meta2 = $_POST['meta2'];
    $indicador2 = $_POST['indicador2'];
    $id = $_POST['id'];
    $input5 = $_POST['input5'];
    $input6 = $_POST['input6'];
    $input7 = $_POST['input7'];
    $input8 = $_POST['input8'];
    $ponderacion2 = $_POST['ponderacion2'];
    $fecha2 = $_POST['fecha2'];
    $unidadMedida2 = $_POST['unidadMedida2'];
    
    require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set redacionMeta2 = '$meta2', indicadorMeta2 = '$indicador2', NivelCumpNoAproMeta2 ='$input5', NivelCumpAproMeta2 = '$input6', NivelCumpSatisfMeta2 = '$input7', NivelCumpSobreMeta2 ='$input8', ponderacionMeta2='$ponderacion2', fechaCumpMeta2='$fecha2', unidadmedida2='$unidadMedida2' where id_empleado = '$id'");
    
    
?>