<div id="myModal_ingresa" class="modal fade" role="dialog">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="metas.js"></script>

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 650px; height: auto; float: left; margin-left: -10%;">
        <div class="modal-header" style="background: green; color: black;">
            
            <h5 class="modal-title" style="color: white;">CARGAR DATOS DE USUARIO</h5>
        </div>
        <div class="modal-body">
            <p> </p>
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>
                 
                    </div>

                    <div class="container" style="margin-top: -30px;">
                    <div class="form-body">
          
          <form action="cargarinfousuario" method="POST">

                            <div class="form-group">
                                  <strong>N° TRABAJADOR</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="id_empleado" type="text" class="form-control"
                                            required="required"
                                              onkeyup="mayus(this);" value="" >
                                      </div>
          
                                  </div>
                                 
                                      <strong>RFC</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="rfc" type="text" class="form-control"
                                             required="required"
                                              onkeyup="mayus(this);" value="">
                                     
                                  </div>
                                 
                                      <strong>APELLIDO PATERNO</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="apellidomaterno" type="text" class="form-control"
                                              required="required" value="" >
                                      </div>

                                      <strong>APELLIDO MATERNO</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="apellidopaterno" type="text" class="form-control"
                                              required="required" value="">
                                      </div>
                               
                                      <strong>NOMBRE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="nombre" type="text" class="form-control"
                                              required="required" value="" >
                                      </div>
                                  
                                      <strong>CORREO ELECTRONICO</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="correo" type="email" class="form-control" 
                                               value="" >
                                      </div>
                                  
                                      <strong>PUESTO</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="puesto" type="text" class="form-control" 
                                               value="" >
                                      </div>
                                     <strong>TIPO SERVIDOR</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input type="text" class="form-control" name="tiposervidor" value="" >
                                      </div>
                                      <strong>DESCRIPCIÓN ESTRUCTURA 1</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="descripcion1" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>
                    
                                      <strong>DESCRIPCIÓN ESTRUCTURA 2</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="descripcion2" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>
                                 
                                    <strong>DESCRIPCIÓN ESTRUCTURA 3</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="descripcion3" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>

                                      <strong>DESCRIPCIÓN ESTRUCTURA 4</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="descripcion4" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>
                         
                                      <strong>DESCRIPCIÓN ESTRUCTURA 5</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="descripcion5" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>

                        <strong>SELECCIONA EL NOMBRE DEL JEFE</strong>
                        <div class="input-group">

<select class="form-control" id="jefenombre" name="nombrejefe" onchange="nombre_jefe(this.val)" >
        <option>-Selecciona-</option>
        <?php
        require 'conexion.php';
        $sql_s = $conexion2->query ("SELECT id_jefe, nombre, rfc FROM jefes2022");
while ($row_s = mysqli_fetch_array($sql_s)) {
$ID_usuario = $row_s['nombre'];
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
            $('#jefenombre').on('change', function() {
               let ID_usuario = $("#jefenombre").val();
            
                
  $.ajax({     
  type : 'GET',
  url : 'script/cargar_valores.php?valor='+ID_usuario, 
  dataType : 'json',
  success : function(json) {
    $("#rfcdeljefe").val(json.rfc);
    $("#puestodeljefe").val(json.puesto);
    $("#correodeljefe").val(json.correo);
    $("#nombre_jefe").val(json.nombredeljefe);
    $("#rfc_jefe").val(json.rfcdeljefe);
    $("#puesto_jefe").val(json.puestodeljefe);
    $("#correo_jefe").val(json.correodeljefe);

  },
    error : function(xhr, status) {
    alert('Disculpe, existió un problema');
  }
   });
}) 
        </script>
           
                                      <strong>RFC JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="id_jefe" id="rfcdeljefe" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>
          
                                  
                            
          
                                      <strong>PUESTO JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input type="text" class="form-control" name="puestojefe" id="puestodeljefe" value="">
                                      </div>

                                     
 
                                      <strong>CORREO DEL JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="correojefe" id="correodeljefe" type="email" class="form-control" 
                                              required="required" value="">
                                      </div>

                                      <strong>RFC JEFE DEL JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="rfcjefedeljefe" type="text" id="rfc_jefe" class="form-control" 
                                              required="required" value="">
                                      </div>
                 
                                     <strong>NOMBRE JEFE DEL JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="nombrejefedeljefe" id="nombre_jefe" type="text" class="form-control" 
                                              required="required" value="">
                                      </div>

                                      <strong>PUESTO JEFE DEL JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="puestojefedeljefe" type="text" id="puesto_jefe" class="form-control" 
                                              required="required" value="">
                                      </div>

                                      <strong>CORREO JEFE DEL JEFE</strong>
                                      <div class="input-group">
                                          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                          <input name="correojefedeljefe" id="correo_jefe" type="email" class="form-control" 
                                              required="required" value="">
                                      </div>
                                </div>
                                <input type="submit" class="btn btn-warning" style=" width: 100%; margin-top: 20px;" value="GUARDAR INFORMACION" name="capturausuario"><br><br>
                      </div>
             </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
