<?php session_start();
    if(isset($_SESSION['usuarioDatos'])) {
        $usernameSesion = $_SESSION['usuarioDatos'];
        require 'conexion.php';
        $query ="SELECT correo from personaloperativo2022 where correo = '$usernameSesion' limit 1";
        $res = mysqli_query($conexion2, $query);
        $rw = mysqli_fetch_assoc($res);
        $nombre = $rw['correo'];
    
    }
    
    $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where correo = '$nombre'");
    

    if($sql != false){
    
        require 'frontend/competencias.php'; 
        
    }else{
        header('location: login');
    }


?>