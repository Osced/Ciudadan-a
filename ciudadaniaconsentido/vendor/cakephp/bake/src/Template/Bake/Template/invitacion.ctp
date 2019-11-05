<?php
	echo $this->Html->css('common/forms',['block' => true]);
	echo $this->Html->script('common/forms',['block' => true]);

	echo $this->Html->css('utilidades/modal',['block' => true]);
	echo $this->Html->css('pages/invitacion',['block' => true]);

echo $this->Html->script('utilidades/validadores',['block' => true]);
	echo $this->Html->css('utilidades/validadores',['block' => true]);

	echo $this->Html->script('utilidades/debugger',['block' => true]);
?>

<div id="invitacion_container">
<?php
if(!$usuario){
	echo '<script type="text/javascript">
				document.addEventListener("successLogin", successLogin, false);
				function successLogin(){
					window.location.reload();
			}
		</script>';
	echo '<div id="login_modal" class="modal">'
		.$this->element('form_login',['btn_close'=>false]).
	'</div>';
}
else if($colectivo){
	echo $this->element('form_invitacionColectivo',['colectivo'=>$colectivo,'btn_close'=>false]);
}
else{
	echo '<div class= "w3-center form_container">
			<div class = "logo" >'.$this->Html->image('logo_home_ciudadania.png').'</div>
			<div id="sinInvitacion"> La invitacion no existe o ya fue revocada <div>
		</div>';

}

?>
</div>
