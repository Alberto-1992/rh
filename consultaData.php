<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
	
</head>

<body>
    <style>
        .form-row{
            padding: 0px;
        }
       #boton-guarda{
            text-decoration: none; 
            background-color: yellow; 
            color: black; 
            cursor: pointer; 
            width: 160px; 
            height: 25px; 
            font-size: 12px; 
            border: 5px; 
            margin-left: auto; 
            margin-right: auto;
            margin-top: 10px;

       }
       .form-control{
           margin-top: 0px;
       }
    </style>
    <div id="tabla_succes"></div>
       <?php 
       require 'conexion.php';
       $id = $_POST['nombre'];
        $sql_s = $conexion2->query("SELECT * FROM personaloperativo2022 where id_empleado = $id and eliminado = 0");
        $result = mysqli_fetch_assoc($sql_s);
        
        
        ?>
        <script>
                function editar(){
                    
                    let id = $("#id_empleado").val();
                    let rfc = $("#rfc").val();
                    let curp = $("#curp").val();
                    let apellidopaterno = $("#apellidopaterno").val();
                    let apellidomaterno = $("#apellidomaterno").val();
                    let nombre = $("#nombre").val();
                    let correo = $("#correo").val();
                    let puesto = $("#puesto").val();
                    let descripcion1 = $("#descripcion1").val();
                    let descripcion2 = $("#descripcion2").val();
                    let descripcion3 = $("#descripcion3").val();
                    let descripcion4 = $("#descripcion4").val();
                    let descripcion5 = $("#descripcion5").val();
                    let tiposervidor = $("#tiposervidor").val();
                    
                  let formData = {id:id, rfc:rfc, curp:curp, apellidopaterno:apellidopaterno, apellidomaterno:apellidomaterno, nombre:nombre, correo:correo, puesto:puesto, descripcion1:descripcion1, descripcion2:descripcion2, descripcion3:descripcion3, descripcion4:descripcion4, descripcion5:descripcion5, tiposervidor:tiposervidor}    

	        $.ajax({

		        url: "actualizarInfo.php",
		        type: "post",
		        data: formData,
                success: function(datos){
                $("#tabla_succes").html(datos);
                }
	        })
        }
    
            </script>
     <div class="form-row" autocomplete="off">

                        <div class="col-md-6">
                            <strong>N° TRABAJADOR</strong>
                                <input name="id_empleado" id="id_empleado" type="text" class="form-control"
                                  required="required" readonly="readonly"
                                    onkeyup="mayus(this);" value="<?php echo $result['id_empleado'];?>" >
                            </div>            
                        <div class="col-md-6">
                            <strong>RFC</strong>
                                <input name="rfc" id="rfc" type="text" class="form-control"
                                   required="required"
                                    onkeyup="mayus(this);" value="<?php echo $result['rfc'];?>">
                            </div>
                        <div class="col-md-6">
                            <strong>CURP</strong>
                                <input name="curp" id="curp" type="text" class="form-control"
                                   required="required"
                                    onkeyup="mayus(this);" value="<?php echo $result['curp'];?>">
                            </div>
                        <div class="col-md-6">
                            <strong>APELLIDO PATERNO</strong>
                                <input name="apellidopaterno" id="apellidopaterno" type="text" class="form-control"
                                    required="required" value="<?php echo $result['apellidopaterno'];?>" >
                            </div>
                        <div class="col-md-6">
                            <strong>APELLIDO MATERNO</strong>
                                <input name="apellidomaterno" id="apellidomaterno" type="text" class="form-control"
                                    required="required" value="<?php echo $result['apellidomaterno'];?>">
                            </div>
                        <div class="col-md-6">
                            <strong>NOMBRE</strong>         
                                <input name="nombre" id="nombre" type="text" class="form-control"
                                    required="required" value="<?php echo $result['nombre'];?>" >
                            </div>
                        <div class="col-md-6">
                            <strong>CORREO ELECTRONICO</strong>
                                <input name="correo" id="correo" type="text" class="form-control" 
                                     value="<?php echo $result['correo'];?>" >
                        </div>

                        <div class="col-md-6">
                            <strong>TIPO DE PUESTO</strong>
                                <input name="puesto" id="puesto" type="text" class="form-control" 
                                     value="<?php echo $result['puesto'];?>" >
                        </div>
                        <div class="col-md-6">
                            <strong>TIPO SERVIDOR</strong>
                                <input type="text" class="form-control" name="tiposervidor" id="tiposervidor" value="<?php echo $result['tiposervidor'];?>" >
                        </div>
                        <div class="col-md-6">
                            <strong>DESCRIPCIÓN ESTRUCTURA 1</strong>
                                <input name="descripcion1" id="descripcion1" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['descripcionestructura1'];?>">
                        </div>
                        <div class="col-md-6">
                            <strong>DESCRIPCIÓN ESTRUCTURA 2</strong>
                                <input name="descripcion2" id="descripcion2" type="text" class="form-control" 
                                     value="<?php echo $result['descripcionestructura2'];?>">
                        </div>
                        <div class="col-md-6">
                            <strong>DESCRIPCIÓN ESTRUCTURA 3</strong>
                                <input name="descripcion3" id="descripcion3" type="text" class="form-control" 
                                    value="<?php echo $result['descripcionestructura3'];?>">
                        </div>
                        <div class="col-md-6">
                            <strong>DESCRIPCIÓN ESTRUCTURA 4</strong>
                                <input name="descripcion4" id="descripcion4" type="text" class="form-control" 
                                     value="<?php echo $result['descripcionestructura4'];?>">
                        </div>
                        <div class="col-md-6">
                            <strong>DESCRIPCIÓN ESTRUCTURA 5</strong>
                                <input name="descripcion5" id="descripcion5" type="text" class="form-control" 
                                     value="<?php echo $result['descripcionestructura5'];?>">
                        </div>

                        
                        <div class="col-md-12">
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
            </div>
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
                             
                            
                            $("#tabla_succes").html(data);
                        
                            }
                         });
            }
            
                 </script>
                <div class="col-md-6">
                            <strong>RFC JEFE</strong>
                                <input name="id_jefe" readonly="readonly" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['id_jefe'];?>">
                            </div>
                        <div class="col-md-6">
                            <strong>NOMBRE COMPLETO JEFE</strong>
                                <input name="nombrejefe" type="text" class="form-control" 
                                    required="required" readonly="readonly" onkeyup="mayus(this);" id="claveUnicaContrato" value="<?php echo $result['nombrejefe'];?>" >
                            </div>
                            <div class="col-md-12">
                            <strong>PUESTO JEFE</strong>
                                <input type="text" readonly="readonly" class="form-control" name="puestojefe" value="<?php echo $result['puestojefe'];?>">
                            </div>
                        <div class="col-md-12">
                            <strong>CORREO DEL JEFE</strong>
                                <input name="correojefe" readonly="readonly" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['correojefe'];?>">
                            </div>
                        <div class="col-md-6">
                            <strong>RFC JEFE DEL JEFE</strong>
                                <input name="rfcjefedeljefe" type="text" class="form-control" 
                                     value="<?php echo $result['id_jefedeljefe'];?>">
                            </div>
                        <div class="col-md-6">
                            <strong>NOMBRE JEFE DEL JEFE</strong>
                                <input name="nombrejefedeljefe" type="text" class="form-control" 
                                    value="<?php echo $result['nombrejefedeljefe'];?>">
                            </div>
                        <div class="col-md-12">
                            <strong>PUESTO JEFE DEL JEFE</strong>
                                <input name="puestojefedeljefe" type="text" class="form-control" 
                                     value="<?php echo $result['puestojefedelfefe'];?>">
                            </div>
                        <div class="col-md-12">
                            <strong>CORREO JEFE DEL JEFE</strong>
                                <input name="correojefedeljefe" type="text" class="form-control" 
                                     value="<?php echo $result['correojefedeljefe'];?>">
                            </div>
        
            <input type="submit"  onclick="editar();" id="boton-guarda" value="Actualizar">
               
        </div>
    </div>
</div>