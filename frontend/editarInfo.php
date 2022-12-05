<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3/styles.css">
    <link rel="stylesheet" href="css3/main.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap-theme.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="librerias/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="iconos/css/all.min.css?n=1">
    <link rel="stylesheet" href="iconos/css/all.css?n=1">
    <link rel="stylesheet" href="css/style.css?n=1">
    <script src="iconos/js/all.min.js"></script>
 
    <title>INFORMACION USUARIO</title>



<body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<div class="container" style="width: 650px; margin-top: 35px;">
          

            <div class="signup-form-container">

                <!-- form start -->
<div class="" style="width: auto; float: right; margin-right: 0px; margin-top: 0px;">
            <p style="font-size: 12px;">Hospital Regional de Alta Especialidad de Ixtapaluca.<br>
            Subdirección de Recursos Humanos.</p></div>
               

                    <div class="form-header">
                        <h3 class="form-title"><i class="fa fa-user"></i>INFORMACIÓN DEL TRABAJADOR</h3>

                        <div class="pull-right">
                            <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                        </div>

                 

                    <div class="form-body">
              
    <form action="actualizarInfo" method="POST">
                          <div class="form-group">
                        <strong>N° TRABAJADOR</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="id_empleado" id="id_empleado" type="text" class="form-control"
                                  required="required" readonly="readonly"
                                    onkeyup="mayus(this);" value="<?php echo $result['id_empleado'];?>" >
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>RFC</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="rfc" type="text" class="form-control"
                                   required="required"
                                    onkeyup="mayus(this);" value="<?php echo $result['rfc'];?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>CURP</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="curp" type="text" class="form-control"
                                   required="required"
                                    onkeyup="mayus(this);" value="<?php echo $result['curp'];?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>APELLIDO PATERNO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="apellidomaterno" type="text" class="form-control"
                                    required="required" value="<?php echo $result['apellidopaterno'];?>" >
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>APELLIDO MATERNO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="apellidopaterno" type="text" class="form-control"
                                    required="required" value="<?php echo $result['apellidomaterno'];?>">
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <strong>NOMBRE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombre" type="text" class="form-control"
                                    required="required" value="<?php echo $result['nombre'];?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>CORREO ELECTRONICO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="correo" type="text" class="form-control" 
                                     value="<?php echo $result['correo'];?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>TIPO DE PUESTO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="puesto" type="text" class="form-control" 
                                     value="<?php echo $result['puesto'];?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 1</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion1" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['descripcionestructura1'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 2</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion2" type="text" class="form-control" 
                                     value="<?php echo $result['descripcionestructura2'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 3</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion3" type="text" class="form-control" 
                                    value="<?php echo $result['descripcionestructura3'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 4</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion4" type="text" class="form-control" 
                                     value="<?php echo $result['descripcionestructura4'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 5</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion5" type="text" class="form-control" 
                                     value="<?php echo $result['descripcionestructura5'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>RFC JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="id_jefe" readonly="readonly" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['id_jefe'];?>">
                            </div>
                        </div>
                        
 <div class="form-group">
                        <strong style="color: black;">SELECCIONA EL NOMBRE DEL JEFE</strong>

<select class="form-control" id="cambiarjefe" name="ejeUno" onchange="cambiar_jefe();" style="height: 35px;">
        <option>-Selecciona-</option>
        <?php
        require 'conexion.php';
        $sql_s = $conexion2->query ("SELECT id_jefe, nombre FROM jefes2022");
while ($row_s = mysqli_fetch_array($sql_s)) {
$ID_usuario = $row_s['id_jefe'];
$nombre = $row_s['nombre'];


//$nombrecompleto = $nombre.' '.$appaterno.' '.$apmaterno;
?>
<option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

<?php
}


        ?>

            </select>
            </div><br>
            <script>
            function cambiar_jefe()
            { 
              
             let ID_usuario =  $("#cambiarjefe").val();
             let id = $("#id_empleado").val();
            
                let ob = {ID_usuario:ID_usuario, id:id};
       
                 $.ajax({
                            type: "POST",
                            url:"consultaCambiarJefe.php",
                            data: ob,
                            beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                          
                        
                            }
                         });
            }
            
                 </script>
            <div class="form-group">
                        <strong>NOMBRE COMPLETO JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefe" type="text" class="form-control" 
                                    required="required" readonly="readonly" onkeyup="mayus(this);" id="claveUnicaContrato" value="<?php echo $result['nombrejefe'];?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>PUESTO JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input type="text" readonly="readonly" class="form-control" name="puestojefe" value="<?php echo $result['puestojefe'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>TIPO SERVIDOR</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input type="text" class="form-control" name="tiposervidor" value="<?php echo $result['tiposervidor'];?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>CORREO DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="correojefe" readonly="readonly" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['correojefe'];?>">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <strong>RFC JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="rfcjefedeljefe" type="text" class="form-control" 
                                     value="<?php echo $result['id_jefedeljefe'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>NOMBRE JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefedeljefe" type="text" class="form-control" 
                                    value="<?php echo $result['nombrejefedeljefe'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>PUESTO JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="puestojefedeljefe" type="text" class="form-control" 
                                     value="<?php echo $result['puestojefedelfefe'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>CORREO JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="correojefedeljefe" type="text" class="form-control" 
                                     value="<?php echo $result['correojefedeljefe'];?>">
                            </div>
                    </div>
            </div>
            
        </div>
     
  
        <input type="submit" class="btn btn-warning" style=" width: 230px; float: left; margin-left: 30px; margin-top: 0px;" value="EDITAR INFORMACION" name="editar"> <br><br><br><br><br>
   </form>
   <button class="btn btn-danger" style=" width: 230px; float: right; margin-right: 30px; margin-top: -102px;" onclick="location.href='admin'">Finalizar</button>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="script/scripts.js"></script>
        <script src="js/script.js"></script>
</body>

</html>