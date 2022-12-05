<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="consultaSuministro.js"></script>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <title>Document</title>
</head>
<?php
$tope = 5;
$tope2 = 25;
$valor = base64_decode($_GET['eval']);
require 'conexion.php';
$sql = $conexion2->query("INSERT INTO competencias (id_competencia, identificador) values(null, '$valor')");


if (isset($_SESSION['usuario'])){
  $usernameSesion = $_SESSION['usuario'];
  
  $query ="SELECT * from personaloperativo where correo = '$usernameSesion' limit 1";
          $res = mysqli_query($conexion2, $query);
          $rw = mysqli_fetch_assoc($res);

          $tiposervidor = $rw['tiposervidor'];
}
$sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 1 and tipopersonal = '$tiposervidor'");
$resul = mysqli_fetch_assoc($sql);
$detalle1 = $resul['nombrecompetencia'];

$sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 6 and tipopersonal = '$tiposervidor'");
$resul2 = mysqli_fetch_assoc($sql);
$detalle2 = $resul2['nombrecompetencia'];

$sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 11 and tipopersonal = '$tiposervidor'");
$resul3 = mysqli_fetch_assoc($sql);
$detalle3 = $resul3['nombrecompetencia'];

$sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 16 and tipopersonal = '$tiposervidor'");
$resul4 = mysqli_fetch_assoc($sql);
$detalle4 = $resul4['nombrecompetencia'];

$sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 21 and tipopersonal = '$tiposervidor'");
$resul5 = mysqli_fetch_assoc($sql);
$detalle5 = $resul5['nombrecompetencia'];
?>
<script>

window.onload =function validar(){
  let validado = true;
  
  
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
<?php
include("cabecera.php");

    ?>

    <input type="submit" style="width: 150px; height: 40px; margin-left: 30px; cursor: pointer; float:left; margin-top: 15px;" class="btn-warning" value="Regresar" id="back" onclick="window.history.back();">

    <?php
        $val = base64_decode($_GET['eval']);

        require 'conexion.php';

    $sql = $conexion2->query("SELECT * from personaloperativo where rfc = '$val'");
    $result = mysqli_fetch_assoc($sql);


    ?>
<div class="datosEvaluado">

<h1>Datos de evaluado</h1><br><br><br>
<div class="form-group col-md-4">
                                <strong style="color: black; margin-left: 25px;">Número de nómina</strong>
                                <div class="input-group" >
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" id="rfc" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['rfc']; ?>">
                                </div>

                            </div>
                            <div class="form-group col-md-4" style="width: 800px; height: 320px; background: withe; float:right; margin-right: 100px; margin-top: -65px;">
                            <div class="form-group">
                            <div class="input-group" >
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo "HRAEI"; ?>">
                                </div>

                            </div>
                            <!--
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-top: -15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['descripcionestructura1']; ?>">
                                </div>

                            </div>
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-top: -15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['descripcionestructura2']; ?>">
                                </div>

                            </div>
                           
                           
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-top: -15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" onload="validar();" id="inputForm2" value="<?php echo $result['descripcionestructura3']; ?>">
                                </div>

                            </div>
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-top: -15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" onload="valida();" id="inputForm3" value="<?php echo $result['descripcionestructura4']; ?>">
                                </div>

                            </div>
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-top: -15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" onload="validar();" id="inputForm4" value="<?php echo $result['descripcionestructura5']; ?>">
                                </div>

                            </div>
                          
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-top: -15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="hidden" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" onclick="validar();" id="inputForm" value="<?php echo $result['funciones6']; ?>">
                                </div>

                            </div>
                            -->
                         </div>

                            <div class="form-group col-md-4">
                                <strong style="color: black; margin-left: 25px;">Nombre</strong>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nombreEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['nombre']." ".$result['apellidopaterno']." ".$result['apellidomaterno']; ?>">
                                </div>

                
                                <strong style="color: black; margin-left: 25px;">Puesto</strong>
                                <div class="input-group" >
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['puesto']; ?>">
                                </div>

                            </div>

                         </div>
<div class="datosEvaluador">
<center><h1 style="font-style: italic; font-size: 27px;">Competencias</h1></center><br>
<div class="form-group">
                 <div class="titulo" >
                    <p>Transversales</p>
                    
                  <?php 
$sql = $conexion2->query("SELECT sum(ponderacion) as total from competencias where identificador = '$val' and transerval = '$detalle1'");
$resultadoFin = mysqli_fetch_assoc($sql);

$test = $resultadoFin['total'];
                  if($test < $tope ){
                    ?>
                <input type="submit" id="comunicacion"  onclick="localizar1();" data-toggle="modal"
                    data-target="#myModal_comunicaciones" data-backdrop="static" data-keyboard="false" value="<?php echo $detalle1; ?>" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: blue; font-size: 20px; float: left; margin-left: 5%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                        <?php 
                  }else{
                      ?>
                    <input type="submit" value="Completado" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: red; font-size: 24px; float: left; margin-left: 40%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                  <?php
                  }
                  ?>
                  <?php 
                  
$sql = $conexion2->query("SELECT sum(ponderacion) as total2 from competencias where identificador = '$val' and transerval = '$detalle2'");
$resultadoFin = mysqli_fetch_assoc($sql);

$test = $resultadoFin['total2'];
                    if($test < $tope ){
                  ?>
                        <input type="submit" id="liderazgo" onclick="localizar2();" data-toggle="modal"
                    data-target="#myModal_liderazgo" data-backdrop="static" data-keyboard="false" value="<?php echo $detalle2; ?>" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: blue; font-size: 20px; float: left; margin-left: 5%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                        <?php 
                  }else{
                      ?>
                      <input type="submit" value="Completado" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: red; font-size: 24px; float: left; margin-left: 40%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                  <?php
                  }
                  ?>
                   <?php 
                  
$sql = $conexion2->query("SELECT sum(ponderacion) as total3 from competencias where identificador = '$val' and transerval = '$detalle3'");
$resultadoFin = mysqli_fetch_assoc($sql);
                  
$test = $resultadoFin['total3'];
                    if($test < $tope ){
                                    ?>
                        <input type="submit" id="orientacion_a_resultados" onclick="localizar3();" data-toggle="modal"
                    data-target="#myModal_orientacion" data-backdrop="static" data-keyboard="false" value="<?php echo $detalle3; ?>" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: blue; font-size: 20px; float: left; margin-left: 5%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                        <?php 
                  }else{
                      ?>
                      <input type="submit" value="Completado" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: red; font-size: 24px; float: left; margin-left: 40%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                        <?php
                  }
                  ?>
                   <?php 
                  
$sql = $conexion2->query("SELECT sum(ponderacion) as total4 from competencias where identificador = '$val' and transerval = '$detalle4'");
$resultadoFin = mysqli_fetch_assoc($sql);
                                    
$test = $resultadoFin['total4'];
                    if($test < $tope ){
                      ?>
                        <input type="submit" id="trabajo_en_equipo" onclick="localizar4();" data-toggle="modal"
                    data-target="#myModal_trabajo_equipo" data-backdrop="static" data-keyboard="false" value="<?php echo $detalle4; ?>" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: blue; font-size: 20px; float: left; margin-left: 5%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                        <?php 
                  }else{
                      ?>
                      <input type="submit" value="Completado" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: red; font-size: 24px; float: left; margin-left: 40%; font-style: italic;"></input><br>
                        <div class="separador" style="margin-top: 10px;"></div>
                        <?php
                  }
                  ?>
                              <?php 
                  
$sql = $conexion2->query("SELECT sum(ponderacion) as total5 from competencias where identificador = '$val'");
$resultadoFin = mysqli_fetch_assoc($sql);
                                                      
$test = $resultadoFin['total5'];
                    if($test < $tope ){
                                        ?>
                    <input type="submit" id="negociacion" onclick="localizar5();" data-toggle="modal"
                    data-target="#myModal_negociacion" data-backdrop="static" data-keyboard="false" value="<?php echo $detalle5; ?>" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: blue; font-size: 20px; float: left; margin-left: 5%; font-style: italic;"></input><br>
                    <div class="separador" style="margin-top: 10px;"></div><br>
                       
                    <?php 
                  }else if($test < $tope2 ){
                      ?>
                        <input type="submit" id="negociacion" onclick="localizar5();" data-toggle="modal"
                    data-target="#myModal_negociacion" data-backdrop="static" data-keyboard="false" value="<?php echo $detalle5; ?>" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: blue; font-size: 20px; float: left; margin-left: 5%; font-style: italic;"></input><h7>Aun tienes modulos por completar, finalizalos para obtenr tus resultados</h7><br>
                    <div class="separador" style="margin-top: 10px;"></div><br>
                        <?php
                  }else{
                  ?>  
                 <input type="submit" value="Completado" style="background: none;  border: none;  cursor: pointer;  outline: inherit; color: red; font-size: 24px; float: left; margin-left: 40%; font-style: italic;"></input><br>                    
                        <div class="separador" style="margin-top: 10px;"></div><br>
                        <center><a href="resultados?eval=<?php echo base64_encode($val); ?>&val1=<?php echo base64_encode($detalle1); ?>&val2=<?php echo base64_encode($detalle2); ?>&val3=<?php echo base64_encode($detalle3); ?>&val4=<?php echo base64_encode($detalle4); ?>&val5=<?php echo base64_encode($detalle5); ?>" class="btn btn-danger">Ver puntaje obtenido</a></center>    
                        <div class="separador" style="margin-top: 10px;"></div><br>
                        <?php
                  }
                  ?>
                    
                 
                 </div><br>
                    
                

</div></div>


<script>
function localizar1()
{ 

let ID_usuario =  $("#comunicacion").val();

let ob = {ID_usuario:ID_usuario};

 $.ajax({
            type: "POST",
            url:"consulta_descripciones.php",
            data: ob,
            beforeSend: function(objeto){
              
            },
            success: function(data)
            { 
             
             $("#tabla_resultado").html(data);
        
            }
         });
}

function localizar2()
{ 

let ID_usuario =  $("#liderazgo").val();

let ob = {ID_usuario:ID_usuario};

 $.ajax({
            type: "POST",
            url:"consulta_descripciones.php",
            data: ob,
            beforeSend: function(objeto){
              
            },
            success: function(data)
            { 
             
             $("#tabla_resultado").html(data);
        
            }
         });
}

function localizar3()
{ 

let ID_usuario =  $("#orientacion_a_resultados").val();

let ob = {ID_usuario:ID_usuario};

 $.ajax({
            type: "POST",
            url:"consulta_descripciones.php",
            data: ob,
            beforeSend: function(objeto){
              
            },
            success: function(data)
            { 
             
             $("#tabla_resultado").html(data);
        
            }
         });
}

function localizar4()
{ 

let ID_usuario =  $("#trabajo_en_equipo").val();

let ob = {ID_usuario:ID_usuario};

 $.ajax({
            type: "POST",
            url:"consulta_descripciones.php",
            data: ob,
            beforeSend: function(objeto){
              
            },
            success: function(data)
            { 
             
             $("#tabla_resultado").html(data);
        
            }
         });
}

function localizar5()
{ 

let ID_usuario =  $("#negociacion").val();

let ob = {ID_usuario:ID_usuario};

 $.ajax({
            type: "POST",
            url:"consulta_descripciones.php",
            data: ob,
            beforeSend: function(objeto){
              
            },
            success: function(data)
            { 
             
             $("#tabla_resultado").html(data);
        
            }
         });
}
</script>
   <div class="final" style="background: #185F31; ">
  <p>
® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
</div>>
</body>
</html>
<?php 

error_reporting(0);
            
		
            

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 1 and tipopersonal = '$tiposervidor'");
          $resul26 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 2 and tipopersonal = '$tiposervidor'");
          $resul27 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 3 and tipopersonal = '$tiposervidor'");
          $resul28 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 4 and tipopersonal = '$tiposervidor'");
          $resul29 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 5 and tipopersonal = '$tiposervidor'");
          $resul30 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 6 and tipopersonal = '$tiposervidor'");
          $resul6 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 7 and tipopersonal = '$tiposervidor'");
          $resul7 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 8 and tipopersonal = '$tiposervidor'");
          $resul8 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 9 and tipopersonal = '$tiposervidor'");
          $resul9 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 10 and tipopersonal = '$tiposervidor'");
          $resul10 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 11 and tipopersonal = '$tiposervidor'");
          $resul11 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 12 and tipopersonal = '$tiposervidor'");
          $resul12 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 13 and tipopersonal = '$tiposervidor'");
          $resul13 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 14 and tipopersonal = '$tiposervidor'");
          $resul14 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 15 and tipopersonal = '$tiposervidor'");
          $resul15 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 16 and tipopersonal = '$tiposervidor'");
          $resul16 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 17 and tipopersonal = '$tiposervidor'");
          $resul17 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 18 and tipopersonal = '$tiposervidor'");
          $resul18 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 19 and tipopersonal = '$tiposervidor'");
          $resul19 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 20 and tipopersonal = '$tiposervidor'");
          $resul20 = mysqli_fetch_assoc($sql);
          
          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 21 and tipopersonal = '$tiposervidor'");
          $resul21 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 22 and tipopersonal = '$tiposervidor'");
          $resul22 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 23 and tipopersonal = '$tiposervidor'");
          $resul23 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 24 and tipopersonal = '$tiposervidor'");
          $resul24 = mysqli_fetch_assoc($sql);

          $sql=$conexion2->query("SELECT descripcionconpetencia FROM catalogocompetencias where identificador = 25 and tipopersonal = '$tiposervidor'");
          $resul25 = mysqli_fetch_assoc($sql);
          
          $sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 1 and tipopersonal = '$tiposervidor'");
          $resul = mysqli_fetch_assoc($sql);
          
          $sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 6 and tipopersonal = '$tiposervidor'");
          $resul2 = mysqli_fetch_assoc($sql);
          
          $sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 11 and tipopersonal = '$tiposervidor'");
          $resul3 = mysqli_fetch_assoc($sql);
          
          $sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 16 and tipopersonal = '$tiposervidor'");
          $resul4 = mysqli_fetch_assoc($sql);
          
          $sql=$conexion2->query("SELECT nombrecompetencia FROM catalogocompetencias where identificador = 21 and tipopersonal = '$tiposervidor'");
          $resul5 = mysqli_fetch_assoc($sql);
		
			  	 
?>
<div id="myModal_comunicaciones" class="modal fade" role="dialog">


<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 1200px; height: auto; color: white; float: right; margin-right: -450px;">
        <div class="modal-header" style="background: green; color: white;">
            <h4 class="modal-title"><?php echo $resul['nombrecompetencia']; ?></h4>
        </div>
        <div class="modal-body">
        
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>

                        <div class="">
                          
                        </div><br>
                    </div>

                    <div class="container" style="margin-top: -25px;">
                   
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table id="table" class="table">
  <thead>
    <tr>
    
      <th>Comportamiento</th>
      <th>Muy caracteristico</th>
      <th>Característico</th>
      <th>Poco característico</th>
      <th>No es característico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <input type="hidden" id="comunic" value="<?php echo $resul['nombrecompetencia']; ?>">
        <input type="hidden" id="inter" value="<?php echo $resul26['descripcionconpetencia']; ?>">
      <td><?php echo $resul26['descripcionconpetencia']; ?> </td>
      <td><input id="intereses" name="intereses" type="radio" onclick="btn_localiz1();" value="20" /></td>
      <td><input id="intereses" name="intereses" type="radio" onclick="btn_localiz1();" value="16"/></td>
      <td><input id="intereses" name="intereses" type="radio" onclick="btn_localiz1();" value="13" /></td>
      <td><input id="intereses" name="intereses" type="radio" onclick="btn_localiz1();" value="6"  /></td>
    </tr>
    <tr>
        <input type="hidden" id="comunic" value="<?php echo $resul['nombrecompetencia']; ?>">
        <input type="hidden" id="inter2" value="<?php echo $resul27['descripcionconpetencia']; ?>">
    <td><?php echo $resul27['descripcionconpetencia']; ?> </td>
      <td><input id="intereses2" name="intereses2" type="radio" onclick="btn_localiz2();" value="20"/></td>
      <td><input id="intereses2" name="intereses2" type="radio" onclick="btn_localiz2();" value="16" /></td>
      <td><input id="intereses2" name="intereses2" type="radio" onclick="btn_localiz2();" value="13"  /></td>
      <td><input id="intereses2" name="intereses2" type="radio" onclick="btn_localiz2();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="comunic" value="<?php echo $resul['nombrecompetencia']; ?>">
    <input type="hidden" id="inter3" value="<?php echo $resul28['descripcionconpetencia']; ?>">
    <td><?php echo $resul28['descripcionconpetencia']; ?> </td>
      <td><input id="intereses3" name="intereses3" type="radio" onclick="btn_localiz3();" value="20" /></td>
      <td><input id="intereses3" name="intereses3" type="radio" onclick="btn_localiz3();" value="16" /></td>
      <td><input id="intereses3" name="intereses3" type="radio" onclick="btn_localiz3();" value="13" /></td>
      <td><input id="intereses3" name="intereses3" type="radio" onclick="btn_localiz3();" value="6" /></td>
    </tr>
    <tr>
    <input type="hidden" id="comunic" value="<?php echo $resul['nombrecompetencia']; ?>">
    <input type="hidden" id="inter4" value="<?php echo $resul29['descripcionconpetencia']; ?>">
    <td><?php echo $resul29['descripcionconpetencia']; ?></td>
      <td><input id="intereses4" name="intereses4" type="radio" onclick="btn_localiz4();" value="20" /></td>
      <td><input id="intereses4" name="intereses4" type="radio" onclick="btn_localiz4();" value="16"  /></td>
      <td><input id="intereses4" name="intereses4" type="radio" onclick="btn_localiz4();" value="13" /></td>
      <td><input id="intereses4" name="intereses4" type="radio" onclick="btn_localiz4();" value="6"/></td>
    </tr>
    <tr>
    <input type="hidden" id="comunic" value="<?php echo $resul['nombrecompetencia']; ?>">
    <input type="hidden" id="inter5" value="<?php echo $resul30['descripcionconpetencia']; ?>">
    <td><?php echo $resul30['descripcionconpetencia']; ?> </td>
      <td><input id="intereses5" name="intereses5" type="radio" onclick="btn_localiz5();" value="20"/></td>
      <td><input id="intereses5" name="intereses5" type="radio" onclick="btn_localiz5();" value="16" /></td>
      <td><input id="intereses5" name="intereses5" type="radio" onclick="btn_localiz5();" value="13"/></td>
      <td><input id="intereses5" name="intereses5" type="radio" onclick="btn_localiz5();" value="6"/></td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-warning" data-dismiss="modal" value="Enviar" onclick="window.location.reload();" >           
<!-- form start -->
                           
<div class="modal-body" >
<style>
    .table tbody tr:hover {
  background-color: gray;
  cursor: pointer;
}

.table tbody tr.selected {
  background-color: red;
}
</style>
    

<script>
  


   function btn_localiz1()
{ 
    let val = $('input[name=intereses]:checked').val()
    let valo =  $("#inter").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#comunic").val();
  
    let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });
}
              

function btn_localiz2()
{ 
    let val = $('input[name=intereses2]:checked').val()
    let valo =  $("#inter2").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#comunic").val();
  
    let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });
              
}
function btn_localiz3()
{ 
    let val = $('input[name=intereses3]:checked').val()
    let valo =  $("#inter3").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#comunic").val();
  
    let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });
              
}
function btn_localiz4()
{ 
    let val = $('input[name=intereses4]:checked').val()
    let valo =  $("#inter4").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#comunic").val();
   
    let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });
              
}
function btn_localiz5()
{ 
    let val = $('input[name=intereses5]:checked').val()
    let valo =  $("#inter5").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#comunic").val();
   
    let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}



 </script>    
                            </div>
                        </div>                           
                    </div>           
                </div>
            </div>
        </div>           
    </div> 
</div>
</div>

<div id="myModal_liderazgo" class="modal fade" role="dialog">


<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 1200px; height: auto; color: white; float: right; margin-right: -450px;">
        <div class="modal-header" style="background: green; color: white;">
            <h4 class="modal-title"><?php echo $resul2['nombrecompetencia']; ?></h4>
        </div>
        <div class="modal-body">
            <p> Edicion .</p>
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>

                         <div class="">
                          
                        </div><br>
                    </div>

                    <div class="container" style="margin-top: -25px;">
                   
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table id="table" class="table">
  <thead>
    <tr>
    
      <th>Comportamiento</th>
      <th>Muy caracteristico</th>
      <th>Característico</th>
      <th>Poco característico</th>
      <th>No es característico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <input type="hidden" id="lidera" value="<?php echo $resul2['nombrecompetencia']; ?>">
    <input type="hidden" id="inter6" value="<?php echo $resul6['descripcionconpetencia']; ?>">
      <td><?php echo $resul6['descripcionconpetencia']; ?></td>
      <td><input name="intereses6" type="radio" onclick="btn_localiz6();" value="20" /></td>
      <td><input name="intereses6" type="radio" onclick="btn_localiz6();" value="16"/></td>
      <td><input name="intereses6" type="radio" onclick="btn_localiz6();" value="13" /></td>
      <td><input name="intereses6" type="radio" onclick="btn_localiz6();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="lidera" value="<?php echo $resul2['nombrecompetencia']; ?>">
    <input type="hidden" id="inter7" value="<?php echo $resul7['descripcionconpetencia']; ?> ">
    <td><?php echo $resul7['descripcionconpetencia']; ?> </td>
      <td><input name="intereses7" type="radio" onclick="btn_localiz7();" value="20"/></td>
      <td><input name="intereses7" type="radio" onclick="btn_localiz7();" value="16" /></td>
      <td><input name="intereses7" type="radio" onclick="btn_localiz7();" value="13"  /></td>
      <td><input name="intereses7" type="radio" onclick="btn_localiz7();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="lidera" value="<?php echo $resul2['nombrecompetencia']; ?>">
    <input type="hidden" id="inter8" value="<?php echo $resul8['descripcionconpetencia']; ?>">
    <td><?php echo $resul8['descripcionconpetencia']; ?></td>
      <td><input name="intereses8" type="radio" onclick="btn_localiz8();" value="20" /></td>
      <td><input name="intereses8" type="radio" onclick="btn_localiz8();" value="16" /></td>
      <td><input name="intereses8" type="radio" onclick="btn_localiz8();" value="13" /></td>
      <td><input name="intereses8" type="radio" onclick="btn_localiz8();" value="6" /></td>
    </tr>
    <tr>
    <input type="hidden" id="lidera" value="<?php echo $resul2['nombrecompetencia']; ?>">
    <input type="hidden" id="inter9" value="<?php echo $resul9['descripcionconpetencia']; ?>">
    <td><?php echo $resul9['descripcionconpetencia']; ?></td>
      <td><input name="intereses9" type="radio" onclick="btn_localiz9();" value="20" /></td>
      <td><input name="intereses9" type="radio" onclick="btn_localiz9();" value="16"  /></td>
      <td><input name="intereses9" type="radio" onclick="btn_localiz9();" value="13" /></td>
      <td><input name="intereses9" type="radio" onclick="btn_localiz9();" value="6"/></td>
    </tr>
    <tr>
    <input type="hidden" id="lidera" value="<?php echo $resul2['nombrecompetencia']; ?>">
    <input type="hidden" id="inter10" value="<?php echo $resul10['descripcionconpetencia']; ?>">
    <td><?php echo $resul10['descripcionconpetencia']; ?></td>
      <td><input name="intereses10" type="radio" onclick="btn_localiz10();" value="20"/></td>
      <td><input name="intereses10" type="radio" onclick="btn_localiz10();" value="16" /></td>
      <td><input name="intereses10" type="radio" onclick="btn_localiz10();" value="13"/></td>
      <td><input name="intereses10" type="radio" onclick="btn_localiz10();" value="6"/></td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-warning" data-dismiss="modal"  value="Enviar" onclick="window.location.reload();">                            
<div class="modal-body" >

    
<script>
   
   function btn_localiz6()
{ 
    let val = $('input[name=intereses6]:checked').val()
    let valo =  $("#inter6").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#lidera").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
              
function btn_localiz7()
{ 
    let val = $('input[name=intereses7]:checked').val()
    let valo =  $("#inter7").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#lidera").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz8()
{ 
    let val = $('input[name=intereses8]:checked').val()
    let valo =  $("#inter8").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#lidera").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz9()
{ 
    let val = $('input[name=intereses9]:checked').val()
    let valo =  $("#inter9").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#lidera").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz10()
{ 
    let val = $('input[name=intereses10]:checked').val()
    let valo =  $("#inter10").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#lidera").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};

$.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}

 </script>    
                            </div>
                        </div>                           
                    </div>           
                </div>
            </div>
        </div>           
    </div> 
</div>
</div>

<div id="myModal_orientacion" class="modal fade" role="dialog">


<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 1200px; height: auto; color: white; float: right; margin-right: -450px;">
        <div class="modal-header" style="background: green; color: white;">
            <h4 class="modal-title"><?php echo $resul3['nombrecompetencia']; ?></h4>
        </div>
        <div class="modal-body">
            <p> Edicion .</p>
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>

                         <div class="">
                          
                        </div><br>
                    </div>

                    <div class="container" style="margin-top: -25px;">
                   
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table id="table" class="table">
  <thead>
    <tr>
    
      <th>Comportamiento</th>
      <th>Muy caracteristico</th>
      <th>Característico</th>
      <th>Poco característico</th>
      <th>No es característico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <input type="hidden" id="orient" value="<?php echo $resul3['nombrecompetencia']; ?>">
    <input type="hidden" id="inter11" value="<?php echo $resul11['descripcionconpetencia']; ?>">
      <td><?php echo $resul11['descripcionconpetencia']; ?> </td>
      <td><input name="intereses11" type="radio" onclick="btn_localiz11();" value="20" /></td>
      <td><input name="intereses11" type="radio" onclick="btn_localiz11();" value="16"/></td>
      <td><input name="intereses11" type="radio" onclick="btn_localiz11();" value="13" /></td>
      <td><input name="intereses11" type="radio" onclick="btn_localiz11();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="orient" value="<?php echo $resul3['nombrecompetencia']; ?>">
    <input type="hidden" id="inter12" value="<?php echo $resul12['descripcionconpetencia']; ?>">
    <td><?php echo $resul12['descripcionconpetencia']; ?> </td>
      <td><input name="intereses12" type="radio" onclick="btn_localiz12();" value="20"/></td>
      <td><input name="intereses12" type="radio" onclick="btn_localiz12();" value="16" /></td>
      <td><input name="intereses12" type="radio" onclick="btn_localiz12();" value="13"  /></td>
      <td><input name="intereses12" type="radio" onclick="btn_localiz12();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="orient" value="<?php echo $resul3['nombrecompetencia']; ?>">
    <input type="hidden" id="inter13" value="<?php echo $resul13['descripcionconpetencia']; ?>">
    <td><?php echo $resul13['descripcionconpetencia']; ?> </td>
      <td><input name="intereses13" type="radio" onclick="btn_localiz13();" value="20" /></td>
      <td><input name="intereses13" type="radio" onclick="btn_localiz13();" value="16" /></td>
      <td><input name="intereses13" type="radio" onclick="btn_localiz13();" value="13" /></td>
      <td><input name="intereses13" type="radio" onclick="btn_localiz13();" value="6" /></td>
    </tr>
    <tr>
    <input type="hidden" id="orient" value="<?php echo $resul3['nombrecompetencia']; ?>">
    <input type="hidden" id="inter14" value="<?php echo $resul14['descripcionconpetencia']; ?>">  
    <td><?php echo $resul14['descripcionconpetencia']; ?></td>
      <td><input name="intereses14" type="radio" onclick="btn_localiz14();" value="20" /></td>
      <td><input name="intereses14" type="radio" onclick="btn_localiz14();" value="16"  /></td>
      <td><input name="intereses14" type="radio" onclick="btn_localiz14();" value="13" /></td>
      <td><input name="intereses14" type="radio" onclick="btn_localiz14();" value="6"/></td>
    </tr>
    <tr>
    <input type="hidden" id="orient" value="<?php echo $resul3['nombrecompetencia']; ?>">
    <input type="hidden" id="inter15" value="<?php echo $resul15['descripcionconpetencia']; ?>">  
    <td><?php echo $resul15['descripcionconpetencia']; ?> </td>
      <td><input name="intereses15" type="radio" onclick="btn_localiz15();" value="20"/></td>
      <td><input name="intereses15" type="radio" onclick="btn_localiz15();" value="16" /></td>
      <td><input name="intereses15" type="radio" onclick="btn_localiz15();" value="13"/></td>
      <td><input name="intereses15" type="radio" onclick="btn_localiz15();" value="6"/></td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-warning" data-dismiss="modal" value="Enviar" onclick="window.location.reload();">                              
<div class="modal-body" >

    
<script>
   
   function btn_localiz11()
{ 
    let val = $('input[name=intereses11]:checked').val()
    let valo =  $("#inter11").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#orient").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz12()
{ 
    let val = $('input[name=intereses12]:checked').val()
    let valo =  $("#inter12").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#orient").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz13()
{ 
    let val = $('input[name=intereses13]:checked').val()
    let valo =  $("#inter13").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#orient").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz14()
{ 
    let val = $('input[name=intereses14]:checked').val()
    let valo =  $("#inter14").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#orient").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz15()
{ 
    let val = $('input[name=intereses15]:checked').val()
    let valo =  $("#inter15").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#orient").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}

 </script>    
                            </div>
                        </div>                           
                    </div>           
                </div>
            </div>
        </div>           
    </div> 
</div>
</div>
<div id="myModal_trabajo_equipo" class="modal fade" role="dialog">


<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 1200px; height: auto; color: white; float: right; margin-right: -450px;">
        <div class="modal-header" style="background: green; color: white;">
            <h4 class="modal-title"><?php echo $resul4['nombrecompetencia']; ?></h4>
        </div>
        <div class="modal-body">
            <p> Edicion .</p>
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>

                         <div class="">
                          
                        </div><br>
                    </div>

                    <div class="container" style="margin-top: -25px;">
                   
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table id="table" class="table">
  <thead>
    <tr>
    
      <th>Comportamiento</th>
      <th>Muy caracteristico</th>
      <th>Característico</th>
      <th>Poco característico</th>
      <th>No es característico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <input type="hidden" id="trabajo" value="<?php echo $resul4['nombrecompetencia']; ?>">
    <input type="hidden" id="inter16" value="<?php echo $resul16['descripcionconpetencia']; ?>">  
      <td><?php echo $resul16['descripcionconpetencia']; ?> </td>
      <td><input name="intereses16" type="radio" onclick="btn_localiz16();" value="20" /></td>
      <td><input name="intereses16" type="radio" onclick="btn_localiz16();" value="16"/></td>
      <td><input name="intereses16" type="radio" onclick="btn_localiz16();" value="13" /></td>
      <td><input name="intereses16" type="radio" onclick="btn_localiz16();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="trabajo" value="<?php echo $resul4['nombrecompetencia']; ?>">
    <input type="hidden" id="inter17" value="<?php echo $resul17['descripcionconpetencia']; ?>"> 
    <td><?php echo $resul17['descripcionconpetencia']; ?> </td>
      <td><input name="intereses17" type="radio" onclick="btn_localiz17();" value="20"/></td>
      <td><input name="intereses17" type="radio" onclick="btn_localiz17();" value="16" /></td>
      <td><input name="intereses17" type="radio" onclick="btn_localiz17();" value="13"  /></td>
      <td><input name="intereses17" type="radio" onclick="btn_localiz17();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="trabajo" value="<?php echo $resul4['nombrecompetencia']; ?>">
    <input type="hidden" id="inter18" value="<?php echo $resul18['descripcionconpetencia']; ?>">
    <td><?php echo $resul18['descripcionconpetencia']; ?></td>
      <td><input name="intereses18" type="radio" onclick="btn_localiz18();" value="20" /></td>
      <td><input name="intereses18" type="radio" onclick="btn_localiz18();" value="16" /></td>
      <td><input name="intereses18" type="radio" onclick="btn_localiz18();" value="13" /></td>
      <td><input name="intereses18" type="radio" onclick="btn_localiz18();" value="6" /></td>
    </tr>
    <tr>
    <input type="hidden" id="trabajo" value="<?php echo $resul4['nombrecompetencia']; ?>">
    <input type="hidden" id="inter19" value="<?php echo $resul19['descripcionconpetencia']; ?>">
    <td><?php echo $resul19['descripcionconpetencia']; ?> </td>
      <td><input name="intereses19" type="radio" onclick="btn_localiz19();" value="20" /></td>
      <td><input name="intereses19" type="radio" onclick="btn_localiz19();" value="16"  /></td>
      <td><input name="intereses19" type="radio" onclick="btn_localiz19();" value="13" /></td>
      <td><input name="intereses19" type="radio" onclick="btn_localiz19();" value="6"/></td>
    </tr>
    <tr>
    <input type="hidden" id="trabajo" value="<?php echo $resul4['nombrecompetencia']; ?>">
    <input type="hidden" id="inter20" value="<?php echo $resul20['descripcionconpetencia']; ?>">
    <td><?php echo $resul20['descripcionconpetencia']; ?></td>
      <td><input name="intereses20" type="radio" onclick="btn_localiz20();" value="20"/></td>
      <td><input name="intereses20" type="radio" onclick="btn_localiz20();" value="16" /></td>
      <td><input name="intereses20" type="radio" onclick="btn_localiz20();" value="13"/></td>
      <td><input name="intereses20" type="radio" onclick="btn_localiz20();" value="6"/></td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-warning" data-dismiss="modal" value="Enviar" onclick="window.location.reload();">                              
<div class="modal-body" >

    
<script>
   
   function btn_localiz16()
{ 
    let val = $('input[name=intereses16]:checked').val()
    let valo =  $("#inter16").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#trabajo").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz17()
{ 
    let val = $('input[name=intereses17]:checked').val()
    let valo =  $("#inter17").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#trabajo").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz18()
{ 
    let val = $('input[name=intereses18]:checked').val()
    let valo =  $("#inter18").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#trabajo").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz19()
{ 
    let val = $('input[name=intereses19]:checked').val()
    let valo =  $("#inter19").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#trabajo").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz20()
{ 
    let val = $('input[name=intereses20]:checked').val()
    let valo =  $("#inter20").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#trabajo").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}

 </script>    
                            </div>
                        </div>                           
                    </div>           
                </div>
            </div>
        </div>           
    </div> 
</div>
</div>

<div id="myModal_negociacion" class="modal fade" role="dialog">


<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 1200px; height: auto; color: white; float: right; margin-right: -450px;">
        <div class="modal-header" style="background: green; color: white;">
            
            <h4 class="modal-title"><?php echo $resul5['nombrecompetencia']; ?></h4>
        </div>
        <div class="modal-body">
            <p> Edicion .</p>
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>

                        <div class="">
                          
                        </div><br>
                    </div>

                    <div class="container" style="margin-top: -25px;">
                   
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table id="table" class="table">
  <thead>
    <tr>
    
      <th>Comportamiento</th>
      <th>Muy caracteristico</th>
      <th>Característico</th>
      <th>Poco característico</th>
      <th>No es característico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <input type="hidden" id="negocio" value="<?php echo $resul5['nombrecompetencia']; ?>">
    <input type="hidden" id="inter21" value="<?php echo $resul21['descripcionconpetencia']; ?>">
      <td><?php echo $resul21['descripcionconpetencia']; ?></td>
      <td><input name="intereses21" type="radio" onclick="btn_localiz21();" value="20" /></td>
      <td><input name="intereses21" type="radio" onclick="btn_localiz21();" value="16"/></td>
      <td><input name="intereses21" type="radio" onclick="btn_localiz21();" value="13" /></td>
      <td><input name="intereses21" type="radio" onclick="btn_localiz21();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="negocio" value="<?php echo $resul5['nombrecompetencia']; ?>">
    <input type="hidden" id="inter22" value="<?php echo $resul22['descripcionconpetencia']; ?>">
    <td><?php echo $resul22['descripcionconpetencia']; ?></td>
      <td><input name="intereses22" type="radio" onclick="btn_localiz22();" value="20"/></td>
      <td><input name="intereses22" type="radio" onclick="btn_localiz22();" value="16" /></td>
      <td><input name="intereses22" type="radio" onclick="btn_localiz22();" value="13"  /></td>
      <td><input name="intereses22" type="radio" onclick="btn_localiz22();" value="6"  /></td>
    </tr>
    <tr>
    <input type="hidden" id="negocio" value="<?php echo $resul5['nombrecompetencia']; ?>">
    <input type="hidden" id="inter23" value="<?php echo $resul23['descripcionconpetencia']; ?>">
    <td><?php echo $resul23['descripcionconpetencia']; ?></td>
      <td><input name="intereses23" type="radio" onclick="btn_localiz23();" value="20" /></td>
      <td><input name="intereses23" type="radio" onclick="btn_localiz23();" value="16" /></td>
      <td><input name="intereses23" type="radio" onclick="btn_localiz23();" value="13" /></td>
      <td><input name="intereses23" type="radio" onclick="btn_localiz23();" value="6" /></td>
    </tr>
    <tr>
    <input type="hidden" id="negocio" value="<?php echo $resul5['nombrecompetencia']; ?>">
    <input type="hidden" id="inter24" value="<?php echo $resul24['descripcionconpetencia']; ?>">
    <td><?php echo $resul24['descripcionconpetencia']; ?> </td>
      <td><input name="intereses24" type="radio" onclick="btn_localiz24();" value="20" /></td>
      <td><input name="intereses24" type="radio" onclick="btn_localiz24();" value="16"  /></td>
      <td><input name="intereses24" type="radio" onclick="btn_localiz24();" value="13" /></td>
      <td><input name="intereses24" type="radio" onclick="btn_localiz24();" value="6"/></td>
    </tr>
    <tr>
    <input type="hidden" id="negocio" value="<?php echo $resul5['nombrecompetencia']; ?>">
    <input type="hidden" id="inter25" value="<?php echo $resul25['descripcionconpetencia']; ?>">
    <td><?php echo $resul25['descripcionconpetencia']; ?> </td>
      <td><input name="intereses25" type="radio" onclick="btn_localiz25();" value="20"/></td>
      <td><input name="intereses25" type="radio" onclick="btn_localiz25();" value="16" /></td>
      <td><input name="intereses25" type="radio" onclick="btn_localiz25();" value="13"/></td>
      <td><input name="intereses25" type="radio" onclick="btn_localiz25();" value="6"/></td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-warning" data-dismiss="modal" value="Enviar" onclick="window.location.reload();">   
<!--
  <a href="resultados.php?eval=<?php echo base64_encode($val); ?>&val1=<?php echo base64_encode($detalle1); ?>&val2=<?php echo base64_encode($detalle2); ?>&val3=<?php echo base64_encode($detalle3); ?>&val4=<?php echo base64_encode($detalle4); ?>&val5=<?php echo base64_encode($detalle5); ?>" class="btn btn-danger">Finalizar</a>                        
-->                       
<div class="modal-body" >

    
<script>
   
   function btn_localiz21()
{ 
    let val = $('input[name=intereses21]:checked').val()
    let valo =  $("#inter21").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#negocio").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz22()
{ 
    let val = $('input[name=intereses22]:checked').val()
    let valo =  $("#inter22").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#negocio").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz23()
{ 
    let val = $('input[name=intereses23]:checked').val()
    let valo =  $("#inter23").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#negocio").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz24()
{ 
    let val = $('input[name=intereses24]:checked').val()
    let valo =  $("#inter24").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#negocio").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}
function btn_localiz25()
{ 
    let val = $('input[name=intereses25]:checked').val()
    let valo =  $("#inter25").val();
    let valo2 =  $("#rfc").val();
    let comunic = $("#negocio").val();
  
  let ob = {val:val, valo:valo, valo2:valo2, comunic:comunic};
  $.ajax({
           type: "POST",
           url:"consulta_descripciones.php",
           data: ob,
           beforeSend: function(objeto){
             
           },
           success: function(data)
           { 
            
            $("#tabla_resultados").html(data);
       
           }
        });        
  
}

 </script>     
 <script>
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});</script>
                            </div>
                        </div>                           
                    </div>           
                </div>
            </div>
        </div>           
    </div> 
</div>
</div>
