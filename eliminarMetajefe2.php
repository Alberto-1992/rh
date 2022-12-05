<?php

    $id = $_POST['id'];

    require'conexion.php';
    
    $sql_s = $conexion2->query("UPDATE descripcionesmetasjefes2023 set redacionMeta2 = '', indicadorMeta2 = '', NivelCumpNoAproMeta2 ='', NivelCumpAproMeta2 = '', NivelCumpSatisfMeta2 = '', NivelCumpSobreMeta2 ='', ponderacionMeta2='', fechaCumpMeta2='', unidadmedida2='' where id_jefe = '$id'");
   
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