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

<body >

</script>
<style type="text/css"> 
    body{
  background:url(https://www.gacm.gob.mx/images/aguilaiori.png);

}
</style>

<?php
include("cabeceraJefe.php");
//include("menu.php");

$nombre = $result['nombrecompleto'];

    ?>


<div class="datosEvaluado">

<h1>Datos de evaluado</h1><br><br><br>
<div class="form-group">
                                <strong style="color: black; margin-left: 25px;">Número de nómina</strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['rfc']; ?>">
                                </div>

                            </div>
                            <div class="contend" style="width: 800px; height: 320px; background: withe; float:right; margin-right: 100px; margin-top: -65px;">
                            <div class="form-group">
                            <div class="input-group" style="width: 100%; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo "HRAEI"; ?>">
                                </div>

                            </div>
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
                                        onkeyup="mayus(this);" onclick="validar();" id="inputForm" value="<?php echo $result['descripcionestructura6']; ?>">
                                </div>

                            </div>
                            
                         </div>

                            <div class="form-group">
                                <strong style="color: black; margin-left: 25px;">Nombre completo</strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nombreEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['nombre']." ". $result['appaterno']." ".$result['apmaterno']; ?>">
                                </div>

                            </div>

                            <div class="form-group">
                                <strong style="color: black; margin-left: 25px;">Puesto</strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['puesto']; ?>">
                                </div>

                            </div>
<!--
                            <h1>Funciones</h1><br><br><br>
                            <div class="form-group">
                                <div class="input-group" style="width: 40%; margin-left: 25px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group" style="width: 40%; margin-left: 25px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group" style="width: 40%; margin-left: 25px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group" style="width: 40%; margin-left: 25px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group" style="width: 40%; margin-left: 25px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="">
                                </div>

                            </div>
                            -->
                        </div>
        <!--               
<div class="datosEvaluador">
<h1>Datos del evaluador</h1><br><br><br>
<div class="form-group">

                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="" type="hidden" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['correo']; ?>">
                                </div>

                            </div>
                            <div class="form-group">
                            <strong style="color: black; margin-left: 25px;">correo </strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['correojefe']; ?>">
                                </div>

                            </div>
<div class="form-group">
                                <strong style="color: black; margin-left: 25px;">Número de nómina</strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="numeroEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['id_jefe']; ?>">
                                </div>

                            </div>

                            <div class="form-group">
                                <strong style="color: black; margin-left: 25px;">Nombre</strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="nombreEvaluado" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['nombrejefe']; ?>">
                                </div>

                            </div>

                            <div class="form-group">
                                <strong style="color: black; margin-left: 25px;">Puesto</strong>
                                <div class="input-group" style="width: 40%; margin-left: 25px; ">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="puestoEvaluador" type="text" class="form-control" readonly="readonly"
                                        onkeyup="mayus(this);" value="<?php echo $result['puestojefe']; ?>">
                                </div>

                            </div>
                            -->
                            <a href="consultaDatosJefe?id=<?php echo base64_encode($result['id_jefe']);?>&correo=<?php echo base64_encode($result['correo']);?>&name=<?php echo base64_encode($nombre); ?>" class="btn btn-warning" style="width: 190px; color:black; margin-right: auto; margin-left: auto; display: block; margin-top: 420px;">Continuar</a>

</div>

<div class="final" style="height: auto; background: #185F31; font-size: 100%;">
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