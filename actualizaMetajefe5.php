<?php

    $meta5 = $_POST['meta5'];
    $indicador5 = $_POST['indicador5'];
    $id = $_POST['id'];
    $input17 = $_POST['inputa'];
    $input18 = $_POST['inputb'];
    $input19 = $_POST['inputc'];
    $input20 = $_POST['inputd'];
    $ponderacion5 = $_POST['ponderacion5'];
    $fecha5 = $_POST['fecha5'];
    $unidadMedida5 = $_POST['unidadMedida5'];

   require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetasjefes2023 set redacionMeta5 = '$meta5', indicadorMeta5 = '$indicador5', NivelCumpNoAproMeta5 ='$input17', NivelCumpAproMeta5 = '$input18', NivelCumpSatisfMeta5 = '$input19', NivelCumpSobreMeta5 ='$input20', ponderacionMeta5='$ponderacion5', fechaCumpMeta5='$fecha5', unidadmedida5='$unidadMedida5' where id_jefe = '$id'");
    
    
    
    
    ?>