<?php

$val = $_POST['val'];
$valo = $_POST['valo'];

$vall = $_POST['vall'];
$valoo = $_POST['valoo'];

$valll = $_POST['valll'];
$valooo = $_POST['valooo'];

$vallll = $_POST['vallll'];
$valoooo = $_POST['valoooo'];

$valllll = $_POST['valllll'];
$valooooo = $_POST['valooooo'];

$vallllll = $_POST['vallllll'];
$valoooooo = $_POST['valoooooo'];


require 'conexion.php';

    $sql = $conexion2->query("UPDATE descripcionesmetas set nivelescumplimiento1='$val' where id_empleado='$valo'");
    $sql = $conexion2->query("UPDATE descripcionesmetas set nivelescumplimiento2='$vall' where id_empleado='$valoo'");
    $sql = $conexion2->query("UPDATE descripcionesmetas set nivelescumplimiento3='$valll' where id_empleado='$valooo'");
    $sql = $conexion2->query("UPDATE descripcionesmetas set nivelescumplimiento4='$vallll' where id_empleado='$valoooo'");
    
     $sql = $conexion2->query("UPDATE descripcionesmetas set nivelescumplimiento5='$valllll' where id_empleado='$valooooo'");
     
      $sql = $conexion2->query("UPDATE descripcionesmetas set nivelescumplimiento6='$vallllll' where id_empleado='$valoooooo'");



?>