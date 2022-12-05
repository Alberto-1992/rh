<?php session_start();
    if(isset($_SESSION['operativo'])) {
        header('location: operativo.php'); 
        
    }else{
        header('location: login.php');
    }


?>