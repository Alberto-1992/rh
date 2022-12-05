<?php
if (isset($_SESSION['operativo'])){
    $usernameSesion = $_SESSION['operativo'];
    require 'conexion.php';
    $query ="SELECT correo from personaloperativo where correo = '$usernameSesion' limit 1";
    $res = mysqli_query($conexion2, $query);
    $rw = mysqli_fetch_assoc($res);
    $nombre = $rw['correo'];

}

$sql = $conexion2->query("SELECT * FROM personaloperativo where correo = '$nombre'");
$result = mysqli_fetch_assoc($sql);

if($result != false){
 
    require 'frontend/capturaMetas.php';
}else{
    echo "<script>alert('Error inesperado');
    window.history.back();</script>";
}
?>