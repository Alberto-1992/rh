<?php session_start();
    if(isset($_SESSION['usuarioJefe'])) {
        $usernameSesion = $_SESSION['usuarioJefe'];
        require 'conexion.php';
        $query ="SELECT * from jefes2022 where correo = '$usernameSesion' and rol = 4";
        $res = mysqli_query($conexion2, $query);
        $rw = mysqli_fetch_assoc($res);
        $nombre = $rw['correo'];
        $comp = $rw['id_jefe'];
    
    }
    
    $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where evalua = $comp and eliminado = 0");
    

    if($sql != false){
    
        require 'frontend/competenciasJefe.php'; 
        
    }else{
        header('location: index');
    }


?>