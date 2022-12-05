<?php

$id = $_POST['id'];
    
    require'conexion.php';
    
    if(empty($id)){
        
    }else{
    
        $sql = $conexion2->query("UPDATE personaloperativo set vistobueno2021 = 4 where id_empleado = '$id'");
        $sql = $conexion2->query("DELETE FROM descripcionesmetas2021 where id_empleado = '$id'");
    
    if($sql != false){
        echo "<script>swal({
    title: 'Good',
    timer: 1000,
    showConfirmButton: false
  
    });
    </script>";
    }else{
        echo "<script>
         swal({
                    title: '¡ERROR!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     }); </script>";
    }
}
?>