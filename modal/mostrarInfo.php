<!DOCTYPE html>
<html>
    <body>
         <?php
 require 'conexion.php';
    $rf_c = $_GET["rfc"];
    $sql_l = $conexion2->query("SELECT * FROM personaloperativo where rfc = '$rf_c' limit 1");
    $row = mysqli_fetch_assoc($sql_l);
    
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<form name="formulario" onSubmit="return limpiar()">
   
                    <strong>N° DE EMPLEADO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="year" type="text" class="form-control" value="<?php echo $row['id_empleado']; ?>"
                                    required="required"
                                    onkeyup="mayus(this);">
                            </div>

                      <strong>PUESTO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="cucop" type="text" class="form-control"
                                   onkeyup="mayus(this);" required="required" value="<?php echo $row['puesto']; ?>">
                            </div>
        
                        <strong>RFC</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="numeroContrato" type="text" class="form-control" value="<?php echo $row['rfc']; ?>"
                                    onkeyup="mayus(this);">
                            </div>
                     
                            <strong>CURP</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="designacion" type="text" class="form-control" value="<?php echo $row['curp']; ?>"
                                    >
                            </div>
                  
                       

                        
                            <strong>NOMBRE</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="clave_hraei" type="text" class="form-control"
                                     onkeyup="mayus(this);" value="<?php echo $row['nombre']; ?>">
                            </div>
                      
                   
                            <strong>APELLIDO PATERNO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="descripcion" type="text" class="form-control" 
                                     onkeyup="mayus(this);" required="required" value="<?php echo $row['apellidopaterno']; ?>">
                            </div>
                   
                   
                            <strong>APELLIDO MATERNO</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input id="clave_cuadro_basico" type="text" class="form-control"
                                 onkeyup="mayus(this);" required="required" value="<?php echo $row['apellidomaterno']; ?>">
                            </div>
                   
                     
                        <strong>PRECIO UNITARIO ADJUDICADO SIN I.V.A</strong>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input  type="number" class="form-control"
                                 id="txt_campo_1"
                                onchange="multiplicar(this.value);" min="0.0" max="90000.00" step="0.01">
                        </div>

                        <strong>CONSUMO MINIMO</strong>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input type="text" class="form-control"
                                 id="txt_campo_2" onchange="multiplicar(this.value);">
                        </div>

          
                        <strong>CONSUMO MAXIMO</strong>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input  type="text" id="txt_campo_3" class="form-control"
                                 onchange="multiplicar(this.value);">
                        </div>
          

                        <strong>COSTO MÍNIMO</strong>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input  type="text" class="form-control" readonly="readonly"
                                 id="spTotal">

                        </div>

                        <strong>COSTO MAXIMO</strong>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input  type="text" class="form-control" readonly="readonly"
                                 id="spTotal2">
                        </div>
                <br>
            <div class="form-footer">

                <input type="submit" class="btn btn-info" onclick="guarda();" value="Registrar">
                <a href='' class="btn btn-danger" onclick="window.reload();" >Finalizar</a>

            </div><br>
        </form>
        </body>
</html>


  
                            
