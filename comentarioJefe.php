<?php
    if(isset($_POST['comentario'])){
        $comentario = $_POST['comentarioJefeDirecto'];
        $id_empleado = $_POST['empl'];
        require 'conexion.php';
        
        $sql= $conexion2->query("UPDATE descripcionesmetas2021 set comentarioJefeResultado2021 = '$comentario' where id_empleado = $id_empleado");
    }
        if($sql != false){
            echo "<script>alert('comentario guardado satisfactoriamente');
            window.history.back();</script>";
        }else{
        echo "<script>alert('Error al almacenar el comentario intenete nuevamente');
            window.history.back();</script>";
    }

?>