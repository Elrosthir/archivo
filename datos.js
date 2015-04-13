$(document).on("ready",ini);
function ini(){
	$("#enviar").on("click",consultarTutorias);    
}

function consultarTutorias(){
	cc = $("#dia").val();
	traerDatos();
}

function traerDatos(){
    try{
        var strHtml = "";
		$.ajax({
				global: false,
				dataType: "html",
				async: false,
                type: "POST",
                url: $("#form").attr('action'),
                data: $("#form").serialize(),
            }).done(function (resultado) {
            	var datosRecibidos = JSON.parse(resultado);
				var lista = "<div class='ui-block-a'>Tema</div><div class='ui-block-b'>Año | Hora | Aula</div>";
                $.each( datosRecibidos, function( key, value ) {
				  		lista += "<div class='ui-block-a'>" + value.clase + "</div>";
                        lista += "<div class='ui-block-b'>" + value.ano + " | " + value.hora + " | " + value.aula + "</div>";
                });
                $("#listaDatos").html(lista);
                $("#listaDatos").listview().listview('refresh');
        });
    }
    catch(ex)
    {
        alert("Error de datos!!");
    }
}
