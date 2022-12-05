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
    <link rel="stylesheet" href="../css/nivo-slider.css">
	<link rel="stylesheet" href="../css/mi-slider.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="../js/jquery.nivo.slider.js"></script>

    <title>Document</title>
</head>
<body style="background: #F3F0F0;">
<style type="text/css"> 
  
</style>

<div class="text-center">
                
            </div>   

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-login">
                <div class="modal-content"
        style="width: 900px; height: 950px; color: white; float:left; margin-left: -150px;">
            
                    <div class="modal-header" style="background: green; color: white;">
            <h4 class="modal-title">BIENVENDIO AL SISTEMA DE EVALUACIÓN DEL DESEMPEÑO DEL HRAEI</h4>
        </div>
                    
                    <div class="modal-body">
                    <div class="logos-hraei" >
    <div id="logo1"></div>
    <div id="logo2"></div>
  
</div>
<div id="imagenhraei"></div>

                       <!-- parte del contendio del modal -->
                    </div>
                    <input type="submit" class="btn btn-warning" data-dismiss="modal" value="CONTINUAR" style="color: white; font-size: 18px;" >  
                </div>
            </div>
        </div>
<?php
include("cabeceraJefe.php");
?>
<div class="box1">
    <div class="box2" onclick="location.href='InformacionJefe'">
      </div>
    <div class="box3" onclick="location.href='evaluacionDesempenoJefe'">
      </div>
 </div> 	
<style>
     .box1{
  width: 100%;
  height: 100%;
  background: #F3F0F0;
  color: black;
  position: relative;
  
 
}
.box2{
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

.box3{
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
/*
include("footer.php");
*/
?>
<div class="final" style="height: auto; background: #185F31; position: fixed; bottom: 0;">
  <p>
® Hospital Regional de Alta Especialidad de Ixtapaluca, todos los derechos reservados. <br>
Carr Federal México-Puebla Km. 34.5, Zoquiapan, 56530 Ixtapaluca, Méx.</p>
</div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>