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
    $sql = "SELECT COUNT(*) total FROM personaloperativo inner join descripcionesmetas2021 on personaloperativo.id_empleado = descripcionesmetas2021.id_empleado and personaloperativo.estadocompetencias2021 = $contrato and personaloperativo.eliminado = 0";
    $result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);
    $tabla="";
    $query="SELECT * FROM personaloperativo where estadocompetencias2021 = $contrato and eliminado = 0 limit 900 ";
    
    //En caso de fallo en consulta probar con esta opcion
    //$buscarAlumnos=mysqli_query($conexion2,$query);
    //if (mysqli_num_rows($buscarAlumnos)>0)
   
    $buscarAlumnos=mysqli_query($conexion2,$query);
    if(!empty($buscarAlumnos) AND mysqli_num_rows($buscarAlumnos)>0)
    {
        ?>
        <label style="float: left; margin-left: 0px; font-size: 16px; margin-top: 30px; font-style: italic;">Total de usuarios: <input type="text" class="form-control" readonly style="width: 70px; height: 20px; margin-top: -23px; margin-left: 150px;" value="<?php echo $fila['total'] ?>"></label>
    <?php
        $tabla.= 
        
        '
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
                <td>Competencias</td>
             
                
            </tr>';
            //include("funciones/funcionEliminaRegistr.php");
        //	include("funciones/guardaCandidato.php");
       
    while($filaAlumnos= $buscarAlumnos->fetch_assoc())
        {
        $rol = $filaAlumnos['rol'];
         $rfc=   $filaAlumnos['rfc'];
          $competencias = $filaAlumnos['estadocompetencias2021'];
         $id_empleado=   $filaAlumnos['id_empleado'];
   
         $sql_l = $conexion2->query("SELECT vistobuenoResultado2021 FROM personaloperativo where rfc = '$rfc'");
         $res_l = mysqli_fetch_assoc($sql_l);
         

       
         $metas = $res_l['vistobuenoResultado2021'];
        
  
        
         if($competencias == 1){
            $not = "Terminado";
         }elseif($competencias == 2) {
            $not = "Sin iniciar";
         }elseif($competencias == 3){
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
            if($rol != 1){
                $status ="BLOQUEADO";
            }else{
                $status ="DESBLOQUEADO";
            }
            $tabla.=
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['correo'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
                <td>'.$status.'</td>
                <td>'.$met.'</td>
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