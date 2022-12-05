<div id="myModal_buscarJefe" class="modal fade" role="dialog">
  

<div class="modal-dialog" style="margin-top: 45px;">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 100%; height: auto; color: white; ">
        <div class="modal-header" style="background: green; color: white;">
         
            <h4 class="modal-title">Buscar Jefe</h4>
        </div>
        <div class="modal-body">
          

        
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>
                    
                    </div>

                    <div class="container" style="margin-top: -50px;">
                   
                           
        



<strong style="color: black;">Nombre del jefe</strong>

<input list="consult_jefe" class="form-control" id="consultaUserJefe" name="" type="text" onchange="selectUserJefe();">
           
        <datalist id="consult_jefe" >
            <?php
            require 'conexion.php';
            $sql_s = $conexion2->query ("SELECT rfc, nombre FROM jefes2022 WHERE eliminado = 0 ");
            while ($row_s = mysqli_fetch_array($sql_s)) {
              $ID_usuario = $row_s['rfc'];
              $nombre = $row_s['nombre'];
              ?>
               <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>
            
               <?php
            }
            
            
                        ?>
            
                            </datalist><br>
                            <strong style="color: black;">Correo del jefe</strong>

<input list="consult_correojefe" class="form-control" id="consultaNumJefe" name="" type="text"  onchange="selectNumJefe();">
           
        <datalist id="consult_correojefe" >
            <?php
            require 'conexion.php';
            $sql_s = $conexion2->query ("SELECT rfc, correo FROM jefes2022 WHERE eliminado = 0");
            while ($row_s = mysqli_fetch_array($sql_s)) {
              $ID_usuario = $row_s['rfc'];
              $nombre = $row_s['correo'];
              ?>
               <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>
            
               <?php
            }
            
            
                        ?>
            
                            </datalist><br>
                            
                            <div id="tabla_resultado2"></div>
        
            
<script>


function selectUserJefe()
{
 let ID_usuario =$("#consultaUserJefe").val();
 let ob = {ID_usuario:ID_usuario};
    $.ajax({
                       
    type: "POST",
    url: "consultaInfoJefe.php",
    data: ob,
    beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado2").html(data);
                        
                            }
                         });
                

}
function selectNumJefe()
{
 let ID_usuario =$("#consultaNumJefe").val();
 let ob = {ID_usuario:ID_usuario};
    $.ajax({
                       
    type: "POST",
    url: "consultaInfoJefe.php",
    data: ob,
    beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado2").html(data);
                        
                            }
                         });
                

}
 </script> 
   
                        </div>
                </div>
            </div>
        </div>
    </div>