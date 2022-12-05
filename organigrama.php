<?php session_start();
    if(isset($_SESSION['admin'])) {
        require 'frontend/organigrama.php'; 
        
    }else{
        header('location: indexAdmin.php');
    }


?>