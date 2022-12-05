<?php
if (isset($_SESSION['usuarioJefe'])){
    $usernameSesion = $_SESSION['usuarioJefe'];
    require 'conexion.php';
    $query ="SELECT * from jefes2022 where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $nombre = $rw['correo'];

}

$sql = $conexion2->query("SELECT * FROM jefes2022 where correo = '$nombre'");
$result = mysqli_fetch_assoc($sql);

if($result != false){
 
    require 'frontend/datosJefe.php';
}else{
    echo "<script>alert('Error inesperado');
    window.history.back();</script>";
}



?>