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
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    

	
	<title>Datos usuario</title>
	
</head>

<body>
<style>
        table{
            font-size: 12px;
            cursor: pointer;
        }
        .form-check-input{
    width: 17px;
    height: 17px;
    margin-left: 15px;
    margin-top: 15px;
}
td:hover{
            background: #B7B7B7;
        }
#mail{
    color: blue;
    background: none;
    font-size: 18px;
    margin-left: 30px;
    margin-top: 45px;
    cursor: pointer;
}
    </style>


<?php 
error_reporting(0);
session_start();
	require 'conexion.php';
    $contrato = $_POST['ID_usuario'];
    $sql = "SELECT COUNT(*) total FROM personaloperativo2022 where vistobueno = $contrato and eliminado = 0";
    $result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);
  
    $tabla="";
    $query="SELECT * FROM personaloperativo2022 where vistobueno = $contrato  and eliminado = 0 limit 900";
    
    //En caso de fallo en consulta probar con esta opcion
    //$buscarAlumnos=mysqli_query($conexion2,$query);
    //if (mysqli_num_rows($buscarAlumnos)>0)
  
    $buscarAlumnos=mysqli_query($conexion2,$query);
    if(!empty($buscarAlumnos) AND mysqli_num_rows($buscarAlumnos)>0)
    {
        
       ?>
        <i class='lnr lnr-envelope' id="mail" data-toggle="modal"
                    data-target="#correo"> Enviar Mail</i>
        <strong style="float: left; margin-left:0 %; font-size: 20px; margin-top: 35px; font-style: italic;"><label>Total <input type="text" value='<?php echo $fila['total']; ?>'></label></strong>
    <?php
    /**
    $row = mysqli_fetch_assoc($buscarAlumnos);
         $metas_2021 = $row['vistobueno2021'];
         
         if($metas_2021 == 4){
             ?>
        <label class="lnr lnr-envelope" style="margin-top: 60px; float: left; margin-left: 30px; color: blue; font-size: 18px;"><input type="submit" data-toggle="modal" data-target="#EnviarMail"  style="margin-left: 20px; background: none; color: blue; font-size: 15px;"
                value="Notificar usuarios"></label></div>
       <?php
         }
         **/
         
        ?>
       
        <table id="ghatable" class="display table table-responsive table-bordered table-striped" cellspacing="0" width="100%" >
       
            <tr class="#" style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>RFC Y PASSWORD</th>
                <th>Correo Electronico</th>
                <th>Puesto</th>
                <th>Apellido Materno</th>
                <th>Apellido Paterno</th>
                <th>Nombre</th>
                <th>Funciones 1</th>
                <th>Funciones 2</th>
                <th>Funciones 3</th>
                <th>Funciones 4</th>
                <th>Funciones 5</th>
                <th>Estado</th>
                <th>Metas</th>
    
               
                
            </tr>
            <?php
            //include("funciones/funcionEliminaRegistr.php");
        //	include("funciones/guardaCandidato.php");
       
    while($filaAlumnos= $buscarAlumnos->fetch_assoc())
        {
        $rol = $filaAlumnos['rol'];
         $rfc=   $filaAlumnos['rfc'];
         
         $id_empleado=   $filaAlumnos['id_empleado'];
         $sql = $conexion2->query("SELECT sum(ponderacion) total FROM competencias2021 where identificador = '$rfc'");
         $res = mysqli_fetch_assoc($sql);
         $sql_l = $conexion2->query("SELECT vistobueno FROM personaloperativo2022 where rfc = '$rfc'");
         $res_l = mysqli_fetch_assoc($sql_l);

         $finalizo = $res['total'];
         $metas = $res_l['vistobueno'];
         $metas2021 = $res_l['vistobueno2021'];
         $metas2021 = $res_l['vistobuenoResultado2021'];
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
        echo
            '<tr>
            <input type="hidden" id="rfc" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['correo'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
                <td>'.$filaAlumnos['funciones1'].'</td>
                <td>'.$filaAlumnos['funciones2'].'</td>
                <td>'.$filaAlumnos['funciones3'].'</td>
                <td>'.$filaAlumnos['funciones4'].'</td>
                <td>'.$filaAlumnos['funciones5'].'</td>
                <td>'.$status.'</td>
                <td>'.$met.'</td>
                '?>
               <!-- <td><input class="form-check-input" type="checkbox" value="<?php echo $filaAlumnos['rfc']; ?>" id="activar" <?php echo $filaAlumnos['notificarCorreo']; ?> <?php if ($filaAlumnos['notificarCorreo'] == "1") echo 'checked="checked"' ?>></td>-->
               <?php
               '
                
             </tr>';
            
            
        }
     
    
    } else{
        $tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
    }
      

    
   
    ?>
     <script>
                      // var fired_button2= $("#claveUnicaContrato").val();  
                        //var fired_button2=document.getElementById('claveUnicaContrato').value;
                      $('#select').click(function() {
                                
                        var fired_button = $(this).val();
                        var rfc = $("#rfc").val();
                        var mensaje = confirm("La evaluacion del usuario se reiniciara, Deseas continuar?")
                
                if (mensaje == true) {
                         window.location.href = 'reinicarEval?rfc='+rfc;
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
