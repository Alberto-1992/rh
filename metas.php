<?php session_start();
    if(isset($_SESSION['usuario'])) {
        require 'frontend/metas.php'; 
        
    }else{
        header('location: login.php');
    }


?>