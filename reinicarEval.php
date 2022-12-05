<?php session_start();
    if(isset($_SESSION['admin'])) {
      $clave = base64_decode($_GET['id']);

      require 'conexion.php';
         $sql = $conexion2->query("UPDATE personaloperativo2022 set vistobueno = 4, actualiza = 1 where id_empleado = '$clave' ");
      //$sql = $conexion2->query("DELETE FROM competencias where identificador = '$rfc'");
      //$sql = $conexion2->query("DELETE FROM comentarios where identificador = '$rfc'");

        if($sql != false){
            echo "<script>alert('VoBo cambiado exitosamente');
            window.history.back();</script>";
        
         }else if($sql != true){
            echo "<script>alert('Error inesperado');
            window.history.back();</script>";
        }
    }else{
        header('location: login.php');
    }


?>