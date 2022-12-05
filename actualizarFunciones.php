<?php
    require 'conexion.php';
    
    $id = base64_decode($_GET['id']);
    
    $sql = $conexion2->query("UPDATE personaloperativo2022 set actualizofunciones = 0 where id_empleado = $id");
    
    if($sql != false){
        echo "<script>alert('modificacion de funciones activada');
        window.history.back();</script>";
    }else{
         echo "<script>alert('error al modificar');
        window.history.back();</script>";
    }


?>