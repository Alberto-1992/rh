<?php

    $meta4 = $_POST['meta4'];
    $indicador4 = $_POST['indicador4'];
    $id = $_POST['id'];
    $input13 = $_POST['input13'];
    $input14 = $_POST['input14'];
    $input15 = $_POST['input15'];
    $input16 = $_POST['input16'];
    $ponderacion4 = $_POST['ponderacion4'];
    $fecha4 = $_POST['fecha4'];
    $unidadMedida4 = $_POST['unidadMedida4'];
    
    require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set redacionMeta4 = '$meta4', indicadorMeta4 = '$indicador4', NivelCumpNoAproMeta4 ='$input13', NivelCumpAproMeta4 = '$input14', NivelCumpSatisfMeta4 = '$input15', NivelCumpSobreMeta4 ='$input16', ponderacionMeta4='$ponderacion4', fechaCumpMeta4='$fecha4', unidadmedida4='$unidadMedida4' where id_empleado = '$id'");
    
    
    
    
    ?>