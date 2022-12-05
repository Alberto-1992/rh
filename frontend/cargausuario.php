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

    <script type="text/javascript" src="librerias/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="iconos/css/all.min.css?n=1">
    <link rel="stylesheet" href="iconos/css/all.css?n=1">
    <link rel="stylesheet" href="css/style.css?n=1">
    <script src="iconos/js/all.min.js"></script>
 
    <title>CARGAR USUARIO</title>


<body>

        <div class="container" style="margin-top: 25px;">

            <div class="signup-form-container">

                <!-- form start -->

               

                    <div class="form-header">
                        <h3 class="form-title"><i class="fa fa-user"></i>INFORMACIÓN DEL TRABAJADOR</h3>

                        <div class="pull-right">
                            <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                        </div>

                 

                    <div class="form-body">
              
<form action="cargarinfousuario.php" method="POST">
<?php 


?>

                        <div class="form-group">
                        <strong>N° TRABAJADOR</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="id_empleado" type="text" class="form-control"
                                  required="required"
                                    onkeyup="mayus(this);" value="" >
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>RFC</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="rfc" type="text" class="form-control"
                                   required="required"
                                    onkeyup="mayus(this);" value="">
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>APELLIDO PATERNO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="apellidomaterno" type="text" class="form-control"
                                    required="required" value="" >
                            </div>

                        </div>
                        <div class="form-group">
                            <strong>APELLIDO MATERNO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="apellidopaterno" type="text" class="form-control"
                                    required="required" value="">
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <strong>NOMBRE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombre" type="text" class="form-control"
                                    required="required" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>CORREO ELECTRONICO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="correo" type="text" class="form-control" 
                                     value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>TIPO DE PUESTO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="puesto" type="text" class="form-control" 
                                     value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 1</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion1" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 2</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion2" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 3</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion3" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 4</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion4" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>DESCRIPCIÓN ESTRUCTURA 5</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="descripcion5" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>RFC JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="id_jefe" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>

                        <strong>NOMBRE JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefe" type="text" class="form-control" 
                                    required="required" onkeyup="mayus(this);" id="claveUnicaContrato" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>PUESTO JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input type="text" class="form-control" name="puestojefe" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>TIPO SERVIDOR</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input type="text" class="form-control" name="tiposervidor" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>CORREO DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="correojefe" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>RFC JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="rfcjefedeljefe" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>NOMBRE JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefedeljefe" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>PUESTO JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="puestojefedeljefe" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>CORREO JEFE DEL JEFE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="correojefedeljefe" type="text" class="form-control" 
                                    required="required" value="">
                            </div>
                        </div>
            </div>
            
        </div>
        <input type="submit" class="btn btn-info" style=" width: 250px; float: left; margin-left: 30px; margin-top: 20px;" value="CARGAR USUARIO" name="capturausuario"><br><br><br><br><br>
   </form>
   <button class="btn btn-danger" style=" width: 250px; float: right; margin-right: 30px; margin-top: -100px;" onclick="location.href='admin.php'">Finalizar</button>
</body>

</html>