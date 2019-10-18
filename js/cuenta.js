function iniciardebitos(){
	width= 0;
	alert("Se iniciará el proceso");
	$("#btnIniciar").attr('value', 'Procesando...');
		setInterval('actualizarBarra()',1000);
	
}


function actualizarBarra(){
width = width+10;
	$("#progress-bar").css("width",width+"%");
}

