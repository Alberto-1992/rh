<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css3/styles.css" rel="stylesheet">
    <link href="icono/icono.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>

<body style="background: #F3F0F0;">

    <?php
include("cabecera.php");

//include("menuOperativo.php");
    ?>
    <div class="d-flex">

        <div class="" style=" margin-left: 50px; margin-top: 2%; display: flex;
    justify-content: center;">

            <img src="imagenes/image001.png">

        </div>
        <h1>Bienvenido al sistema de Evaluacion del Desempeño del HRAEI<br>
            Te informamos que a partir de esta fecha y hasta el 10 de julio de 2022 iniciamos la etapa de "Registo de
            Metas", que permitirá medir tu desempeño valorando la consecución de resultados para el periodo 1 de enero
            al 31 de diciembre de 2022.<br><br>
            <p class="informe">La Evaluación de Desempeño se encuentra vinculada a varios de los procesos activos del
                HRAEI, como son la gestión de estímulos, promociones, desarrollo personal, planes de carrera,
                acreditaciones y certificaciones por ende se convierte en un proceso importante que el Servidor Público
                debe cumplir como parte de sus responsabilidades.</p>

            <br><br>
            Agradecemos tu participación.<br><br>


            Atentamente<br>

            Dirección de Administración y Finanzas
        </h1><br><br>

        <style>
        .d-flex {
            display: flex;

        }

        h2 {
            font-size: 15px;
            font-family: Arial;
            text-transform: uppercase;
            text-shadow: 0px 0px;
            color: #3c1b66;
            text-align: center;
        }

        img {
            padding: 10px;
            height: 30rem;
        }

        h1 {
            padding: 20px;
            text-align: center;
            font-size: 18px;
            margin-top: 100px;
            font-family: Arial;
            text-transform: uppercase;
            text-shadow: 0px 0px;
        }

        .informe {
            color: red;
        }
        </style>

        <!--<div class="" style="background: #F3F0F0; width: 100%; height: auto; float: left;  margin-top: 0px; ">
    <a href="capturaMetas" class="btn btn-warning" style="margin-left: 50%;
  transform: translateX(-50%); width: auto; height: auto; margin-top: 0px;">Click para continuar</a>-->


        <!--Es momento de registrar las metas que debes de cumplir para este periodo, tu jefe inmediato deberá Autorizar tus metas para poder concluir con el proceso, en caso de ser Rechazados, debes replantearlos y solicitar nuevamente el Visto Bueno.

Recuerda que el proceso de Evaluación del Desempeño te permite dar cumplimiento a tus metas y contribuye a que tu esfuerzo se reconozca y valore de acuerdo a tus logros.--><br>






    </div>
    <a href="capturaMetas" class="btn btn-warning"
        style="color: white; float: left; margin-left: 57rem; margin-top: -20px">Captura de
        metas</a>

    <div class="final" style="width: 100%; height: auto; background: #285c4d;  bottom: 0; margin-top: 20px;">
        <p>
            ® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
            Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
    </div>

    <script>
    /*
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
*/
    </script>
    <?php
   // require "footer.php";
?>
</body>

</html>