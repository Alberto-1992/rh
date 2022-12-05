function CargarProductos6(val)
{
    
    $.ajax({
        type: "POST",
        url: 'consulta.php',
        data: 'id_datoProveedor='+val,
        success: function(resp){
            $('#productos6').html(resp);
            
        }
        
    });
    
}
function CargarProductos5(val)
{
    
    $.ajax({
        type: "POST",
        url: 'consulta.php',
        data: 'id_datoProveedor='+val,
        success: function(resp){
            $('#productos5').html(resp);
            
        }
        
    });
    
}
function CargarProductos4(val)
{
    
    $.ajax({
        type: "POST",
        url: 'consulta.php',
        data: 'id_datoProveedor='+val,
        success: function(resp){
            $('#productos4').html(resp);
            
        }
        
    });
    
}
function CargarProductos3(val)
{
    
    $.ajax({
        type: "POST",
        url: 'consulta.php',
        data: 'id_datoProveedor='+val,
        success: function(resp){
            $('#productos3').html(resp);
            
        }
        
    });
    
}
function CargarProductos2(val)
{
    
    $.ajax({
        type: "POST",
        url: 'consulta.php',
        data: 'id_datoProveedor='+val,
        success: function(resp){
            $('#productos2').html(resp);
            
        }
        
    });
    
}
function CargarProductos1(val)
{
    
    $.ajax({
        type: "POST",
        url: 'consulta.php',
        data: 'id_datoProveedor='+val,
        success: function(resp){
            $('#productos1').html(resp);
            
        }
        
    });
    
}