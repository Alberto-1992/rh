<?php session_start();
   if(isset($_SESSION['usuarioDatos'])){
         $usernameSesion = $_SESSION['usuarioDatos'];
            require '../cisfa/conexion.php';
			$statement = $conexion->prepare("SELECT correo, rol, password FROM usuarioslogeo WHERE correo= '$usernameSesion' AND rol = 7");
                 $statement->execute(array(
                        ':correo' => $usernameSesion
                    ));
                    $rw = $statement->fetch();
                    if($rw != false){
                         $_SESSION['usuarioDatos'] = $usernameSesion;
                            require 'frontend/informacion.php';
                    }else{
                        echo "<script>alert('No tienes acceso a este apartado');
                        </script>;";
                         require 'close_sesion.php';
                    }
   }else if(isset($_SESSION['usuarioMedico'])){
        $usernameSesion = $_SESSION['usuarioMedico'];
            require '../cisfa/conexion.php';
			$statement = $conexion->prepare("SELECT correo, rol, password FROM usuarioslogeo WHERE correo= '$usernameSesion' and rol = 9 and eliminado = 0");
                 $statement->execute(array(
                        ':correo' => $usernameSesion
                    ));
                    $rw = $statement->fetch();
                    if($rw != false){
                         $_SESSION['usuarioMedico'] = $usernameSesion;
                            require 'frontend/informacion.php';
                    }else{
                        echo "<script>alert('No tienes acceso a este apartado');
                        </script>;";
                         require 'close_sesion.php';
                    }
        
    }else{
        
        header('location: login.php');
 
}
?>