<?php


    $id_empleado =$_POST['id'];
    $rfc =$_POST['rfc'];
    $curp =$_POST['curp'];
    $apellidomaterno =$_POST['apellidomaterno'];
    $apellidopaterno =$_POST['apellidopaterno'];
    $nombre =$_POST['nombre'];
    $correo =$_POST['correo'];
    $puesto =$_POST['puesto'];
    $tiposervidor =$_POST['tiposervidor'];
    $descripcion1 = $_POST['descripcion1'];
    $descripcion2 = $_POST['descripcion2'];
    $descripcion3 = $_POST['descripcion3'];
    $descripcion4 = $_POST['descripcion4'];
    $descripcion5 = $_POST['descripcion5'];

    require 'conexion.php';

    $sql = $conexion2->query("UPDATE personaloperativo2022 set rfc='$rfc', curp='$curp', apellidomaterno ='$apellidomaterno', apellidopaterno='$apellidopaterno', nombre='$nombre', correo='$correo', puesto='$puesto',
    tiposervidor='$tiposervidor', descripcionestructura1 = '$descripcion1', descripcionestructura2 = '$descripcion2', descripcionestructura3 = '$descripcion3', descripcionestructura4 = '$descripcion4', descripcionestructura5 = '$descripcion5' where id_empleado = $id_empleado");
if($sql != false){
       echo "<script>swal({
                                title: 'Good job!',
                                text: 'Datos guardados exitosamente!',
                                icon: 'success',
                        });</script>";	
                     
					  }else {
                        
                        echo "<script>swal({
                                title: 'Fatal!',
                                text: 'Error al guardar informacion!',
                                icon: 'error',
                                });</script>"; 
					    }


?>