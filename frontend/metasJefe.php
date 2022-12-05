<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet"> 
    <link href="icono/icono.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <title>Registro de metas</title>
</head>
<body>
    <script>
        $(document).ready(function() {    
    $('#carga_icono').on('click', function(){
               
                //Añadimos la imagen de carga en el contenedor
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
         return false;
    });              
}); 

 $(document).ready(function() {    
    $('#carga_icono2').on('click', function(){
               
                //Añadimos la imagen de carga en el contenedor
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
         return false;
    });              
}); 

$(document).ready(function() {    
    $('#carga_icono3').on('click', function(){
               
                //Añadimos la imagen de carga en el contenedor
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
         return false;
    });              
}); 

$(document).ready(function() {    
    $('#carga_icono4').on('click', function(){
               
                //Añadimos la imagen de carga en el contenedor
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
         return false;
    });              
}); 

$(document).ready(function() {    
    $('#carga_icono5').on('click', function(){
               
                //Añadimos la imagen de carga en el contenedor
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
         return false;
    });              
}); 
    </script>
    <!-- Código de instalación Cliengo para infobeto91@gmail.com --> 
        <?php
        include("cabeceraJefe.php");
        //include("menu.php");

 $date = base64_decode($_GET['id']);
 $correo = base64_decode($_GET['correo']);
 //$correojefe = base64_decode($_GET['correojefe']);
 //$correojefe = "beto_1866@outlook.com";
require 'conexion.php';
  
 $sql = $conexion2->query("SELECT jefes.vistobueno, jefes.correojefe, descripcionesmetasjefes2023.ponderacionMeta1, descripcionesmetasjefes2023.ponderacionMeta2, descripcionesmetasjefes2023.ponderacionMeta3, descripcionesmetasjefes2023.ponderacionMeta4, descripcionesmetasjefes2023.ponderacionMeta5, descripcionesmetasjefes2023.comentario, descripcionesmetasjefes2023.comentarioJefeResultado2023 from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
                $result = mysqli_fetch_assoc($sql);
                $pon1 = $result['ponderacionMeta1'];
                $pon2 = $result['ponderacionMeta2'];
                $pon3 = $result['ponderacionMeta3'];
                $pon4 = $result['ponderacionMeta4'];
                $pon5 = $result['ponderacionMeta5'];
                $comentario = $result['comentario'];
                $comentariojefe = $result['comentarioJefeResultado2023'];
                $vobo = $result['vistobueno'];
                $correojefe = $result['correojefe'];
            
                $validarTotal = 100;
                $total = $pon1 + $pon2 + $pon3 + $pon4 + $pon5;
                $validacionFinal = $validarTotal - $total;
                   
        $sql = $conexion2->query("SELECT nombre, apellidopaterno from jefes where id_jefe = $date");
                $result = mysqli_fetch_assoc($sql);
                $nombre = $result['nombre'];
                $appaterno = $result['apellidopaterno'];
           
    ?>
 
 <style>
    input:invalid {
  border: 2px dashed red;
}

 textarea:invalid {
  border: 2px dashed red;
}
select:invalid{
    border: 2px dashed red;
}

 </style>
 <div id="tabla_resultado"></div>
 <input type="hidden" name="id" id="id" value="<?php echo $date; ?>">
 <input type="hidden" name="" id="correoJefe" value="<?php echo $correojefe; ?>">
 <input type="hidden" name="" id="nombre" value="<?php echo $nombre; ?>">
 <input type="hidden" name="" id="appaterno" value="<?php echo $appaterno; ?>">
<div class="all">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="metas.js"></script>

<div id="cuerpo2" style="background: #F1EFD3; height: auto;">
           
            <h1 id="h1" style="font-size: 20px; color: #6D6D6D; font-style: normal; text-align: center;">Meta colectiva</h1><br>
            
            
    <strong style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name="" onchange="" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option>Modelo de Desarrollo Organizacional integral.</option>
           
        </select><br><br>
       
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <strong style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option>Elaboración de Documentos de Gestión Institucional</option></select><br><br><br>
  
              <strong style="float: left; margin-left: 10%;">Meta colectiva</strong><br>
              <textarea name="" readonly="readonly" id="" style="width: 40%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control">Que el Proyecto del Manual de Organización Especifico (MOE), contenga desarrollados como mínimo los 6 Capítulos, que prevé el Artículo 31 Bis del ACUERDO por el que se emiten las Disposiciones en las materias de Recursos Humanos y del Servicio Profesional de Carrera, así como el Manual Administrativo de Aplicación General en materia de Recursos Humanos y Organización y el Manual del Servicio Profesional de Carrera (I Visión y Misión de la Institución, II Antecedentes, III Marco Legal, IV Atribuciones, V Estructura Orgánica y/o Organigrama, VI Objetivos y Funciones de sus Unidades Administrativas), al 31 de diciembre de 2022</textarea><br>
             <!-- <strong style="float: left; margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name="" readonly="readonly" id="" style="width: 40%; height: auto; margin-left: 10%;" id="textarea" class="md-textarea form-control">“DERIVADO DE LA PANDEMIA CAUSADA POR EL VIRUS SARS-COV-2, DECLARADA EN MARZO DE 2020, EL CONSEJO DE SALUBRIDAD GENERAL NO CONSIDERA COMO UNA PRIORIDAD EL PROCESO DE CERTIFICACIÓN , MOTIVO POR EL CUAL NO FUE POSIBLE LLEVAR A CABO EL PROCESO, DANDO PRIORIDAD TAMBIÉN EN LA INSTITUCIÓN A LA ATENCIÓN DE LA EMERGENCIA SANITARIA”.</textarea><br>-->
              <strong style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" readonly="readonly" style="width: 40%; height: 10%; margin-left: 10%;" id="" class="md-textarea form-control">      Total de capítulos desarrollados para el MOE durante el 2022
---------------------------------------------------------------------------------------       x100    
 Total capítulos (6) que como mínimo debe tener desarrollados  el MOE </textarea><br>
                <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
                <!--<input name="" id="nivel_cump"  type="radio" onclick="" value="40"   checked="checked" style="float: left; margin-left: 9%;">-->
                <input type="text" name="" value="Menos del 50%" class="form-control" style="float: left; width: 170px; margin-left: 10%;" readonly>
                <!--<input  id="" name="" type="radio" onclick="" value="60" style="float: left; margin-left: 3%;"/>-->
                
                <input type="text" name="" value="50% " class="form-control" style="float: left; width: 170px; margin-left: 4%;" readonly>
                <!--<input id="nivel_cump" name="" type="radio" onclick="" value="80" style="float: left; margin-left: 3%;"/>-->
                <input type="text"  name="" value="70%" class="form-control" style="float: left; width: 170px; margin-left: 4%;" readonly>
                <!-- <input id="nivel_cump" name="" type="radio" onclick="" value="100" style="float: left; margin-left: 2%;" />-->
                <input type="text" name="" value="Mayor al 70%" class="form-control" style="float: left; width: 170px; margin-left: 4%;" readonly><br><br>
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="text"  name="" value="100%" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="31 de diciembre de 2022" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="Porcentaje">Porcentaje</option>
              
                </select>
                </div>
            </div>

           <div id="cuerpo2" style="background: #FDFEFE;">
               
               <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, jefes.ejeestrategico, jefes.lineaestrategica, jefes.vistobueno, jefes.actualiza from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
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
               $eje2021 = $result['ejeestrategico'];
               $linea2021 = $result['lineaestrategica'];
               $vistobueno2021 = $result['vistobueno'];
               $actualiza = $result['actualiza'];
               $valida = 0;
               $pendienteDeVoBo = 2;
               if($ponderacionMeta1 == $valida and $total < 100 and $fechaCumpMeta1 == '' and $redaccionmeta1 == '' and $indicadorMeta1 == ''){
               ?>
           
           <h4 style="text-align: center; color: black; font-size:23px;">Metas Individuales</h4>
           <h4 style="text-align: center; color: red; font-size:23px;">1</h4>
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje1" name="ejeuno" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width:  40%; height: 35px">
            <option value=""> Seleccione un eje estrategico</option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea1" name="metauno" onchange="select_linea();" style="float: left; margin-left: 10%; width:  40%; height: 35px">
              <option value="">Seleccione</option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta1" style="margin-left: 10%; width: 40%; height: 15%;" id="textarea"  class="md-textarea form-control" required></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="indicador1" required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
                
                <input type="text"  name="nivel1" required value="" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" name="nivel2" required value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" name="nivel3" required value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" name="nivel4"  required value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number" required name="ponderacionuno"  value="" min="1" max="100"  style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control">
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date"  required name="fecha1" value="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" >
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="unidadMedida1"  required style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" >
                    <option value=""></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select></div><br>
                <input type="submit" class="btn btn-success" value="GUARDAR" id="carga_icono" onclick="guardarMeta1();" style="float: right; margin-right: 50px; margin-top: -50px;">
                
                <script>
                    function guardarMeta1(){
                        if ($('input[name=ponderacionuno]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('input[name=fecha1]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel1]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel2]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel3]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel4]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=meta1]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=indicador1]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('select[name=unidadMedida1]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
                        let meta1 =  $('textarea[name=meta1]').val();
	                    let indicador1 = $('textarea[name=indicador1]').val();
	                    let nivel1 = $('input[name=nivel1]').val();
	                    let nivel2 = $('input[name=nivel2]').val();
	                    let nivel3 = $('input[name=nivel3]').val();
	                    let nivel4 = $('input[name=nivel4]').val();
	                    let ponderacionuno = $('input[name=ponderacionuno]').val();
	                    let fecha1 = $('input[name=fecha1]').val();
	                    let unidadMedida1 = $('select[name=unidadMedida1]').val();
	                   
                        let id = $('input[name=id]').val();
                        
            
                        let ob = {meta1:meta1, indicador1:indicador1, id:id, nivel1:nivel1, nivel2:nivel2, nivel3:nivel3, nivel4:nivel4, ponderacionuno:ponderacionuno, fecha1:fecha1, unidadMedida1:unidadMedida1 };
                        
                         $.ajax({
                type: "POST",
                url:"almacenarMetaJefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
                        
                    }
                </script>
          
            <?php
               }elseif($actualiza == 1 and $ponderacionMeta1 > 0 ){
                   ?>
                   
            <h4 style="text-align: center; color: red; font-size:23px;">1</h4>  
   
            <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje1" name="ejeuno" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje2021; ?></option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control"  id="linea1" name="metauno" onchange="select_linea();" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option><?php echo $linea2021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;" id="txtmeta1"  class="md-textarea form-control"><?php echo $redaccionmeta1; ?></textarea><br><br><br><br><br>
              
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;" id="txtindicador1" class="md-textarea form-control"><?php echo $indicadorMeta1; ?></textarea><br><br><br><br><br>
         <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
             
                <input type="text" required id="input1"  name="" value="<?php echo $NivelCumpNoAproMeta1 ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
            
                <input type="text" required id="input2" name="" value="<?php echo $NivelCumpAproMeta1 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
           
                <input type="text" required id="input3"  name="" value="<?php echo $NivelCumpSatisfMeta1 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
            
                <input type="text" required id="input4"  name=""  value="<?php echo $NivelCumpSobreMeta1 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
          
          <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number" required name="" id="ponderacion11" value="<?php echo $ponderacionMeta1; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date" required name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta1; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" required id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value="<?php echo $unidadmedida1; ?>"><?php echo $unidadmedida1; ?></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select>
                </div>
                
                <input type="submit" class="btn btn-info" style="float: right; margin-right: 200px; margin-top: -50px;" onclick="actualizarMeta1();" id="carga_icono" value="Actualizar">
                <input type="submit" class="btn btn-danger" value="Eliminar meta" onclick="eliminarMeta1();" style="float: right; margin-right: 50px; margin-top: -50px;">
             <script>
         function actualizarMeta1() {
                  if ($('#txtmeta1').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#txtindicador1').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#input1').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input2').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input3').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input4').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#ponderacion11').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#fechaCompromiso1').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#unidadMedida1').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  


	        let meta1 =  $("#txtmeta1").val();
	        let indicador1 = $("#txtindicador1").val();
	        let input1 = $("#input1").val();
	        let input2 = $("#input2").val();
	        let input3 = $("#input3").val();
	        let input4 = $("#input4").val();
	        let ponderacion1 = $("#ponderacion11").val();
	        let fecha1 = $("#fechaCompromiso1").val();
	        let unidadMedida1 = $("#unidadMedida1").val();
            let id = $("#id").val();
            let ob = {meta1:meta1, indicador1:indicador1, id:id, input1:input1, input2:input2, input3:input3, input4:input4, ponderacion1:ponderacion1, fecha1:fecha1, unidadMedida1:unidadMedida1};
         
     $.ajax({
                type: "POST",
                url:"actualizaMetajefe1.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
         }     
         
         function eliminarMeta1(){
          
            let id = $("#id").val();
            let ob = {id:id};
         
             var mensaje = confirm("La meta sera eliminada, desea continuar?");
                
                if (mensaje === true) {
                
                    $.ajax({
                    type: "POST",
                    url:"eliminarMetajefe1.php",
                    data: ob,
                    beforeSend: function(objeto){
                
                    },
                    success: function(data)
                    { 
                 
                     location.reload();
            
                    }
             });
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }
         }
            </script>

            <?php 
            }elseif($vistobueno2021 == $pendienteDeVoBo or $vistobueno2021 == 1 or $total == 100){
             ?>
            
           <h1 id="h1" style="text-align: center; color: black; font-size: 19px;">Metas individuales</h1>
            <h4 style="text-align: center; color: red; font-size:23px;">1</h4>   
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly  style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje2021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly"  style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option value=""><?php echo $linea2021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 40%; height: 15%;  margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta1; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 40%; height: 15%;  margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta1; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
               <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%; font-size: 15px;">Sobresaliente</strong><br>
                <input type="text"  readonly value="<?php echo $NivelCumpNoAproMeta1; ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta1; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta1; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta1; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
               <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta1; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta1; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida1; ?>"><?php echo $unidadmedida1; ?></option>
              
                </select>
                </div><br>
                
            </div>
           
            
            <?php 
            }
        ?>
            <script>
       function select_eje()
{ 
  
 let ID_usuario =  $("#select_eje1").val();
    let id = $("#id").val();
    let ob = {ID_usuario:ID_usuario, id:id};
     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea1").html(data);
            
                }
             });
}
function select_linea()
{ 
  
 let linea1 =  $("#linea1").val();
    let id = $("#id").val();
    let ob = {linea1:linea1, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>
        
 <!--
           <div class="progress" style="height: 15px;">
<div class="progress-bar progress-bar-striped progreso-npi" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $total; ?>%; color: black; font-size: 15px; background: #2ECC71;"><?php echo $total; ?>%
</div>
</div>
-->
           <div id="cuerpo2" style="background: #ECF0F1;">
           
            <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, jefes.ejeestrategico2, jefes.lineaestrategica2, jefes.vistobueno, jefes.actualiza from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
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
               $eje22021 = $result['ejeestrategico2'];
               $linea22021 = $result['lineaestrategica2'];
               $actualiza = $result['actualiza'];
               $valida = 0;
               $pendienteDeVoBo = 2;
               if($ponderacionMeta2 == $valida and $total < 100 ){
               ?>
                <h4 style="text-align: center; color: red; font-size:23px;">2</h4>   
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje3" name="ejedos" onchange="select_eje2(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""> Seleccione un eje estrategico</option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>
  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea3" name="metados" onchange="select_linea3(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option></option></select><br><br><br>
    
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta2"  required style="margin-left: 10%; width: 40%;height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="indicador2"  required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
             <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
               <input type="text"  required name="nivel5" value="" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
               <input type="text"  required name="nivel6" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
               <input type="text"  required name="nivel7" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
               <input type="text"  required name="nivel8" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
               
               <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  required name="ponderaciondos" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" value="" class="form-control">
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date"  required name="fecha2" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" value="" class="form-control">
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="unidadMedida2"  required style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control">
                    <option value=""></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select></div>
                <input type="submit" class="btn btn-success" value="GUARDAR" id="carga_icono2" onclick="guardarMeta2();" style="float: right; margin-right: 50px; margin-top: -50px;">
<script>
                    function guardarMeta2(){
                        if ($('input[name=ponderaciondos]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('input[name=fecha2]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel5]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel6]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel7]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel8]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=meta2]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=indicador2]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('select[name=unidadMedida2]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
                        let meta2 =  $('textarea[name=meta2]').val();
	                    let indicador2 = $('textarea[name=indicador2]').val();
	                    let nivel5 = $('input[name=nivel5]').val();
	                    let nivel6 = $('input[name=nivel6]').val();
	                    let nivel7 = $('input[name=nivel7]').val();
	                    let nivel8 = $('input[name=nivel8]').val();
	                    let ponderaciondos = $('input[name=ponderaciondos]').val();
	                    let fecha2 = $('input[name=fecha2]').val();
	                    let unidadMedida2 = $('select[name=unidadMedida2]').val();
	                   
                        let id = $('input[name=id]').val();
                        
                
                        let ob = {meta2:meta2, indicador2:indicador2, id:id, nivel5:nivel5, nivel6:nivel6, nivel7:nivel7, nivel8:nivel8, ponderaciondos:ponderaciondos, fecha2:fecha2, unidadMedida2:unidadMedida2 };
                        
                         $.ajax({
                type: "POST",
                url:"almacenarMetaJefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
                        
                    }
                </script>
            
             <?php
               }elseif($actualiza == 1 and $ponderacionMeta2 > 0){
                   ?>
      <h4 style="text-align: center; color: red; font-size:23px;">2</h4>   
            <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje3" name="ejeuno"  onchange="select_eje2(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje22021; ?></option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea3" name="metauno"  onchange="select_linea3(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option><?php echo $linea22021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;" id="txtmeta2"  class="md-textarea form-control"><?php echo $redaccionmeta2; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left; " id="txtindicador2" class="md-textarea form-control"><?php echo $indicadorMeta2; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
           
                <input type="text" id="input5"  name="" required value="<?php echo $NivelCumpNoAproMeta2 ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
          
                <input type="text" id="input6" name="" required value="<?php echo $NivelCumpAproMeta2 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
            
                <input type="text" id="input7"  name=""  required value="<?php echo $NivelCumpSatisfMeta2 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
          
                <input type="text" id="input8"  name="" required value="<?php echo $NivelCumpSobreMeta2 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                
               <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong id="" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion2" required value="<?php echo $ponderacionMeta2; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong id="fechaCompromiso3" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCo2" required value="<?php echo $fechaCumpMeta2; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong id="unidadMedida3" style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" id="unidadMed2" required class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value="<?php echo $unidadmedida2; ?>"><?php echo $unidadmedida2; ?></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select>
                
                </div>
                <input type="submit" class="btn btn-info" style="float: right; margin-right: 200px; margin-top: -50px;" id="carga_icono2" onclick="actualizaMeta2();" value="Actualizar">
                <input type="submit" class="btn btn-danger" value="Eliminar meta" onclick="eliminarMeta2();" style="float: right; margin-right: 50px; margin-top: -50px;">
            <script>
         function actualizaMeta2() {
             if ($('#txtmeta2').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#txtindicador2').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#input5').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input6').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input7').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input8').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#ponderacion2').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#fechaCo2').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#unidadMed2').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
	        let meta2 =  $("#txtmeta2").val();
	        let indicador2 = $("#txtindicador2").val();
	        let input5 = $("#input5").val();
	        let input6 = $("#input6").val();
	        let input7 = $("#input7").val();
	        let input8 = $("#input8").val();
	        let ponderacion2 = $("#ponderacion2").val();
	        let fecha2 = $("#fechaCo2").val();
	        let unidadMedida2 = $("#unidadMed2").val();
            let id = $("#id").val();
            
            let ob = {meta2:meta2, indicador2:indicador2, id:id, input5:input5, input6:input6, input7:input7, input8:input8, ponderacion2:ponderacion2, fecha2:fecha2, unidadMedida2:unidadMedida2};
           
     $.ajax({
                type: "POST",
                url:"actualizaMetajefe2.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
         }     
         
          function eliminarMeta2(){
          
            let id = $("#id").val();
            let ob = {id:id};
         
             var mensaje = confirm("La meta sera eliminada, desea continuar?");
                
                if (mensaje === true) {
                
                    $.ajax({
                    type: "POST",
                    url:"eliminarMetajefe2.php",
                    data: ob,
                    beforeSend: function(objeto){
                
                    },
                    success: function(data)
                    { 
                 
                     location.reload();
            
                    }
             });
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }
         }
            </script>
        
            <?php
               }
             elseif($vistobueno2021 == $pendienteDeVoBo or $vistobueno2021 == 1 or $total == 100)
             {
                 ?>
                 <h4 style="text-align: center; color: red; font-size:23px;">2</h4>               
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width:  40%; height: 35px">
            <option value=""><?php echo $eje22021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width:  40%; height: 35px">
              <option value=""><?php echo $linea22021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta2; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width:  40%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta2; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
               <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorioe</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%; font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta2; ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta2; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta2; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta2; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
               <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta2; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta2; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" onchange="actualizaMeta1();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida2; ?>"><?php echo $unidadmedida2; ?></option>
              
                </select>
                </div><br>
            
   
            
<?php
}
?>
<script>
       function select_eje2()
{ 
  
 let ID_usuario =  $("#select_eje3").val();
    let id = $("#id").val();
    let ob = {ID_usuario:ID_usuario, id:id};
     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe2.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea3").html(data);
            
                }
             });
}
function select_linea3()
{ 
  
 let linea3 =  $("#linea3").val();
    let id = $("#id").val();
    let ob = {linea3:linea3, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe2.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>
       
     <!--         
        <div class="progress" style="height: 15px;">
        <div class="progress-bar progress-bar-striped progreso-npi" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $total; ?>%; color: black; font-size: 15px; background: #2ECC71;"><?php echo $total; ?>%
        </div>
        </div>
-->
                   <div id="cuerpo2" style="background: #FDFEFE">
                   
                   <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, jefes.ejeestrategico3, jefes.lineaestrategica3, jefes.vistobueno, jefes.actualiza from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
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
               $eje32021 = $result['ejeestrategico3'];
               $linea32021 = $result['lineaestrategica3'];
               $actualiza = $result['actualiza'];
               $valida = 0;
               $pendienteDeVoBo = 2;
               if($ponderacionMeta3 == $valida and $total != 100){
               ?>
                <h4 style="text-align: center; color: red; font-size:23px;">3</h4>   
            <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
            <select class="form-control" id="select_eje5" name="ejetres" onchange="select_eje4(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""> Seleccione un eje estrategico</option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>
   
              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea4" name="metatres" onchange="select_linea4(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option></option></select><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta3"  required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="indicador3" required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
             <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" required name="nivel9" value="" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text"  required name="nivel10" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text"  required name="nivel11" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text"  required name="nivel12" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number" required name="ponderaciontres" id="por1" min="1" max="100" value="" class="form-control"style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date" required name="fecha3" id="por2" value="" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="unidadMedida3" required id="por3" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value=""></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select></div>
                <input type="submit" id="carga_icono3" onclick="guardarMeta3();" class="btn btn-success" value="GUARDAR" style="float: right; margin-right: 50px; margin-top: -50px;">
        <script>
                    function guardarMeta3(){
                        if ($('input[name=ponderaciontres]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('input[name=fecha3]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel9]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel10]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel11]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel12]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=meta3]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=indicador3]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('select[name=unidadMedida3]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
                        let meta3 =  $('textarea[name=meta3]').val();
	                    let indicador3 = $('textarea[name=indicador3]').val();
	                    let nivel9 = $('input[name=nivel9]').val();
	                    let nivel10 = $('input[name=nivel10]').val();
	                    let nivel11 = $('input[name=nivel11]').val();
	                    let nivel12 = $('input[name=nivel12]').val();
	                    let ponderaciontres = $('input[name=ponderaciontres]').val();
	                    let fecha3 = $('input[name=fecha3]').val();
	                    let unidadMedida3 = $('select[name=unidadMedida3]').val();
	                   
                        let id = $('input[name=id]').val();
                        
                
                        let ob = {meta3:meta3, indicador3:indicador3, id:id, nivel9:nivel9, nivel10:nivel10, nivel11:nivel11, nivel12:nivel12, ponderaciontres:ponderaciontres, fecha3:fecha3, unidadMedida3:unidadMedida3 };
                        
                         $.ajax({
                type: "POST",
                url:"almacenarMetaJefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
                        
                    }
                </script>
            
        <script>
     
         function select_eje4()
{ 
  
 let ID_usuario =  $("#select_eje5").val();
    let id = $("#id").val();
   let ob = {ID_usuario:ID_usuario, id:id};

     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe3.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea4").html(data);
            
                }
             });
}
function select_linea4()
{ 
  
 let linea4 =  $("#linea4").val();
    let id = $("#id").val();
    let ob = {linea4:linea4, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe3.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>
<?php
               }elseif($actualiza == 1 and $ponderacionMeta3 > 0){
                   ?>
       <h4 style="text-align: center; color: red; font-size:23px;">3</h4>   
            <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje5" name="ejeuno"  onchange="select_eje4(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje32021; ?></option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea4" name="metauno"  onchange="select_linea4();" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option><?php echo $linea32021; ?></option></select><br><br><br>
   
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;" id="txtmeta3"  class="md-textarea form-control"><?php echo $redaccionmeta3; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;" id="txtindicador3" class="md-textarea form-control"><?php echo $indicadorMeta3; ?></textarea><br><br><br><br><br>
               <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" required id="input9"  name="" value="<?php echo $NivelCumpNoAproMeta3 ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
             
                <input type="text"  required id="input10" name="" value="<?php echo $NivelCumpAproMeta3 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
          
                <input type="text" required id="input11"  name="" value="<?php echo $NivelCumpSatisfMeta3 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
            
                <input type="text" required id="input12"  name=""  value="<?php echo $NivelCumpSobreMeta3 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number" required name="" id="pondera33" value="<?php echo $ponderacionMeta3; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong  style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date" required name="fecha1" id="fechaCompro3" value="<?php echo $fechaCumpMeta3; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" required id="unidadMedi3" onchange="actualizaMeta3();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value="<?php echo $unidadmedida3; ?>"><?php echo $unidadmedida3; ?></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select>
             </div>
                <input type="submit" class="btn btn-info" style="float: right; margin-right: 200px; margin-top: -50px;" id="carga_icono3" onclick="actualizaMeta3();" value="Actualizar">
                <input type="submit" class="btn btn-danger" value="Eliminar meta" onclick="eliminarMeta3();" style="float: right; margin-right: 50px; margin-top: -50px;">
            
 <script>
 
         function actualizaMeta3() {
             
            if ($('#txtmeta3').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#txtindicador3').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#input9').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input10').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input11').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input12').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#pondera33').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#fechaCompro3').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#unidadMedi3').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
	        let meta3 =  $("#txtmeta3").val();
	        let indicador3 = $("#txtindicador3").val();
	        let input9 = $("#input9").val();
	        let input10 = $("#input10").val();
	        let input11 = $("#input11").val();
	        let input12 = $("#input12").val();
	        let ponderacion3 = $("#pondera33").val();
	        let fecha3 = $("#fechaCompro3").val();
	        let unidadMedida3 = $("#unidadMedi3").val();
            let id = $("#id").val();
            let ob = {meta3:meta3, indicador3:indicador3, id:id, input9:input9, input10:input10, input11:input11, input12:input12, ponderacion3:ponderacion3, fecha3:fecha3, unidadMedida3:unidadMedida3};
           
     $.ajax({
                type: "POST",
                url:"actualizaMetajefe3.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
         }   
         function eliminarMeta3(){
          
            let id = $("#id").val();
            let ob = {id:id};
         
             var mensaje = confirm("La meta sera eliminada, desea continuar?");
                
                if (mensaje === true) {
                
                    $.ajax({
                    type: "POST",
                    url:"eliminarMetajefe3.php",
                    data: ob,
                    beforeSend: function(objeto){
                
                    },
                    success: function(data)
                    { 
                 
                     location.reload();
            
                    }
             });
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }
         }
            </script>
            
              <script>
     
         function select_eje4()
{ 
  
 let ID_usuario =  $("#select_eje5").val();
    let id = $("#id").val();
   let ob = {ID_usuario:ID_usuario, id:id};

     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe3.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea4").html(data);
            
                }
             });
}
function select_linea4()
{ 
  
 let linea4 =  $("#linea4").val();
    let id = $("#id").val();
    let ob = {linea4:linea4, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe3.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>
            <?php
               }
             elseif($vistobueno2021 == $pendienteDeVoBo or $vistobueno2021 == 1 or $total == 100)
             {
                 ?>
                 <h4 style="text-align: center; color: red; font-size:23px;">3</h4>              
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje32021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option value=""><?php echo $linea32021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta3; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta3; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorioe</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%; font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta3; ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta3; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta3; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta3; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 52%;">
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

                <?php
             }
             ?>
       <!-- 
         <div class="progress" style="height: 15px;">
<div class="progress-bar progress-bar-striped progreso-npi" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $total; ?>%; color: black; font-size: 15px; background: #2ECC71;"><?php echo $total; ?>%
</div>
</div>
-->
           <div id="cuerpo2" style="background: #ECF0F1;">
           
            <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, jefes.ejeestrategico4, jefes.lineaestrategica4, jefes.vistobueno, jefes.actualiza from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
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
               $eje42021 = $result['ejeestrategico4'];
               $linea42021 = $result['lineaestrategica4'];
               $actualiza = $result['actualiza'];
               $valida = 0;
               $pendienteDeVoBo = 2;
               if($ponderacionMeta4 == $valida and $total != 100 ){
               ?>
    <h4 style="text-align: center; color: red; font-size:23px;">4</h4>   
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje7" name="ejecuatro" onchange="select_eje6(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""> Seleccione un eje estrategico</option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>
         
              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea5" name="metacuatro" onchange="select_linea6();" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta4" required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="indicador4" required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
                
               <input type="text" required name="nivel13" value="" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
               
               <input type="text" required name="nivel14" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
               
               <input type="text" required name="nivel15" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
               <input type="text" required name="nivel16" value="" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
               <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number" required name="ponderacioncuatro" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" min="1" max="100" value="" class="form-control">
                <strong id="" style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date" name="fecha4" required style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control">
                
                <strong id="" style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="unidadMedida4" id="por3" required class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value=""></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select></div>
                <input type="submit" id="carga_icono4" onclick="guardarMeta4();" class="btn btn-success" value="GUARDAR" style="float: right; margin-right: 50px; margin-top: -50px;">
           <script>
                    function guardarMeta4(){
                        if ($('input[name=ponderacioncuatro]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('input[name=fecha4]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel13]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel14]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel15]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel16]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=meta4]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=indicador4]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('select[name=unidadMedida4]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
                        let meta4 =  $('textarea[name=meta4]').val();
	                    let indicador4 = $('textarea[name=indicador4]').val();
	                    let nivel13 = $('input[name=nivel13]').val();
	                    let nivel14 = $('input[name=nivel14]').val();
	                    let nivel15 = $('input[name=nivel15]').val();
	                    let nivel16 = $('input[name=nivel16]').val();
	                    let ponderacioncuatro = $('input[name=ponderacioncuatro]').val();
	                    let fecha4 = $('input[name=fecha4]').val();
	                    let unidadMedida4 = $('select[name=unidadMedida4]').val();
	                   
                        let id = $('input[name=id]').val();
                        
                
                        let ob = {meta4:meta4, indicador4:indicador4, id:id, nivel13:nivel13, nivel14:nivel14, nivel15:nivel15, nivel16:nivel16, ponderacioncuatro:ponderacioncuatro, fecha4:fecha4, unidadMedida4:unidadMedida4 };
                        
                         $.ajax({
                type: "POST",
                url:"almacenarMetaJefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
                        
                    }
                </script>
               <script>
     
         function select_eje6()
{ 
  
 let ID_usuario =  $("#select_eje7").val();
    let id = $("#id").val();
   let ob = {ID_usuario:ID_usuario, id:id};

     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe4.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea5").html(data);
            
                }
             });
}
function select_linea6()
{ 
  
 let linea5 =  $("#linea5").val();
    let id = $("#id").val();
    let ob = {linea5:linea5, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe4.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>
<?php
               }elseif($actualiza == 1 and $ponderacionMeta4 > 0  ){
                   ?>
    <h4 style="text-align: center; color: red; font-size:23px;">4</h4>   
            <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje7" name="ejeuno"  onchange="select_eje6(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje42021; ?></option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea5" name="metauno"  onchange="select_linea6(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option><?php echo $linea42021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;" id="txtmeta4"  class="md-textarea form-control"><?php echo $redaccionmeta4; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" required style="margin-left: 10%; width: 40%; height: 15%; float:left;"  id="txtindicador4" class="md-textarea form-control"><?php echo $indicadorMeta4; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
               
                <input type="text" required id="input13"  name="" value="<?php echo $NivelCumpNoAproMeta4 ?>" class="form-control"style="float: left; margin-left: 10%; width: 170px;">
              
                <input type="text" required  id="input14" name="" value="<?php echo $NivelCumpAproMeta4 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
              
                <input type="text"required  id="input15"  name="" value="<?php echo $NivelCumpSatisfMeta4 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
            
                <input type="text" required id="input16"  name=""  value="<?php echo $NivelCumpSobreMeta4 ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
             
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong id="" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number" required  name="" id="ponderac4" value="<?php echo $ponderacionMeta4; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                <strong id="" style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date" required  name="fecha1" id="fechaCompromi4" value="<?php echo $fechaCumpMeta4; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong id="" style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" required id="unidadMedid4" onchange="actualizaMeta4();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value="<?php echo $unidadmedida4; ?>"><?php echo $unidadmedida4; ?></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select>
                </div>
                <input type="submit" class="btn btn-info" id="carga_icono4" onclick="actualizaMeta4();" style="float: right; margin-right: 200px; margin-top: -50px;" value="Actualizar" >
                <input type="submit" class="btn btn-danger" value="Eliminar meta" onclick="eliminarMeta4();" style="float: right; margin-right: 50px; margin-top: -50px;">
                
                 <script>
         function actualizaMeta4() {
             if ($('#txtmeta4').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#txtindicador4').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#input13').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input14').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input15').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#input16').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#ponderac4').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#fechaCompromi4').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#unidadMedid4').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
	        let meta4 =  $("#txtmeta4").val();
	        let indicador4 = $("#txtindicador4").val();
	        let input13 = $("#input13").val();
	        let input14 = $("#input14").val();
	        let input15 = $("#input15").val();
	        let input16 = $("#input16").val();
	        let ponderacion4 = $("#ponderac4").val();
	        let fecha4 = $("#fechaCompromi4").val();
	        let unidadMedida4 = $("#unidadMedid4").val();
            let id = $("#id").val();
            let ob = {meta4:meta4, indicador4:indicador4, id:id, input13:input13, input14:input14, input15:input15, input16:input16, ponderacion4:ponderacion4, fecha4:fecha4, unidadMedida4:unidadMedida4};
           
     $.ajax({
                type: "POST",
                url:"actualizaMetajefe4.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                  location.reload();

                }
             });
         }     
         function eliminarMeta4(){
          
            let id = $("#id").val();
            let ob = {id:id};
         
             var mensaje = confirm("La meta sera eliminada, desea continuar?");
                
                if (mensaje === true) {
                
                    $.ajax({
                    type: "POST",
                    url:"eliminarMetajefe4.php",
                    data: ob,
                    beforeSend: function(objeto){
                
                    },
                    success: function(data)
                    { 
                 
                     location.reload();
            
                    }
             });
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }
         }
            </script>
            
        <script>
     
         function select_eje6()
{ 
  
 let ID_usuario =  $("#select_eje7").val();
    let id = $("#id").val();
   let ob = {ID_usuario:ID_usuario, id:id};

     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe4.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea5").html(data);
            
                }
             });
}
function select_linea6()
{ 
  
 let linea5 =  $("#linea5").val();
    let id = $("#id").val();
    let ob = {linea5:linea5, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe4.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>
            
     
            <?php
               }
               
             elseif($vistobueno2021 == $pendienteDeVoBo or $vistobueno2021 == 1 or $total == 100)
             {
                 ?>
                 <h4 style="text-align: center; color: red; font-size:23px;">4</h4>             
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje42021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option value=""><?php echo $linea42021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta4; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta4; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorioe</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%; font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta4; ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta4; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta4; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta4; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
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
           
                <?php
             }
             ?>
           
    <!--
       <div class="progress" style="height: 15px;">
<div class="progress-bar progress-bar-striped progreso-npi" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $total; ?>%; color: black; font-size: 15px; background: #2ECC71;"><?php echo $total; ?>%
</div>
</div>
-->
           <div id="cuerpo2" style="background: #FDFEFE;">
          
            <?php 
               require 'conexion.php';
               
               $sql = $conexion2->query("SELECT *, jefes.ejeestrategico5, jefes.lineaestrategica5, jefes.vistobueno, jefes.actualiza from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
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
               $eje52021 = $result['ejeestrategico5'];
               $linea52021 = $result['lineaestrategica5'];
               $actualiza = $result['actualiza'];
               $valida = 0;
               $pendienteDeVoBo = 2;
               
               if($ponderacionMeta5 == $valida and $total != 100){
               ?>
    <h4 style="text-align: center; color: red; font-size:23px;">5</h4>
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    
        <select class="form-control" id="select_eje9" name="ejecinco" onchange="select_eje8(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""> Seleccione un eje estrategico</option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select>

                <br><br>
                 <script>
       function select_eje8()
{ 
  
 let ID_usuario =  $("#select_eje9").val();
 let id = $("#id").val();
    let ob = {ID_usuario:ID_usuario, id:id};

     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe11.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea7").html(data);
            
                }
             });
}
function select_linea9()
{ 
  
 let linea5 =  $("#linea7").val();
    let id = $("#id").val();
    let ob = {linea5:linea5, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe11.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script>

                <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="linea7"  onchange="select_linea9();" name="metacinco" style="float: left; margin-left: 10%; width: 40%; height: 35px;">
                <option value=""></option></select><br><br><br>
                <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
                <textarea name="meta5" required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
                <strong id="strong"  style="float: left; margin-left: 10%;">Indicadores</strong><br>
                <textarea name="indicador5" required style="margin-left: 10%; width: 40%; height: 15%;" id="textarea" class="md-textarea form-control"></textarea><br><br><br><br><br>
                <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
                
                <input type="text" required name="nivel17" value="" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                
                <input type="text" required name="nivel18" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                
                <input type="text" required name="nivel19" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                
                <input type="text" required name="nivel20" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -400px; margin-left: 52%; ">
                <strong style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number" required name="ponderacioncinco" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" min="1" max="100" value="" class="form-control">
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date" required name="fecha5" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" value="" class="form-control">
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="unidadMedida5" required style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control">
                    <option value=""></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select></div>
                <input type="submit" id="carga_icono5" onclick="guardarMeta5();" class="btn btn-success" value="GUARDAR" style="float: right; margin-right: 50px; margin-top: -50px;">
                <script>
                function guardarMeta5(){
                        if ($('input[name=ponderacioncinco]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('input[name=fecha5]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel17]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel18]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel19]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('input[name=nivel20]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=meta5]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('textarea[name=indicador5]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('select[name=unidadMedida5]').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
                        let meta5 =  $('textarea[name=meta5]').val();
	                    let indicador5 = $('textarea[name=indicador5]').val();
	                    let nivel17 = $('input[name=nivel17]').val();
	                    let nivel18 = $('input[name=nivel18]').val();
	                    let nivel19 = $('input[name=nivel19]').val();
	                    let nivel20 = $('input[name=nivel20]').val();
	                    let ponderacioncinco = $('input[name=ponderacioncinco]').val();
	                    let fecha5 = $('input[name=fecha5]').val();
	                    let unidadMedida5 = $('select[name=unidadMedida5]').val();
	                   
                        let id = $('input[name=id]').val();
                        
                   
                        let ob = {meta5:meta5, indicador5:indicador5, id:id, nivel17:nivel17, nivel18:nivel18, nivel19:nivel19, nivel20:nivel20, ponderacioncinco:ponderacioncinco, fecha5:fecha5, unidadMedida5:unidadMedida5 };
                        
                         $.ajax({
                type: "POST",
                url:"almacenarMetaJefe.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 location.reload();
            
                }
             });
                        
                    }
                </script>
           
<?php
               }elseif($actualiza == 1 and $ponderacionMeta5 > 0){
                   ?>
    <h4 style="text-align: center; color: red; font-size:23px;">5</h4>   
            <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="select_eje9" name="ejeuno"  onchange="select_eje8(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje52021; ?></option>
                    <meta charset="UTF-8">
                    <?php
require 'conexion.php';
$sql_s = $conexion2->query ("SELECT * FROM estrategicoeje ");
while ($row_s = mysqli_fetch_array($sql_s)) {
  $ID_usuario = $row_s['referenciaEje'];
  $nombre = $row_s['nombreEje'];
  ?>
   <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

   <?php
}


            ?>
            </select><br><br>
                <script>
       function select_eje8()
{ 
  
 let ID_usuario =  $("#select_eje9").val();
 let id = $("#id").val();
    let ob = {ID_usuario:ID_usuario, id:id};

     $.ajax({
                type: "POST",
                url:"consulta_linea_jefe11.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 
                 $("#linea7").html(data);
            
                }
             });
}
function select_linea9()
{ 
  
 let linea5 =  $("#linea7").val();
    let id = $("#id").val();
    let ob = {linea5:linea5, id:id};
     $.ajax({
                type: "POST",
                url:"consultaejejefe11.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                 

            
                }
             });
}
</script> <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

   
              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="linea7" name="metauno" onchange="select_linea9(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option><?php echo $linea52021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="redacionMeta5" required style="margin-left: 10%; width: 40%; height: 15%;" id="txtmeta5" class="md-textarea form-control" ><?php echo $redaccionmeta5; ?></textarea><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="indicadorMeta5" required id="txtindicador5" style="margin-left: 10%; width: 40%; height: 15%; float:left;" class="md-textarea form-control"><?php echo $indicadorMeta5; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%;  font-size: 15px;">Sobresaliente</strong><br>
               
                <input type="text" required id="inputa" value="<?php echo $NivelCumpNoAproMeta5; ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" required id="inputb" value="<?php echo $NivelCumpAproMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" required id="inputc" value="<?php echo $NivelCumpSatisfMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" required id="inputd" value="<?php echo $NivelCumpSobreMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
                
                
                 <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong id="" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number" required id="ponderar5" value="<?php echo $ponderacionMeta5; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                <strong id="" style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date" required id="fechaCumplir5" value="<?php echo $fechaCumpMeta5; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;"><br>
                <strong id="" style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select  id="unidadMedir5" required onchange="actualizaMeta5();" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;">
                    <option value="<?php echo $unidadmedida5; ?>"><?php echo $unidadmedida5; ?></option>
                    <option value="calidad">Calidad</option>
                    <option value="calidad-cantidad">Calidad-cantidad</option>
                    <option value="calidad-costo">Calidad-costo</option>
                    <option value="calidad-tiempo">Calidad-tiempo</option>
                    <option value="cantidad">Cantidad</option>
                    <option value="porcentaje">Porcentaje</option>
                    <option value="tiempo">Tiempo</option>
                    <option value="tiempo-costo">Tiempo-costo</option>
                </select>
              </div>
                <input type="submit" id="carga_icono5" onclick="actualizaMeta5();" class="btn btn-info" style="float: right; margin-right: 200px; margin-top: -50px;" value="Actualizar">
                <input type="submit" class="btn btn-danger" value="Eliminar meta" onclick="eliminarMeta5();" style="float: right; margin-right: 50px; margin-top: -50px;">
              
            <script>
         function actualizaMeta5() {
             if ($('#txtmeta5').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#txtindicador5').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#inputa').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#inputb').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#inputc').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#inputd').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#ponderar5').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
   if ($('#fechaCumplir5').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
  if ($('#unidadMedir5').val().length == 0){
    alert('Ingrese los datos requeridos');
    location.reload();
    return false;
  }
	        let meta5 =  $("#txtmeta5").val();
	        let indicador5 = $("#txtindicador5").val();
	        let inputa = $("#inputa").val();
	        let inputb = $("#inputb").val();
	        let inputc = $("#inputc").val();
	        let inputd = $("#inputd").val();
	        let ponderacion5 = $("#ponderar5").val();
	        let fecha5 = $("#fechaCumplir5").val();
	        let unidadMedida5 = $("#unidadMedir5").val();
            let id = $("#id").val();
            let ob = {meta5:meta5, indicador5:indicador5, id:id, inputa:inputa, inputb:inputb, inputc:inputc, inputd:inputd, ponderacion5:ponderacion5, fecha5:fecha5, unidadMedida5:unidadMedida5};
            
     $.ajax({
                type: "POST",
                url:"actualizaMetajefe5.php",
                data: ob,
                beforeSend: function(objeto){
                
                },
                success: function(data)
                { 
                  location.reload();
            
                }
             });
         }     
         
         function eliminarMeta5(){
          
            let id = $("#id").val();
            let ob = {id:id};
         
             var mensaje = confirm("La meta sera eliminada, desea continuar?");
                
                if (mensaje === true) {
                
                    $.ajax({
                    type: "POST",
                    url:"eliminarMetajefe5.php",
                    data: ob,
                    beforeSend: function(objeto){
                
                    },
                    success: function(data)
                    { 
                 
                     location.reload();
            
                    }
             });
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }
         }
            </script>
           
<?php
               }
               
             elseif($vistobueno2021 == $pendienteDeVoBo or $vistobueno2021 == 1 or $total == 100)
             {
                 ?>
                  <h4 style="text-align: center; color: red; font-size:23px;">5</h4>             
    <strong id="strong" style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="" name=""  readonly="readonly" onchange="select_eje(this.value);" style="float: left; margin-left: 10%; width: 40%; height: 35px">
            <option value=""><?php echo $eje52021; ?> </option>
                    <meta charset="UTF-8">
                   
            </select><br><br>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong id="strong" style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="" name="" readonly="readonly" onchange="select_linea();" style="float: left; margin-left: 10%; width: 40%; height: 35px">
              <option value=""><?php echo $linea52021; ?></option></select><br><br><br>
  
              <strong id="strong" style="float: left; margin-left: 10%;">Meta individual</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" readonly="readonly" id="textarea" class="md-textarea form-control"><?php echo $redaccionmeta5; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Indicadores</strong><br>
              <textarea name="" style="width: 40%; height: 15%; margin-left: 10%;" id="textarea" readonly="readonly" class="md-textarea form-control"><?php echo $indicadorMeta5; ?></textarea><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br>
                <strong id="" style="float: left; margin-left: 11%; font-size: 15px;">No aprobatorioe</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px; font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 8%; font-size: 15px;">Sobresaliente</strong><br>
                <input type="text" readonly value="<?php echo $NivelCumpNoAproMeta5; ?>" class="form-control" style="float: left; margin-left: 10%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpAproMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSatisfMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;">
                <input type="text" readonly value="<?php echo $NivelCumpSobreMeta5; ?>" class="form-control" style="float: left; margin-left: 4%; width: 170px;"><br><br>
           <div id="contenedor-niveles" style="width: auto; height: auto; float: left;  margin-top: -430px; margin-left: 52%; ">
                <strong id="ponderacion1" style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong><br>
                <input type="number"  name="" id="ponderacion11" value="<?php echo $ponderacionMeta5; ?>" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="fechaCompromiso2" style="float: left; margin-left: 35px;">Fecha compromiso</strong><br>
                <input type="date"  name="" id="fechaCompromiso1" value="<?php echo $fechaCumpMeta5; ?>" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly><br>
                <strong id="unidadMedida2" style="float: left; margin-left: 35px;">Unidad de medida</strong><br>
                <select name="" id="unidadMedida1" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" readonly>
                    <option value="<?php echo $unidadmedida5; ?>"><?php echo $unidadmedida5; ?></option>
              
                </select>
               </div>
                <?php
             }
             ?>
                 
        </div>
<!--
  <div class="progress" style="height: 15px;">
<div class="progress-bar progress-bar-striped progreso-npi" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $total; ?>%; color: black; font-size: 15px; background: #2ECC71;"><?php echo $total; ?>%
</div>
</div>
-->
         <div id="" style="width: 100%; height: 520px; background-color: #6B6C6D;">
        <br><br><br><br>

                <center><strong id="" style="color: white;">COMENTARIO DEL JEFE INMEDIATO PARA LA EVALUACIÓN FINAL:</strong><br></center>
                <textarea name="meta6" rows="4" readonly="readonly" id="" style="margin-left: auto; margin-right: auto; display: block; width: 40%;"><?php echo utf8_decode($comentariojefe); ?></textarea><br>
                <center><strong style="color: white;">COMENTARIO GENERAL DEL EVALUADO (Opcional):</strong><br></center>
                <textarea name="comentario" rows="4"  id="comentario" style="margin-left: auto; margin-right: auto; display: block; width: 40%;"><?php echo utf8_decode($comentario); ?></textarea><br><br><br><br><br><br><br><br><br>
                            <?php 
                require 'conexion.php';
                
                
                $sql = $conexion2->query("SELECT descripcionesmetasjefes2023.ponderacionMeta1, descripcionesmetasjefes2023.ponderacionMeta2, descripcionesmetasjefes2023.ponderacionMeta3, descripcionesmetasjefes2023.ponderacionMeta4, descripcionesmetasjefes2023.ponderacionMeta5, jefes.actualiza, jefes.vistobueno from descripcionesmetasjefes2023 inner join jefes on jefes.id_jefe = $date and descripcionesmetasjefes2023.id_jefe = $date");
                $result = mysqli_fetch_assoc($sql);
                $pon1 = $result['ponderacionMeta1'];
                $pon2 = $result['ponderacionMeta2'];
                $pon3 = $result['ponderacionMeta3'];
                $pon4 = $result['ponderacionMeta4'];
                $pon5 = $result['ponderacionMeta5'];
                $actualiza = $result['actualiza'];
                $vistobueno = $result['vistobueno'];
                $valida = 1;
                $validavobo = 4;
                $total = $pon1 + $pon2 + $pon3 + $pon4 + $pon5;
                if($total == 100 and $vistobueno == 4 ){
                ?>
            
        <button type="button" style="width: 350px; height: 40px; display: block; margin-left: auto; margin-right: auto;  margin-top: -8%; cursor: pointer;" class="btn btn-warning" value="">FINALIZAR Y SOLICITAR VoBo</button>
        
                <?php
                }elseif($total < 100 and $vistobueno == 4 ){
                    ?>
                  
                    <h5 style="text-align: center; margin-top: -8%; font-size: 100%; color: white; " >La suma de tus ponderaciones debe der igual a 100 para poder solicitar el visto bueno a tu jefe.</h5>
                <?php
                }elseif($total == 100 and $vistobueno == 2 ){
                    ?>
                  
                    <h5 style="text-align: center; margin-top: -140px; font-size: 100%; color: white; " >En espera de autorizacion de visto bueno.</h5>
                 
         <?php
                }elseif($total == 100 and $vistobueno == 3 ){
                    ?>
                  
                    <h5 style="text-align: center; margin-top: -8%; font-size: 100%; color: red; " >Tus metas han sido rechazadas por tu jefe directo.</h5>
                    <button type="button" style="width: 350px; height: 40px; display: block; margin-left: auto; margin-right: auto;  margin-top: 0%; cursor: pointer;" class="btn btn-warning" value="">FINALIZAR Y SOLICITAR VoBo</button>
       <?php
                }elseif($total == 100 and $vistobueno == $valida ){
                ?>
               <h5 style="text-align: center; margin-top: -140px; font-size: 100%; color: white; " >Tu metas han sido autorizadas por tu jefe inmediato.</h5> 
          
       <?php
                }elseif($total > 100 and $vistobueno == 4 ){
                    ?>
                  
                    <h5 style="text-align: center; margin-top: -8%; font-size: 100%; color: white; " >La suma total de tus ponderaciones debe ser igual a 100, verifica nuevamente tus ponderaciones, de lo contrario no podras solicitar el VoBo a tu jefe.</h5>
                    <?php
                }
                ?>
              
              </div>
            
</form>
 
 <div class="final" style="height: auto; background: #185F31; font-size: 100%;">
  <p>
® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
</div>
<script type="text/javascript">
          $("button").click(function () {
                let correoJefe = $("#correoJefe").val();
                let id = btoa($("#id").val());
                let nombre = $("#nombre").val();
                let appaterno = $("#appaterno").val();
                let comentario = $("#comentario").val();
                let mensaje = confirm("Todo bien? el correo de solicitud de visto bueno sera enviado al presionar aceptar.");

                if (mensaje == true) {
                    window.location.href="emailjefes2021?correoJefe="+correoJefe+'&id='+id+'&comentario='+comentario+'&nombre='+nombre+'&appaterno='+appaterno;
                } else {
                  swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                

                }
            });
        </script>
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}
</script>
</body>
</html>