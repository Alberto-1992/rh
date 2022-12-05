<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" href="iconos/css/all.min.css?n=1">
	<link rel="stylesheet" href="iconos/css/all.css?n=1">
	<link rel="stylesheet" href="css/style.css?n=1">
	<script src="iconos/js/all.min.js"></script>
    

	
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
    $contrato = $_POST['ID_usuario'];
    $sql = "SELECT COUNT(*) total FROM personaloperativo inner join descripcionesmetas on personaloperativo.id_empleado = descripcionesmetas.id_empleado and vistobueno = $contrato and personaloperativo.eliminado = 0";
    $result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);
  
    $tabla="";
    $query="SELECT * FROM personaloperativo where vistobueno = $contrato and eliminado = 0 limit 900";
    
    //En caso de fallo en consulta probar con esta opcion
    //$buscarAlumnos=mysqli_query($conexion2,$query);
    //if (mysqli_num_rows($buscarAlumnos)>0)
  
    $buscarAlumnos=mysqli_query($conexion2,$query);
    if(!empty($buscarAlumnos) AND mysqli_num_rows($buscarAlumnos)>0)
    {
        $tabla.= 
        
        '
        <label style="margin-top: 30px;">Total de usuarios: <input type="text" class="form-control" readonly style="width: 70px; height: 20px; margin-top: -20px; margin-left: 130px;" value='.$fila['total'].'></label></strong>
        <table id="ghatable" class="display table table-responsive table-bordered table-striped" cellspacing="0" width="80%" style="width: 100%; margin-top: 10px; margin-left:auto; margin-right:auto;" >
       
            <tr class="#" style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <td>RFC Y PASSWORD</td>
                <td>CORREO ELECTRONICO</td>
                <td>TIPO DE PUESTO</td>
                <td>APELLIDO MATERNO</td>
                <td>APELLIDO PATERNO</td>
                <td>NOMBRE</td>
                <td>Estado</td>
                <td>Metas</td>
                <td>Metas 2021</td>
                <td>Competencias</td>
               
                
            </tr>';
            //include("funciones/funcionEliminaRegistr.php");
        //	include("funciones/guardaCandidato.php");
       
    while($filaAlumnos= $buscarAlumnos->fetch_assoc())
        {
        $rol = $filaAlumnos['rol'];
         $rfc=   $filaAlumnos['rfc'];
         $id_empleado=   $filaAlumnos['id_empleado'];
         $sql = $conexion2->query("SELECT sum(ponderacion) total FROM competencias where identificador = '$rfc'");
         $res = mysqli_fetch_assoc($sql);
         $sql_l = $conexion2->query("SELECT vistobueno, vistobueno2021 FROM personaloperativo where rfc = '$rfc'");
         $res_l = mysqli_fetch_assoc($sql_l);

         $finalizo = $res['total'];
         $metas = $res_l['vistobueno'];
         $metas2021 = $res_l['vistobueno2021'];
         $validar = 25;

         if($finalizo == $validar){
            $not = "Terminado";
         }elseif($finalizo == 0) {
            $not = "Sin iniciar";
         }elseif($finalizo > 1 || $finalizo < 25){
             $not = "Pendiente por finalizar";
         }else{

         }
         if($metas == 1){
            $met = "Autorizado";
         }elseif($metas == 2) {
            $met = "Peindiente de VoBo";
         }elseif($metas == 3){
            $met = "Rechazado";
         }elseif($metas == 4){
            $met = "Sin captura";
         }
         
         if($metas2021 == 1){
            $met2021 = "Autorizado";
         }elseif($metas2021 == 2) {
            $met2021 = "Peindiente de VoBo";
         }elseif($metas2021 == 3){
            $met2021 = "Rechazado";
         }elseif($metas2021 == 4){
            $met2021 = "Sin captura";
         }
            if($rol != 1){
                $status ="BLOQUEADO";
            }else{
                $status ="DESBLOQUEADO";
            }
            $tabla.=
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td id='.$filaAlumnos['rfc'].' data-toggle="modal"
                    data-target="#modal-window-one">'.$filaAlumnos['rfc'].'</td>
                <td id='.$filaAlumnos['rfc'].' data-toggle="modal"
                    data-target="#modal-window-one">'.$filaAlumnos['correo'].'</td>
                <td id='.$filaAlumnos['rfc'].' data-toggle="modal"
                    data-target="#modal-window-one">'.$filaAlumnos['puesto'].'</td>
                <td id='.$filaAlumnos['rfc'].'>'.$filaAlumnos['apellidopaterno'].'</td>
                <td id='.$filaAlumnos['rfc'].'>'.$filaAlumnos['apellidomaterno'].'</td>
                <td id='.$filaAlumnos['rfc'].'>'.$filaAlumnos['nombre'].'</td>
                <td>'.$status.'</td>
                <td>'.$met.'</td>
                <td>'.$met2021.'</td>
                <td>'.$not.'</td>
                        
                
             </tr>';
            
            
        }
     
    
        $tabla.='</table>';
    } else{
        $tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
    }
      
    echo $tabla;
    
    ?>
    
     <script>
                      // var fired_button2= $("#claveUnicaContrato").val();  
                        //var fired_button2=document.getElementById('claveUnicaContrato').value;
             
                  $(function(){

  $('table').on('click', 'td', function(){ 
  
      let rfc = $(this).prop('id');
     
     window.open ('mostrarInfo?rfc='+rfc);
  });
});
                
                      $('#select').click(function() {
                                
                        var fired_button = $(this).val();
                        var fired_button2 = $("#reinicarEvaluacion").val();
                        var mensaje = confirm("La evaluacion del usuario se reiniciara, Deseas continuar?")
                
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