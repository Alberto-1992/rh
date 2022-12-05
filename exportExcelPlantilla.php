<?php
  require 'conexion.php';
	
	//Consulta
    $sql = "SELECT * from personaloperativo2022 where eliminado = 0" ;

$salida = "";
$salida .= "<table style='color: black; font-size: 14px;' border=1>";
$buscarAlumnos=mysqli_query($conexion2,$sql);
   if(!empty($buscarAlumnos) AND mysqli_num_rows($buscarAlumnos)>0)
    {
      
       
        $salida.= 
        
        '<th>ID EMPLEADO</th><th>RFC</th><th>CORREO</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>NOMBRE</th><th>CAPTURO METAS</th>';
        
while($r = $buscarAlumnos->fetch_assoc()){
  $vobo2021 = $r['vistobueno'];
  
  if($vobo2021 == 1){
      $capturo = 'SI CAPTURO';
  }elseif($vobo2021 == 4){
      $capturo = 'SIN CAPTURA';
  }elseif($vobo2021 == 3){
      $capturo = 'METAS RECHAZADAS';
  } 
       
    $salida .= "<tr>
    <td>".$r['id_empleado']."</td>
    <td>".$r['rfc']."</td>
    <td>".$r['correo']."</td>
    <td>".$r['apellidopaterno']."</td>
    <td>".$r['apellidomaterno']."</td>
    <td>".$r['nombre']."</td>
    <td>".$capturo."</td>
    
   
    
  
    </tr>";
        
    }
    
}
else{
    
}
$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=plantilla_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
?>