<?php

    $meta1 = $_POST['meta1'];
    $indicador1 = $_POST['indicador1'];
    $id = $_POST['id'];
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];
    $ponderacion1 = $_POST['ponderacion1'];
    $fecha1 = $_POST['fecha1'];
    $unidadMedida1 = $_POST['unidadMedida1'];
    
    require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set redacionMeta1 = '$meta1', indicadorMeta1 = '$indicador1', NivelCumpNoAproMeta1 ='$input1', NivelCumpAproMeta1 = '$input2', NivelCumpSatisfMeta1 = '$input3', NivelCumpSobreMeta1 ='$input4', ponderacionMeta1='$ponderacion1', fechaCumpMeta1='$fecha1', unidadmedida1='$unidadMedida1' where id_empleado = '$id'");
   
    if($sql != false){
    echo "<script>swal({
    title: 'Good',
    timer: 1000,
    showConfirmButton: false
  
    });
    </script>";
}else{
  echo "<script>swal({
    title: 'Error al eliminar',
    timer: 1000,
    showConfirmButton: false
  
    });
    </script>";
}
    
?>