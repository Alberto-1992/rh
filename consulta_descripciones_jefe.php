<?php session_start();
    
            if(isset($_SESSION['jefe'])) {
                require 'consulta_ajax_jefe2021.php'; 
                
            }else{
                header('location: login.php');
        }
    
    
?>