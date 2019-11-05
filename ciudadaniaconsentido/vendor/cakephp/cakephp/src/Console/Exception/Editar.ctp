<?php
	echo $this->Html->css('general');
	
	echo $this->Html->css('pages/registrar',['block' => true]);	
	echo $this->Html->script('pages/registrar' ,['block' => true]);	
	
	$this->assign('title', $title);
?>
		
<div id="contenido" >
	<div id="editarPerfil_modal">
		<?= $this->element('form_editarPerfil',["usuario"=>$usuario])?>
	</div>
</div>
  