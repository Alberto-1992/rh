<div id="myModal_folios" class="modal fade" role="dialog">
   
    <script src="metas.js"></script>

<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"
        style="width: 100%; height: auto; color: white; ">
        <div class="modal-header" style="background: green; color: white;">
         
            <h5 class="modal-title">ACTIVAR USUARIO</h5>
        </div>
        <div class="modal-body">
     
            <div id="panel_editar">

                    <div class="cabecera-contrato">
                        <div class="imagen1"></div>
                  
                    </div>

                    <div class="container" style="margin-top: -55px;">

<strong style="color: black;">SELECCIONA EL USUARIO</strong>

<select class="form-control" id="folio" name="ejeUno"  style="width: 100%; height: 35px;">
        <option>-Selecciona-</option>
        <?php
        require 'conexion.php';
        $sql_s = $conexion2->query ("SELECT * FROM personaloperativo2022 where eliminado = 1");
while ($row_s = mysqli_fetch_array($sql_s)) {
$ID_usuario = $row_s['correo'];
$nombre = $row_s['nombre'];
$apmaterno = $row_s['apellidomaterno'];

$nombrecompleto = $nombre.' '.$apmaterno;
?>
<option value="<?php echo $ID_usuario; ?>"> <?php echo $nombrecompleto; ?></option>

<?php
}


        ?>

            </select><br>
            <input type="submit" class="btn btn-danger" onclick="select_folio();" style="width: 100%;" value="ACTIVAR USUARIO"/><br><br>
            <div id="tabla_activado"></div>
<script>
function select_folio()
{
let folio =  $("#folio").val();
    let ob = {folio:folio};

$.ajax({
    type: "POST",
    url: 'activarUsuario.php',
    data: ob,
     beforeSend: function(objeto){
                
                },
    success: function(data){
        $("#tabla_activado").html(data);
       
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
