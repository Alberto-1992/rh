<?php session_start();
        if(isset($_SESSION['operativo'])) {
        
            require 'frontend/evaluarOper.php'; 
            
        }else{
            header('location: login');
 
    }


?>