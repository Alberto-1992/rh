<?php session_start(); 

$correo = $_POST['folio'];
require 'conexion.php';

$sql = $conexion2->query("UPDATE personaloperativo2022 set eliminado = 0, rol = 1 where correo = '$correo'");
if($sql != false) {
					echo "<script>swal({
                                title: 'Good job!',
                                text: 'Usuario activado!',
                                icon: 'success',
                        });</script>";	
                     
					  }else {
                        
                        echo "<script>swal({
                                title: 'Fatal!',
                                text: 'Error al activar usuario!',
                                icon: 'error',
                                });</script>"; 
					    }
?>