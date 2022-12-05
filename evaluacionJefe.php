<?php session_start();
    if(isset($_SESSION['usuarioJefe'])){
        require 'frontend/jefeEvaluacion.php';
    }else{
        header ('location: index');
    }
   
?>