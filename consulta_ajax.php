<?php
$val = $_POST['val'];
$valo = $_POST['valo'];
$valo2 = $_POST['valo2'];
$comunic = $_POST['comunic'];
$pond = 1;

require 'conexion.php';

$sql1 = $conexion2->query("SELECT * from competencias where identificador ='$valo2'");
$result = mysqli_fetch_assoc($sql1);

$valor = $result['valor'];
$descripcion = $result['descripcion'];
$rfc = $result['identificador'];

if(is_null($valor)){
    $sql = $conexion2->query("INSERT into competencias(id_competencia, valor, descripcion, identificador, transerval, ponderacion) values(null, '$val', '$valo', '$valo2', '$comunic', $pond) ");
   
    
}else {
    $sql = $conexion2->query("UPDATE competencias set valor='$val', transerval='$comunic', ponderacion='$pond' where identificador='$valo2' and descripcion ='$valo'");
}if ($valor != $val || $descripcion != $valo || $rfc == $valo2 ){
    $sql = $conexion2->query("INSERT into competencias(id_competencia, valor, descripcion, identificador, transerval, ponderacion) values(null, '$val', '$valo', '$valo2', '$comunic', $pond) ");
}

$sql = $conexion2->query("DELETE FROM competencias where valor is null");


?>