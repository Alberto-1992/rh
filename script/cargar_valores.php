<?php

require '../conexion.php';
$valor=$_GET['valor'];

    $jsondata = array();

    $query= $conexion2->query("SELECT * from jefes2022 where nombre= '$valor'");
    $resultados= mysqli_fetch_array($query);

    $rfc=$resultados['rfc'];
    $puesto=$resultados['puesto'];
    $correo=$resultados['correo'];
    
    $rfcdeljefe=$resultados['rfcdeljefe'];
    $puestodeljefe=$resultados['puestodeljefe'];
    $correodeljefe=$resultados['correodeljefe'];
    $nombredeljefe=$resultados['nombredeljefe'];



    $jsondata['rfc'] = $rfc;
    $jsondata['puesto'] = $puesto;
    $jsondata['correo'] = $correo;
    
    $jsondata['rfcdeljefe'] = $rfcdeljefe;
    $jsondata['puestodeljefe'] = $puestodeljefe;
    $jsondata['correodeljefe'] = $correodeljefe;
    $jsondata['nombredeljefe'] = $nombredeljefe;



     header('Content-type: application/json; charset=utf-8');
     echo json_encode($jsondata); 
  
    


?>