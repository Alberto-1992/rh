<?php session_start();
    if(isset($_SESSION['usuarioDatos'])) {
        require 'frontend/resultados.php'; 
        
    }else{
       
            header('location: index');

    }
   

?>