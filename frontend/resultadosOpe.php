<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="Highcharts-4.1.5/js/highcharts.js"></script>
        <script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
        <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
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

$sql = $conexion2->query("SELECT sum(valor) as total from competencias where transerval = '$val5' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total5 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competencias where transerval = '$val4' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total4 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competencias where transerval = '$val3' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total3 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competencias where transerval = '$val2' and  identificador = '$eval'");
$result = mysqli_fetch_assoc($sql);

$total2 = $result['total'];

$sql = $conexion2->query("SELECT sum(valor) as total from competencias where transerval = '$val1' and  identificador = '$eval'");
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


<div class="contenedor" style="width: 65%; height: auto; margin-left: auto; margin-right: auto;">
<script type="text/javascript">
	$(function(){
 $('#horizontal').highcharts({
        chart: {
            type: 'bar'
            
            
        },
        title: {
            text: 'Graficos ponderacion obtenida'
        },
        subtitle: {
            text: 'HRAEI'
        },
        xAxis: {
            categories: [
			
			['<?php echo $val5 ?>'],
			
			
			['<?php echo $val4 ?>'],
			
			
			['<?php echo $val3 ?>'],
			
			
			['<?php echo $val2 ?>'],
		
			
			['<?php echo $val1 ?>'],
					
			],
            title: {
                text: null
            }
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
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Puntaje obtenido',
            data: [
			<?php
$sql = $conexion2->query("SELECT sum(valor) as total from competencias where transerval = '$val5' and  identificador = '$eval'");
while($res=mysqli_fetch_array($sql)){			
?>			
			[<?php echo $res['total'] ?>],
		
<?php
}
?>	
<?php
$sql = $conexion2->query("SELECT sum(valor) as total2 from competencias where transerval = '$val4' and  identificador = '$eval'");
while($res2=mysqli_fetch_array($sql)){			
?>			
			[<?php echo $res2['total2'] ?>],
		
<?php
}
?>	
<?php
$sql = $conexion2->query("SELECT sum(valor) as total3 from competencias where transerval = '$val3' and  identificador = '$eval'");
while($res3=mysqli_fetch_array($sql)){			
?>			
			[<?php echo $res3['total3'] ?>],
		
<?php
}
?>
<?php
$sql = $conexion2->query("SELECT sum(valor) as total4 from competencias where transerval = '$val4' and  identificador = '$eval'");
while($res4=mysqli_fetch_array($sql)){			
?>			
			[<?php echo $res4['total4'] ?>],
		
<?php
}
?>
<?php
$sql = $conexion2->query("SELECT sum(valor) as total5 from competencias where transerval = '$val5' and  identificador = '$eval'");
while($res5=mysqli_fetch_array($sql)){			
?>			
			[<?php echo $res5['total5'] ?>],
		
<?php
}
?>
		
			]
        }]
    });
});
</script>

<div id="horizontal" style="height: 700px;"></div>
</div>
<div class="table-responsive"> 
  
 
  <table class="table table-bordered table-striped" style="width: 50%; margin-left: auto; margin-right:auto; margin-top: 50px;">
   
  <thead> 
   
  <tr  style="color: white; background: green;">
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
  
  <tr>
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
  <form action="capturacomentarios.php" method="POST">
      <center><h5>Para finalizar ingresa la informacion requerida en los siguiente tres recuadros. GRACIAS!</h5></center>
  <center><textarea name="comentarios" rows="4" cols="70" required placeholder="ALGUNA OPINION QUE NOS AYUDE A MEJORAR NUESTRO PROCESO DE EVALUACIÓN"></textarea>&nbsp<textarea name="comentarios" rows="4" cols="70" required></textarea>&nbsp<textarea name="comentarios" rows="4" cols="70" required placeholder="AREAS DE OPORTUNIDAD"></textarea></center><br>
<center><input type="submit" value="Finalizar" class="btn btn-warning" style="width: 250px;" name="captura"></center>
</form>
</body>
</html>