<div id="myModal_actualizar" class="modal fade" role="dialog" style="margin-top: 20px;">
    <script src="metas.js"></script>

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 100%; height: auto; color: white; ">
        <div class="modal-header" style="background: green; color: white;">
         
            <h6 class="modal-title">ACTUALIZAR METAS</h6>
        </div>
        <div class="modal-body">
         
                <div class="contrato-nuevo">
                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>
                     
                    </div>

                    <div class="container" style="margin-top: -40px;">
                   
                           
        

<p style="color: black;"> Actualizar Metas 2021</p>

<strong style="color: black;">Número de trabajador</strong>

<input list="consult_Fact" class="form-control" id="consultaTrab" name="" type="text" style="height: 35px; width: 100%;" onchange="selectTrabajador();">
           
        <datalist id="consult_Fact" >
            <?php
            require 'conexion.php';
            $sql_s = $conexion2->query ("SELECT id_empleado FROM personaloperativo");
            while ($row_s = mysqli_fetch_array($sql_s)) {
              $ID_usuario = $row_s['id_empleado'];
              $nombre = $row_s['id_empleado'];
              ?>
               <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>
            
               <?php
            }
            
            
                        ?>
            
                            </datalist><br>
        <input type="submit" class="btn btn-danger" style="width: 100%;" onclick="aplicarRestart();" value="ACTUALIZAR METAS 2021"/>
            
 <p style="color: black;">Reiniciar Metas 2021 </p>

<strong style="color: black;">Número de empleado</strong>

<input list="consult_Fact" class="form-control" id="consultaTrabMet" name="" type="text" style="height: 35px; width: 100%;" onchange="selectTrabajadorMetas();">
           
        <datalist id="consult_Fact" >
            <?php
            require 'conexion.php';
            $sql_s = $conexion2->query ("SELECT id_empleado FROM personaloperativo");
            while ($row_s = mysqli_fetch_array($sql_s)) {
              $ID_usuario = $row_s['id_empleado'];
              $nombre = $row_s['id_empleado'];
              ?>
               <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>
            
               <?php
            }
            
            
                        ?>
            
                            </datalist><br>
            <input type="submit" class="btn btn-info" style="width: 100%;" onclick="aplicarRestartMetas();" value="REINICIAR METAS 2021"/><br><br>
<script>
function aplicarRestart(val)
{
 let id=$("#consultaTrab").val();
 let ob = {id:id};
    let mensaje = confirm("El estado de las metas se actualizaran, desea continuar?")
                
                if (mensaje == true) {
            
                   $.ajax({
                       
    type: "POST",
    url: 'consultaCmbiarEstadoMetas2021.php',
    data: ob,
    beforeSend: function(objeto){
         swal({
                    title: '¡Listo, ya se pueden actualizar las metas!',
                    text: '',
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                     });
        
                
    },
    success: function(resp){
        
        $("#tabla_resultado").html(data);
       
    } 
});
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }


}

function aplicarRestartMetas(val)
{
 let id=$("#consultaTrabMet").val();
 let ob = {id:id};

    let mensaje = confirm("Las metas 2021 se reiniciaran, desea continuar?");
                
                if (mensaje == true) {
               
                   $.ajax({
                       
    type: "POST",
    url: 'consultaReiniciarEstadoMetas2021.php',
    data: ob,
    beforeSend: function(objeto){
      swal({
                    title: '¡Metas reiniciadas!',
                    text: '',
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                     });
                  
    },
    success: function(resp){
        
        $("#tabla_resultado").html(data);
    }
});
                } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }


}
 </script> 
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



