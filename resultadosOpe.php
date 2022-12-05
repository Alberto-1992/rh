<?php
if(isset($_SESSION['operativo'])) {
            require 'frontend/resultadosOpe.php'; 
            
        }else{
            header('location: login.php');
        }
?>