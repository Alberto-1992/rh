<?php session_start();
    if(isset($_SESSION['usuario'])) {
        require 'nivelescumplimiento.php'; 
        
    }else{
        
        header('location: login.php');
            
    
    }
?>