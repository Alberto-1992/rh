<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php 
error_reporting(0);
            
			if (isset($_SESSION['usuarioDatos'])){
				$usernameSesion = $_SESSION['usuarioDatos'];
				require 'conexion.php';
				$query ="SELECT nombre from personaloperativo2022 where correo = '$usernameSesion' limit 1";
                $res = mysqli_query($conexion2, $query);
                $rw = mysqli_fetch_assoc($res);
			
			}
			else if(isset($_SESSION['usuarioAdmin'])){
                $usernameSesion = $_SESSION['usuarioAdmin'];
            require 'conexion.php';
		$query ="SELECT nombre from personaloperativo2022 where correo = '$usernameSesion' limit 1";
                $res = mysqli_query($conexion2, $query);
                $rw = mysqli_fetch_assoc($res);
			}
			else if(isset($_SESSION['usuarioMedico'])){
                $usernameSesion = $_SESSION['usuarioMedico'];
            require 'conexion.php';
		$query ="SELECT nombre from personaloperativo2022 where correo = '$usernameSesion' limit 1";
                $res = mysqli_query($conexion2, $query);
                $rw = mysqli_fetch_assoc($res);
			}
			  	 
?>

    <div class="line-cabecera" style="width: 100%; height: 7px; background: #285c4d;">

    </div>

    <div class="logos-hraei">
        <div id="logo1"></div>
        <!--<div id="logo2" ></div>-->
    </div>

    <div class="menu" style="height: auto; background: #285c4d;">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <input type="text"
                    style="width: auto; text-align: center; height:30px; margin-top:5px; font-size:18px; font-style: normal; color:yellow; border:none; background: #285c4d; border-radius:5px; float: left; margin-left: 50px;"
                    disabled value="HOLA&nbsp;&nbsp;<?php echo $rw['nombre']; ?>">
            </li>
            <ul class="nav justify-content-end">
                <li class="nav-item" style="float:left">
                    <a class="nav-link active" style=" float:left;">G.D.S</a>
                </li>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="principal" class="nav-link active" style="color:yellow;">REGRESAR A INICIO</a>
                    </li>
                    <!-- <li class="nav-item">
    <a class="nav-link active"><input type="submit" style="color: white; background: none; border:none; font-size: 17px; cursor: pointer;" data-toggle="modal"
                    data-target="" value="CAMBIAR CONTRASEÑA"></a>
  </li>-->
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="close_sesion">SALIR</a>
                    </li>
                </ul>
            </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
<div id="myModal_ingresar" class="modal fade" role="dialog" style="float: right; margin-right: 50px;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content"
            style="width: 1200px; height: auto; color: white; float: right; margin-right: -450px;">
            <div class="modal-header" style="background: green; color: white;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Cambio de contraseña </h4>
            </div>
            <div class="modal-body">
                <p> Edicion .</p>
                <div id="panel_editar">


                    <!--
            <div class="hospital-text">
                <h5>2020 "AÑO DE LEONA VICARIO, BENEMÉRITA MADRE DE LA PATRIA"</h5><br>
                <h6>CONCENTRADO PROVEEDORES</h5>
                
            </div>
        -->


                    <div class="form-header" style="margin-top: -10px;">


                        <div class="pull-right">
                            <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                        </div>

                    </div>

                    <form action="ingresarPasswordNuevo.php" method="POST">
                        <div class="form-body">



                            <div class="form-group">
                                <p style="color:black; text-align: left;">Para poder realizar el cambio de contraseña
                                    solo debe de seguir los siguientes pasos:</p>
                                <p style="color:black; text-align: left;">1.- Capture su contraseña anterior.</p>
                                <p style="color:black; text-align: left;">2.- Capture su nueva contraseña, se debe de
                                    incluir un caracter especial($,#,%,&,!,(,/,*,=,?,¿)) .</p>
                                <p style="color:black; text-align: left;">3.- Confirme su nueva contraseña.</p>
                                <p style="color:black; text-align: left;">4.- Su contraseña debe de incluir minimo 8
                                    carateres alfanuméricos.</p>
                                <p style="color:black; text-align: left;">5.- Al final solo de clic sobre el botón de
                                    cambiar.</p><br>
                                <strong style="color: black;">Usuario</strong>
                                <div class="input-group" style="margin-top: 15px;">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="usuario" type="text" class="form-control" required="required"
                                        onkeyup="mayus(this);" readonly="readonly"
                                        value="<?php echo $rw['nombreUsuario']; ?>">
                                </div>

                            </div>
                            <div class="form-group">
                                <strong style="color: black;">Contraseña anterior</strong>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="passwordAct" type="password" class="form-control" required="required"
                                        onkeyup="mayus(this);">
                                </div>

                            </div>

                            <div class="form-group">
                                <strong style="color: black;">Contraseña nueva</strong>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="password" type="password" class="form-control" required="required"
                                        onkeyup="mayus(this);">
                                </div>
                                <span class="help-block" id="error"></span>
                            </div>

                            <div class="form-group">
                                <strong style="color: black;">Confirmar contraseña</strong>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input name="cpassword" type="password" class="form-control" required="required"
                                        onkeyup="mayus(this);">
                                </div>
                                <span class="help-block" id="error"></span>
                            </div>

                        </div>


                </div>


                <input type="submit" name="cambioPassword" class="btn btn-info" value="Guardar"
                    onclick="btn_guardar_password();">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>-->
            </div>
            <div id="panel_respuesta_edicion"></div>
        </div>

    </div>

</div>