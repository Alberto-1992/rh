<?php session_start();
error_reporting(0);
if(isset($_SESSION['usuario'])) {
    header('location: index.php');
}
if(isset($_SESSION['operativo'])) {
    header('location: indexOperativo.php');
}
if(isset($_SESSION['admin'])) {
    header('location: indexAdmin.php');
}
if(isset($_SESSION['jefe'])) {
    header('location: evaluacionJefe.php');
}

$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $correo = $_POST['usuario'];
    $password = $_POST['password'];
    //$password = hash('sha512', $password);
    
    
    require "conexion.php";
    
   // $statement = $conexion->prepare("SELECT name from login2 where correo = '$correo' limit 1");
    //$result = mysqli_query($conexion, $statement);
    
    $statement = $conexion->prepare('SELECT correo, password FROM usuarioslogeo WHERE correo= :usuario AND password = :password and rol = 7 and eliminado = 0');
   
    $statement->execute(array(
        
        ':usuario' => $correo,
        ':password' => $password
    ));
   
    $resultado = $statement->fetch();
    if ($resultado != false){
        $_SESSION['usuario'] = $correo ;
        header('location: principal');
    
   
    }else{
        
        $statement = $conexion->prepare('SELECT correo, rfc FROM personaloperativo2022 WHERE correo= :usuario AND rfc = :password and rol = 2');
   
        $statement->execute(array(
            
            ':usuario' => $correo,
            ':password' => $password
        ));
       
        $resultado = $statement->fetch();
        if ($resultado != false){
            $_SESSION['operativo'] = $correo ;
            header('location: operativo');
    }
         else{
        $statement = $conexion->prepare('SELECT * FROM administrador WHERE correo= :usuario AND password = :password and rol = 3');
   
        $statement->execute(array(
            
            ':usuario' => $correo,
            ':password' => $password
        ));
       
        $resultado = $statement->fetch();
        if ($resultado != false){
            $_SESSION['admin'] = $correo ;
            header('location: admin');
    }else{
        $statement = $conexion->prepare('SELECT * FROM jefes2022 WHERE correo= :usuario AND rfc = :password and rol = 4 and eliminado = 4');
   
        $statement->execute(array(
            
            ':usuario' => $correo,
            ':password' => $password
        ));
       
        $resultado = $statement->fetch();
        if ($resultado != false){
            $_SESSION['jefe'] = $correo ;
            header('location: evaluacionJefe');
    }
    
        echo "<script>alert('Error de usuario o contraseña');</script>";
         } 

}
}
}
require 'frontend/login-vista.html';

?>