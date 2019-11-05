$(function() {
	$('.frm_eliminarColectivo').on('submit',(function(e) {
		let colectivo_id = $(this).attr('id').split('_')[2]
	 	submtiEliminarColectivo(e,this,$('#div_colectivo_'+colectivo_id));
	}));
});
function verColectivo(colectivo_id){
	console.log('ver '+colectivo_id);
		window.open(webRoot+"/colectivos/ver/"+colectivo_id,"_blank");
}

function mostrarOpcionesColectivos(colectivo_id){
	$('#opciones_colectivo_'+colectivo_id).toggle();
}

function eliminarColectivo(colectivo_id){
	if(confirm("Seguro deseas eliminar este colectivo?")){
		let form = $('#frm_eliminarColectivo_'+colectivo_id);
		form.submit();
		}
	}

function submtiEliminarColectivo(e,form,container){
	e.preventDefault();
	let url =  $(form).attr('action');
	if(debugging)console.log(url);
	let data = $(form).serialize();
	if(debugging)console.log(data);
	$.ajax({
		url: url,
		type: "POST",
		data: new FormData(form),
		contentType: false,
		cache: false,
		processData:false,
		success: function(response){
			if(debugging)console.log(response);
			var objResponse = JSON.parse(response);
			if(objResponse.hasOwnProperty('id')){
				if (objResponse.id != "OK") {
					alert("\nError: " + objResponse.msg);
				}else {
					container.toggle("slide",function(){
						container.remove();
					});
				}
			}else
				alert("\nError Inesperado");
		},
		error: function(jqXHR, exception){
			if(debugging){console.log("error al eliminar colectivo");}
				ajaxError(jqXHR, exception);
			}
		});
}
