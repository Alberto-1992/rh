<?php session_start();
    if(isset($_SESSION['usuarioDatos'])) {
        require 'nivelescumplimiento2021.php'; 
        
    }else{
        
        header('location: login');
            
    
    }
?>