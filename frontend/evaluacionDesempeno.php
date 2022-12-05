<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css3/styles.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body style="background: #F3F0F0;">


    <?php
include("cabecera.php");


    ?>
    <div class="" style=" width: 100%; height: auto; margin-top: 2%; display: flex;
  justify-content: center;">

        <img src="https://assets.change.org/photos/6/bz/fb/YMbzFBfNohxasMW-1600x900-noPad.jpg?1523406840"
            class="adaptar" style="border-radius: 50px; box-shadow: 0 0 30px #235B4E;">

    </div><br>




    <style>
    h2 {
        font-size: 15px;
        font-family: Arial;
        text-transform: uppercase;
        text-shadow: 0px 0px;
        color: #3c1b66;
        text-align: center;
    }

    h1 {
        text-align: center;
        font-size: 17px;
        font-family: Arial;
        text-transform: uppercase;
        text-shadow: 0px 0px;
        margin-top: 1%;
    }
    </style>
    <div class="" style="background: #F3F0F0; width: auto; height: auto; float: left;  margin-top: 0px; ">
        <input type="submit" value="Click para continuar" style="margin-left: 50%;
  transform: translateX(-50%); width: auto; height: auto; margin-top: 0px;" class="btn btn-warning"
            onclick="window.location.href='competencias'">
        <h1>Bienvenido a la Retroalimentación 360°</h1>
        <h2>La evaluación 360° tiene como propósito proporcionar una perspectiva más amplia sobre cómo las personas con
            las que interactuamos perciben nuestras acciones en el día a día; y de esta manera apoyarnos en la
            identificación de fortalezas y áreas de oportunidad para orientar los planes de desarrollo.<br>

            Durante el proceso, cada persona será evaluada por sus líderes, pares y colaboradores. Las respuestas
            proporcionadas son confidenciales; las personas evaluadas no tendrán acceso a sus respuestas ya que lo que
            verán será un reporte por categoría de participantes: Colaboradores, pares, superiores y Jefe inmediato.<br>

            Con la finalidad de apoyar el desarrollo de nuestros compañeros, te agradeceremos respondas esta encuesta de
            manera abierta y objetiva.<br>

            Antes de iniciar te sugerimos accedas a la guía de usuario a través de la liga en la parte inferior de la
            pantalla, esto te permitirá realizar el proceso fluidamente y sin contratiempos.<br>

            Contamos con tu entusiasmo y participación para el éxito de este proceso.<br><br>

        </h2>
        <!--<a href="Guia.php">Guia para capturar metas en el sistema</a>-->

    </div>
    <?php
//include("footer.php");
?>

    <div class="final" style="background: #285c4d; height: auto; ">
        <p>
            ® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
            Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
    </div>

    <script>
    $(document).bind("contextmenu", function(e) {
        e.preventDefault();
    });
    $(document).keydown(function(e) {
        if (e.which === 123) {
            return false;
        }
    });
    </script>
</body>

</html>