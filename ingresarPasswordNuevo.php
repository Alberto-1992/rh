<?php 
      
if (isset($_POST['cambioPassword'] )){
    error_reporting(0);
    $passwordActual =$_POST['passwordAct'];
   // $passwordActual = hash('sha512', $passwordActual);
    $password = $_POST['password'];
    $cpassword= $_POST['cpassword'];
    //$password = hash('sha512', $password);
    //$cpassword = hash('sha512', $cpassword);

        require "conexion.php";
            $sql = "UPDATE usuariosMetas set claveAcceso= '$password' where claveAcceso = '$passwordActual' limit 1";
                if ($conexion->query($sql) == true) {
                    echo "<script>alert('Password actualizado');</script>";      
                }else {
                    echo "ERROR";
                    echo "<script>alert('Error al actualizar');</script>";
           }
          $conexion = null;
        }  
        echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";


?>