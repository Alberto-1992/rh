<?php
ini_set('display_errors', 1);
//error_reporting(0);
require 'conexion.php';
date_default_timezone_set("America/Mexico_City");
$hoy=date("Y-m-d");
$correojefe = 'beto_1866@outlook.com';
//$correojefe = $_GET['correoJefe'];
$id = base64_decode($_GET['id']);
$comentario = $_GET['comentario'];
$nombre = $_GET['nombre'];
$appaterno = $_GET['appaterno'];
$usuario = $nombre.$appaterno;
$from = "capacitacion@hraei.gob.mx";
$to = $correojefe;
$subject = "SOLICITUD DE VISTO BUENO";
$message = "Te informamos que se han capturado las metas que comprenderán la consecución de resultados para el periodo 1 de enero al 31 de diciembre de 2022 y quedan en espera de su Autorización.

Recuerda que si no autorizas las metas de tu personal no será posible su participación en la Evaluación de Desempeño.

Si las metas que tu colaborador dio de alta no concuerdan con las metas de tu área, podrás rechazarlos y se deberán redactar nuevamente.

La fecha límite para concluir con todo el proceso de Captura y Establecimiento de Metas es el 18 de julio de 2022, por lo que te solicitamos revisarlos lo antes posible.

Si tienes problemas con tu acceso comunícate con la Lic. Ma. Isabel Sandoval Espinosa (Ext. 1085)

Agradecemos tu participación.

Atentamente:
Dirección de Administración y Finanzas.
Usuario que solicita VoBo: ".$usuario;
$headers = "From:" .$from;
mail($to,$subject,$message,$headers);
$sql_1 = $conexion2->query("UPDATE descripcionesmetasjefes2023 set comentario = '$comentario' where id_jefe = $id");
$sql_2 = $conexion2->query("UPDATE jefes set vistobueno = 2, actualiza = 2, finalizofecha = '$hoy' where id_jefe = $id");
if($sql_1 || $sql_2 != false){
echo "<script>alert('Te informamos que tus Metas han quedado registrados correctamente en el sistema y se encuentran en proceso de Autorización de tu Jefe Inmediato.

Recuerda que también puedes consultar el estatus en la página de inicio del sistema. A partir de este momento comienza a registrar los avances en el cumplimiento de tus Metas; para que en el periodo de seguimiento puedas documentarlos e ir registrando el progreso en éstos.

Si tienes problemas con tu acceso comunícate con la Lic. Ma. Isabel Sandoval Espinosa (Ext. 1085)

Agradecemos tu participación.');
window.history.back();</script>";
}else{
 echo "<script>alert('Error al enviar el correo de solicitud de visto bueno, trate nuevamente si el error persiste comuniquese al area de recursos humanos con la licenciada isabel, GRACIAS.');
window.history.back();</script>";  
}
?>

<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          </head>
        <body>
            <style>
                .container{
        display: flex;
        justify-content: space-around;
        margin-top: -40px;
        border-radius: 20px;box-shadow: 0 0 30px #235B4E;
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
    }
    body{
        background: #F0F0F0;
    }
            </style>
            <div class="container">
              
    <div class="form-group" >
        
       
                                <label>Te informamos que tus Metas han quedado registrados correctamente en el sistema y se encuentran en proceso de Autorización de tu Jefe Inmediato.

Recuerda que también puedes consultar el estatus en la página de inicio del sistema. A partir de este momento comienza a registrar los avances en el cumplimiento de tus Metas; para que en el periodo de seguimiento puedas documentarlos e ir registrando el progreso en éstos.

Si tienes problemas con tu acceso comunícate con la Lic. Ma. Isabel Sandoval Espinosa (Ext. 1085)

Agradecemos tu participación.</label>
                                
                       
                                
               <input type="submit" value="Regresar a inicio" class="btn btn-success" onclick="window.location.href='principal'" style="">
                                
            </div>
            </div>
        </body>
   
</html>