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

        <?php
        include("cabeceraJefe.php");
        //include("menu.php");
    $vb = base64_decode($_GET['vb']);
    $date = base64_decode($_GET['empleado']);
 
require'conexion.php';
$sqls = $conexion2->query("SELECT * from personaloperativo where id_empleado= $date");
$rws = mysqli_fetch_assoc($sqls);
$correo = $rws['correo'];
$correojefe = $rws['correojefe'];

$sql = $conexion2->query("SELECT * from descripcionesmetas where id_empleado = $date");
$row = mysqli_fetch_assoc($sql);


       $evidencia1 = "evidencia1"; 
       $evidencia2 = "evidencia2"; 
       $evidencia3 = "evidencia3"; 

       $evidencia4 = "evidencia4"; 
       $evidencia5 = "evidencia5"; 
       $evidencia6 = "evidencia6";

       $evidencia7 = "evidencia7"; 
       $evidencia8 = "evidencia8"; 
       $evidencia9 = "evidencia9";

       $evidencia10 = "evidencia10"; 
       $evidencia11 = "evidencia11"; 
       $evidencia12 = "evidencia12";

       $evidencia13 = "evidencia13"; 
       $evidencia14 = "evidencia14"; 
       $evidencia15 = "evidencia15";

       $evidencia16 = "evidencia16"; 
       $evidencia17 = "evidencia17"; 
       $evidencia18 = "evidencia18";
       
    ?>

    
<div class="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="metas.js"></script>

 <div id="contenedor" >
  
            
    <div class="instrucciones" style="background: #185F31; margin-top: 3px;">
            <h1 id="h1" style="color: white;">Captura de objetivos</h1><br>
            <h2 id="h2" style="color: white;">1.- La META COLECTIVA séra registrada y evaluada por la Dirección de Administración y Finanzas, por lo que no deberas de ingresar ninguna información en esta sección</h2>

            </div>
       
           
           <div class="contenedor-sec">
         
     
            <div id="cuerpo" style="background: #FBFCFC">
            
            <h1 id="h1" style="text-align: center; color: white; font-size: 19px; color: black;">Meta colectiva</h1><br>
            <br><br>
            <input type="hidden" name='identificador' id="identificador" value="<?php echo $date; ?>">
            <input type="hidden" name="" id="correo" value="<?php echo $correo; ?>">
            <input type="hidden" name="" id="correojefe" value="<?php echo $correojefe; ?>">
            <input type="hidden" name="" id="nombre" value="<?php echo $nombre; ?>">
            <input type="hidden" name="" id="appaterno" value="<?php echo $appaterno; ?>">
            <input type="hidden" name="" id="apmaterno" value="<?php echo $apmaterno; ?>">
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="mySelect" name="" onchange="CargarProductos1(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option>Mejorar la atención al usuario mediante herramientas de comunicación, abrigo y acompañamiento al paciente, potenciando la atención Médica Integral y de calidad centrada en el paciente con orientación familiar y comunitaria con perspectiva de humanismo.</option>
       
        </select><br><br>
       
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos1" name="" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option>Obtener la Certificación del Hospital ante el Consejo de Salubridad General de la Secretaría de Salud </option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta colectiva</strong><br>
              <textarea name="" readonly="readonly" id="textarea" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control">Solicitar la Evaluación para la Certificación del hospital por el Consejo de salubridad General antes del mes de noviembre del ejercicio 2020</textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name=""  readonly="readonly" id="textarea" style="width: 35%; height: 15%; margin-left: 10%" id="textarea" class="md-textarea form-control">“DERIVADO DE LA PANDEMIA CAUSADA POR EL VIRUS SARS-COV-2, DECLARADA EN MARZO DE 2020, EL CONSEJO DE SALUBRIDAD GENERAL NO CONSIDERA COMO UNA PRIORIDAD EL PROCESO DE CERTIFICACIÓN , MOTIVO POR EL CUAL NO FUE POSIBLE LLEVAR A CABO EL PROCESO, DANDO PRIORIDAD TAMBIÉN EN LA INSTITUCIÓN A LA ATENCIÓN DE LA EMERGENCIA SANITARIA”.</textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name=""  readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control">Oficio que da constancia que la Institución dio cumplimiento a:
a) Contar con las Autorizaciones Sanitarias que correspondan a los servicios que brinda
b) No tener procedimientos administrativos abiertos ante la COFEPRIS o autoridades de regulación sanitaria
c) No contar con sanciones de inhabilitación relacionadas con la prestación de servicios de atención médica impuestas por cualquier autoridad administrativa
d) Documentos de autoevaluación relacionados con el diseño y la implementación de procesos y sistemas dentro del Modelo de Seguridad del Paciente del CSG evidenciando el cumplimeinto del 100% de los requisitos ponderados como "indispensables", el 80% o más de los "Necesarios" y el 50% o más de los "Convenientes".</textarea><br><br><br><br><br><br><br><br>
               <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                <input name="" id="nivel_cump"  type="radio" onclick="" value="40"   checked="checked" style="float: left; margin-left: 9%;">
                <input type="text" name="" value="Déspues de Enero" class="form-control" style="float: left; width: 170px; margin-left: 0%;">
                <input  id="" name="" type="radio" onclick="" value="60" style="float: left; margin-left: 3%;"/>
                
                <input type="text" name="" value="Enero del 2021 " class="form-control" style="float: left; width: 170px; margin-left: 0%;">
                <input id="nivel_cump" name="" type="radio" onclick="" value="80" style="float: left; margin-left: 3%;"/>
                <input type="text"  name="" value="Diciembre del 2020" class="form-control" style="float: left; width: 170px; margin-left: 0%;">
                <input id="nivel_cump" name="" type="radio" onclick="" value="100" style="float: left; margin-left: 2%;" />
                <input type="text" name="" value="Noviembre del 2020" class="form-control" style="float: left; width: 170px; margin-left: 0%;"><br><br>
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="text"  name="" value="100%" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="date"  name="" value="<?php  $row['fechaCumpMeta1']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
                </div>
            </div>
             <input type="hidden"  id="identifica" value="<?php echo $date; ?>">
   
        </div>
           
           

        <div class="contenedor-sec">
         
     
            <div id="cuerpo" style="background: #ECF0F1;">
            <h1 id="h1" style="text-align: center; color: white; font-size: 19px; color: black;">Metas individuales</h1>
            <br>
            <input type="hidden" name='identificador' id="identificador" value="<?php echo $empleado; ?>">
            <input type="hidden" name="" id="correo" value="<?php echo $correo; ?>">
            <input type="hidden" name="" id="correojefe" value="<?php echo $correojefe; ?>">
<h1 style="color: red; text-align: center;">1</h1>
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="mySelect" name="ejeUno" onchange="CargarProductos1(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option><?php echo $rws['ejeestrategico']; ?></option>
          
        </select><br><br>
        <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px; position: sticky;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia1.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia1$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia1$date/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia2.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia2$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia2$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px; ">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia3.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia3$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia3$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos1" name="metaEspecifica1" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option><?php echo $rws['lineaestrategica']; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta1"  readonly="readonly" id="textarea" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['redacionMeta1']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name="resultadoObtenido1"  readonly="readonly" id="textarea" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['resultadobtenido']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="metaUno"   readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['indicadorMeta1']; ?></textarea><br><br><br><br><br><br><br><br>
             <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                <input name="nivel_cump" id="nivel_cump"  type="radio" onclick="nivel_local();" value="40" style="float: left; margin-left: 9%;" <?php echo $row['nivelescumplimiento1']; ?> <?php if ($row['nivelescumplimiento1'] == "40") echo 'checked="checked"' ?> >
                <input type="text" name="inputUno" class="form-control" style="float: left; margin-left: 0%; width: 170px;" value="<?php echo $row['NivelCumpNoAproMeta1']; ?>">
                <input  id="nivel_cump" name="nivel_cump" type="radio" onclick="nivel_local();" value="60" style="float: left; margin-left: 3%;" <?php echo $row['nivelescumplimiento1']; ?> <?php if ($row['nivelescumplimiento1'] == "60") echo 'checked="checked"' ?>/>
                <input type="text" name="inputDos" class="form-control" style="float: left; margin-left: 0%; width: 170px;" value="<?php echo $row['NivelCumpAproMeta1']; ?>">
                <input id="nivel_cump" name="nivel_cump" type="radio" onclick="nivel_local();" style="float: left; margin-left: 3%;" value="80" <?php echo $row['nivelescumplimiento1']; ?> <?php if ($row['nivelescumplimiento1'] == "80") echo 'checked="checked"' ?>/>
                <input type="text" name="inputTres" class="form-control" style="float: left; margin-left: 0%; width: 170px;" value="<?php echo $row['NivelCumpSatisfMeta1']; ?>">
                <input id="nivel_cump" name="nivel_cump" type="radio" onclick="nivel_local();" style="float: left; margin-left: 2%;" value="100" <?php echo $row['nivelescumplimiento1']; ?> <?php if ($row['nivelescumplimiento1'] == "100") echo 'checked="checked"' ?>/>
                <input type="text" class="form-control" style="float: left; margin-left: 0%; width: 170px;" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta1']; ?>"><br>
            <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  name="" value="<?php echo $row['ponderacionMeta1']; ?>" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="<?php echo $row['fechaCumpMeta1']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
                </div>
				
            </div>
             <input type="hidden"  id="identifica" value="<?php echo $date; ?>">
   
        </div>
        
         </form>
           
        
           <div class="contenedor-sec">
           <div id="cuerpo" style="background: #FBFCFC;">
          <br><br>
    <h1 style="color: red; text-align: center;">2</h1>
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="mySelect" name="ejeDos" onchange="CargarProductos2(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option><?php echo $rws['ejeestrategico']; ?></option>
          
            
        </select><br><br>
        <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0%;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia4.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia4$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia4$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia5.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia5$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia5$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia6.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia6$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia6$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos2" name="metaEspecifica2" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option>-<?php echo $rws['lineaestrategica']; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta2" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['redacionMeta2']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name="resultadoObtenido2" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['resultadobtenido2']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="metaDos" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['indicadorMeta2']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick=nivel_local2(); value="40" <?php echo $row['nivelescumplimiento2']; ?> <?php if ($row['nivelescumplimiento2'] == "40") echo 'checked="checked"' ?> style="float: left; margin-left: 9%;">
                <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta2']; ?>"
                style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick="nivel_local2();" value="60" <?php echo $row['nivelescumplimiento2']; ?> <?php if ($row['nivelescumplimiento2'] == "60") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta2']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick="nivel_local2();" value="80" <?php echo $row['nivelescumplimiento2']; ?> <?php if ($row['nivelescumplimiento2'] == "80") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta2']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick="nivel_local2();" value="100" <?php echo $row['nivelescumplimiento2']; ?> <?php if ($row['nivelescumplimiento2'] == "100") echo 'checked="checked"' ?> style="float: left; margin-left: 2%;"/>
                <input type="text" name="inputCuatro"  value="<?php echo $row['NivelCumpSobreMeta2']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                 <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  name="" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" value="<?php echo $row['ponderacionMeta2']; ?>" readonly><br>
                 <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="<?php echo $row['fechaCumpMeta2']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
            </div>
            </div>
            </div>
 
           <div class="contenedor-sec">
           <div id="cuerpo" style="background: #ECF0F1;">
           <br><br>
    <h1 style="color: red; text-align: center;">3</h1>
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="mySelect" name="ejeTres" onchange="CargarProductos3(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option><?php echo $rws['ejeestrategico']; ?></option>
        
        </select><br><br>

        <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia7.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia7$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia7$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia8.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia8$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia8$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia9.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia9$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia9$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div> 
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos3" name="metaEspecifica3" onchange="CargarProductos3(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option><?php echo $rws['lineaestrategica']; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta3" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['redacionMeta3']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name="resultadoObtenido3" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['resultadobtenido3']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="metaTres" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['indicadorMeta3']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                 <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="40" <?php echo $row['nivelescumplimiento3']; ?> <?php if ($row['nivelescumplimiento3'] == "40") echo 'checked="checked"' ?> style="float: left; margin-left: 9%;"/>
                <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta3']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="60" <?php echo $row['nivelescumplimiento3']; ?> <?php if ($row['nivelescumplimiento3'] == "60") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text"  name="inputDos" value="<?php echo $row['NivelCumpAproMeta3']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="80" <?php echo $row['nivelescumplimiento3']; ?> <?php if ($row['nivelescumplimiento3'] == "80") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta3']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="100" <?php echo $row['nivelescumplimiento3']; ?> <?php if ($row['nivelescumplimiento3'] == "100") echo 'checked="checked"' ?> style="float: left; margin-left: 2%;"/>
                <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta3']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  name="" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" value="<?php echo $row['ponderacionMeta3']; ?>" readonly><br>
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="<?php echo $row['fechaCumpMeta3']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
            </div>
            </div>
            </div>

                   <div class="contenedor-sec">
                   <div id="cuerpo" style="background:  #FBFCFC;">
                   <br><br>
            <h1 style="color: red; text-align: center;">4</h1>
            <strong style="margin-left: 10%;">Eje estrategico</strong><br>
            <select class="form-control" id="mySelect" name="ejeCuatro" onchange="CargarProductos4(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option><?php echo $rws['ejeestrategico']; ?></option>
           
        </select><br><br>

        <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia10.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia10$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia10$date/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia11.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia11$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia11$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia12.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia12$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia12$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos4" name="metaEspecifica4" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option><?php echo $rws['lineaestrategica']; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta4" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['redacionMeta4']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name="resultadoObtenido4" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['resultadobtenido4']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="metaCuatro" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['indicadorMeta4']; ?></textarea><br><br><br><br><br><br><br><br>
             <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="40" <?php echo $row['nivelescumplimiento4']; ?> <?php if ($row['nivelescumplimiento4'] == "40") echo 'checked="checked"' ?> style="float: left; margin-left: 9%;"/>
                <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta4']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="60" <?php echo $row['nivelescumplimiento4']; ?> <?php if ($row['nivelescumplimiento4'] == "60") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta4']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="80" <?php echo $row['nivelescumplimiento4']; ?> <?php if ($row['nivelescumplimiento4'] == "80") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta4']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="100" <?php echo $row['nivelescumplimiento4']; ?> <?php if ($row['nivelescumplimiento4'] == "100") echo 'checked="checked"' ?> style="float: left; margin-left: 2%;"/>
                <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta4']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
               <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  name="" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" value="<?php echo $row['ponderacionMeta4']; ?>" readonly><br>
                <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="<?php echo $row['fechaCumpMeta4']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                 <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
            </div>
            </div>
                    
        </div>


           <div class="contenedor-sec">
           <div id="cuerpo" style="background: #ECF0F1;">
           <br><br>
    <h1 style="color: red; text-align: center;">5</h1>
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="mySelect" name="ejeCinco" onchange="CargarProductos5(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option><?php echo $rws['ejeestrategico']; ?></option>
       
        </select><br><br>
        <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia13.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia13$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia13$date/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia14.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia14$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia14$date/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia15.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia15$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia15$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
              <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos5" name="metaEspecifica5" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option><?php echo $rws['lineaestrategica']; ?></option></select><br><br><br>
  
              <strong style="margin-left: 10%;">Meta individual</strong><br>
              <textarea name="meta5" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['redacionMeta5']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name="resultadoObtenido5" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['resultadobtenido5']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong style="margin-left: 10%;">Indicadores</strong><br>
              <textarea name="metaCinco" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['indicadorMeta5']; ?></textarea><br><br><br><br><br><br><br><br>
              <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="40" <?php echo $row['nivelescumplimiento5']; ?> <?php if ($row['nivelescumplimiento5'] == "40") echo 'checked="checked"' ?> style="float: left; margin-left: 9%;"/>
                <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta5']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="60" <?php echo $row['nivelescumplimiento5']; ?> <?php if ($row['nivelescumplimiento5'] == "60") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta5']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="80" <?php echo $row['nivelescumplimiento5']; ?> <?php if ($row['nivelescumplimiento5'] == "80") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta5']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="100" <?php echo $row['nivelescumplimiento5']; ?> <?php if ($row['nivelescumplimiento5'] == "100") echo 'checked="checked"' ?> style="float: left; margin-left: 2%;"/>
                <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta5']; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  name="" min="1" max="100"  value="<?php echo $row['ponderacionMeta5']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                 <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="<?php echo $row['fechaCumpMeta5']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
        </div>
    </div>
</div>
    
           <div class="contenedor-sec">
           <div id="cuerpo" style="background:  #FBFCFC;">
           <br><br>
    <h1 style="color: red; text-align: center;">6</h1>
    <strong style="margin-left: 10%;">Eje estrategico</strong><br>
    
        <select class="form-control" id="mySelect" name="ejeSeis" onchange="CargarProductos6(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option><?php echo $rws['ejeestrategico']; ?></option> 
            
        </select>

                <br><br>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right: 0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia16.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia16$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia16$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia17.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia17$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia17$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div>
                <div class="form-group" style="float: right; margin-top: -120px; margin-right:  0px;">	
                <div class="col-sm-10">
                <label for="archivo" class="col-sm-2 control-label"></label>
						
                        <?php 
                       
                
							$path = "archivos/".$evidencia18.$date;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos/$evidencia18$date/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos/$evidencia18$date/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>
						
					</div>
                </div> 
                <strong style="margin-left: 10%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="productos6" name="metaEspecifica6" style="float: left; margin-left: 10%; width: 35%; height: 35px;">
                <option value=""><?php echo $rws['lineaestrategica']; ?></option></select><br><br><br>
                <strong style="margin-left: 10%;">Meta individual</strong><br>
                <textarea name="meta6" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo ""; ?></textarea><br><br><br><br><br><br><br><br><br>
                <strong style="margin-left: 10%;">Resultado obtenido</strong><br>
                <textarea name="resultadoObtenido6" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo $row['resultadobtenido6']; ?></textarea><br><br><br><br><br><br><br><br>
                <strong style="margin-left: 10%;">Indicadores</strong><br>
                <textarea name="metaSeis" readonly="readonly" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control"><?php echo ""; ?></textarea><br><br><br><br><br><br><br><br>
                <strong id="strong" style="float: left; margin-left: 10%;">Niveles de cumplimiento</strong><br><br>
                <strong id="" style="float: left; margin-left: 10%; font-size: 15px;">No aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Min aprobatorio</strong>
                <strong id="" style="float: left; margin-left: 6%;  font-size: 15px;">Satisfactorio</strong>
                <strong id="" style="float: left; margin-left: 150px;  font-size: 15px;">Sobresaliente</strong><br>
                <input name="nivel_cump6" id="nivel_cump6" type="radio" onclick=nivel_local6(); value="40" <?php echo $row['nivelescumplimiento6']; ?> <?php if ($row['nivelescumplimiento6'] == "40") echo 'checked="checked"' ?> style="float: left; margin-left: 9%;"/>
                <input type="text" name="inputUno" value="<?php echo ""; ?>" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump6" id="nivel_cump6" type="radio" onclick=nivel_local6(); value="60" <?php echo $row['nivelescumplimiento6']; ?> <?php if ($row['nivelescumplimiento6'] == "60") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;"/>
                <input type="text" name="inputDos" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump6" id="nivel_cump6" type="radio" onclick=nivel_local6(); value="80" <?php echo $row['nivelescumplimiento6']; ?> <?php if ($row['nivelescumplimiento6'] == "80") echo 'checked="checked"' ?> style="float: left; margin-left: 3%;" />
                <input type="text" name="inputTres" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <input name="nivel_cump6" id="nivel_cump6" type="radio" onclick=nivel_local6(); value="100" <?php echo $row['nivelescumplimiento6']; ?> <?php if ($row['nivelescumplimiento6'] == "100") echo 'checked="checked"' ?> style="float: left; margin-left: 2%;"/>
                <input type="text" name="inputCuatro" style="float: left; margin-left: 0%; width: 170px;" class="form-control">
                <div id="contenedor-niveles" style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                <strong  style="float: left; margin-left: 35px; margin-top:45px;">Ponderación</strong>
                <input type="number"  name="" class="form-control" min="1" max="100" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" value="<?php echo $row['ponderacionMeta6']; ?>" readonly><br>
               <strong style="float: left; margin-left: 35px;">Fecha compromiso</strong>
                <input type="text"  name="" value="<?php echo $row['fechaCumpMeta6']; ?>" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly><br>
                <strong style="float: left; margin-left: 35px;">Unidad de medida</strong>
                <select name="" class="form-control" style="float: left; margin-left: 25px; margin-top: 0px; width: 80%;" class="form-control" readonly>
                    <option value="CANTIDAD">CANTIDAD</option>
              
                </select>
            </div>
        </div>
    </div>
           <div style="background-color: #196F3D; " >
           <br><br><br>
           <?php
           require 'conexion.php';
      
            $sql_l = $conexion2->query("SELECT cumplio from descripcionesmetas where id_empleado = '$date'");
            $resul = mysqli_fetch_assoc($sql_l);
            ?>
 <form action="comentarioJefe" method="POST">
     <input type="hidden" name="empl" value="<?php echo $date; ?>" >
                <center><strong id="" style="color: white;">COMENTARIO DEL JEFE INMEDIATO PARA LA EVALUACIÓN FINAL:</strong><br></center>
                <textarea name="comentarioJefeDirecto" id="" placeholder="" style="margin-left: auto; margin-right: auto; display: block; width: 35%; height: 100px;"><?php echo $row['comentarioJefe']; ?></textarea><br>
                <input type="submit" class="btn-warning" name="comentario" style="width: 300px; height: 40px; margin-left: auto; margin-right: auto; display: block; text-align: center; color: white; cursor:pointer; border-radius: 5px;" value="GUADAR COMENTARIO"><br>
                </form>
               <center><strong id="" style="color: white;">No se llevaron a cabo las metas establecidas por el siguiente motivo:</strong></center>
              <select class="form-control" style="width: 35%; height: 35px; margin-left: auto; margin-right: auto; display: block;">
            <option><?php echo $resul['cumplio']; ?></option> 
          
        </select><br>
                <center><strong style="color: white;">COMENTARIO GENERAL DEL EVALUADO:</strong><br></center>
                <textarea name="metaSeis" id="" readonly="readonly" style="margin-left: auto; margin-right: auto; display: block; width: 35%; height: 100px;"><?php echo $row['comentario']; ?></textarea>
        

                
           



<a href="autorizadoVoBo?empleado=<?php echo $date; ?>&mail=<?php echo $correo; ?>" class="btn-info" style="width: 300px; height: 40px; margin-left: auto; margin-right: auto; display: block; text-align: center; color: white; margin-top: 20px; border-radius: 5px;">AUTORIZAR METAS</a>
<a href="denegadoVoBo?empleado=<?php echo $date; ?>&mail=<?php echo $correo; ?>" class="btn-danger" style="width: 300px; height: 40px; margin-left: auto; margin-right: auto; display: block; text-align: center; color: white; margin-top: 18px; border-radius: 5px;">RECHAZAR METAS</a><br></div>  
<script type="text/javascript">
            $("button").click(function () {
                var fired_button = btoa($("#corre").val());
                var nombre = btoa($("#identificador").val());
                var mensaje = confirm("Todo bien? el correo de solicitud de visto bueno sera enviado al presionar aceptar.")

                if (mensaje == true) {
                    window.location.href = "emailTest?mail="+fired_button+'&nombre='+nombre+'&appaterno='+appaterno+'&apmaterno='+apmaterno;
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
         <div class="final" style="background: #185F31; margin-top: 2px;">
  <p>
® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
</div>
</body>
</html>
