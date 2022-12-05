<?php
$ID_usuario = $_POST['ID_usuario'];
$id = $_POST['id'];

require 'conexion.php';

$sql = $conexion2->query("SELECT * from jefes2022 where id_jefe = '$ID_usuario'");
$result = mysqli_fetch_assoc($sql);
$id_jefe = $result['id_jefe'];
$nombre = $result['nombre'];
$rfc = $result['rfc'];
$correo = $result['correo'];
$puesto = $result['puesto'];
$rfcjefe = $result['rfcdeljefe'];
$nombrejefe = $result['nombredeljefe'];
$puestojefe = $result['puestodeljefe'];


$sql = $conexion2->query("UPDATE personaloperativo2022 set id_jefe = '$rfc', nombrejefe = '$nombre', puestojefe ='$puesto', correojefe = '$correo', evalua = $id_jefe, id_jefedeljefe = '$rfcjefe', nombrejefedeljefe = '$nombrejefe', puestojefedelfefe = '$puestojefe' where id_empleado = '$id' ");

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