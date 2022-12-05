 <?php
  if(isset($_SESSION['usuarioDatos'])) {
      require 'conexion.php';
      $usernameSesion = $_SESSION['usuarioDatos'];
            $query = $conexion2->query("SELECT * from personaloperativo2022 where correo = '$usernameSesion'");
                  $resultado = mysqli_fetch_assoc($query);
  }elseif(isset($_SESSION['usuarioAdmin'])) {
      require 'conexion.php';
      $usernameSesion = $_SESSION['usuarioAdmin'];
            $query = $conexion2->query("SELECT * from personaloperativo2022 where correo = '$usernameSesion'");
                  $resultado = mysqli_fetch_assoc($query);

  }
?>
 <div class="menu">
        <input type="text"
            style="width:100%; text-align: center; height:30px; margin-top:5px; font-size:15px; font-style: normal; color: white; background-color: #235279; border-radius:5px"
            disabled value="Hola&nbsp;<?php echo $resultado['nombre']; ?>">

            <div class="line"><label class="lnr lnr-screen"><a href="../site/principal"
                    style="margin-left: 20px; background: none; color: black; font-size: 12px; cursor: pointer;  text-decoration:none;">
                    Principal
                    </a></label></div>
  <!--
        <div class="line"><label class="lnr lnr-enter">
         <select class="form-control" id="select_proveedor" style="width: 235px; background:#F3F3F3; border: 0px; cursor: pointer; margin-top: -20px;  margin-left: 30px; height: 30px;" onchange="select_proveedor();" >
                     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                 <option value="">Estado de metas 2020</option>
                                 <option value="1">Autorizado</option>
                                 <option value="2">Pendiente de VoBo</option>
                                 <option value="3">Rechazado</option>
                                 <option value="4">Sin captura</option>
                                 
                    </select></label></div>
-->
            <div class="line"><label class="lnr lnr-enter">
                 <select class="form-control" id="selec_metas" style="width: 195px; background:#F3F3F3; border: 0px; cursor: pointer; margin-top: -20px;  margin-left: 30px; height: 30px;" onchange="select_metas();" >
                     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                 <option value="">Estado de metas 2022</option>
                                 <option value="1">Autorizado</option>
                                 <option value="2">Pendiente de VoBo</option>
                                 <option value="3">Rechazado</option>
                                 <option value="4">Sin captura</option>
                                 
                         </select>
            </label></div>
          
      <!--  <div class="line"><label class="lnr lnr-enter">
            <select class="form-control" id="select_competencias" style="width: 235px; background:#F3F3F3; border: 0px; cursor: pointer; margin-top: -20px;  margin-left: 30px; height: 30px;" onchange="select_competencias();" >
                        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                 <option value="" >Competecnias 2021</option>
                                 <option value="1" class="boton">Terminado</option>
                                 <option value="2" class="boton">Sin iniciar</option>
                                 <option value="3" class="boton">Pendiente por finalizar</option>
                                 
                         </select>
        </label></div>-->
        
        <!--<div class="line"><label class="lnr lnr-chart-bars"><a href="grafica"
                    style="margin-left: 20px; background: none; color: black; font-size: 15px; cursor: pointer;  text-decoration:none;">
                    Graficos de captura de Metas
                    </a></label></div> 
                    
        <div class="line"><label class="lnr lnr-chart-bars"><a href="graficaCompetencias"
                    style="margin-left: 20px; background: none; color: black; font-size: 15px; cursor: pointer;  text-decoration:none;">
                    Graficos de competencias
                    </a></label></div>--> 
                 <div class="line"><label class="lnr lnr-book"><a href="reporte"
                    style="margin-left: 20px; background: none; color: black; font-size: 12px; cursor: pointer;  text-decoration:none;">
                    Reporte general
                    </a></label></div>   
     <!--   <div class="line"><label class="lnr lnr-file-empty"><a href="reportecapturas"
                    style="margin-left: 20px; background: none; color: black; font-size: 15px; cursor: pointer;  text-decoration:none;">
                    Reporte de metas 2020
                    </a></label></div>-->
                    
        <div class="line"><label class="lnr lnr-file-empty"><a href="reporteCapturas2021"
                    style="margin-left: 20px; background: none; color: black; font-size: 12px; cursor: pointer;  text-decoration:none;">
                    Reporte de metas 2022
                    </a></label></div>
                    
        <div class="line"><label class="lnr lnr-file-empty"><a href="reporteCompetenciasJefes"
                    style="margin-left: 20px; background: none; color: black; font-size: 12px; cursor: pointer;  text-decoration:none;">
                    Reporte competencias jefes
                    </a></label></div>
                    
        <div class="line"><label class="lnr lnr-file-empty"><a href="reporteAreasOportunidad"
                    style="margin-left: 20px; background: none; color: black; font-size: 12px; cursor: pointer;  text-decoration:none;">
                    Reporte areas/oportunidad
                    </a></label></div>
        <div class="line"><label class="lnr lnr-user"><a href="organigrama"
                    style="margin-left: 20px; background: none; color: black; font-size: 12px; cursor: pointer;  text-decoration:none;" target="_blank">
                    Ubicación de personal
                    </a></label></div>
        
       <!-- <div class="line"><label class="lnr lnr-enter"><input type="submit" data-toggle="modal"
                    data-target="#myModal_actualizar"
                    style="margin-left: 20px; background: none; color: black; font-size: 15px;"
                    value="Cambiar estado de metas 2021"></label></div>-->
        
        <div class="line"><label class="lnr lnr-enter"><input type="submit" class="boton" onclick="plantillajefes();"
                    style="margin-left: 20px; background: none;  cursor: pointer; font-size: 12px;"
                    value="Plantilla jefes"></label></div>
                    
        <div class="line"><label class="lnr lnr-enter"><input type="submit" class="boton" onclick="plantillaoperativos();"
                    style="margin-left: 20px; background: none;  cursor: pointer; font-size: 12px;"
                    value="Plantilla operativos"></label></div>
                    
        <div class="line"><label class="lnr lnr-user"><input type="submit" data-toggle="modal"
                    data-target="#myModal_folios"
                    style="margin-left: 20px; background: none; cursor: pointer;  font-size: 12px;"
                    value="Activar usuario"></label></div>

        <div class="line"><label class="lnr lnr-file-add"><input type="submit"  data-toggle="modal"
                    data-target="#myModal_ingresa"
                    style="margin-left: 20px; background: none; cursor: pointer;  font-size: 12px;"
                    value="Cargar usuario"></label></div>
      
        <div class="line"><label class=""><a href="close_sesion"
                    style="color: red; font-size:12px; font-style:normal; margin-left: 60px; text-decoration: none;">
                    cerrar sesion
                    </a></label></div>
    </div>