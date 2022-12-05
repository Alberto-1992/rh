<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet"> 
    <link rel="stylesheet" href="iconos/css/all.min.css?n=1">
    <link rel="stylesheet" href="iconos/css/all.css?n=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Registro de metas</title>
</head>
<body>
    <!-- Código de instalación Cliengo para infobeto91@gmail.com --> 
        <?php
        include("cabeceraJefe.php");
        //include("menu.php");

 $date = base64_decode($_GET['empleado']);
 //$correo = base64_decode($_GET['vb']);
 //$correojefe = base64_decode($_GET['correojefe']);
 //$correojefe = "beto_1866@outlook.com";

       
    ?>

 <input type="hidden" name="id" id="id" value="<?php echo $date; ?>">   
 
<div class="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="metas.js"></script>
  
           <div id="cuerpo2" style="background: #FDFEFE;">
               <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, personaloperativo2022.ejeestrategico12022, personaloperativo2022.lineaestrategica22022, personaloperativo2022.correo from descripcionesmetas2022 inner join personaloperativo2022 on personaloperativo2022.id_empleado = $date and descripcionesmetas2022.id_empleado = $date");
               $result = mysqli_fetch_assoc($sql);
               
               $redaccionmeta1 = $result['redacionMeta1'];
               $indicadorMeta1 = $result['indicadorMeta1'];
               $ponderacionMeta1 = $result['ponderacionMeta1'];
               $fechaCumpMeta1 = $result['fechaCumpMeta1'];
               $NivelCumpNoAproMeta1 = $result['NivelCumpNoAproMeta1'];
               $NivelCumpAproMeta1 = $result['NivelCumpAproMeta1'];
               $NivelCumpSatisfMeta1 = $result['NivelCumpSatisfMeta1'];
               $NivelCumpSobreMeta1 = $result['NivelCumpSobreMeta1'];
               $unidadmedida1 = $result['unidadmedida1'];
               $eje2021 = $result['ejeestrategico12022'];
               $linea2021 = $result['lineaestrategica22022'];
                $comentario = $result['comentario'];
                $comentariojefe = $result['comentarioJefeResultado2022'];
                $correo = $result['correo'];
               ?>
           
                   
           <h1 id="h1" style="text-align: center; color: black; font-size: 23px;">Metas individuales</h1>
            <h4 style="text-align: center; color: red; font-size:23px;">1</h4>   
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
            <option value=""><?php echo $eje2021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
              <option value=""><?php echo $linea2021; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta1; ?></textarea><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta1; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 5%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta1; ?>" class="form-control" style="float: left; margin-left: 10%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta1; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta1; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta1; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;"><br><br>
               <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -480px; margin-left: 48%; ">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta1; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta1; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida1; ?>"><?php echo $unidadmedida1; ?></option>
              
                  </select>
                </div>
            </div>
  
          
 
           <div id="cuerpo2" style="background: #ECF0F1;">
           <br>
            <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, personaloperativo2022.ejeestrategico22022, personaloperativo2022.lineaestrategica22022 from descripcionesmetas2022 inner join personaloperativo2022 on personaloperativo2022.id_empleado = $date and descripcionesmetas2022.id_empleado = $date");
               $result = mysqli_fetch_assoc($sql);
               
               $redaccionmeta2 = $result['redacionMeta2'];
               $indicadorMeta2 = $result['indicadorMeta2'];
               $ponderacionMeta2 = $result['ponderacionMeta2'];
               $fechaCumpMeta2 = $result['fechaCumpMeta2'];
               $NivelCumpNoAproMeta2 = $result['NivelCumpNoAproMeta2'];
               $NivelCumpAproMeta2 = $result['NivelCumpAproMeta2'];
               $NivelCumpSatisfMeta2 = $result['NivelCumpSatisfMeta2'];
               $NivelCumpSobreMeta2 = $result['NivelCumpSobreMeta2'];
               $unidadmedida2 = $result['unidadmedida2'];
               $eje22021 = $result['ejeestrategico22022'];
               $linea22021 = $result['lineaestrategica22022'];
             
               ?>
               
      <h4 style="text-align: center; color: red; font-size:23px;">2</h4>               
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
            <option value=""><?php echo $eje22021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
              <option value=""><?php echo $linea22021; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta2; ?></textarea><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta2; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 5%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta2; ?>" class="form-control" style="float: left; margin-left: 10%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta2; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta2; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta2; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;"><br><br>
               <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -480px; margin-left: 48%; ">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta2; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta2; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida2; ?>"><?php echo $unidadmedida2; ?></option>
              
                </select>
                </div>
            </div>
       

         
                   
          
            <div id="cuerpo2" style="background: #FDFEFE; ">
                   <br>
                   <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, personaloperativo2022.ejeestrategico32022, personaloperativo2022.lineaestrategica32022 from descripcionesmetas2022 inner join personaloperativo2022 on personaloperativo2022.id_empleado = $date and descripcionesmetas2022.id_empleado = $date");
               $result = mysqli_fetch_assoc($sql);
               
               $redaccionmeta3 = $result['redacionMeta3'];
               $indicadorMeta3 = $result['indicadorMeta3'];
               $ponderacionMeta3 = $result['ponderacionMeta3'];
               $fechaCumpMeta3 = $result['fechaCumpMeta3'];
               $NivelCumpNoAproMeta3 = $result['NivelCumpNoAproMeta3'];
               $NivelCumpAproMeta3 = $result['NivelCumpAproMeta3'];
               $NivelCumpSatisfMeta3 = $result['NivelCumpSatisfMeta3'];
               $NivelCumpSobreMeta3 = $result['NivelCumpSobreMeta3'];
               $unidadmedida3 = $result['unidadmedida3'];
               $eje32021 = $result['ejeestrategico32022'];
               $linea32021 = $result['lineaestrategica32022'];
              
               ?>
                
       <h4 style="text-align: center; color: red; font-size:23px;">3</h4>              
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
            <option value=""><?php echo $eje32021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
              <option value=""><?php echo $linea32021; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta3; ?></textarea><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta3; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 5%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta3; ?>" class="form-control" style="float: left; margin-left: 10%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta3; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta3; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta3; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;"><br><br>
                <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 48%;">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta3; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta3; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida3; ?>"><?php echo $unidadmedida3; ?></option>
              
                </select>
                </div>
            </div>
     
                
           <div id="cuerpo2" style="background: #ECF0F1;">
           <br>
            <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, personaloperativo2022.ejeestrategico42022, personaloperativo2022.lineaestrategica42022 from descripcionesmetas2022 inner join personaloperativo2022 on personaloperativo2022.id_empleado = $date and descripcionesmetas2022.id_empleado = $date");
               $result = mysqli_fetch_assoc($sql);
               
               $redaccionmeta4 = $result['redacionMeta4'];
               $indicadorMeta4 = $result['indicadorMeta4'];
               $ponderacionMeta4 = $result['ponderacionMeta4'];
               $fechaCumpMeta4 = $result['fechaCumpMeta4'];
               $NivelCumpNoAproMeta4 = $result['NivelCumpNoAproMeta4'];
               $NivelCumpAproMeta4 = $result['NivelCumpAproMeta4'];
               $NivelCumpSatisfMeta4 = $result['NivelCumpSatisfMeta4'];
               $NivelCumpSobreMeta4 = $result['NivelCumpSobreMeta4'];
               $unidadmedida4 = $result['unidadmedida4'];
               $eje42021 = $result['ejeestrategico42022'];
               $linea42021 = $result['lineaestrategica42022'];
              
               ?>
    
    <h4 style="text-align: center; color: red; font-size:23px;">4</h4>             
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
            <option value=""><?php echo $eje42021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
              <option value=""><?php echo $linea42021; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta4; ?></textarea><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta4; ?></textarea><br><br><br><br><br>
             <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 4%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 5%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta4; ?>" class="form-control" style="float: left; margin-left: 10%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta4; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta4; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta4; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;"><br><br>
                <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 48%;">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta4; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta4; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida4; ?>"><?php echo $unidadmedida4; ?></option>
              
                </select>
                </div>
            </div>
    
        <div id="cuerpo2" style="background: #FDFEFE; ">
           <br>
           <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, personaloperativo2022.ejeestrategico52022, personaloperativo2022.lineaestrategica52022 from descripcionesmetas2022 inner join personaloperativo2022 on personaloperativo2022.id_empleado = $date and descripcionesmetas2022.id_empleado = $date");
               $result = mysqli_fetch_assoc($sql);
               
               $redaccionmeta5 = $result['redacionMeta5'];
               $indicadorMeta5 = $result['indicadorMeta5'];
               $ponderacionMeta5 = $result['ponderacionMeta5'];
               $fechaCumpMeta5 = $result['fechaCumpMeta5'];
               $NivelCumpNoAproMeta5 = $result['NivelCumpNoAproMeta5'];
               $NivelCumpAproMeta5 = $result['NivelCumpAproMeta5'];
               $NivelCumpSatisfMeta5 = $result['NivelCumpSatisfMeta5'];
               $NivelCumpSobreMeta5 = $result['NivelCumpSobreMeta5'];
               $unidadmedida5 = $result['unidadmedida5'];
               $eje52021 = $result['ejeestrategico52022'];
               $linea52021 = $result['lineaestrategica52022'];
              
               ?>
           <h4 style="text-align: center; color: red; font-size:23px;">5</h4>
        <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    
        <select class="form-control" id="select_eje9" name="ejecinco" readonly onchange="select_eje8(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
            <option value=""><?php echo $eje52021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select>

                <br><br>
                 <script>
       function select_eje8()
{ 
  
 var ID_usuario =  $("#select_eje9").val();

    var ob = {ID_usuario:ID_usuario};

     $.ajax({
                type: "POST",
                url:"consulta_linea.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea5").html(data);
            
                }
             });
}
</script>
                <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="linea5" readonly  name="metacinco" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
                <option value=""><?php echo $linea52021; ?> </option></select><br><br><br>
                <strong style="margin-left: 10%;">Meta individual</strong><br>
                <textarea name="meta6" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control" readonly ><?php echo $redaccionmeta5; ?></textarea><br><br><br><br><br>
                <strong style="margin-left: 10%;">Indicadores</strong><br>
                <textarea name="metaSeis" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control" readonly ><?php echo $indicadorMeta5; ?></textarea><br><br><br><br><br>
                <strong id="" readonly style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" readonly style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" readonly style="float: left; margin-left: 4%;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" readonly style="float: left; margin-left: 4%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" readonly style="float: left; margin-left: 5%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta5; ?>" class="form-control" style="float: left; margin-left: 10%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 110px;"><br><br>
                <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 48%;">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta5; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta5; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida5; ?>"><?php echo $unidadmedida5; ?></option>
              
                </select>
                </div>
            </div>
       
    
    
           <div class="contenedor-final" style="width: 100%; height: 80%;background-color: #196F3D; ">
           <br><br>
  <form action="comentarioJefe2021" method="POST">
      </form>
 <form action="comentarioJefe2021" method="POST">
      <input type="hidden" name="id" id="id" value="<?php echo $date; ?>">
                <center><strong id="" style="color: white;">COMENTARIO DEL JEFE INMEDIATO PARA LA EVALUACIÓN FINAL:</strong><br></center>
                <textarea name="comentar" id="" style="width: 35%; height: 100px; margin-left: auto; margin-right: auto; display: block;"><?php echo $comentariojefe; ?></textarea><br>
                <input type="submit" class="btn-warning" name="guarda" style="width: 250px; height: 40px; margin-left: auto; margin-right: auto; display: block; text-align: center; color: white; cursor:pointer; border-radius: 5px;" value="GUADAR COMENTARIO"><br>
                </form>
                <center><strong style="color: white;">COMENTARIO GENERAL DEL EVALUADO (Opcional):</strong><br></center>
                <textarea name="comentario"  readonly="readonly" id="" style="width: 35%; height: 100px; margin-left: auto; margin-right: auto; display: block;"><?php echo $comentario; ?></textarea>
                
            
           
 <a href="autorizarVoBo2021?empleado=<?php echo base64_encode($date); ?>&mail=<?php echo base64_encode($correo); ?>" class="btn-info" style="width: 250px; height: 40px; margin-left: auto; margin-right: auto; display: block; text-align: center; color: white; margin-top: 50px; border-radius: 5px;">AUTORIZAR METAS</a>
<a href="denegadoVoBo2021?empleado=<?php echo base64_encode($date); ?>&mail=<?php echo base64_encode($correo); ?>" class="btn-danger" style="width: 250px; height: 40px; margin-left: auto; margin-right: auto; display: block; text-align: center; color: white; margin-top: 18px; border-radius: 5px;">RECHAZAR METAS</a><br></div>

</form>
<!--
<button  style="width: 350px; height: 40px; margin-left: auto; margin-right: auto; display: block; margin-top: 5%;cursor: pointer;" class="btn-danger" >FINALIZAR Y SOLICITAR VoBo</button>-->

 <div class="final" style="background: #185F31; margin-top: 3px;">
  <p>
® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
</div>
</body>
</html>