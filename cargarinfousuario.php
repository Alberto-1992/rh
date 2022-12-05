<?php

if(isset($_POST['capturausuario'])){

    $id_empleado =$_POST['id_empleado'];
    $rfc =$_POST['rfc'];
    $apellidomaterno =$_POST['apellidomaterno'];
    $apellidopaterno =$_POST['apellidopaterno'];
    $nombre =$_POST['nombre'];
    $correo =$_POST['correo'];
    $puesto =$_POST['puesto'];
    $id_jefe =$_POST['id_jefe'];
    $nombrejefe =$_POST['nombrejefe'];
    $puestojefe =$_POST['puestojefe'];
    $tiposervidor =$_POST['tiposervidor'];
    $correojefe = $_POST['correojefe'];
    $rfcjefedelfjefe = $_POST['rfcjefedeljefe'];
    $nombrejefedeljefe = $_POST['nombrejefedeljefe'];
    $puestojefedeljefe = $_POST['puestojefedeljefe'];
    $correojefedeljefe = $_POST['correojefedeljefe'];
    $descripcion1 = $_POST['descripcion1'];
    $descripcion2 = $_POST['descripcion2'];
    $descripcion3 = $_POST['descripcion3'];
    $descripcion4 = $_POST['descripcion4'];
    $descripcion5 = $_POST['descripcion5'];

    require 'conexion.php';
    
    $sql_l = $conexion2->query("SELECT id_empleado from personaloperativo2022 where id_empleado = $id_empleado");
    $row = mysqli_fetch_assoc($sql_l);
    $validar = $row['id_empleado'];
    
    if($validar != $id_empleado){

    $sql =$conexion2->query("INSERT INTO personaloperativo2022 (id_empleado, rfc, apellidomaterno, apellidopaterno, nombre, correo, puesto,
    descripcionestructura1, descripcionestructura2, descripcionestructura3, descripcionestructura4, descripcionestructura5, id_jefe, nombrejefe, puestojefe, tiposervidor, correojefe, id_jefedeljefe, nombrejefedeljefe , puestojefedelfefe, correojefedeljefe, rol, eliminado, evalua, vistobueno, actualiza, estadocompetencias, finalizofecha, codigo) 
    values($id_empleado, '$rfc', '$apellidopaterno', '$apellidomaterno', '$nombre', '$correo', '$puesto', '$descripcion1', '$descripcion2', '$descripcion3', '$descripcion4', '$descripcion5', '$id_jefe', '$nombrejefe', '$puestojefe',
    '$tiposervidor', '$correojefe', '$rfcjefedelfjefe', '$nombrejefedeljefe', '$puestojefedeljefe', '$correojefedeljefe', 1,0,0,4,1,0,'0000-00-00',0)");

    if($sql != false){
        echo "<script>alert('Actualizacion exitosa');
        window.history.back();</script>";
    }else{
        echo "<script>alert('Error al actualizar informacion');
        window.history.back();</script>"; 
    }
}else{
    echo "<script>alert('Ya se encueentra un trabajador registrado con este numero de empleado');
        window.history.back();</script>";
}

}
?>