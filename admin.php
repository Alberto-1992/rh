<?php session_start();
    if(isset($_SESSION['usuarioDatos'])) {
        require 'frontend/admin.php'; 
        
    }else if(isset($_SESSION['usuarioAdmin'])) {
        require 'frontend/admin.php'; 
        
    }else{
        header('location: indexAdmin');
    }


?>