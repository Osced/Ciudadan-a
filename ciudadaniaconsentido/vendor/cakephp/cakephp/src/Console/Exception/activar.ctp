<?php
	echo $this->Html->css('pages/activar' ,['block' => true]);
	echo $this->Html->css('utilidades/modal',['block' => true]);

	echo $this->Html->script('pages/activar' ,['block' => true]);
	echo $this->Html->script('utilidades/validadores' ,['block' => true]);	
	echo $this->Html->script('utilidades/debugger.js' ,['block' => true]);
	echo $this->Html->script('utilidades/modal' ,['block' => true]);	
	
	$this->assign('title', $title);
?>
		
<div id="contenido" >
	<?= $this->Form->control('codigo_pass',['id'=> 'codigo_pass_activacion', 'type' => 'hidden', 'value'=> $codigo])?>
	<?= $this->Form->control('mensaje_pass',['id'=> 'mensaje_pass_activacion', 'type' => 'hidden', 'value'=> $mensaje])?>
	<div id="activacion_modal" class="modal">
		<?= $this->element('form_activacion',['btn_close'=>false])?>
	</div>

</div>
  