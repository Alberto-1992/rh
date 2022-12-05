<?php session_start();
        if(isset($_SESSION['operativo'])) {
        
            require 'frontend/evaluacionDesempenoOpe.php'; 
            
        }else{
            header('location: login.php');
        
    }


?>