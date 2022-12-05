<?php session_start();
    if(isset($_SESSION['admin'])) {
        require 'modal/mostrarInfo.php'; 
        
    }else{
        header('location: indexAdmin.php');
    }


?>