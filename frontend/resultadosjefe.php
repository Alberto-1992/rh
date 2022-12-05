<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <title>Document</title>
</head>
<script type="text/javascript">
 function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no-back-button";}
    
}
</script>
<body onload="deshabilitaRetroceso()">


    <?php
$val1 = base64_decode($_GET['val1']);
$val2 = base64_decode($_GET['val2']);
$val3 = base64_decode($_GET['val3']);
$val4 = base64_decode($_GET['val4']);
$val5 = base64_decode($_GET['val5']);
$eval = base64_decode($_GET['eval']);
require 'conexion.php';
$sql_r = $conexion2->query("UPDATE personaloperativo2022 set estadocompetenciasjefe2022 = 1 where rfc = '$eval'");
$sql = $conexion2->query("SELECT identificador from comentarios2022 where identificador = '$eval'");
$res = mysqli_fetch_assoc($sql);
$identificador = $res['identificador'];
if($identificador != $eval){
$sql = $conexion2->query("INSERT INTO comentarios2022 (id_comentario, identificador) values(null, '$eval')");
}else{

}
$sql = $conexion2->query("SELECT sum(valor) as total from competenciasjefe2022 where transerval = '$val5' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total5 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competenciasjefe2022 where transerval = '$val4' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total4 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competenciasjefe2022 where transerval = '$val3' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total3 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competenciasjefe2022 where transerval = '$val2' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total2 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competenciasjefe2022 where transerval = '$val1' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total1 = $result['total'];


$porcentaje5 = $total5;
$porcentaje4 = $total4;
$porcentaje3 = $total3;
$porcentaje2 = $total2;
$porcentaje1 = $total1;

$totalGeneral = $porcentaje1 + $porcentaje2 + $porcentaje3 + $porcentaje4 + $porcentaje5;
$totalFinal = $totalGeneral / 5;
?>

</div>
<div id="container" style="width: 65%; height: 600px; margin: 0 auto"></div>
<div class="table-responsive"> 
  
 
  <table class="table table-bordered table-striped" style="width: 50%; margin-left: auto; margin-right:auto; margin-top: 50px;">
   
  <thead> 
   
  <tr  style="color: white; background: green; text-align: center;">
                <!-- definimos cabeceras de la tabla --> 
  
  <th><?php echo $val5; ?></th>
  <th><?php echo $val4; ?></th>
  <th><?php echo $val3; ?></th>
  <th><?php echo $val2; ?></th>
  <th><?php echo $val1; ?></th>
  <th>Puntaje Final</th>

  </tr>
   
  </thead>
   
   
  <tbody>
      <?php
    
           
          echo '
  
  <tr style="text-align:center;">
  <td>'.$porcentaje5.'%</td>
  <td>'.$porcentaje4.'%</td>
  <td>'.$porcentaje3.'%</td>
  <td>'.$porcentaje2.'%</td>
  <td>'.$porcentaje1.'%</td>
  <td>'.$totalFinal.'%</td>
  

 
                  
  </tr>';
   
         
         
  
         ?>
   
  </tbody>
   
  </table>
<?php 
//$sql = $conexion2->query("DELETE FROM comentarios2021 where comentario1 is null");
$sql = $conexion2->query("SELECT * from comentarios2022 where identificador = '$eval'");
$resultado = mysqli_fetch_assoc($sql);
$comentariojefe1 = $resultado['comentariojefe1'];
$comentariojefe2 = $resultado['comentariojefe2'];
$comentariojefe3 = $resultado['comentariojefe3'];
  ?>
  
  <?php 
  if($comentariojefe1 || $comentariojefe2 || $comentariojefe3 != ''){
      
  ?>
  <form action="evaluacionJefe" method="POST">
      <center><h5 style="color: red;"></h5></center>
      <input type="hidden" name="identificador" value="<?php echo $eval; ?>">
  <center><textarea name="comentarios1" rows="4" cols="70" readonly="readonly" placeholder="AREAS DE OPORTUNIDAD"><?php echo $resultado['comentariojefe1']; ?></textarea>&nbsp<textarea name="comentarios2" rows="4" cols="70"  readonly="readonly"><?php echo $resultado['comentariojefe2']; ?></textarea>&nbsp<textarea name="comentarios3" rows="4" cols="70" readonly="readonly" placeholder="AREAS DE OPORTUNIDAD"><?php echo $resultado['comentariojefe3']; ?></textarea></center><br>
<center><input type="submit" value="Finalizar" class="btn btn-danger" style="width: 250px;" name="guardar"></center>
</form>

<?php
}else{
    ?>
      <form action="guardarComentariosJefe" method="POST">
      <center><h5 style="color: red;">Para finalizar ingresa la informacion requerida en los siguiente tres recuadros. GRACIAS!</h5></center>
      <input type="hidden" name="identificador" value="<?php echo $eval; ?>">
  <center><textarea name="comentariosjefe1" rows="4" cols="70" placeholder="AREAS DE OPORTUNIDAD"></textarea>&nbsp<textarea name="comentariosjefe2" rows="4" cols="70" placeholder="FORTALEZAS"></textarea>&nbsp<textarea name="comentariosjefe3" rows="4" cols="70" placeholder="NECESIDADES DE CAPACITACIÓN"></textarea></center><br>
<center><input type="submit" value="Finalizar" class="btn btn-info" style="width: 250px;" name="guardar"></center>
</form>
<?php
}

?>
</body>
</html>
 <script src="https://code.highcharts.com/highcharts.src.js"></script>
     <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
var grafica = {
    chart: {
        renderTo: 'container',
				type: 'bar'
    },
        title: {
            text: 'Graficos ponderacion obtenida'
        },
        subtitle: {
            text: 'HRAEI'
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Puntaje',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
    tooltip: {
        headerFormat: '<span style="font-size:18px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:4">{series.name}: </td>' +
            '<td style="padding:4"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    
    plotOptions: {
        column: {
            pointPadding: 0,
            borderWidth: 0
        }
    },
    series: []
};

var datosMes = function (data, name,colores) {
    var datosSeries = {
        name: name,
        data: data,
				color: colores
    };
    grafica.series.push(datosSeries);
    var chart = new Highcharts.Chart(grafica);
};
var data1 = [];
<?php
$sql = $conexion2->query("SELECT sum(valor) as total5 from competenciasjefe2022 where transerval = '$val5' and  identificador = '$eval'");
while($res5=mysqli_fetch_assoc($sql)){			
?>
data = [<?php echo $res5['total5'] ?>];
datosMes(data, '<?php echo $val5 ?>','#4BB0FB');
<?php
}
?>
data = [];
<?php
$sql = $conexion2->query("SELECT sum(valor) as total2 from competenciasjefe2022 where transerval = '$val4' and  identificador = '$eval'");
while($res2=mysqli_fetch_array($sql)){			
?>			
		data =	[<?php echo $res2['total2'] ?>],
		datosMes(data, '<?php echo $val4 ?>','blue');
<?php
}
?>

data = [];
<?php
$sql = $conexion2->query("SELECT sum(valor) as total3 from competenciasjefe2022 where transerval = '$val3' and  identificador = '$eval'");
while($res3=mysqli_fetch_array($sql)){			
?>			
		data =	[<?php echo $res3['total3'] ?>],
		datosMes(data, '<?php echo $val3 ?>','#0421D6');
<?php
}
?>
data = [];
<?php
$sql = $conexion2->query("SELECT sum(valor) as total2 from competenciasjefe2022 where transerval = '$val2' and  identificador = '$eval'");
while($res2=mysqli_fetch_array($sql)){			
?>			
		data =	[<?php echo $res2['total2'] ?>],
		datosMes(data, '<?php echo $val2 ?>','#11CDF7 ');
<?php
}
?>
data = [];
<?php
$sql = $conexion2->query("SELECT sum(valor) as total1 from competenciasjefe2022 where transerval = '$val1' and  identificador = '$eval'");
while($res1=mysqli_fetch_array($sql)){			
?>			
		data =	[<?php echo $res1['total1'] ?>],
		datosMes(data, '<?php echo $val1 ?>','#5DC8F7 ');
<?php
}
?>
</script>
