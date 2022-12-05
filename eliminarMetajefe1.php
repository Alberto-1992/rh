<?php

    $id = $_POST['id'];

    require'conexion.php';
    
    $sql_s = $conexion2->query("UPDATE descripcionesmetasjefes2023 set redacionMeta1 = '', indicadorMeta1 = '', NivelCumpNoAproMeta1 ='', NivelCumpAproMeta1 = '', NivelCumpSatisfMeta1 = '', NivelCumpSobreMeta1 ='', ponderacionMeta1='', fechaCumpMeta1='', unidadmedida1='' where id_jefe = '$id'");
   
    if($sql_s != false){
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