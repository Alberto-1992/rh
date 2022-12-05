<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
    
</head>

<script>

window.onload =function validar(){
  var validado = true;
  
  
  if($('#inputForm4').val().length == 0){
      
    document.getElementById("inputForm4").hidden = true;
  }else{
    
    document.getElementById("inputForm4").hidden = false; 
  }
  if($('#inputForm3').val().length == 0){
    document.getElementById("inputForm3").hidden = true;
}else{
    document.getElementById("inputForm3").hidden = false;
}
if($('#inputForm2').val().length == 0){
    document.getElementById("inputForm2").hidden = true;
}else{
    document.getElementById("inputForm2").hidden = false;
}
if($('#inputForm').val().length == 0){
    document.getElementById("inputForm").hidden = true;
}else{
    document.getElementById("inputForm").hidden = false;
}
}
</script>

<body style="background: #F3F0F0;">

</script>
<style type="text/css"> 
    body{
  background:url(https://www.gacm.gob.mx/images/aguilaiori.png);

}
</style>

<?php
include("cabeceraJefe.php");
//include("menu.php");

    ?>
 <input type="submit" style="width: 150px; height: 40px; margin-left: 30px; cursor: pointer; float:left; margin-top: 15px;" class="btn-warning" value="Regresar" id="back" onclick="window.history.back();"></input>


<div class="datosEvaluado2">

<h1>Instrucciones</h1><br><br><br>
<div class="form-group">
    <br><div style="margin-left: auto; margin-right: auto; width: 80%; height: auto; border: 1px solid black; margin-top: -15px;">
              <strong style="float: left; margin-left: 70px; font-size: 21px; font-style: italic;">Realizar las evaluaciones de acuerdo a los siguientes estatus.</strong><br><br>              
                            
              <strong style="float: left; margin-left: 80px; font-size: 19px; font-style: italic;">Estatus para competencias.</strong><br><br>   
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Pendiente de evaluar:</strong>&nbspNo se ha realizado la evaluacion<br>
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Incompleta:</strong>&nbspCuando el evaluador deja incompleta la evaluación.<br>
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Falta comentario general:</strong>&nbspSe recomienda agregar un comentario para posteriormente finalizar el proceso de evaluación.<br>
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Terminada:</strong>&nbspSe completó todo el preceso, no se puede modificar.<br><br>

              <strong style="float: left; margin-left: 80px; font-size: 19px; font-style: italic;">Estatus para metas.</strong><br><br>   
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Pendiente de evaluación:</strong>&nbspNo se ha realizado la evaluación de objetivos por su personal a cargo.<br>
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Pendiente de autorizar:</strong>&nbsp No ha realizado el Visto Bueno de objetivos evaluados de su personal a cargo.<br>
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Rechazada:</strong>&nbsp Ha rechazado los objetivos evaluados y esta en espera de volver a ser evaluados.<br>
              <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Autorizada:</strong>&nbspSe completó todo el proceso evaluación de objetivos, no se puede modificar.<br><br> 

                          
</div>
                         
                        </div>
                        </div>
          <!--             
<div class="datosEvaluador2">

<h1 style="float: left; margin-left: 10%; font-size: 18px; font-style: italic">Autoevaluación</h1><br><br><br>
<div class="form-group">
<table class="table" style="width: 40%; height: auto; float: left; margin-left: 10%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Número de nómina</th>
      <th scope="col">Nombre</th>
      <th scope="col">Competencias</th>
    
      
    </tr>
  </thead>
  <tbody>
  <?php 
  /*
  require 'conexion.php';
  
      $sql2 = $conexion2->query("SELECT * from jefes where correo = '$correo'");
      $row = mysqli_fetch_assoc($sql2);
      $nombre = $row['nombre'];
      $rfc = base64_encode($row['rfc']);
      $rfc2 = base64_decode($rfc);
      echo'
      <tr>
      <td>'.$rfc2.'</td>
      <td>'.$nombre.'</td>
      <td><a  href="autoEvaluarJefe?eval='.$rfc.'">evaluar</a></td>

     </tr>';
     */
?>
  </tbody>
  </table><br><br><br><br><br>
 --> <br><br><br><br><br>
<h1 style="float: left; margin-left: 15%; font-size: 18px; font-style: italic; margin-top: 35px;">Evaluación</h1><br><br><br><br>
<div class="form-group"></div>
<table class="table" style="width: 40%; height: auto; float: left; margin-left: -4%; margin-top: 75px;">
  <thead class="thead-dark">
    <tr>
      <th class="col">N° de empleado</th>
      <th class="col">RFC</th>
      <th class="col">Nombre</th>
      <th class="col">Metas 2022</th>
      <th class="col">Estatus 2022</th>
      <th class="col">Competencias</th>
      <th class="col">Estatus competencias</th>
      
    </tr>
  </thead>
  <tbody>
    <style>
      #ubicar{
        margin-left: -250px;
      }
      #tit{
        margin-left: 250px;
      }
      .col{
          font-size: 12px;
      }

    </style>
    <?php 
    
    
    
      while($row_s=$sql->fetch_assoc())
      {
    $validar= $row_s['rfc'];
    $val= base64_encode($row_s['rfc']);
    $id_empleado = base64_encode($row_s['id_empleado']);
    $tipo= base64_encode($row_s['tiposervidor']);
    $vobo = $row_s['vistobueno'];
   $vobo2 = $row_s['vistobuenoResultado2022'];
   // $estadojefe = $row_s['estadocompetenciasjefe'];
   $estadojefe = $row_s['estadocompetenciasjefe2022'];
  /* if($vobo == 1){
       $vo = "AUTORIZADO";
   }elseif($vobo == 2){
       $vo = "PENDIENTE DE VoBo";
   }elseif($vobo == 3){
       $vo = "RECHAZADO";
   }
   elseif($vobo == 0){
       $vo = "SIN CAPTURA";
   }*/
   if($vobo2 == 1){
       $vo2 = "AUTORIZADO";
   }elseif($vobo2 == 2){
       $vo2 = "PENDIENTE DE VoBo";
   }elseif($vobo2 == 4){
       $vo2 = "No Capturo Metas 2022";
   }elseif($vobo2 == 3){
       $vo2 = "Rechazadas Metas 2022";
   }
   elseif($vobo2 == 5){
       $vo2 = "SIN CAPTURA";
   }
   
   if($estadojefe == 1 ){
     $resultado = "Finalizado";
     
   }elseif($estadojefe == 0){
       $resultado = "Sin evaluar";
   }elseif($estadojefe == 2){
       $resultado = "Pendiente de finalizar";
   }
        echo'
        <tr>
        <td>'.$row_s['id_empleado'].'</td>
        <td>'.$row_s['rfc'].'</td>
        <td>'.$row_s['nombre'].'</td>
        <td><a  href="vistoBueno2021?vb='.$val.'&empleado='.$id_empleado.'">VoBo2022</a></td>
        <td>'.$vo2.'</td>
        <td><a  href="evaluarJefe?eval='.$val.'&tiposervidor='.$tipo.'">Competencias 2022</a></td>
        <td>'.$resultado.'</td>

          
        </tr>';
      }



?>
  </tbody>
</table>


    </div>
</div>

 <div class="final" style="background: #185F31;">
  <p>
® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
</div>

<?php

?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>