function actualizarConfiguraciones()
{

	var menor = $("#cuotamenor").val();
	var mayor = $("#cuotamayor").val();
	var becado = $("#descuentobecado").val();

	if (menor == "") {
		Swal.fire({
	              position: 'center',
	              type: 'error',
	              title: '¡Error!',
	              text: 'Debe completar todos los campos',
	              showConfirmButton: false,
	              timer: 2000
            })    
            	return false;   
	}
	if (mayor == "") {
				Swal.fire({
	              position: 'center',
	              type: 'error',
	              title: '¡Error!',
	              text: 'Debe completar todos los campos',
	              showConfirmButton: false,
	              timer: 2000
            })  
					return false;
	}
	if (becado == "") {
				Swal.fire({
	              position: 'center',
	              type: 'error',
	              title: '¡Error!',
	              text: 'Debe completar todos los campos',
	              showConfirmButton: false,
	              timer: 2000
            })  
					return false;
	}

	$.ajax({                        
           type: "POST",                 
           url: "ajax/configuracion.php?op=update",                     
           data: $("#formActualizacion").serialize(), 
           success: function(data)             
           {
            if (data == "111") {
            	 Swal.fire({
	              position: 'center',
	              type: 'success',
	              title: '¡Perfecto!:',
	              text: 'Valores actualizados con éxito',
	              showConfirmButton: false,
	              timer: 2000
            })       
            }else{
            	Swal.fire({
	              position: 'center',
	              type: 'error',
	              title: '¡Error!:',
	              text: 'Alguno de los valores no se actualizó, intente nuevamente.',
	              showConfirmButton: false,
	              timer: 2000
            })       
            }

           }
       });
}