
function validarEntrada() 
{


 var titulo = document.getElementById("titulo").value;
 var contenido = document.getElementById("contenido").value;
 var descripcion =  document.getElementById("descripcion").value;
 var categoria = document.getElementById("categoria").selectedIndex;


	if(titulo == null || titulo.length == 0 || /^\s+$/.test(titulo)) 
	{
		sweetAlert("Titulo vacio", "Ingresa un titulo para la entrada", "error");
	  	return false;
	}

	if(contenido == null || contenido.length == 0 || /^\s+$/.test(contenido)) 
	{
		sweetAlert("La entrada no tiene contenido", "Ingresa algo interesante", "error");
	  	return false;
	}


	if(descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion)) 
	{
		sweetAlert("La entrada no tiene descripcion", "Ingresa de que trata tu entrada", "error");
	  	return false;
	}

	if( categoria == null || categoria == 0 ) {
		sweetAlert("No hay categoria selecionada", "Seleciona alguna categoria", "error");
	  return false;
	}

}



