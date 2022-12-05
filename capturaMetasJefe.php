<?php session_start();
    if(isset($_SESSION['usuarioJefe'])) {
        require 'consultaMetasJefe.php';
        
    }else{
 
        header('location: index');
   
}
?>