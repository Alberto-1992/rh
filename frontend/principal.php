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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Metas 2022</title>
</head>

<body>
    <script>
    /*
    $( document ).ready(function() {
    $('#myModal').modal('toggle')
});
*/
    </script>
    <?php

if (isset($_SESSION['usuario'])){
				$usernameSesion = $_SESSION['usuario'];
				require 'conexion.php';
				$query ="SELECT id_empleado, vistobueno2021, ejeestrategico2021 from personaloperativo where correo = '$usernameSesion' limit 1";
                $res = mysqli_query($conexion2, $query);
                $rw = mysqli_fetch_assoc($res);
                $vistobueno = $rw['vistobueno2021'];
                $ejeestrategico = $rw['ejeestrategico2021'];
                $valida = 4;
			    $mensaje = "Te recordamos que tienes pendiente la evaluación de las metas de desempeño 2020. Por lo que solicitamos tu valioso apoyo con la conclusión del proceso para que puedas continuar con la captura de metas 2021 que comprenderán la consecución de resultados para el periodo 1 de enero al 31 de diciembre de 2021. La fecha límite para concluir con esta actividad es a la brevedad.";
			}
?>
    <div class="text-center">

    </div>

    <!-- Modal HTML -->

    <?php
        if($ejeestrategico != ''){
          ?>

    <div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-login">
            <div class="modal-content"
                style="width: auto; height: auto; color: white; margin-left: auto; margin-right: auto; margin-top: 150px;">

                <div class="modal-header" style="background: green; color: white; ">
                    <h4 class="modal-title" style="font-size: 14px;">BIENVENDIO AL SISTEMA DE EVALUACIÓN DEL DESEMPEÑO
                        HRAEI</h4>
                </div>

                <div class="modal-body">
                    <!-- parte del contendio del modal -->
                    <div class="logos-hraei">
                        <h4 class="modal-title" style="font-size: 14px; text-align: center; color: black;">Ayudanos a
                            completar tu perfil HRAEI</h4>
                        <div id="logo1"></div>


                    </div>
                    <h4 class="modal-title" style="font-size: 14px; text-align: center; color: black;">Actualmente
                        cuenta usted con otro empleo?</h4>
                    <select class="form-control" id="select_usuario" style="height: 40px;" onchange="seleccione();">
                        <option>Seleccione</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>
                    </select>
                    <div id="panel_selector"></div>
                </div>

                <!-- <div id="imagenhraei" style="margin-top: -1px;"></div> 
                    
                    <input type="submit" class="btn btn-warning" data-dismiss="modal" value="CONTINUAR" style="color: white; font-size: 18px;" > -->
            </div>

        </div>

    </div>
    <script>
    function seleccione() {

        let ID_usuario = $("#select_usuario").val();


        let ob = {
            ID_usuario: ID_usuario
        };

        $.ajax({
            type: "POST",
            url: "modelo/mostrarDatosEmpleo.php",
            data: ob,
            beforeSend: function(objeto) {

            },
            success: function(data) {

                $("#panel_selector").html(data);

            }
        });
    }
    </script>
    <?php
        }else{
            ?>
    <?php
        }
        ?>
    <?php
include("cabecera.php");

?>
    <div class="box1">

        <button class="boton1" onclick="location.href='Informacion'">Evaluación de Desempeño</button>

        <button class="boton2" onclick="location.href='evaluacionDesempeno'">Evaluación por Competencias </button>


    </div>
    <style>
    .box1 {
        width: 100%;
        height: 100%;
        background: #F3F0F0;
        color: black;
        position: relative;


    }

    @keyframes btn-animation {

        16.667%,
        100% {
            border-image: linear-gradient(to right, #1c5ae0, #1CB5E0) 1;
            box-shadow: 20px 0px 60px 5px #1c5ae0c2;
        }

        50% {
            border-image: linear-gradient(to right, #5106ff, #ff2819) 1;
            box-shadow: 20px 0px 60px 5px #ff281991;
        }

        83.333% {
            border-image: linear-gradient(to right, #d53369, #daae51) 1;
            box-shadow: 20px 0px 60px 5px #daaf518e;
        }
    }

    .boton1 {
        margin-top: 2rem;
        width: 18rem;
        padding: 0.8rem;
        font-size: larger;
        font-weight: bold;
        color: white;
        border-width: 1px;
        border-style: solid;
        border-image: linear-gradient(to right, #1c5ae0, #1CB5E0) 1;
        box-shadow: 20px 0px 60px 5px #1c5ae0c2;
        background-color: black;
        animation: btn-animation 8s infinite;
        cursor: pointer;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .boton2 {
        margin-top: 2rem;
        width: 18rem;
        padding: 0.8rem;
        font-size: larger;
        font-weight: bold;
        color: white;
        border-width: 1px;
        border-style: solid;
        border-image: linear-gradient(to right, #1c5ae0, #1CB5E0) 1;
        box-shadow: 20px 0px 60px 5px #1c5ae0c2;
        background-color: black;
        animation: btn-animation 8s infinite;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /*.box2 {
        width: 250px;
        height: 280px;
        background: none;
        background-image: url(frontend/imagenes/btnObjetivos_2.png);
        background-repeat: no-repeat;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-100%, -70%);

    }
*/
    .box3 {
        width: 250px;
        height: 280px;
        background: none;
        cursor: pointer;
        background-image: url(frontend/imagenes/btnEvaComp.png);
        background-repeat: no-repeat;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(50%, -70%);
    }
    </style>
    <?php
    /**
    if($vistobueno == $valida){
        echo "<script>alert('$mensaje');</script>";
    }else{
    **/
        ?>
    <!-- <center><input type="submit" id="" value="Captura de Metas 2021" style="width: 200px; height: 270px;  color: red; font-size: 17px; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWQ38sPO3aIp5EC_UtLnGZzoiBXwULIZNx9nQrL-p-7NGYp6hsBttoc7X1iVjWH4D2C_4&usqp=CAU); background-repeat: no-repeat; background-size: 200px 270px; float: left; margin-left: 30%; margin-top: 80px;"  class="btn btn-info" onclick="location.href='Informacion' "></center>-->
    <?php
    /**
        }
        **/
    ?>
    <!--
    <div class="final" style="height: auto; background: #366FD3; position: relative; bottom: 0;">
        <p>
            ® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
            Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
    </div>
    -->
    <?php
        require 'footer.php';
        ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
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