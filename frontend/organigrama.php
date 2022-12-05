<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Regional de Alta Especialidad de Ixtapaluca</title>


    <!-- CSS -->
     <link href="https://framework-gb.cdn.gob.mx/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/gm/v4/css/main.css" rel="stylesheet">
     <link href="https://framework-gb.cdn.gob.mx/gm/accesibilidad/css/gobmx-accesibilidad.min.css" rel="stylesheet">
  
      <link href="estilos/card.css" rel="stylesheet">
      <link href="estilos/modal.css" rel="stylesheet">
       <link href="estilos/actualizacion.css" rel="stylesheet">
    
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
      
  </head>
  <body>
<nav class="navbar navbar-expand-md navbar-dark bg-light sub-navbar navbar-fixed-top">
        <div class="container">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#subNavBarDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
            
        <a class="navbar-brand sub-navbar">hospital Regional de Alta Especialidad de Ixtapaluca</a>

        
      </div>
      </nav>
    
  <main class="page">

      <div class="container">
        <br><br><br>
        <div class="row">
         
          <div class="col-md-12 pull-left">
          
            <h2 class="bottom-buffer">Estructura HRAEI</h2>
         
        
            <div class="panel-group ficha-collapse" id="accordion1">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#panel-01" aria-expanded="true" aria-controls="panel-01">
                    Direccion general
                    </a>
                  </h4>
                  <button type="button" class="collpase-button collapsed" data-parent="#accordion1" data-toggle="collapse" href="#panel-01"></button>
                </div>
                <div class="panel-collapse collapse" id="panel-01">
                  <div class="panel-body">
    <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'DIRECCION GENERAL'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
                  </div>
                </div>
              </div>
            </div>
        
<div class="panel-group ficha-collapse" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion2" data-toggle="collapse" href="#panel-02" aria-expanded="true" aria-controls="panel-02">
        Direccion de operaciones
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion2" data-toggle="collapse" href="#panel-02"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-02">
      <div class="panel-body">
          <div class="panel-group ficha-collapse" id="accordion8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion8" data-toggle="collapse" href="#panel-08" aria-expanded="true" aria-controls="panel-08">
        Subdireccion de tecnologias de la informacion
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion8" data-toggle="collapse" href="#panel-08"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-08">
      <div class="panel-body">
          <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura2 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>
<div class="panel-group ficha-collapse" id="accordion9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion9" data-toggle="collapse" href="#panel-09" aria-expanded="true" aria-controls="panel-08">
        Subdireccion de ingenieria biomedica
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion9" data-toggle="collapse" href="#panel-09"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-09">
      <div class="panel-body">
          <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>
          <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>
   
         <div class="panel-group ficha-collapse" id="accordion3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion3" data-toggle="collapse" href="#panel-03" aria-expanded="true" aria-controls="panel-03">
        Direccion de administracion y finanzas
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion3" data-toggle="collapse" href="#panel-03"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-03">
      <div class="panel-body">
          <div class="panel-group ficha-collapse" id="accordion10">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion10" data-toggle="collapse" href="#panel-10" aria-expanded="true" aria-controls="panel-010">
        Subdireccion de recursos humanos
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion10" data-toggle="collapse" href="#panel-10"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-10">
      <div class="panel-body">
          <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>
        <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>
   
 <div class="panel-group ficha-collapse" id="accordion4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion4" data-toggle="collapse" href="#panel-04" aria-expanded="true" aria-controls="panel-04">
      Direccion medica
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion4" data-toggle="collapse" href="#panel-04"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-04">
      <div class="panel-body">
      <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'DIRECCION MEDICA'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>        
    
         <div class="panel-group ficha-collapse" id="accordion5">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion5" data-toggle="collapse" href="#panel-05" aria-expanded="true" aria-controls="panel-05">
       Direccion de planeacion, enseñanza e investigacion.
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion5" data-toggle="collapse" href="#panel-05"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-05">
      <div class="panel-body">
        <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'DIRECCIÓN DE PLANEACIÓN, ENSEÑANZA E INVESTIGACIÓN'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>     
              
        
<div class="panel-group ficha-collapse" id="accordion6">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion6" data-toggle="collapse" href="#panel-06" aria-expanded="true" aria-controls="panel-06">
       Subdireccion de enfermeria
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion5" data-toggle="collapse" href="#panel-06"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-06">
      <div class="panel-body">
      <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
          
      </div>
    </div>
  </div>
</div>   

<div class="panel-group ficha-collapse" id="accordion7">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-parent="#accordion7" data-toggle="collapse" href="#panel-07" aria-expanded="true" aria-controls="panel-07">
        Subdireccion de planeacion y desarrollo
        </a>
      </h4>
      <button type="button" class="collpase-button collapsed" data-parent="#accordion7" data-toggle="collapse" href="#panel-07"></button>
    </div>
    <div class="panel-collapse collapse" id="panel-07">
      <div class="panel-body">
           <table id="" class="table table-responsive table-hover table-striped table-darkgray" style="width: 100%; font-size: 15px;"cellspacing="0" width="100%"  >
      
            <tr style="background-color:#7C7C7C; color: white; font-style: italic; ">
                <th>Empleado</th>
                <th>RFC</th>
                <th>TIPO DE PUESTO</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE</th>
                
        
                
                
            </tr>
           
                      <?php
                      require 'conexion.php';
                      $sql = $conexion2->query("SELECT * FROM personaloperativo2022 where descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
                      
                      while($filaAlumnos= $sql->fetch_assoc())
        {
         echo
            '<tr>
            <input type="hidden" id="nombre" value="'.$filaAlumnos['rfc'].'">
                <td>'.$filaAlumnos['id_empleado'].'</td>
                <td>'.$filaAlumnos['rfc'].'</td>
                <td>'.$filaAlumnos['puesto'].'</td>
                <td>'.$filaAlumnos['apellidopaterno'].'</td>
                <td>'.$filaAlumnos['apellidomaterno'].'</td>
                <td>'.$filaAlumnos['nombre'].'</td>
             
           
                           
                
             </tr>';
            
            
        }
                      ?>
                      </table>
      </div>
    </div>
  </div>
</div>



</div>
        
      </div>
    
      

      </div>
      
    </main>
      
 
   
    <script src="https://framework-gb.cdn.gob.mx/gm/v4/js/gobmx.js"></script>
      <script src="https://framework-gb.cdn.gob.mx/gm/accesibilidad/js/gobmx-accesibilidad.min.js"></script>
  </body>
</html>