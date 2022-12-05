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
            font-size: 12px;
            cursor: pointer;
        }
        td:hover{
            background: #B7B7B7;
        }
    </style>


<?php 
error_reporting(0);
	require 'conexion.php';

    
	$sql = "SELECT COUNT(*) total FROM jefes2022 WHERE eliminado = 0";
    $result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);

    
  
   
    $query=$conexion2->query("SELECT * FROM jefes2022 where eliminado = 0 limit 500");
    if($query != false){
      
?>
        
        
        <strong style="float: left; margin-left:0 %; font-size: 20px; margin-top: 35px; font-style: italic;"><label>Total <input type="text" value='<?php echo $fila['total']; ?>'></label></strong>
        <div class="line"><label class="lnr lnr-magnifier" data-toggle="modal"
                    data-target="#myModal_buscarJefe" style="margin-top: 35px; float: left; margin-left: 0px;"></label></div>
        <table id="" class="table table-responsive table-striped table-bordered table-hover" cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Id</td>
                <th>RFC Y PASSWORD</th>
                <th>CORREO ELECTRONICO</th>
                <th>TIPO DE PUESTO</th>
                <th>NOMBRE</th>
                <th>Estructura 1</th>
                <th>Estructura 2</th>
                <th>Estructura 3</th>
                <th>Estructura 4</th>
                <th>Estructura 5</th>
                
                
            </tr>
   
      
       <?php
    while($filaAlumnos= $query->fetch_assoc())
        {
        
     echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_jefe'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['correo'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
         
                <td>'.$filaAlumnos['nombre'].'</td>
                <td>'.$filaAlumnos['descripcionestructura1'].'</td>
                <td>'.$filaAlumnos['descripcionestructura2'].'</td>
                <td>'.$filaAlumnos['descripcionestructura3'].'</td>
                <td>'.$filaAlumnos['descripcionestructura4'].'</td>
                <td>'.$filaAlumnos['descripcionestructura5'].'</td>
               
              
             </tr>';
            
            
        }
    }else{
        echo "<script>alert('Error en la busqueda de información');</script>";
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