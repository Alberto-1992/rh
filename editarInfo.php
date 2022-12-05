<?php session_start();
    if(isset($_SESSION['admin'])) {
        $datos = base64_decode($_GET['Xy']);
        require 'conexion.php';

        $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where id_empleado ='$datos'");
        $result = mysqli_fetch_assoc($sql);

    if($result != false){
        require 'frontend/editarInfo.php'; 

    }
        
    }else{
        header('location: indexAdmin.php');
    }
    

?>