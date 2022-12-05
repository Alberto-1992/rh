<?php session_start();
    if(isset($_SESSION['jefe'])) {
        require 'frontend/autorizacionMetas.php';
        
    }else{
 
        header('location: login.php');
   
}
?>