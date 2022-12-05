<?php

    $id = $_POST['id'];
  
    require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetasjefes2023 set redacionMeta3 = '', indicadorMeta3 = '', NivelCumpNoAproMeta3 ='', NivelCumpAproMeta3 = '', NivelCumpSatisfMeta3 = '', NivelCumpSobreMeta3 ='', ponderacionMeta3='', fechaCumpMeta3='', unidadmedida3='' where id_jefe = '$id'");
    
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