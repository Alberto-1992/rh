<?php

$val = $_POST['val'];
$valo = $_POST['valo'];
$valo2 = $_POST['valo2'];
$comunic = $_POST['comunic'];
$pond = 1;
$validar = 0;
require 'conexion.php';

$sql1 = $conexion2->query("SELECT * from competencias2022 where identificador ='$valo2'");
$result = mysqli_fetch_assoc($sql1);

$valor = $result['valor'];
$descripcion = $result['descripcion'];
$rfc = $result['identificador'];
$transerval = $result['transerval'];

if($valor == 0){
$sql = $conexion2->query("INSERT into competencias2022(id_competencia, valor, descripcion, identificador, transerval, ponderacion) values(null, '$val', '$valo', '$valo2', '$comunic', $pond) ");
   //$sql = $conexion2->query("DELETE FROM competenciasjefe where valor = 0");
}
else{
    
$sql = $conexion2->query("UPDATE competencias2022 set valor='$val', transerval='$comunic', ponderacion='$pond' where identificador='$valo2' and descripcion ='$valo'"); 
}

if($valor != $validar){
$sqls = $conexion2->query("SELECT * from competencias2022 where identificador ='$valo2' and valor = '$val' and descripcion = '$valo'");
$results = mysqli_fetch_assoc($sqls);

$valor = $results['valor'];
$descripcion2 = $results['descripcion'];
$rfc2 = $results['identificador'];
$transerval = $results['transerval'];

if($valor != $val || $descripcion2 != $valo){
    $sql = $conexion2->query("INSERT into competencias2022(id_competencia, valor, descripcion, identificador, transerval, ponderacion) values(null, '$val', '$valo', '$valo2', '$comunic', $pond) "); 

}
    

}

?>