<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css3/styles.css" rel="stylesheet">
    <link href="icono/icono.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>

</head>
<script>
window.onload = function validar() {
    var validado = true;


    if ($('#inputForm4').val().length == 0) {

        document.getElementById("inputForm4").hidden = true;
    } else {

        document.getElementById("inputForm4").hidden = false;
    }
    if ($('#inputForm3').val().length == 0) {
        document.getElementById("inputForm3").hidden = true;
    } else {
        document.getElementById("inputForm3").hidden = false;
    }
    if ($('#inputForm2').val().length == 0) {
        document.getElementById("inputForm2").hidden = true;
    } else {
        document.getElementById("inputForm2").hidden = false;
    }
    if ($('#inputForm').val().length == 0) {
        document.getElementById("inputForm").hidden = true;
    } else {
        document.getElementById("inputForm").hidden = false;
    }
}
</script>

<body style="background: #F3F0F0;">

    <?php
include("cabecera.php");
//include("menu.php");

$nombre = $result['nombre'];
$appaterno = $result['apellidopaterno'];
$apmaterno = $result['apellidomaterno'];
    ?>

    <style>
    .container {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
        border-radius: 10px;
        box-shadow: 0 0 30px #235B4E;

    }

    .child {
        /*flex-grow: 1;*/
        width: 100rem;
    }

    strong {
        color: black;
        margin-left: 15px;
    }

    h2 {
        text-align: center;
        font-style: Arial;
        color: black;
        margin-top: 10px;
    }

    h4 {
        text-align: center;
        font-style: Arial;
        color: red;
        font-size: 18px;

    }

    input:invalid {
        border: 2px dashed red;
    }
    </style>





    <div class="container">

        <div class="child">
            <h2>Inf. Personal</h2><br>
            <div class="form-group">


                <strong>Numero de empleado</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" style=" font-size: 100%; " value="<?php echo $result['id_empleado']; ?>">
                </div>



                <strong>RFC</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" style=" font-size: 100%; " value="<?php echo $result['rfc']; ?>">
                </div>



                <strong>Nombre</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nombreEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);"
                        value="<?php echo $result['nombre']." ".$result['apellidomaterno']." ".$result['apellidopaterno']; ?>">
                </div>



                <strong>Puesto</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="puestoEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" value="<?php echo $result['puesto']; ?>">
                </div>


                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" value="<?php echo $result['descripcionestructura1']; ?>">
                </div>



                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" value="<?php echo $result['descripcionestructura2']; ?>">
                </div>


                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" onload="validar();" id="inputForm2"
                        value="<?php echo $result['descripcionestructura3']; ?>">
                </div>


                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" onload="valida();" id="inputForm3"
                        value="<?php echo $result['descripcionestructura4']; ?>">
                </div>


                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="nominaEvaluado" type="text" class="form-control" readonly="readonly"
                        onkeyup="mayus(this);" onload="validar();" id="inputForm4"
                        value="<?php echo $result['descripcionestructura5']; ?>">
                </div>

            </div>
        </div>
        <div class="child">
            <h2>Funciones</h2><br>
            <form action="actualizaFunciones" method="POST">
            </form>
            <form action="actualizaFunciones" method="POST">

                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="id" type="hidden" class="form-control" readonly="readonly" onkeyup="mayus(this);"
                        value="<?php echo $result['id_empleado']; ?>">
                </div>
                <strong>Funciones 1</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="funciones1" type="text" id="input" class="form-control" required minlength="25"
                        onkeyup="mayus(this);" value="<?php echo $result['funciones1']; ?>" autocomplete="off">
                </div>

                <strong>Funciones 2</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="funciones2" type="text" id="input" class="form-control" required minlength="25"
                        onkeyup="mayus(this);" value="<?php echo $result['funciones2']; ?>" autocomplete="off">
                </div>

                <strong>Funciones 3</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="funciones3" type="text" id="input" class="form-control" required minlength="25"
                        onkeyup="mayus(this);" value="<?php echo $result['funciones3']; ?>" autocomplete="off">
                </div>

                <strong>Funciones 4</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="funciones4" type="text" class="form-control" onkeyup="mayus(this);"
                        value="<?php echo $result['funciones4']; ?>" autocomplete="off">
                </div>

                <strong>Funciones 5</strong>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </div>
                    <input name="funciones5" type="text" class="form-control" onkeyup="mayus(this);"
                        value="<?php echo $result['funciones5']; ?>" autocomplete="off">
                </div>


        </div>
    </div>



    <div class="form-group">

        <div class="input-group" style="width: 40%; margin-left: 25px; ">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
            </div>
            <input name="" type="hidden" class="form-control" readonly="readonly" onkeyup="mayus(this);"
                value="<?php echo $result['correo']; ?>">
        </div>

    </div>

    <div class="form-group">
        <!-- <strong style="color: black; margin-left: 25px;">correo </strong>-->
        <div class="input-group" style="width: 40%; margin-left: 25px; ">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
            </div>
            <input name="" type="hidden" class="form-control" readonly="readonly" onkeyup="mayus(this);"
                value="<?php echo $result['correojefe']; ?>">
        </div>

    </div>
    <div class="form-group">
        <!--<strong style="color: black; margin-left: 25px;">Número de nómina</strong>-->
        <div class="input-group" style="width: 40%; margin-left: 25px; ">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
            </div>
            <input name="numeroEvaluado" type="hidden" class="form-control" readonly="readonly" onkeyup="mayus(this);"
                value="<?php echo $result['id_jefe']; ?>">
        </div>

    </div>

    <div class="form-group">
        <!--
                                <strong style="color: black; margin-left: 25px;">Nombre</strong>-->
        <div class="input-group" style="width: 40%; margin-left: 25px; ">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
            </div>
            <input name="nombreEvaluado" type="hidden" class="form-control" readonly="readonly" onkeyup="mayus(this);"
                value="<?php echo $result['nombrejefe']; ?>">
        </div>

    </div>

    <div class="form-group">
        <!--
                                <strong style="color: black; margin-left: 25px;">Puesto</strong>-->
        <div class="input-group" style="width: 40%; margin-left: 25px; ">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
            </div>
            <input name="puestoEvaluador" type="hidden" class="form-control" readonly="readonly" onkeyup="mayus(this);"
                value="<?php echo $result['puestojefe']; ?>">
        </div>

    </div>

    <?php
                            if (isset($_SESSION['usuarioDatos'])){
				$usernameSesion = $_SESSION['usuarioDatos'];
				require 'conexion.php';
				$query ="SELECT id_empleado, vistobueno, actualizofunciones, ejeestrategico12022, ejeestrategico22022, ejeestrategico32022 from personaloperativo2022 where correo = '$usernameSesion' limit 1";
                $res = mysqli_query($conexion2, $query);
                $rw = mysqli_fetch_assoc($res);
                $vistobueno = $rw['vistobueno'];
                $ejeestrategico1 = $rw['ejeestrategico12022'];
                $ejeestrategico2 = $rw['ejeestrategico22022'];
                $ejeestrategico3 = $rw['ejeestrategico32022'];
                $valida = 4;
                $actualizofunciones = $rw['actualizofunciones'];
			
			}else if (isset($_SESSION['usuarioMedico'])){
				$usernameSesion = $_SESSION['usuarioMedico'];
				require 'conexion.php';
				$query ="SELECT id_empleado, vistobueno, actualizofunciones, ejeestrategico12022, ejeestrategico22022, ejeestrategico32022 from personaloperativo2022 where correo = '$usernameSesion' limit 1";
                $res = mysqli_query($conexion2, $query);
                $rw = mysqli_fetch_assoc($res);
                $vistobueno = $rw['vistobueno'];
                $ejeestrategico1 = $rw['ejeestrategico12022'];
                $ejeestrategico2 = $rw['ejeestrategico22022'];
                $ejeestrategico3 = $rw['ejeestrategico32022'];
                $valida = 4;
                $actualizofunciones = $rw['actualizofunciones'];
			
			}
		?>
    <?php
		
			if($actualizofunciones == 1){
			    
?>
    <a href="metasResultado2021?id=<?php echo base64_encode($result['id_empleado']);?>&correo=<?php echo base64_encode($result['correo']);?>&correojefe=<?php echo base64_encode($result['correojefe']);?>&name=<?php echo base64_encode($nombre); ?>&appaterno=<?php echo base64_encode($appaterno); ?>&apmaterno=<?php echo base64_encode($apmaterno); ?>"
        class="btn btn-warning" style="width: auto; color:black; margin-left: 60%;
                                transform: translateX(-60%); color: black; margin-top: -150px;">Resultado Obtenido
        2022</a>
    <a href="actualizarFunciones?id=<?php echo base64_encode($result['id_empleado']);?>" class="btn btn-danger" style="width: auto; color: white; margin-left: 40%;
                                transform: translateX(-40%); margin-top: -150px;">Click para modificar
        funciones</a><br><br><br>
    <?php
			}else{
			    ?>
    <h4>Es necesario que capture al menos 3 de sus funciones que realiza en su servicio actualmente.(favor de ser breve
        en su redacción).</h4><br>
    <input type="submit" name="actualiza" value="Actualizar funciones" class="btn btn-success"
        style="width: auto; margin-left: 50%; transform: translateX(-50%); margin-top: -180px;"><br>
    </form>
    <?php
			}
		
           ?>
    <?php
           /**
			if($vistobueno == null){
			    
?>
    <?php 
}else{
         ?>
    <a href="metas2021?Date=<?php echo base64_encode($result['id_empleado']);?>&correo=<?php echo base64_encode($result['correo']);?>&correojefe=<?php echo base64_encode($result['correojefe']);?>&name=<?php echo base64_encode($nombre); ?>&appaterno=<?php echo base64_encode($appaterno); ?>&apmaterno=<?php echo base64_encode($apmaterno); ?>"
        class="btn btn-warning" style="width: auto; color:black; margin-left: 50%;
                transform: translateX(-50%); color: white; margin-top: -140px;">Captura Metas 2021</a>
    <?php
}
**/
?>

    </div>
    <div class="final" style="background: #285c4d;">
        <p>
            ® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
            Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
    </div>
    <?php
//include("footer.php");
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