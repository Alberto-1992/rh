<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Document</title>
	
</head>

<body>
<style>
        table{
            font-size: 13px;
        }
    </style>

<?php 
error_reporting(0);
	require 'conexion.php';
    $id = $_POST['id'];

    $query=$conexion2->query("SELECT * FROM personaloperativo where id_empleado = $id and eliminado = 0 ");
    
?>
        
        
      <div class="line"><label class="lnr lnr-magnifier" data-toggle="modal"  data-target="#myModal_buscarUser" style="margin-top: 15px; float: left; margin-left: 0px;;"></label></div>
        <table id="" class="table table-responsive table-bordered table-hover" style="margin-top: 10px;" cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <td>Nª trabajador</td>
                <td>RFC Y PASSWORD</td>
                <td>CORREO ELECTRONICO</td>
                <td>TIPO DE PUESTO</td>
                <td>APELLIDO MATERNO</td>
                <td>APELLIDO PATERNO</td>
                <td>NOMBRE</td>
                <td>Estado</td>
                <td>Metas 2021</td>
                <td>Metas Resultado 2021</td>
                <td>Competencias</td>
                <td>Reinicar evaluacion</td>
                <td>Editar datos</td>
                <td>Dar acceso</td>
                <td>Boquear acceso</td>
                <td>Eliminar usuario</td>
                
            </tr>
   
      
       <?php
    while($filaAlumnos= $query->fetch_assoc())
        {
        $rol = $filaAlumnos['rol'];
         $rfc=   $filaAlumnos['rfc'];
         $id_empleado=   $filaAlumnos['id_empleado'];
         $sql = $conexion2->query("SELECT sum(ponderacion) total FROM competencias2021 where identificador = '$rfc'");
         $res = mysqli_fetch_assoc($sql);
         $sql_l = $conexion2->query("SELECT vistobueno, vistobueno2021, vistobuenoResultado2021 FROM personaloperativo where rfc = '$rfc'");
         $res_l = mysqli_fetch_assoc($sql_l);

         $finalizo = $res['total'];
         $metas = $res_l['vistobueno'];
         $metas2021 = $res_l['vistobueno2021'];
         $metasResultado2021 = $res_l['vistobuenoResultado2021'];
         $validar = 25;

         if($finalizo == $validar){
            $not = "Terminado";
            $sql_m = $conexion2->query("UPDATE personaloperativo set estadocompetencias2021 = 1 where rfc = '$rfc'");
         }elseif($finalizo == 0) {
            $not = "Sin iniciar";
            $sql_d = $conexion2->query("UPDATE personaloperativo set estadocompetencias2021 = 2 where rfc = '$rfc'");
         }elseif($finalizo > 1 || $finalizo < 25){
             $not = "Pendiente por finalizar";
             $sql_k = $conexion2->query("UPDATE personaloperativo set estadocompetencias2021 = 3 where rfc = '$rfc'");
         }else{

         }
         if($metasResultado2021 == 1){
            $met2021 = "Autorizado";
         }if($metasResultado2021 == 2) {
            $met2021 = "Peindiente de VoBo";
         }if($metasResultado2021 == 3){
            $met2021 = "Rechazado";
         }if($metasResultado2021 == 4){
            $met2021 = "Sin captura";
         }
         
         if($metas2021 == 1){
            $met = "Autorizado";
         }if($metas2021 == 2) {
            $met = "Peindiente de VoBo";
         }if($metas2021 == 3){
            $met = "Rechazado";
         }if($metas2021 == 4){
            $met = "Sin captura";
         }
            if($rol != 1){
                $status ="BLOQUEADO";
            }else{
                $status ="DESBLOQUEADO";
            }
     echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['correo'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
                <td>'.$status.'</td>
                <td>'.$met.'</td>
                <td>'.$met2021.'</td>
                <td>'.$not.'</td>
                <input type="hidden" value='.$rfc.' id="reinicarEvaluacion" >
                <td><a href="reinicarEval?Xy='.$rfc.'" >Reinicar </a></td>
                <td><a href="editarInfo?Xy='.base64_encode($id_empleado).'" style="color: #DDCD08;">Editar </a></td>
                <td><a href="accesar?Xy='.base64_encode($rfc).'" style="color: green;">Acceder</a></td>
                <td><a href="bloquearUsuario?Xy='.base64_encode($rfc).'" style="color: red;" >Boquear</a></td>
                <td><a href="eliminarusuario?Xy='.base64_encode($rfc).'" style="color: #FE0202;" >Eliminar</a></td>           
                
             </tr>';
            
            
        }
 
    ?>
     <script>
                      // var fired_button2= $("#claveUnicaContrato").val();  
                        //var fired_button2=document.getElementById('claveUnicaContrato').value;
                      $('#select').click(function() {
                                
                        let fired_button = $(this).val();
                        let fired_button2 = $("#reinicarEvaluacion").val();
                        let mensaje = confirm("La evaluacion del usuario se reiniciara, Deseas continuar?")
                
                if (mensaje == true) {
                         window.location.href = 'reinicarEval.php?Xy='+fired_button2;
                        } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                }                       
                    });   

                    </script>
        
    </main>




</body>

</html>