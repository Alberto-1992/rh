<?php session_start();
    if(isset($_SESSION['operativo'])){
        require 'frontend/operativo';
    }else{
        header ('location: indexOperativo.php');
    }
        
?>