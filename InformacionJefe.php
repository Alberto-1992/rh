<?php session_start();
    if(isset($_SESSION['usuarioJefe'])) {
        require 'frontend/informacionJefe.php';
        
    }else{
 
        header('location: index');
   
}
?>