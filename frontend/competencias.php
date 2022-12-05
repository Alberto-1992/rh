<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>

</head>

<script>
window.onload = function validar() {
    var validado = true;


    if ($('#inputForm4').val().length == 0) {

        document.getElementById("inputForm4").hidden = true;
    } else {

        document.getElementById("inputForm4").hidden = false;
    }
    if ($('#inputForm3').val().length == 0) {
        document.getElementById("inputForm3").hidden = true;
    } else {
        document.getElementById("inputForm3").hidden = false;
    }
    if ($('#inputForm2').val().length == 0) {
        document.getElementById("inputForm2").hidden = true;
    } else {
        document.getElementById("inputForm2").hidden = false;
    }
    if ($('#inputForm').val().length == 0) {
        document.getElementById("inputForm").hidden = true;
    } else {
        document.getElementById("inputForm").hidden = false;
    }
}
</script>

<body style="background: #F3F0F0;">

    </script>
    <style type="text/css">
    body {
        background: url(https://www.gacm.gob.mx/images/aguilaiori.png);

    }
    </style>

    <?php
include("cabecera.php");
//include("menu.php");
    ?>
    <input type="submit"
        style="width: 150px; height: 40px; margin-left: 30px; cursor: pointer; float:left; margin-top: 15px;"
        class="btn-warning" value="Regresar" id="back" onclick="window.location.href='principal'"></input>


    <div class="datosEvaluado2">

        <h1>Instrucciones</h1><br><br><br>
        <div class="form-group">
            <br>
            <div
                style="margin-left: auto; margin-right: auto; width: 80%; height: auto; border: 1px solid black; margin-top: -15px;">
                <strong style="float: left; margin-left: 70px; font-size: 21px; font-style: italic;">Realizar las
                    evaluaciones de acuerdo a los siguientes estatus.</strong><br><br>

                <strong style="float: left; margin-left: 80px; font-size: 19px; font-style: italic;">Estatus para
                    competencias.</strong><br><br>
                <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Pendiente de
                    evaluar:</strong>&nbspNo se ha realizado la evaluacion<br>
                <strong
                    style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Incompleta:</strong>&nbspCuando
                el evaluador deja incompleta la evaluación.<br>
                <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Falta comentario
                    general:</strong>&nbspSe recomienda agregar un comentario para posteriormente finalizar el proceso
                de evaluación.<br>
                <strong
                    style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Terminada:</strong>&nbspSe
                completó todo el preceso, no se puede modificar.<br><br>

                <strong style="float: left; margin-left: 80px; font-size: 19px; font-style: italic;">Estatus para
                    metas.</strong><br><br>
                <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Pendiente de
                    evaluación:</strong>&nbspNo se ha realizado la evaluación de objetivos por su personal a cargo.<br>
                <strong style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Pendiente de
                    autorizar:</strong>&nbsp No ha realizado el Visto Bueno de objetivos evaluados de su personal a
                cargo.<br>
                <strong
                    style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Rechazada:</strong>&nbsp
                Ha rechazado los objetivos evaluados y esta en espera de volver a ser evaluados.<br>
                <strong
                    style="float: left; margin-left: 90px; font-size: 16px; font-style: italic;">Autorizada:</strong>&nbspSe
                completó todo el proceso evaluación de objetivos, no se puede modificar.<br><br>


            </div>

        </div>
    </div>

    <div class="datosEvaluador2">
        <!--
<h1>Evaluaciones asignadas</h1><br><br><br>
<div class="form-group">
<table class="table" style="width: 40%; height: auto; float: left; margin-left: 50px;">
  <thead>
    <tr>
      <th scope="col">Número de nómina</th>
      <th scope="col">Nombre</th>
      <th scope="col">Competencias</th>
      <th scope="col">Metas</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
  /*
      while($row=$sql->fetch_assoc())
      {

        echo'
        <tr>
        <td>'.$row['rfc'].'</td>
        <td>'.$row['nombre'].'</td>
        <td><a href="evaluar.php">Evaluar</a></td>

          
        </tr>';
      }

*/

?>
  </tbody>
  </table>
  -->
        <h1 id="tit">Autoevaluacion</h1><br><br><br><br>
        <div class="form-group"></div>
        <table class="table" style="width: 40%; height: auto; float: left; margin-left: 230px; margin-top: -55px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número de nómina</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Competencias</th>

                </tr>
            </thead>
            <tbody>
                <style>
                #ubicar {
                    margin-left: -250px;
                }

                #tit {
                    margin-left: 250px;
                }
                </style>
                <?php 
    
    
      while($row_s=$sql->fetch_assoc())
      {
    $validar= $row_s['rfc'];
    $val= base64_encode($row_s['rfc']);
    $sql = $conexion2->query("SELECT sum(ponderacion) as total from competencias2022 where identificador = '$validar'");
    $result = mysqli_fetch_assoc($sql);

    $obtenido = $result['total'];
        $valid = 25;
        $valorar = 0;
        
    if($obtenido == $valid ){
     
      ?>
                <a href="evaluar2021?eval=<?php echo $val ?>" id="ubicar">Finalizado</a>
                <?php
    }else
      if($obtenido == $valorar){
   
    ?>
                <a href="evaluar2021?eval=<?php echo $val ?>" id="ubicar">Evaluar</a>
                <?php

    }elseif($obtenido < $valid || $obtenido > 1){
    ?>
                <a href="evaluar2021?eval=<?php echo $val ?>" id="ubicar">Pendiente por finalizar</a>
                <?php
    }
    ?>
                <?php
        
        echo'
        <tr>
        <td>'.$row_s['rfc'].'</td>
        <td>'.$row_s['nombre'].'</td>
        <td>'.$valor.'</td>
        

          
        </tr>';
      }



?>
            </tbody>
        </table>

    </div>
    </div>
    <?php
//include 'footer.php';
?>

    <div class="final" style="background: #285c4d; margin-top: 50px; height: auto">
        <p>
            ® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
            Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
    $(document).bind("contextmenu", function(e) {
        e.preventDefault();
    });
    $(document).keydown(function(e) {
        if (e.which === 123) {
            return false;
        }
    });
    </script>
</body>

</html>