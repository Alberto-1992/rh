<?php session_start();
if(isset($_SESSION['usuarioJefe'])) {

$valor = base64_decode($_GET['Date']);
$correo = base64_decode($_GET['correo']);
$correojefe = base64_decode($_GET['correojefe']);
    
    require 'frontend/metasJefe.php'; 
    
}else{

    header('location: index');

}
?>