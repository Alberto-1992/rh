<?php
  require'conexion.php';
$id = $_POST['id'];
  if(empty($id)){
      
  }else{ 
    
    $sql = $conexion2->query("UPDATE personaloperativo2022 set actualiza = 1 where id_empleado = '$id'");
    
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