

/*
 * Fix for footer when the keyboard is displayed
 */
 $(function() {

	$(document).on('focus', 'input, textarea', function() 
	{
		try{
			$.mobile.activePage.find("div[data-role='footer']").hide();
		}
		catch(e){
			//
		}
	});

	$(document).on('blur', 'input, textarea', function() 
	{
		try{
		$.mobile.activePage.find("div[data-role='footer']").show();
		}
		catch(e){
			//
		}
	});
});

function actualizarSelectPaises(control){
	var url =  webRoot+"/paises/list";
	if(debugging)console.log(control.attr("id")+"|"+url);	
	$.ajax({
	url: url, 			
	type: "GET",             
     
	success: function(response){
		if (response != "ERROR") {
			var obj = JSON.parse(response);
			agregarOptionsPaises(obj,control);
		}
		
	},
	error: function(jqXHR, exception){
		if(debugging){console.log("error al listar paises");}
		ajaxError(jqXHR, exception);
	}
	});		
}
function actualizarSelectRegion(pais_id,control,ciudad_control){
	var url =  webRoot+"/regiones/list_json/"+pais_id;
	if(debugging)console.log(control.attr("id")+"|"+url);		
	$.ajax({
	url: url, 			
	type: "GET",             
     
	success: function(response){
		if (response != "ERROR") {
			var obj = JSON.parse(response);
			if(obj.length>0){
				agregarOptionsGeneral(obj,control);				
				control.parent().show();
			}
			else{
				control.parent().hide();
				control.val(0);
				actualizarSelectCiudad(pais_id,ciudad_control);
			}
		}
		
	},
	error: function(jqXHR, exception){
		if(debugging){console.log("error al listar paises");}
		ajaxError(jqXHR, exception);
	}
	});		
}
function actualizarSelectCiudad(padre_id,control){
	var url =  webRoot+"/ciudades/list_json/"+padre_id;
	if(debugging)console.log(control.attr("id")+"|"+url);	
	$.ajax({
	url: url, 			
	type: "GET",             
     
	success: function(response){
		if (response != "ERROR") {
			var obj = JSON.parse(response);
			if(obj.length>0)
				agregarOptionsGeneral(obj,control);				
		}
		
	},
	error: function(jqXHR, exception){
		if(debugging){console.log("error al listar paises");}
		ajaxError(jqXHR, exception);
	}
	});		
}

function agregarOptionsPaises(options,control){	
	var value = control.val();
	var lista= '<option value="">'+control.attr('title')+'</option>';		
	var i;
	for (i = 0; i < options.length; i++){
		lista+= '<option value='+options[i].pais_id+'>'+ options[i].nombre+'</option>';
	}	
	control.html(lista);
	control.val(value);
}
function agregarOptionsGeneral(options,control){			
	var value = control.val();
	var lista= '<option value="">'+control.attr('title')+'</option>';
	var i;
	for (i = 0; i < options.length; i++){
		lista+= '<option value='+options[i].id+'>'+ options[i].nombre+'</option>';
	}	
	control.html(lista);
	control.val(value);
}

function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}
