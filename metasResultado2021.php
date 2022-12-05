<?php session_start();
    if(isset($_SESSION['usuarioDatos'])){
         $usernameSesion = $_SESSION['usuarioDatos'];
            require 'conexion.php';
			$query ="SELECT correo, id_empleado from personaloperativo2022 where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $id = $rw['correo'];
                    if($rw != false){
                         $_SESSION['usuarioDatos'] = $id;
                            require 'consultaMetasResultado2022.php'; 
                    }else{
                        echo "<script>alert('No tienes acceso a este apartado');
                        </script>;";
                         require 'close_sesion.php';
                    }
    }else if(isset($_SESSION['usuarioMedico'])){
         $usernameSesion = $_SESSION['usuarioMedico'];
            require 'conexion.php';
			$query ="SELECT correo, id_empleado from personaloperativo2022 where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $id = $rw['correo'];
                    if($rw != false){
                         $_SESSION['usuarioMedico'] = $id;
                            require 'consultaMetasResultado2022.php'; 
                    }else{
                        echo "<script>alert('No tienes acceso a este apartado');
                        </script>;";
                         require 'close_sesion.php';
                    }
    }else{
        header ('location: index');
    }
   
?>