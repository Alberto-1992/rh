<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="iconos/css/all.min.css">
    <link rel="stylesheet" href="iconos/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="iconos/js/all.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>;
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>INFORMACION USUARIO</title>



<body>
<?php
$ID_usuario = $_POST['ID_usuario'];

require 'conexion.php';

$sql = $conexion2->query("SELECT * FROM jefes2022 where rfc = '$ID_usuario' or correo = '$ID_usuario'");
$result = mysqli_fetch_assoc($sql);
?>

<div class="container" style="width: 440px; margin-top: 0px; color: black;">
          

            <div class="signup-form-container">

                <!-- form start -->
<div class="" style="width: auto; float: right; margin-right: 0px; margin-top: 0px;">
            <p style="font-size: 12px;">Hospital Regional de Alta Especialidad de Ixtapaluca.<br>
            Subdirección de Recursos Humanos.</p></div><br>
               

                    <div class="form-header">
                     

                        <div class="pull-right">
                            <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                        </div>

                 

                    <div class="form-body">
              
                        <div class="form-group">
                        
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="id_jefe"  type="hidden" class="form-control" 
                                    required="required" value="<?php echo $result['id_jefe'];?>">
                            </div>
                        </div>  

                        <div class="form-group">
                            <strong>RFC</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="" id="rfc"  readonly type="text" class="form-control" 
                                    required="required" value="<?php echo $result['rfc'];?>">
                            </div>
                        </div>
                        

            <div class="form-group">
                        <strong>Nombre</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefe" id="nombrejefe" type="text" class="form-control" 
                                    required="required"  onkeyup="mayus(this);" id="claveUnicaContrato" value="<?php echo $result['nombre'];?>" >
                            </div>
                        </div>
                  <!--      
                <div class="form-group">
                        <strong>Apellido paterno</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefe" type="text" class="form-control" 
                                    required="required"  onkeyup="mayus(this);" id="claveUnicaContrato" value="<?php echo $result['appaterno'];?>" >
                            </div>
                        </div>

                <div class="form-group">
                        <strong>Apellido materno</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="nombrejefe" type="text" class="form-control" 
                                    required="required"  onkeyup="mayus(this);" id="claveUnicaContrato" value="<?php echo $result['apmaterno'];?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <strong>Puesto</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <textarea rows="5" class="form-control" name="" id="puestojefe"><?php echo $result['puesto'];?></textarea>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <strong>Correo electronico</strong>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input name="" id="correojefe" type="text" class="form-control" 
                                    required="required" value="<?php echo $result['correo'];?>" >
                            </div>
                        </div><br>
                    
                        

                       
                       
                        
            </div>
        </div>
         <div id="resultado"></div>
    </div>
   
</div>
  
        <input type="submit" class="btn btn-warning" style=" width: 230px; float: left; margin-left: 100px; margin-top: 0px;" value="EDITAR INFORMACION"  onclick="editarDatos();"> <br><br>
   
        <!-- Core theme JS-->
<script>
       function editarDatos()
       {
            let rfc =$("#rfc").val();
            let correojefe =$("#correojefe").val();
            let puestojefe =$("#puestojefe").val();
            let nombrejefe =$("#nombrejefe").val();
            let ob = {rfc:rfc, correojefe:correojefe, puestojefe:puestojefe, nombrejefe:nombrejefe};
    
    $.ajax({
                       
    type: "POST",
    url: "editarInformacionJefe.php",
    data: ob,
    beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#resultado").html(data);
                        
                            }
                         });
                

}
       
   </script>
</body>

</html>

