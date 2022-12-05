<?php
 
if(isset($_POST['almacenar'])){

    $identificador = $_POST['identificador'];
    $comentario1 = $_POST['comen1'];
    $comentario2 = $_POST['comen2'];
    $comentario3 = $_POST['comen3'];


require 'conexion.php';
    $sql = $conexion2->query("SELECT identificador from comentarios2022 where identificador = '$identificador'");
    $result = mysqli_fetch_assoc($sql);
    $ide = $result['identificador'];
if($ide == ''){
    $sql1 = $conexion2->query("INSERT INTO comentarios2022 (id_comentario, identificador, comentario1, comentario2, comentario3) values(null, '$identificador', '$comentario1','$comentario2','$comentario3')");
}else{
    $sql1 = $conexion2->query("UPDATE comentarios2022 set comentario1 = '$comentario1', comentario2='$comentario2', comentario3='$comentario3' where identificador = '$identificador'");
}
    if($sql1 != false){

         echo "<script>alert('Tus datos han sido capturados exitosamente');
        location.href='principal';</script>";

        
    }else{
        echo "<script>alert('Error inesperado, si el error persiste cerrar la ventana y comunicarse al area de recursos humanos');
        window.history.back();</script>";
    }

}
?>