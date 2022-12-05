<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8" />
   
        <title>Panel admin</title>

      
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/main.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       
        <title>HRAEI</title>
        
        <link href="icono/icono.ico" rel="shortcut icon">

        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="librerias/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="peticion.js"></script>
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        
 
  
  
        
    </head>
     
    <body>
        <script>
        /*
        let intervalo = setInterval('mailauto()',10);
        function mailauto(){
            	$.ajax({
		url : 'pruebaMailAuto.php',
		type : 'POST',
		dataType : 'html',
		})

    }

*/  
  </script>
 
 <header>

        <label class="lnr lnr-menu"
            style="font-size: 24px; font-style: italic; float: left; margin-left: 18px; color: white;">Menu</label>

        <strong id="cabecera" style="color: white; float: left; margin-left: 42%;">Metas RH</strong>

        <script>
     /**   
	window.onload = function(){killerSession();}
	function killerSession(){
	setTimeout("window.open('confirmCloseSession.php','_top');", 2.4e+6);
	}**//
</script>
<script type="text/javascript">

$(document).ready(function() {    
   /** $('.boton').on('click', function(){**/
        //Añadimos la imagen de carga en el contenedor
        $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');;
 
        
        return false;
   /** });   **/           
}); 
$(document).ready(function() {    
   $('#selec_metas').on('change', function(){
                //Añadimos la imagen de carga en el contenedor
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
        return false;
    });            
});  
 $(document).ready(function() {    
   $('.boton').on('click', function(){
        //Añadimos la imagen de carga en el contenedor
        $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9;  opacity: .7; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
        
        return false;
  });            
}); 
$('.nav-item dropdown').hover(function(){
	$('#navbarDropdown').trigger('click')

})

</script>

    </header>
    <div class="box2">
        <div class="box1">
   <?php
    require 'menu/menu.php';
   ?>
</div>
  <div class="box03">      
 <div id="tabla_resultado" ></div>
          
        
<style>
  

::-webkit-scrollbar{
    width: 10px;
}
::-webkit-scrollbar-track{
    background: #ACAEAD;
    border-radius: 50px;
}
::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 50px;
}
</style>
        </div>
</div>
        <script>
   
            function select_proveedor()
            { 
              
             let ID_usuario =  $("#select_proveedor").val();
            
                let ob = {ID_usuario:ID_usuario};
            
                 $.ajax({
                            type: "POST",
                            url:"consultaAdminMetas.php",
                            data: ob,
                            beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado").html(data);
                        
                            }
                         });
            }
            function select_metas()
            { 
              
             let ID_usuario =  $("#selec_metas").val();
            
                let ob = {ID_usuario:ID_usuario};
            
                 $.ajax({
                            type: "POST",
                            url:"consultaAdminMetas2021.php",
                            data: ob,
                            beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado").html(data);
                        
                            }
                         });
            }
           
            
            function select_competencias()
            { 
              
             let ID_usuario =  $("#select_competencias").val();
            
                let ob = {ID_usuario:ID_usuario};
            
                 $.ajax({
                            type: "POST",
                            url:"consultaAdminCompetencias.php",
                            data: ob,
                            beforeSend: function(objeto){
                            
                            },
                            success: function(data)
                            { 
                             
                             $("#tabla_resultado").html(data);
                        
                            }
                         });
            }
            
                 </script>
              
               
           
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="frontend/js/scripts.js"></script>
        <script src="frontend/js/script.js"></script>
    
    
    </body>
</html>

<?php 
 require 'modal/buscarUsuario.php';
 require 'modal/buscarJefe.php';
 require 'modal/cargarUsuario.php';
 require 'modal/modificarMetas2021.php';
 require 'modal/activarUsuario.php';
 require 'modal/enviarMail.php';
 ;
?>



