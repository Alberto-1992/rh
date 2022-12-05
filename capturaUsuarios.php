<?php session_start();
    if(isset($_SESSION['usuario'])) {
        require 'frontend/capturaUsuarios.php'; 
        
    }else{
        header('location: login.php');
    }


?>