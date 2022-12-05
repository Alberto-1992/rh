<?php session_start();

    if(isset($_SESSION['operativo'])) {
        require 'frontend/infOperativo.php';
        
    }else{
        header('location: login.php');

}
?>