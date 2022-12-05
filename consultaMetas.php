<?php
if (isset($_SESSION['usuarioDatos'])){
    $usernameSesion = $_SESSION['usuarioDatos'];
    require 'conexion.php';
    $query ="SELECT correo, id_empleado from personaloperativo2022 where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $id = $rw['id_empleado'];

}else if (isset($_SESSION['usuarioMedico'])){
    $usernameSesion = $_SESSION['usuarioMedico'];
    require 'conexion.php';
    $query ="SELECT correo, id_empleado from personaloperativo2022 where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $id = $rw['id_empleado'];
}

$sql = $conexion2->query("SELECT * FROM personaloperativo2022 where id_empleado = $id");
$result = mysqli_fetch_assoc($sql);

if($result != false){
 
    require 'frontend/capturaMetas.php';
    
}else{
    echo "<script>alert('Error inesperado');
    window.history.back();</script>";
}



?>
