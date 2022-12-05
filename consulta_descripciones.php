<?php session_start();
    if(isset($_SESSION['usuarioDatos'])) {
        require 'consulta_ajax2021.php'; 
        
        }else{
            header('location: index');
        }



?>