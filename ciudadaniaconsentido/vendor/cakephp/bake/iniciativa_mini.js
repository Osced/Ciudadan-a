$(function() {
	$('.frm_eliminarIniciativa').on('submit',(function(e) {
		let iniciativa_id = $(this).attr('id').split('_')[2]
	 	submtiEliminarIniciativa(e,this,$('#div_iniciativa_'+iniciativa_id));
	}));

	$('.frm_modificarIniciativa').on('submit',(function(e) {
		let iniciativa_id = $(this).attr('id').split('_')[2]
	 	submtiModificarIniciativa(e,this,$('#div_iniciativa_'+iniciativa_id));
	}));

});
function verIniciativa(iniciativa_id){
	window.open(webRoot+"/iniciativas/ver/"+iniciativa_id,"_blank");
}

function mostrarOpciones(iniciativa_id){
	let show = $('#opciones_'+iniciativa_id).is(':visible');
	$('.div_opciones').fadeOut("slideup");
	if(!show)
		$('#opciones_'+iniciativa_id).fadeIn();
}

function eliminarIniciativa(iniciativa_id){
	if(confirm("Seguro deseas eliminar esta iniciativa?")){
		let form = $('#frm_eliminarIniciativa_'+iniciativa_id);
		form.submit();
		}
	}

function modificarIniciativa(iniciativa_id){
		let form = $('#frm_modifiarIniciativa_'+iniciativa_id);
		form.submit();
	}

function submtiEliminarIniciativa(e,form,container){
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
			if(debugging){console.log("error al eliminar iniciativa");}
				ajaxError(jqXHR, exception);
			}
		});
}
function submtiModificarIniciativa(e,form,container){
	console.log("modificar");
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
					console.log(objResponse.msg);
					$('#'+container.attr('id')+' #btn_modificar span').html(objResponse.msg.opc);
					$('#'+container.attr('id')+' #iniciativa_estado_id').val(objResponse.msg.id);
				}
			}else
				alert("\nError Inesperado");
		},
		error: function(jqXHR, exception){
			if(debugging){console.log("error al eliminar iniciativa");}
				ajaxError(jqXHR, exception);
			}
		});
}

function meGusta(iniciativa_id){

	let form = $('#frm_megusta_iniciativa_'+iniciativa_id);
	let url = form.attr('action');
	let data = form.serialize();
	console.log(data);
  $.ajax({
    type: "POST",
    url: url,
    data: data,
    success: function(response) {
    	if(debugging)console.log(response);
			var objResponse = JSON.parse(response);
			if(objResponse.hasOwnProperty('id')){
				if (objResponse.id != "OK") {
					if(objResponse.id == "DEL")	{
						$('#div_iniciativa_'+iniciativa_id).hide("slide",function(){
						$(this).remove();
					});
					}
					else
						alert("\nError: " + objResponse.msg);
				}
			}else
				alert("\nError Inesperado");
    },
	error: function(jqXHR, exception){
		debug("error en dejar de seguir iniciativa");
		ajaxError(jqXHR, exception);
	  }
  });
}
