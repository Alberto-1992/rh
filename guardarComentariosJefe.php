<?php
 
if(isset($_POST['guardar'])){

    $identificador = $_POST['identificador'];
    $comentariojefe1 = $_POST['comentariosjefe1'];
    $comentariojefe2 = $_POST['comentariosjefe2'];
    $comentariojefe3 = $_POST['comentariosjefe3'];
require 'conexion.php';
$query = $conexion2->query("UPDATE personaloperativo2022 set estadocompetenciasjefe2022 = 1 where rfc = '$identificador'");
$sql = $conexion2->query("SELECT identificador from comentarios2022 where identificador = '$identificador'");
$result = mysqli_fetch_assoc($sql);
$ide = $result['identificador'];
if($ide == ''){
    $sql1 = $conexion2->query("INSERT INTO comentarios2022 (id_comentario, identificador, comentariojefe1, comentariojefe2, comentariojefe3) values(null, '$identificador', '$comentariojefe1','$comentariojefe2','$comentariojefe3')");
}else{
    $sql1 = $conexion2->query("UPDATE comentarios2022 set comentariojefe1 = '$comentariojefe1', comentariojefe2='$comentariojefe2', comentariojefe3='$comentariojefe3' where identificador = '$identificador'");
}
    if($sql1 != false){

        echo "<script>alert('Gracias por participar tu datos han sido guardados exitosamente');
        location.href='evaluacionJefe.php'</script>";

        
    }else{
        echo "<script>alert('Error inesperado, si error persiste cerrar la ventana y comunicarse al area de recursos humanos');
        window.history.back();</script>";
    }
}

?>