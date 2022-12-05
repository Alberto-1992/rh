<?php session_start();
    if(isset($_SESSION['usuario'])) {
        
        require 'frontend/evaluar.php'; 
        
    }else{
        
            header('location: login');
     
    }


?>