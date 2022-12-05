<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="almacenarDatos.js"></script>
    <title>Captura de usuarios</title>
</head>
<body>
<div class="container" style="margin-top: 25px;">

<div class="signup-form-container">

    <!-- form start -->

   

        <div class="form-header">
            <h3 class="form-title"><i class="fa fa-user"></i>INFORMACIÓN DEL JEFE</h3>

            <div class="pull-right">
                <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
            </div>

     

        <div class="form-body">
            <form action="registrarDatosJefe" method="POST">
            <div class="form-group">
            <strong>SELECCIONA EL PUESTO DEL JEFE</strong>
                <select class="form-control" id="mySelect" name="puestoJefe" style="height: 35px;">
                    <option value=""> Seleccione el puesto del jefe </option>
                    <?php
        
                    require 'conexion.php';
                    
                    $sql_s = $conexion2->query("SELECT * FROM puestoJefe");
                    while ($row_s = mysqli_fetch_array($sql_s)) {
                        $ID_usuario2 = utf8_encode($row_s['nombrePuesto']);
                        $nombre = utf8_encode($row_s['nombrePuesto']);
                        ?>

                    <option value="<?php echo $ID_usuario2; ?>"> <?php echo $nombre; ?></option>
                    

                    <?php
                    }
        
                    ?>
                
                </select>
            </div>
            <div class="form-group">
                <strong>ID del empleado</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control" name="idJefe" id="idJefe" required="required" >
                </div>
            </div>
            <div class="form-group">
                <strong>Nombre completo del jefe</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input type="text" class="form-control"  name="nombreJefe" id="nombreJefe" required="required">
                </div>
            </div>
</div>

</div>
<input type="submit" class="btn btn-info"  value="Guardar" name="guardarJefes" style=" width: 150px; float: left; margin-left: 30px; margin-top: 20px;"></a><br><br><br><br><br>
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