<?php

    $id = $_POST['id'];
  
    
    require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetas2022 set redacionMeta4 = '', indicadorMeta4 = '', NivelCumpNoAproMeta4 ='', NivelCumpAproMeta4 = '', NivelCumpSatisfMeta4 = '', NivelCumpSobreMeta4 ='', ponderacionMeta4='', fechaCumpMeta4='', unidadmedida4='' where id_empleado = '$id'");
    
    
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