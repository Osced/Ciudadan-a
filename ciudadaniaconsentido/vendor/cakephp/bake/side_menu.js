

$(function() {

	$('#btn_irAPerfil').click(function() {
		window.location = webRoot+"/usuarios/perfil";
	});
	$('#btn_sideMenu').click(function() {
		$(this).hide();
		$("#sideMenu_container").toggle( "slide" );
	});
	$('#btn_closeSideMenu').click(function() {
		$("#sideMenu_container").toggle( "slide" );
		$('#btn_sideMenu').show();
	});

	$('#btn_logout').click(function() {
		window.location = webRoot+"/usuarios/logout";
	});

	$('#btn_megusta_perfil').click(function() {
		window.location = webRoot+'/usuarios/perfil?menu=megusta';
	});
	$('#btn_creadas_perfil').click(function() {
		window.location = webRoot+'/usuarios/perfil?menu=propias';
	});
	$('#btn_colaboracion_perfil').click(function() {
		window.location = webRoot+'/usuarios/perfil?menu=colectivos';
	});




});
