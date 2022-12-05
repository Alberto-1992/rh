<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <link rel="stylesheet" href="../cisfa/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cisfa/css/jquery.dataTables.min.css">
    <script src="../cisfa/js/jquery-3.5.1.min.js"></script>
    <script src="../cisfa/js/jquery.dataTables.min.js"></script>
    <script src="../cisfa/js/jquery.tabledit.js"></script>

    <title>Document</title>

</head>

<body>
    <style>
        table {
            font-size: 11px;
            cursor: pointer;
        }

        td:hover {
            background: #B7B7B7;
        }

        .form-control {
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
            width: 530px;
            height: 45px;

        }

        #boton_usuario {
            text-decoration: none;
            display: inline;
            background-color: #3A97F9;
            color: white;
            cursor: pointer;
            width: 160px;
            height: 25px;
            font-size: 12px;
            border: 5px;
            margin-top: 35px;
            float: right;
        }

        #titulo-total {
            float: left;
            margin-left: 0%;
            font-size: 20px;
            margin-top: 30px;
            font-style: italic;
        }
    </style>
    <?php
    error_reporting(0);
    require 'conexion.php';
    $contrato = $_POST['ID_usuario'];

    $sql = "SELECT COUNT(*) total FROM personaloperativo2022 WHERE eliminado = 0";
    $result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);




    $query = $conexion2->query("SELECT * FROM personaloperativo2022 where eliminado = 0 ");
    if ($query != false) {

    ?>

        <label id="titulo-total">Total <input type="text" value='<?php echo $fila['total']; ?>'></label>

        <!--<a href="exportExcelPlantilla" ><i class="lnr lnr-arrow-down" style="font-size: 25px; float: right;  margin-top: 30px; margin-right: 30px;"></a></i><br>-->
        <input type="submit" data-toggle="modal" data-target="#myModal_usuario" value="  +  Editar datos" id="boton_usuario">
        <table id="datatables-example" class="table table-striped table-bordered nowrap table-darkgray table-hover" width="100%">
            <thead>
                <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                    <th>Datos Personales</th>
                    <th>Ubicación</th>
                    <th>Tipo de Puesto</th>
                    <th>Datos Jefe directo</th>
                    <th>Estado</th>
                    <th>Metas 2022</th>



                </tr>
            </thead>
            <tbody>

                <?php
                while ($filaAlumnos = $query->fetch_assoc()) {
                    $rol = $filaAlumnos['rol'];
                    $rfc =   $filaAlumnos['rfc'];
                    $id_empleado =   $filaAlumnos['id_empleado'];
                    $sql = $conexion2->query("SELECT sum(ponderacion) as total FROM competencias2021 where identificador = '$rfc'");
                    $res = mysqli_fetch_assoc($sql);
                   // $sql_l = $conexion2->query("SELECT vistobueno FROM personaloperativo2022 where rfc = '$rfc'");
                   // $res_l = mysqli_fetch_assoc($sql_l);

                    $finalizo = $res['total'];
                    $metas = $filaAlumnos['vistobueno'];
                   // $metas2021 = $res_l['vistobueno2021'];
                   // $Resultadometas2021 = $res_l['vistobuenoResultado2021'];
                    $validar = 25;
                    /*
         if($finalizo == $validar){
            $not = "Terminado";
            $sql_m = $conexion2->query("UPDATE personaloperativo set estadocompetencias2021 = 1 where rfc = '$rfc'");
         }elseif($finalizo == 0) {
            $not = "Sin iniciar";
            $sql_d = $conexion2->query("UPDATE personaloperativo set estadocompetencias2021 = 2 where rfc = '$rfc'");
         }elseif($finalizo > 1 || $finalizo < 25){
             $not = "Pendiente por finalizar";
             $sql_k = $conexion2->query("UPDATE personaloperativo set estadocompetencias2021 = 3 where rfc = '$rfc'");
         }else{

         }
         */
                    if ($metas2021 == 1) {
                        $met2021 = "Autorizado";
                    }
                    if ($metas2021 == 2) {
                        $met2021 = "Peindiente de VoBo";
                    }
                    if ($metas2021 == 3) {
                        $met2021 = "Rechazado";
                    }
                    if ($metas2021 == 4) {
                        $met2021 = "Sin captura";
                    }

                    /*   if($Resultadometas2021 == 1){
            $Resultadomet2021 = "Autorizado";
         }if($Resultadometas2021 == 2) {
            $Resultadomet2021 = "Peindiente de VoBo";
         }if($Resultadometas2021 == 3){
            $Resultadomet2021 = "Rechazado";
         }if($Resultadometas2021 == 4){
            $Resultadomet2021 = "Sin captura";
         }
         */
                    if ($metas == 1) {
                        $met = "Autorizado";
                    }
                    if ($metas == 2) {
                        $met = "Peindiente de VoBo";
                    }
                    if ($metas == 3) {
                        $met = "Rechazado";
                    }
                    if ($metas == 4) {
                        $met = "Sin captura";
                    }
                    if ($rol != 1) {
                        $status = "BLOQUEADO";
                    } else {
                        $status = "DESBLOQUEADO";
                    }
                ?>
                    <tr>
                        <input type="hidden" id="nombre" value="<?php echo $filaAlumnos['rfc'] ?>">
                        <td><?php echo 'N° de empleado:&nbsp' . $filaAlumnos['id_empleado'] . '<br>' . 'Nombre:&nbsp' . $filaAlumnos['nombre'] . ' ' . $filaAlumnos['apellidopaterno'] . ' ' . $filaAlumnos['apellidomaterno'] . '<br>' . 'RFC:&nbsp' . $filaAlumnos['rfc'] . '<br>' . 'Correo:&nbsp' . $filaAlumnos['correo'] ?></td>
                        <td><?php echo 'Dirección:&nbsp' . $filaAlumnos['descripcionestructura1'] . '<br>' . 'Ubicación:&nbsp' . $filaAlumnos['descripcionestructura2'] ?></td>
                        <td><?php echo $filaAlumnos['puesto'] ?></td>
                        <td><?php echo 'RFC:&nbsp' . $filaAlumnos['id_jefe'] . '<br>' . 'Nombre:&nbsp' . $filaAlumnos['nombrejefe'] . '<br>' . 'Puesto jefe:&nbsp' . $filaAlumnos['puestojefe'] . '<br>' . 'Correo jefe:&nbsp' . $filaAlumnos['correojefe'] ?></td>
                        <td><?php echo $status ?></td>
                        <td><?php echo $met ?></td>


                    </tr>
            <?php }
            } ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $('#datatables-example').DataTable({
                    pagingType: 'full_numbers',
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script>
            // var fired_button2= $("#claveUnicaContrato").val();  
            //var fired_button2=document.getElementById('claveUnicaContrato').value;
            $('#select').click(function() {

                let fired_button = $(this).val();
                let fired_button2 = $("#reinicarEvaluacion").val();
                let mensaje = confirm("La evaluacion del usuario se reiniciara, Deseas continuar?")

                if (mensaje == true) {
                    window.location.href = 'reinicarEval?Xy=' + fired_button2;
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
<div id="myModal_usuario" class="modal fade" role="dialog">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="width: 600px; height: auto; color:black; left: 50%; transform: translate(-50%); ">
            <div class="modal-header" style="background: green; color: white;">

                <h4 class="modal-title">Datos de trabajador</h4>
            </div>
            <div class="modal-body">
                <div class="form-row" autocomplete="off">
                    <div class="col-md-12">
                        <input list="usuariosHraei" class="form-control" id="usuarios" onchange="usuarios_metas();" placeholder="Numero de Trabajador">

                        <datalist id="usuariosHraei">
                            <?php
                            require 'conexion.php';
                            $sql_s = $conexion2->query("SELECT * FROM personaloperativo2022 where eliminado = 0");
                            while ($row_s = mysqli_fetch_array($sql_s)) {
                                $ID_usuario = $row_s['id_empleado'];
                                $nombre = $row_s['nombre'];
                                $appaterno = $row_s['apellidopaterno'];
                                $apmaterno = $row_s['apellidomaterno'];

                                $nombrecompleto = $nombre . ' ' . $appaterno . ' ' . $apmaterno;

                            ?>
                                <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombrecompleto; ?></option>

                            <?php
                            }


                            ?>
                            <script>
                                function usuarios_metas() {

                                    let nombre = $("#usuarios").val();

                                    let ob = {
                                        nombre: nombre
                                    };

                                    $.ajax({
                                        type: "POST",
                                        url: "consultaData.php",
                                        data: ob,
                                        beforeSend: function(objeto) {

                                        },
                                        success: function(data) {

                                            $("#tabla_datos").html(data);

                                        }
                                    });
                                }
                            </script>

                        </datalist>
                    </div>
                    <div id="tabla_datos"></div>
                </div>
            </div>
        </div>
    </div>
</div>