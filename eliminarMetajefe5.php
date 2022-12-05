<?php

    $id = $_POST['id'];
  

   require'conexion.php';
    
    $sql = $conexion2->query("UPDATE descripcionesmetasjefes2023 set redacionMeta5 = '', indicadorMeta5 = '', NivelCumpNoAproMeta5 ='', NivelCumpAproMeta5 = '', NivelCumpSatisfMeta5 = '', NivelCumpSobreMeta5 ='', ponderacionMeta5='', fechaCumpMeta5='', unidadmedida5='' where id_jefe = '$id'");
    
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