<?php session_start();
    if(isset($_SESSION['admin'])) {
      $rfc = base64_decode($_GET['Xy']);

      require 'conexion.php';

      $sql = $conexion2->query("UPDATE personaloperativo2022 set rol=0 where rfc = '$rfc'");
    

        if($sql != false){
            echo "<script>alert('Se ha bloqueado el acceso exitosamente');
            window.history.back();</script>";
        
         }else{
            echo "<script>alert('Error inesperado');
            window.history.back();</script>";
        }
    }else{
        header('location: login.php');
    }


?>