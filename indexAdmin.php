<?php session_start();
    if(isset($_SESSION['admin'])) {
        header('location: admin.php'); 
        
    }else{
        header('location: login.php');
    }


?>