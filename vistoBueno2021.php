<?php session_start();
    if(isset($_SESSION['usuarioJefe'])) {
        require 'frontend/autorizacionMetasResultado2021.php';
        
    }else{
 
        header('location: index');
   
}
?>