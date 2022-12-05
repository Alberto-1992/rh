<?php session_start();
    if(isset($_SESSION['jefe'])) {
        
        echo "<script>alert('Hey alto ahi, aun no es fecha de evaluar tus competencias, nosotros te avisareos via correo electronico cuando sea temporada de evaluaciones, GRACIAS!!');
        window.history.back();</script>";
        //require 'frontend/autoEvaluarJefe.php'; 
        
    }else{
        
            header('location: login.php');
     
    }


?>