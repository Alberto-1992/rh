$(obtener_registros());

function obtener_registros(alumno)
{
	$.ajax({
		url : 'consultaAdmin.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos: alumno },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});

function plantillajefes(alumno)
{
    
	$.ajax({
		url : 'consultaPlantillaJefes.php',
		type : 'POST',
		dataType : 'html',
		})

	.done(function(resultado){
	    
		$("#tabla_resultado").html(resultado);
	})
}

function plantillaoperativos(alumno)
{
	$.ajax({
		url : 'consultaAdmin.php',
		type : 'POST',
		dataType : 'html',
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}