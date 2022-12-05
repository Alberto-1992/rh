<?php session_start();
    if(isset($_SESSION['admin'])) {
        require 'frontend/cargausuario.php'; 
        
    }else{
        header('location: indexAdmin.php');
    }


?>