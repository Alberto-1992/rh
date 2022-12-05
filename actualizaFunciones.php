<?php

    if(isset($_POST['actualiza'])){
        $id = $_POST['id'];
        $funciones1 = $_POST['funciones1'];
        $funciones2 = $_POST['funciones2'];
        $funciones3 = $_POST['funciones3'];
        $funciones4 = $_POST['funciones4'];
        $funciones5 = $_POST['funciones5'];
    }
    
    require 'conexion.php';
    
    $sql = $conexion2->query("UPDATE personaloperativo2022 set funciones1 = '$funciones1', funciones2 = '$funciones2', funciones3 = '$funciones3', funciones4 = '$funciones4', funciones5 = '$funciones5', actualizofunciones = 1 where id_empleado = $id");
    
    if($sql != false){
        echo "<script>alert('Funciones actualizadas');
        window.history.back();</script>";
    }else{
        echo "<script>alert('Error al actualizar funciones');
        window.history.back();</script>";
    }

?>