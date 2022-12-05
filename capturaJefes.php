<?php session_start();
    if(isset($_SESSION['usuario'])) {
        require 'frontend/capturaJefes.php'; 
        
    }else{
        header('location: login.php');
    }


?>