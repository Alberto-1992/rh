<div id="myModal_buscarUser" class="modal fade" role="dialog">
  

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 100%; height: auto; color: white; ">
        <div class="modal-header" style="background: green; color: white;">
         
            <h4 class="modal-title">Buscar Usuario</h4>
        </div>
        <div class="modal-body">
          
            <div id="panel_editar">

                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>
                    
                    </div>

                    <div class="container" style="margin-top: -30px;">
                   
                           
        



<strong style="color: black;">Nombre del trabajador</strong>

<input list="consult_usuario" class="form-control" id="consultaUser" name="" type="text" onchange="selectUser();">
           
        <datalist id="consult_usuario" >
            <?php
            require 'conexion.php';
            $sql_s = $conexion2->query ("SELECT id_empleado, nombre FROM personaloperativo where eliminado = 0");
            while ($row_s = mysqli_fetch_array($sql_s)) {
              $ID_usuario = $row_s['nombre'];
              $nombre = $row_s['nombre'];
              ?>
               <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>
            
               <?php
            }
            
            
                        ?>
            
                            </datalist><br>
                            <strong style="color: black;">Número de Trabajador</strong>

<input list="consult_numero" class="form-control" id="consultaNum" name="" type="text"  onchange="selectNum();">
           
        <datalist id="consult_numero" >
            <?php
            require 'conexion.php';
            $sql_s = $conexion2->query ("SELECT id_empleado, nombre FROM personaloperativo where eliminado = 0");
            while ($row_s = mysqli_fetch_array($sql_s)) {
              $ID_usuario = $row_s['id_empleado'];
              $nombre = $row_s['id_empleado'];
              ?>
               <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>
            
               <?php
            }
            
            
                        ?>
            
                            </datalist><br>
        
            
<script>


function selectUser()
{
 let nombre =$("#consultaUser").val();
 let ob = {nombre:nombre};
    $.ajax({
                       
    type: "POST",
    url: "consultaData.php",
    data: ob,
    beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado").html(data);
                        
                            }
                         });
                

}
function selectNum()
{
 let id =$("#consultaNum").val();
 let ob = {id:id};
    $.ajax({
                       
    type: "POST",
    url: "consultaDataNum.php",
    data: ob,
    beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado").html(data);
                        
                            }
                         });
                

}
 </script> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>