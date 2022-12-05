<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Captura de usuarios</title>
</head>
<body>
<div class="container" style="margin-top: 25px;">

<div class="signup-form-container">

    <!-- form start -->

   

        <div class="form-header">
            <h3 class="form-title"><i class="fa fa-user"></i>INFORMACIÓN DEL USUARIO</h3>

            <div class="pull-right">
                <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
            </div>

     

        <div class="form-body">
        <form action="registrarDatosUsuario.php" method="POST">

            <div class="form-group">
                <strong>Numero de empleado</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="idEmpleado" type="text" class="form-control"
                        
                        onkeyup="mayus(this);" value="" required="required">
                </div>

            </div>
            <strong>RFC</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="rfc" type="text" class="form-control" 
                        onkeyup="mayus(this);" required="required">
                </div>
            </div>
            <div class="form-group">
                <strong>CURP</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="curp" required="required">
                </div>
            </div>
            <div class="form-group">
                <strong>Correo electronico</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="correoElectronico" required="required">
                </div>
            </div>

            <div class="form-group">
                <strong>PUESTO TRABAJADOR</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clavePuestoUsuario" >
                </div>
            </div>
            <!--
            <div class="form-group">
            <strong>SELECCIONA EL PUESTO</strong>
                <select class="form-control" id="mySelect" name="clavePuestoUsuario" style="height: 35px;">
                    <option value=""> Seleccione el puesto </option>
                    <?php
        /*
                    require 'conexion.php';
                    
                    $sql_s = $conexion2->query("SELECT * FROM puestoJefe");
                    while ($row_s = mysqli_fetch_array($sql_s)) {
                        $ID_usuario2 = $row_s['nombrePuesto'];
                        $nombre = $row_s['nombrePuesto'];
                        ?>

                    <option value="<?php echo $ID_usuario2; ?>"> <?php echo $nombre; ?></option>
                    

                    <?php
                    }
        */
                    ?>
                
                </select>
                
            </div>
            -->
            <div class="form-group">
                <strong>Apellido paterno</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="apellidoPaterno" type="text" class="form-control"
                         value="" required="required">
                </div>

            </div>
            <div class="form-group">
                <strong>Apellido materno</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="apellidoMaterno" type="text" class="form-control"
                        value="" required="required">
                </div>
            </div>
            <div class="form-group">
                <strong>Nombre(s)</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="nombre" type="text" class="form-control" 
                         value="" required="required">
                </div>

            </div>
            <div class="form-group">
                <strong>Clave del area</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="claveArea" type="text" class="form-control" 
                        value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Nivel gerarquico del empleado</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="nivelGerarquico" type="text" class="form-control" 
                         value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Empresa</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input name="empresa" type="text" class="form-control" 
                        value="HRAEI" readonly="readonly">
                </div>
            </div>
<!--
            <div class="form-group">
                <strong>Clave de estructura 1</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave1" value="-" readonly="readonly">
                </div>
            </div>
-->
            <div class="form-group">
                <strong>FUNCIONES 1</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion1" >
                </div>
            </div>
            <!--
            <div class="form-group">
                <strong>Clave de estructura 2</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave2" value="-" readonly="readonly">
                </div>
            </div>
-->
            <div class="form-group">
                <strong>FUNCIONES 2</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion2" >
                </div>
            </div>
            <!--
            <div class="form-group">
                <strong>Clave de estructura 3</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave3" value="-" readonly="readonly">
                </div>
            </div>
-->
            <div class="form-group">
                <strong>FUNCIONES 3</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion3" >
                </div>
            </div>
            <!--
            <div class="form-group">
                <strong>Clave de estructura 4</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave4" value="-" readonly="readonly">
                </div>
            </div>
-->
            <div class="form-group">
                <strong>FUNCIONES 4</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion4" >
                </div>
            </div>
            <!--
            <div class="form-group">
                <strong>Clave de estructura 5</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave5" value="-" readonly="readonly">
                </div>
            </div>
-->
            <div class="form-group">
                <strong>FUNCIONES 5</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion5" >
                </div>
            </div>
            <!--
            <div class="form-group">
                <strong>Clave de estructura 6</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave6" value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Descripcion de estructura 6</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion6" >
                </div>
            </div>
            <div class="form-group">
                <strong>Clave de estructura 7</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave7" value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Descripcion de estructura 7</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion7" >
                </div>
            </div>
            <div class="form-group">
                <strong>Clave de estructura 8</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave8" value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Descripcion de estructura 8</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control"  name="descripcion8">
                </div>
            </div>
            <div class="form-group">
                <strong>Clave de estructura 9</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clave9" value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Descripcion de estructura 9</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control"  name="descripcion9">
                </div>
            </div>
            <div class="form-group">
                <strong>Clave de estructura 10</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control"  name="clave10" value="-" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <strong>Descripcion de estructura 10</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="descripcion10" >
                </div>
            </div>
            -->
            <div class="form-group">
                <strong>PUESTO</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="clavePuesto" >
                </div>
            </div>
            <!--
            <div class="form-group">
            <strong>SELECCIONA EL PUESTO DEL JEFE</strong>
                <select class="form-control" id="mySelect" name="clavePuesto" style="height: 35px;">
                    <option value=""> Seleccione el puesto del jefe </option>
                    <?php
        /*
                    require 'conexion.php';
                    
                    $sql_s = $conexion2->query("SELECT * FROM puestoUsuario");
                    while ($row_s = mysqli_fetch_array($sql_s)) {
                        $ID_usuario2 = utf8_encode($row_s['nombrePuestoUsuario']);
                        $nombre = utf8_encode($row_s['nombrePuestoUsuario']);
                        ?>

                    <option value="<?php echo $ID_usuario2; ?>"> <?php echo $nombre; ?></option>
                    

                    <?php
                    }
        */
                    ?>
                
                </select>
            </div>
            -->
            <div class="form-group">
                <strong>ID del empleado</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="idEmpleadoJefe" >
                </div>
            </div>
            <div class="form-group">
                <strong>Nombre completo del jefe</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="nombreJefe" >
                </div>
            </div>
</div>

</div>
<input type="submit" value="GUARDAR" class="btn btn-primary" name="almacenar" style=" width: 150px; float: left; margin-left: 30px; margin-top: 20px;"><br><br><br><br><br>
</form>
<script>

$(function(){
$('#mySelect').change(function(){ //detectamos el evento change
var value = $(this).val();//sacamos el valor del select
var valor= $('#claveUnicaContrato').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
// var claveUnica= document.getElementById('claveUnicaContrato').value;
var id_unico= $("#id_proveedor").val();

window.location.href='cargaMedicamento.php?Wz='+value+'&Zw='+id_unico;

});

});

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>