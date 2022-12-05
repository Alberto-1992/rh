<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="iconos/css/all.min.css?n=1">
    <link rel="stylesheet" href="iconos/css/all.css?n=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Registro de metas</title>
</head>

<body>


    <?php
     
       //include("menu.php");

 $date = base64_decode($_GET['id']);
 $date2 =base64_encode($date);
 $correo = base64_decode($_GET['correo']);
 $correojefe = base64_decode($_GET['correojefe']);
 $nombre = base64_decode($_GET['name']);
 $appaterno = base64_decode($_GET['appaterno']);
 $apmaterno = base64_decode($_GET['apmaterno']);
 
 $nombre2 = base64_encode($nombre);
 $appaterno2 = base64_encode($appaterno);
 $apmaterno2 = base64_encode($apmaterno);
 
 $id = $result['id_empleado'];
 
 require 'conexion.php';
 $sql = $conexion2->query("SELECT * FROM descripcionesmetas2022 where id_empleado = $id");
    $row = mysqli_fetch_assoc($sql);

       
       $sql_m = $conexion2->query("SELECT SUM( IF(redacionMeta1 != '', 1,0) + IF(redacionMeta2 != '', 1,0) + IF(redacionMeta3 != '', 1,0) + IF(redacionMeta4 != '', 1,0) + IF(redacionMeta5 != '', 1,0)) total2 FROM descripcionesmetas2022 where id_empleado = $id");
       $rest = mysqli_fetch_assoc($sql_m);
       
       $valida2 = $rest['total2'];
       $query = $conexion2->query("SELECT vistobuenoResultado2022 from personaloperativo2022 where id_empleado = $id");
       $row_s = mysqli_fetch_assoc($query);
       $validarid = $row_s['vistobuenoResultado2022'];
    ?>


    <div class="all">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="metas.js"></script>
        <div id="contenedor">

            <div class="instrucciones" style="background: #366FD3; margin-top: 3px;">
                <h1 id="h1" style="font-size: 20px; color: white; font-style: normal;">Captura de objetivos</h1><br>
                <h2 id="h2" style="font-size: 20px; color: white; font-style: normal;">1.- La META COLECTIVA séra
                    registrada y evaluada por la Dirección de Administración y Finanzas, por lo que no deberas de
                    ingresar ninguna información en esta sección</h2>

            </div>



            <!--
     
            <div id="cuerpo" style="background: #FBFCFC;">
           
            <h1 id="h1" style="font-size: 20px; color: #6D6D6D; font-style: normal; text-align: center;">Meta colectiva</h1>-->
            <input type="hidden" name='identificador' id="identificador" value="<?php echo $id; ?>">
            <input type="hidden" name="" id="correo" value="<?php echo $correo; ?>">
            <input type="hidden" name="" id="correojefe" value="<?php echo $correojefe; ?>">
            <input type="hidden" name="" id="nombre" value="<?php echo $nombre; ?>">
            <input type="hidden" name="" id="appaterno" value="<?php echo $appaterno; ?>">
            <input type="hidden" name="" id="apmaterno" value="<?php echo $apmaterno; ?>">
            <!--
    <strong style="float: left; margin-left: 10%;">Eje estrategico</strong><br>
    <select class="form-control" id="mySelect" name="" onchange="CargarProductos1(this.value);" style="float: left; margin-left: 10%; width: 35%; height: 35px">
            <option>Mejorar la atención al usuario mediante herramientas de comunicación, abrigo y acompañamiento al paciente, potenciando la atención Médica Integral y de calidad centrada en el paciente con orientación familiar y comunitaria con perspectiva de humanismo.</option>
           
        </select><br><br>
       
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <strong style="float: left; margin-left: 10%;">Linea estrategica alineada a:</strong><br>
              <select class="form-control" id="productos1" name="" style="float: left; margin-left: 10%; width: 35%; height: 35px">
              <option>Obtener la Certificación del Hospital ante el Consejo de Salubridad General de la Secretaría de Salud </option></select><br><br><br>
  
              <strong style="float: left; margin-left: 10%;">Meta colectiva</strong><br>
              <textarea name=""  readonly="readonly" id="textarea" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control">Solicitar la Evaluación para la Certificación del hospital por el Consejo de salubridad General antes del mes de noviembre del ejercicio 2020</textarea><br><br><br><br><br><br><br><br>
              <strong style="float: left; margin-left: 10%;">Resultado obtenido</strong><br>
              <textarea name=""  readonly="readonly" id="textarea" style="width: 35%; height: 15%; margin-left: 10%;" id="textarea" class="md-textarea form-control">“DERIVADO DE LA PANDEMIA CAUSADA POR EL VIRUS SARS-COV-2, DECLARADA EN MARZO DE 2020, EL CONSEJO DE SALUBRIDAD GENERAL NO CONSIDERA COMO UNA PRIORIDAD EL PROCESO DE CERTIFICACIÓN , MOTIVO POR EL CUAL NO FUE POSIBLE LLEVAR A CABO EL PROCESO, DANDO PRIORIDAD TAMBIÉN EN LA INSTITUCIÓN A LA ATENCIÓN DE LA EMERGENCIA SANITARIA”.</textarea><br><br><br><br><br><br><br><br>
              <strong style="float: left; margin-left: 10%;">Indicadores</strong><br>
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
                <input type="text" name="" value="Déspues de Enero" class="form-control" style="float: left; width: 170px;">
                <input  id="" name="" type="radio" onclick="" value="60" style="float: left; margin-left: 3%;"/>
                
                <input type="text" name="" value="Enero del 2021 " class="form-control" style="float: left; width: 170px;">
                <input id="nivel_cump" name="" type="radio" onclick="" value="80" style="float: left; margin-left: 3%;"/>
                <input type="text"  name="" value="Diciembre del 2020" class="form-control" style="float: left; width: 170px;">
                <input id="nivel_cump" name="" type="radio" onclick="" value="100" style="float: left; margin-left: 2%;" />
                <input type="text" name="" value="Noviembre del 2020" class="form-control" style="float: left; width: 170px;"><br><br>
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
            -->
            <input type="hidden" id="identifica" value="<?php echo $id; ?>">


            <div id="cuerpo" style="background: #ECF0F1; width: auto; height: auto;">
                <div style="float: right;">
                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia1.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia1$id/$archivo' width='180' height='180'></iframe>";
                                        echo "<a href='archivos2022/$evidencia1$id/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia2.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia2$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia2$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia3.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia3$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia3$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>

                    </div>
                </div>
                <h1 id="h1" style="font-size: 20px; color: #6D6D6D; font-style: normal; text-align: center;">Metas
                    individuales</h1>

                <input type="hidden" name='identificador' id="identificador" value="<?php echo $id; ?>">
                <input type="hidden" name="" id="correo" value="<?php echo $correo; ?>">
                <input type="hidden" name="" id="correojefe" value="<?php echo $correojefe; ?>">
                <input type="hidden" name="" id="nombre" value="<?php echo $nombre; ?>">
                <input type="hidden" name="" id="appaterno" value="<?php echo $appaterno; ?>">
                <input type="hidden" name="" id="apmaterno" value="<?php echo $apmaterno; ?>">
                <h1 style="color: red; text-align: center;">1</h1>
                <strong style="float: left; margin-left: 5%;">Eje estrategico</strong><br>
                <select class="form-control" id="mySelect" name="ejeUno" onchange="CargarProductos1(this.value);"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['ejeestrategico12022']; ?></option>
                </select><br><br>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <strong style="float: left; margin-left: 5%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="productos1" name="metaEspecifica1"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['lineaestrategica12022']; ?></option>
                </select><br><br>

                <strong style="float: left; margin-left: 5%;">Meta individual</strong><br>
                <textarea name="meta1" readonly="readonly" id="textarea"
                    style="width: 40%; height: 140px; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['redacionMeta1']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Resultado obtenido</strong><br>
                <textarea name="resultadoObtenido1" readonly id="textarea"
                    style="width: 40%; height: 140px; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['resultadobtenido']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Indicadores</strong><br>
                <textarea name="metaUno" readonly="readonly" style="width: 40%; height: 140px; margin-left: 5%;"
                    id="textarea"
                    class="md-textarea form-control"><?php echo $row['indicadorMeta1']; ?></textarea><br><br><br><br><br><br>
                <strong id="strong" style="float: left; margin-left: 5%;">Niveles de cumplimiento</strong><br>
                <div class="form-row" style="margin-left: 3%;">
                    <div class="col-md4">
                        <label>No aprobatorio</label>
                        <input name="nivel_cump" id="nivel_cump" type="radio" onclick="nivel_local();" value="40"
                            style="float: left; margin-left: 4%;" <?php echo $row['nivelescumplimiento1']; ?>
                            <?php if ($row['nivelescumplimiento1'] == "40") echo 'checked="checked"' ?>>
                        <input type="text" name="inputUno" class="form-control" style="float: left; margin-left: 0%;"
                            value="<?php echo $row['NivelCumpNoAproMeta1']; ?>">
                    </div>
                    <div class="col-md4">
                        <label>Min aprobatorio</label>
                        <input id="nivel_cump" name="nivel_cump" type="radio" onclick="nivel_local();" value="60"
                            style="float: left; margin-left: 3%;" <?php echo $row['nivelescumplimiento1']; ?>
                            <?php if ($row['nivelescumplimiento1'] == "60") echo 'checked="checked"' ?> />
                        <input type="text" name="inputDos" class="form-control" style="float: left; margin-left: 0%;"
                            value="<?php echo $row['NivelCumpAproMeta1']; ?>">
                    </div>
                    <div class="col-md4">
                        <label>Satisfactorio</label>
                        <input id="nivel_cump" name="nivel_cump" type="radio" onclick="nivel_local();"
                            style="float: left; margin-left: 3%;" value="80" <?php echo $row['nivelescumplimiento1']; ?>
                            <?php if ($row['nivelescumplimiento1'] == "80") echo 'checked="checked"' ?> />
                        <input type="text" name="inputTres" class="form-control" style="float: left; margin-left: 0%;"
                            value="<?php echo $row['NivelCumpSatisfMeta1']; ?>">
                    </div>
                    <div class="col-md4">
                        <label>Sobresaliente</label>
                        <input id="nivel_cump" name="nivel_cump" type="radio" onclick="nivel_local();"
                            style="float: left; margin-left: 2%;" value="100"
                            <?php echo $row['nivelescumplimiento1']; ?>
                            <?php if ($row['nivelescumplimiento1'] == "100") echo 'checked="checked"' ?> />
                        <input type="text" class="form-control" style="float: left; margin-left: 0%;" name="inputCuatro"
                            value="<?php echo $row['NivelCumpSobreMeta1']; ?>">
                    </div>
                </div><br>
                <div id="contenedor-niveles"
                    style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                    <strong style="float: right; margin-right: 60px; margin-top:45px;">Ponderación</strong>
                    <input type="number" name="" value="<?php echo $row['ponderacionMeta1']; ?>" min="1" max="100"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Fecha compromiso</strong>
                    <input type="text" name="" value="<?php echo $row['fechaCumpMeta1']; ?>"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Unidad de medida</strong>
                    <select name="" style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;"
                        class="form-control" readonly>
                        <option value="CANTIDAD">CANTIDAD</option>

                    </select>

                </div>
                <div id="evidencias"
                    style="width: 350px; height: auto; float: left;  margin-top: -330px; margin-left: 52%;  background: #ECF0F1;">
                    <br>
                    <strong style="float: left; margin-left: 0px; color: black; ">Sube tus evidencias en pdf</strong>
                    <input type="file" name="fichero1" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="fichero2" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="fichero3" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">

                </div>

            </div>

            <div id="cuerpo" style="background:  #FBFCFC; width: 100%; height: auto;">
                <div style="float: right;">
                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia4.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia4$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia4$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
						
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia5.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia5$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia5$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
						
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia6.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia6$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia6$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>

                    </div>
                </div>

                <h1 style="color: red; text-align: center;">2</h1>
                <strong style="float: left; margin-left: 5%;">Eje estrategico</strong><br>
                <select class="form-control" id="mySelect" name="ejeDos" onchange="CargarProductos2(this.value);"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['ejeestrategico22022']; ?></option>


                </select><br><br>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                <strong style="float: left; margin-left: 5%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="productos2" name="metaEspecifica2"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option>-<?php echo $result['lineaestrategica22022']; ?></option>
                </select><br><br>

                <strong style="float: left; margin-left: 5%;">Meta individual</strong><br>
                <textarea name="meta2" readonly style="width: 40%; height: 140px; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['redacionMeta2']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Resultado obtenido</strong><br>
                <textarea name="resultadoObtenido2" readonly style="width: 40%; height: 140px; margin-left: 5%;"
                    id="textarea"
                    class="md-textarea form-control"><?php echo $row['resultadobtenido2']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Indicadores</strong><br>
                <textarea name="metaDos" readonly="readonly" style="width: 40%; height: 140px; margin-left: 5%;"
                    id="textarea"
                    class="md-textarea form-control"><?php echo $row['indicadorMeta2']; ?></textarea><br><br><br><br><br><br>

                <strong id="strong" style="float: left; margin-left: 5%;">Niveles de cumplimiento</strong><br>
                <div class="form-row" style="margin-left: 3%;">
                    <div class="col-md4">
                        <label>No aprobatorio</label>
                        <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick=nivel_local2(); value="40"
                            <?php echo $row['nivelescumplimiento2']; ?>
                            <?php if ($row['nivelescumplimiento2'] == "40") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 9%;">
                        <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta2']; ?>"
                            style="float: left; margin-left: 0%; " class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Min aprobatorio</label>
                        <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick="nivel_local2();" value="60"
                            <?php echo $row['nivelescumplimiento2']; ?>
                            <?php if ($row['nivelescumplimiento2'] == "60") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta2']; ?>"
                            style="float: left; margin-left: 0%; " class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Satisfactorio</label>
                        <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick="nivel_local2();" value="80"
                            <?php echo $row['nivelescumplimiento2']; ?>
                            <?php if ($row['nivelescumplimiento2'] == "80") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta2']; ?>"
                            style="float: left; margin-left: 0%; " class="form-control">
                    </div>

                    <div class="col-md4">
                        <label>Sobresaliente</label>
                        <input name="nivel_cump2" id="nivel_cump2" type="radio" onclick="nivel_local2();" value="100"
                            <?php echo $row['nivelescumplimiento2']; ?>
                            <?php if ($row['nivelescumplimiento2'] == "100") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 2%;" />
                        <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta2']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                </div><br>
                <div id="contenedor-niveles"
                    style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                    <strong style="float: right; margin-right: 60px; margin-top:45px;">Ponderación</strong>
                    <input type="number" name="" min="1" max="100"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        value="<?php echo $row['ponderacionMeta2']; ?>" readonly><br>
                    <strong style="float: right; margin-right: 60px;">Fecha compromiso</strong>
                    <input type="text" name="" value="<?php echo $row['fechaCumpMeta2']; ?>"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Unidad de medida</strong>
                    <select name="" style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;"
                        class="form-control" readonly>
                        <option value="CANTIDAD">CANTIDAD</option>

                    </select>
                </div>
                <div id="evidencias"
                    style="width: 350px; height: auto; float: left;  margin-top: -330px; margin-left: 52%;  background: #FBFCFC;">
                    <br>
                    <strong style="float: left; margin-left: 0px; color: black; ">Sube tus evidencias en pdf</strong>
                    <input type="file" name="archio4" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio5" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio6" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">

                </div>

            </div>





            <div id="cuerpo" style="background: #ECF0F1; width: 100%; height: auto;">
                <div style="float: right; margin-top: 70px;">

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia7.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia7$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia7$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>

                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia8.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia8$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia8$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>

                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia9.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia9$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia9$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>

                    </div>
                </div>
                <h1 style="color: red; text-align: center;">3</h1>
                <strong style="float: left; margin-left: 5%;">Eje estrategico</strong><br>
                <select class="form-control" id="mySelect" name="ejeTres" onchange="CargarProductos3(this.value);"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['ejeestrategico32022']; ?></option>

                </select><br><br>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <strong style="float: left; margin-left: 5%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="productos3" name="metaEspecifica3"
                    onchange="CargarProductos3(this.value);"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['lineaestrategica32022']; ?></option>
                </select><br><br>

                <strong style="float: left; margin-left: 5%;">Meta individual</strong><br>
                <textarea name="meta3" readonly="readonly"
                    style="width: 40%; height: 140px; float: left; margin-left: 5%" id="textarea"
                    class="md-textarea form-control"><?php echo $row['redacionMeta3']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Resultado obtenido</strong><br>
                <textarea name="resultadoObtenido3" readonly
                    style="width: 40%; height: 140px; float: left; margin-left: 5%" id="textarea"
                    class="md-textarea form-control"><?php echo $row['resultadobtenido3']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Indicadores</strong><br>
                <textarea name="metaTres" readonly="readonly"
                    style="width: 40%; height: 140px; float: left; margin-left: 5%" id="textarea"
                    class="md-textarea form-control"><?php echo $row['indicadorMeta3']; ?></textarea><br><br><br><br><br><br>
                <strong id="strong" style="float: left; margin-left: 5%;">Niveles de cumplimiento</strong><br>
                <div class="form-row" style="margin-left: 3%;">
                    <div class="col-md4">
                        <label>No aprobatorio</label>
                        <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="40"
                            <?php echo $row['nivelescumplimiento3']; ?>
                            <?php if ($row['nivelescumplimiento3'] == "40") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 9%;" />
                        <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta3']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Min aprobatorio</label>
                        <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="60"
                            <?php echo $row['nivelescumplimiento3']; ?>
                            <?php if ($row['nivelescumplimiento3'] == "60") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta3']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Sobresaliente</label>
                        <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="80"
                            <?php echo $row['nivelescumplimiento3']; ?>
                            <?php if ($row['nivelescumplimiento3'] == "80") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta3']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Satisfactorio</label>
                        <input name="nivel_cump3" id="nivel_cump3" type="radio" onclick=nivel_local3(); value="100"
                            <?php echo $row['nivelescumplimiento3']; ?>
                            <?php if ($row['nivelescumplimiento3'] == "100") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 2%;" />
                        <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta3']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                </div><br>
                <div id="contenedor-niveles"
                    style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                    <strong style="float: right; margin-right: 60px; margin-top:45px;">Ponderación</strong>
                    <input type="number" name="" min="1" max="100"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        value="<?php echo $row['ponderacionMeta3']; ?>" readonly><br>
                    <strong style="float: right; margin-right: 60px;">Fecha compromiso</strong>
                    <input type="text" name="" value="<?php echo $row['fechaCumpMeta3']; ?>"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Unidad de medida</strong>
                    <select name="" style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;"
                        class="form-control" readonly>
                        <option value="CANTIDAD">CANTIDAD</option>

                    </select>
                </div>
                <div id="evidencias"
                    style="width: 350px; height: auto; float: left;  margin-top: -330px; margin-left: 52%;  background: #ECF0F1;">
                    <br>
                    <strong style="float: left; margin-left: 0px; color: black;">Sube tus evidencias en pdf</strong><br>
                    <input type="file" name="archio7" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio8" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio9" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                </div>
            </div>


            <div id="cuerpo" style="background: #FDFEFE; width: 100; height: auto;">
                <div style="float: right; ">
                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia10.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia10$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia10$id/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia11.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia11$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia11$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
						
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia12.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia12$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia12$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>

                    </div>
                </div>
                <h1 style="color: red; text-align: center;">4</h1>
                <strong style="float: left; margin-left: 5%;">Eje estrategico</strong><br>
                <select class="form-control" id="mySelect" name="ejeCuatro" onchange="CargarProductos4(this.value);"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['ejeestrategico42022']; ?></option>

                </select><br><br>

                <strong style="float: left; margin-left: 5%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="productos4" name="metaEspecifica4"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['lineaestrategica42022']; ?></option>
                </select><br><br>

                <strong style="float: left; margin-left: 5%;">Meta individual</strong><br>
                <textarea name="meta4" readonly="readonly"
                    style="width: 40%; height: 140px; float: left; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['redacionMeta4']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Resultado obtenido</strong><br>
                <textarea name="resultadoObtenido4" readonly
                    style="width: 40%; height: 140px; float: left; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['resultadobtenido4']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Indicadores</strong><br>
                <textarea name="metaCuatro" readonly="readonly"
                    style="width: 40%; height: 140px; float: left; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['indicadorMeta4']; ?></textarea><br><br><br><br><br><br>
                <strong id="strong" style="float: left; margin-left: 5%;">Niveles de cumplimiento</strong><br>
                <div class="form-row" style="margin-left: 3%;">
                    <div class="col-md4">
                        <label>No aprobatorio</label>
                        <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="40"
                            <?php echo $row['nivelescumplimiento4']; ?>
                            <?php if ($row['nivelescumplimiento4'] == "40") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 9%;" />
                        <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta4']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Min aprobatorio</label>
                        <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="60"
                            <?php echo $row['nivelescumplimiento4']; ?>
                            <?php if ($row['nivelescumplimiento4'] == "60") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta4']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Sobresaleinte</label>
                        <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="80"
                            <?php echo $row['nivelescumplimiento4']; ?>
                            <?php if ($row['nivelescumplimiento4'] == "80") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta4']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Satisfactorio</label>
                        <input name="nivel_cump4" id="nivel_cump4" type="radio" onclick=nivel_local4(); value="100"
                            <?php echo $row['nivelescumplimiento4']; ?>
                            <?php if ($row['nivelescumplimiento4'] == "100") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 2%;" />
                        <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta4']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                </div><br>
                <div id="contenedor-niveles"
                    style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                    <strong style="float: right; margin-right: 60px; margin-top:45px;">Ponderación</strong>
                    <input type="number" name="" min="1" max="100"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        value="<?php echo $row['ponderacionMeta4']; ?>" readonly><br>
                    <strong style="float: right; margin-right: 60px;">Fecha compromiso</strong>
                    <input type="text" name="" value="<?php echo $row['fechaCumpMeta4']; ?>"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Unidad de medida</strong>
                    <select name="" style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;"
                        class="form-control" readonly>
                        <option value="CANTIDAD">CANTIDAD</option>

                    </select>
                </div>
                <div id="evidencias"
                    style="width: 350px; height: auto; float: left;  margin-top: -330px; margin-left: 52%;  background: white;">
                    <br>
                    <strong style="float: left; margin-left: 0px; color: black;">Sube tus evidencias en pdf</strong><br>
                    <input type="file" name="archio10" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio11" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio12" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                </div>
            </div>


            <div id="cuerpo" style="background: #ECF0F1; widht: 100%; height: auto;">
                <div style="float: right; ">
                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia13.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia13$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia13$id/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia14.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia14$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia14$id/$archivo'> <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
							
						?>


                    </div>

                    <div class="col-sm-10">


                        <?php 
                       
                
							$path = "archivos2022/".$evidencia15.$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
                                        echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' ></a></div><br>";
										
                                        echo "<iframe src='archivos2022/$evidencia15$id/$archivo' width='200' height='200'></iframe>";
                                        echo "<a href='archivos2022/$evidencia15$id/$archivo'>  <i title='Ver Archivo Adjunto' id='guardar'class='fas fa-file-pdf'>&nbspclick para visualizar</i></a>";
									}
								}
							}
						
						?>

                    </div>
                </div>
                <h1 style="color: red; text-align: center;">5</h1>
                <strong style="float: left; margin-left: 5%;">Eje estrategico</strong><br>
                <select class="form-control" id="mySelect" name="ejeCinco" onchange="CargarProductos5(this.value);"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['ejeestrategico52022']; ?></option>

                </select><br><br>

                <strong style="float: left; margin-left: 5%;">Linea estrategica alineada a:</strong><br>
                <select class="form-control" id="productos5" name="metaEspecifica5"
                    style="float: left; margin-left: 5%; width: 40%; height: 35px">
                    <option><?php echo $result['lineaestrategica52022']; ?></option>
                </select><br><br><br>

                <strong style="float: left; margin-left: 5%;">Meta individual</strong><br>
                <textarea name="meta5" readonly="readonly"
                    style="width: 40%; height: 140px; float: left; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['redacionMeta5']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Resultado obtenido</strong><br>
                <textarea name="resultadoObtenido5" readonly
                    style="width: 40%; height: 140px; float: left; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['resultadobtenido5']; ?></textarea><br><br><br><br><br><br>
                <strong style="float: left; margin-left: 5%;">Indicadores</strong><br>
                <textarea name="metaCinco" readonly="readonly"
                    style="width: 40%; height: 140px; float: left; margin-left: 5%;" id="textarea"
                    class="md-textarea form-control"><?php echo $row['indicadorMeta5']; ?></textarea><br><br><br><br><br><br>
                <strong id="strong" style="float: left; margin-left: 5%;">Niveles de cumplimiento</strong><br>
                <div class="form-row" style="margin-left: 3%;">
                    <div class="col-md4">
                        <label>No aprobatorio</label>
                        <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="40"
                            <?php echo $row['nivelescumplimiento5']; ?>
                            <?php if ($row['nivelescumplimiento5'] == "40") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 9%;" />
                        <input type="text" name="inputUno" value="<?php echo $row['NivelCumpNoAproMeta5']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Min aprobatorio</label>
                        <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="60"
                            <?php echo $row['nivelescumplimiento5']; ?>
                            <?php if ($row['nivelescumplimiento5'] == "60") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputDos" value="<?php echo $row['NivelCumpAproMeta5']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Satisfactorio</label>
                        <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="80"
                            <?php echo $row['nivelescumplimiento5']; ?>
                            <?php if ($row['nivelescumplimiento5'] == "80") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 3%;" />
                        <input type="text" name="inputTres" value="<?php echo $row['NivelCumpSatisfMeta5']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                    <div class="col-md4">
                        <label>Sobresaliente</label>
                        <input name="nivel_cump5" id="nivel_cump5" type="radio" onclick=nivel_local5(); value="100"
                            <?php echo $row['nivelescumplimiento5']; ?>
                            <?php if ($row['nivelescumplimiento5'] == "100") echo 'checked="checked"' ?>
                            style="float: left; margin-left: 2%;" />
                        <input type="text" name="inputCuatro" value="<?php echo $row['NivelCumpSobreMeta5']; ?>"
                            style="float: left; margin-left: 0%;" class="form-control">
                    </div>
                </div><br>
                <div id="contenedor-niveles"
                    style="width: 250px; height: auto; float: left;  margin-top: -590px; margin-left: 52%; ">
                    <strong style="float: right; margin-right: 60px; margin-top:45px;">Ponderación</strong>
                    <input type="number" name="" min="1" max="100" value="<?php echo $row['ponderacionMeta5']; ?>"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Fecha compromiso</strong>
                    <input type="text" name="" value="<?php echo $row['fechaCumpMeta5']; ?>"
                        style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;" class="form-control"
                        readonly><br>
                    <strong style="float: right; margin-right: 60px;">Unidad de medida</strong>
                    <select name="" style="float: right; margin-right: 55px; margin-top: 0px; width: 80%;"
                        class="form-control" readonly>
                        <option value="CANTIDAD">CANTIDAD</option>

                    </select>
                </div>
                <div id="evidencias"
                    style="width: 350px; height: auto; float: left;  margin-top: -330px; margin-left: 52%;  background: #ECF0F1;">
                    <br>
                    <strong style="float: left; margin-left: 0px; color: black;">Sube tus evidencias en pdf</strong><br>
                    <input type="file" name="archio13" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio14" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                    <input type="file" name="archio15" style="margin-left: 0px; border-radius: 15px; margin-top: 5px;">
                </div>
            </div>

            <div id="cuerpo" style="background: #A9A9A9; width: auto; height: auto;">


                <br><br><br><br><br>

                <?php
           require 'conexion.php';
            $sql = $conexion2->query("SELECT vistobueno, vistobuenoResultado2022 from personaloperativo2022 where id_empleado = $id");
            $result = mysqli_fetch_assoc($sql);
            $vobo = $result['vistobueno'];
            $vobo2021 = $result['vistobuenoResultado2022'];
            $sql_l = $conexion2->query("SELECT cumplio, comentarioResultado2022, comentarioJefeResultadoObtenido2022 from descripcionesmetas2022 where id_empleado = $id");
            $resul = mysqli_fetch_assoc($sql_l);
          
           if($vobo2021 == 0){
               
           ?>

                <?php
           }elseif($vobo2021 == 2){
               ?>


                </select> <br>
                <?php
           }elseif($vobo2021 == 3){
               ?>
                <!--
               <center><strong id="" style="color: white;">No se llevaron a cabo las metas establecidas por el siguiente motivo:</strong></center>
            <select name="cumplidas" id="cumplidas" class="form-control" style="width: 35%; height: 35px; margin-left: auto; margin-right: auto; display: block;">
                <option value="Cumplidas">Selecciona</option>
                <option value=" Por pandemia causada por el virus SARS-COV2"> Por pandemia causada por el virus SARS-COV2</option>
                <option value="Cambio de Adscripcion">Cambio de Adscripción</option>
                <option value="Licencia sin goce de sueldo">Licencia sin goce de sueldo</option>
                <option value="Beca de tiempo completo">Beca de tiempo completo</option>
            </select><br>-->
                <?php
           }
            ?>
                <input type="hidden" id="cumplidas2">
                <center><strong id="" style="color: white;">COMENTARIO DEL JEFE INMEDIATO PARA LA EVALUACIÓN
                        FINAL:</strong><br></center>
                <textarea name="meta6" id=""
                    style="width: 35%; height: 100px; margin-left: auto; margin-right: auto; display: block;"
                    readonly><?php echo $resul['comentarioJefeResultadoObtenido2022']; ?></textarea><br>
                <center><strong style="color: white;">COMENTARIO GENERAL DEL EVALUADO (Opcional):</strong><br></center>
                <textarea name="comentarioOperativo" readonly id="operativos"
                    style="width: 35%; height:100px; margin-left: auto; margin-right: auto; display: block;"><?php echo $resul['comentarioResultado2022']; ?></textarea><br><br><br><br><br><br><br>



            </div>
            <div class="final" style="background: #366FD3; ">
                <p>
                    ® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
                    Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
            </div>
        </div>

    </div>

    </div>


    <?php
if($validarid == 1){
?>
    <p style="margin-top: -130px; color: white;">Tus metas han sido autorizadas por tu jefe</p>
    <?php
}elseif($validarid == 2){
?>
    <p style="margin-top: -100px; color: white;">Tus metas estan aún pendientes de VoBo</p>
    <?php
}
?>

</body>

</html>