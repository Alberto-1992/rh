<?php


    require'conexion.php';

    $id = $_POST['id'];
    $ponderacionuno = $_POST['ponderacionuno'];
    $ponderaciondos = $_POST['ponderaciondos'];
    $ponderaciontres = $_POST['ponderaciontres'];
    $ponderacioncuatro = $_POST['ponderacioncuatro'];
    $ponderacioncinco = $_POST['ponderacioncinco'];
    $meta1 = $_POST['meta1'];
    $indicador1 = $_POST['indicador1'];
    $fecha1 = $_POST['fecha1'];
    $unidadMedida1 = $_POST['unidadMedida1'];
    $nivel1 = $_POST['nivel1'];
    $nivel2 = $_POST['nivel2'];
    $nivel3 = $_POST['nivel3'];
    $nivel4 = $_POST['nivel4'];
    $meta2 = $_POST['meta2'];
    $indicador2 = $_POST['indicador2'];
    $fecha2 = $_POST['fecha2'];
    $unidadMedida2 = $_POST['unidadMedida2'];
    $nivel5 = $_POST['nivel5'];
    $nivel6 = $_POST['nivel6'];
    $nivel7 = $_POST['nivel7'];
    $nivel8 = $_POST['nivel8'];
    $meta3 = $_POST['meta3'];
    $indicador3 = $_POST['indicador3'];
    $fecha3 = $_POST['fecha3'];
    $unidadMedida3 = $_POST['unidadMedida3'];
    $nivel9 = $_POST['nivel9'];
    $nivel10 = $_POST['nivel10'];
    $nivel11 = $_POST['nivel11'];
    $nivel12 = $_POST['nivel12'];
    $meta4 = $_POST['meta4'];
    $indicador4 = $_POST['indicador4'];
    $fecha4 = $_POST['fecha4'];
    $unidadMedida4 = $_POST['unidadMedida4'];
    $nivel13 = $_POST['nivel13'];
    $nivel14 = $_POST['nivel14'];
    $nivel15 = $_POST['nivel15'];
    $nivel16 = $_POST['nivel16'];
    $meta5 = $_POST['meta5'];
    $indicador5 = $_POST['indicador5'];
    $fecha5 = $_POST['fecha5'];
    $unidadMedida5 = $_POST['unidadMedida5'];
    $nivel17 = $_POST['nivel17'];
    $nivel18 = $_POST['nivel18'];
    $nivel19 = $_POST['nivel19'];
    $nivel20 = $_POST['nivel20'];
  

   $sql_1 = $conexion2->query("SELECT id_empleado from descripcionesmetas2022 where id_empleado = $id");
   $result = mysqli_fetch_assoc($sql_1);
   
   $id_empleado = $result['id_empleado'];
    
    if($id_empleado != $id ){
    $sql = $conexion2->query("INSERT into descripcionesmetas2022 (id_empleado, redacionMeta1, indicadorMeta1, ponderacionMeta1, fechaCumpMeta1, NivelCumpNoAproMeta1, NivelCumpAproMeta1, NivelCumpSatisfMeta1, NivelCumpSobreMeta1, unidadmedida1 ) values($id,'$meta1','$indicador1', $ponderacionuno, '$fecha1', '$nivel1', '$nivel2', '$nivel3', '$nivel4','$unidadMedida1')");
    }else{
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set ponderacionMeta1 =$ponderacionuno, redacionMeta1 = '$meta1', indicadorMeta1= '$indicador1', fechaCumpMeta1 = '$fecha1',  NivelCumpNoAproMeta1 = '$nivel1',  NivelCumpAproMeta1 = '$nivel2',  NivelCumpSatisfMeta1 = '$nivel3',  NivelCumpSobreMeta1 = '$nivel4', unidadmedida1 = '$unidadMedida1' where id_empleado = $id");
    }
    
    if($id_empleado == $id ){
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set ponderacionMeta2 =$ponderaciondos, redacionMeta2 = '$meta2', indicadorMeta2= '$indicador2', fechaCumpMeta2 = '$fecha2',  NivelCumpNoAproMeta2 = '$nivel5',  NivelCumpAproMeta2 = '$nivel6',  NivelCumpSatisfMeta2 = '$nivel7',  NivelCumpSobreMeta2 = '$nivel8', unidadmedida2 = '$unidadMedida2' where id_empleado = $id");
    }
    if($id_empleado == $id ){
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set ponderacionMeta3 =$ponderaciontres, redacionMeta3 = '$meta3', indicadorMeta3= '$indicador3', fechaCumpMeta3 = '$fecha3',  NivelCumpNoAproMeta3 = '$nivel9',  NivelCumpAproMeta3 = '$nivel10',  NivelCumpSatisfMeta3 = '$nivel11',  NivelCumpSobreMeta3 = '$nivel12', unidadmedida3 = '$unidadMedida3' where id_empleado = $id");
    }else{
        
    }
    if($id_empleado == $id ){
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set ponderacionMeta4 =$ponderacioncuatro, redacionMeta4 = '$meta4', indicadorMeta4= '$indicador4', fechaCumpMeta4 = '$fecha4',  NivelCumpNoAproMeta4 = '$nivel13',  NivelCumpAproMeta4 = '$nivel14',  NivelCumpSatisfMeta4 = '$nivel15',  NivelCumpSobreMeta4 = '$nivel16', unidadmedida4 = '$unidadMedida4' where id_empleado = $id");
    }else{
        
    }
    if($id_empleado == $id ){
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set ponderacionMeta5 =$ponderacioncinco, redacionMeta5 = '$meta5', indicadorMeta5 = '$indicador5', fechaCumpMeta5 = '$fecha5',  NivelCumpNoAproMeta5 = '$nivel17',  NivelCumpAproMeta5 = '$nivel18',  NivelCumpSatisfMeta5 = '$nivel19',  NivelCumpSobreMeta5 = '$nivel20', unidadmedida5 = '$unidadMedida5' where id_empleado = $id");
    }else{
        
    }
   
    if($sql != false){
        echo "<script>
        window.history.back();</script>";
    }else{
        echo "<script>
        window.history.back();</script>";
    }

?>