<?php session_start();
    if(isset($_SESSION['jefe'])) {
        require 'frontend/resultadosjefe.php'; 
        
    }else{
       
            header('location: login');

    }
   

?>