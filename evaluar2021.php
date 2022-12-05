<?php session_start();
    if(isset($_SESSION['usuarioDatos'])){
         $usernameSesion = $_SESSION['usuarioDatos'];
            require 'conexion.php';
			$query ="SELECT * from personaloperativo2022 where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $id = $rw['correo'];
                    if($rw != false){
                         $_SESSION['usuarioDatos'] = $id;
                            require 'frontend/evaluar2021.php'; 
                    }else{
                        echo "<script>alert('No tienes acceso a este apartado');
                        </script>;";
                         require 'close_sesion.php';
                    }
    }else{
        header ('location: index');
    }
   
?>