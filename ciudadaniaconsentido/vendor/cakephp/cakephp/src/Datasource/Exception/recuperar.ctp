<?php
	echo $this->Html->css('pages/recuperar' ,['block' => true]);
	echo $this->Html->css('utilidades/modal',['block' => true]);

	echo $this->Html->script('pages/recuperar',['block' => true]);
	echo $this->Html->script('utilidades/validadores',['block' => true]);	
	echo $this->Html->script('utilidades/debugger',['block' => true]);	
	echo $this->Html->script('utilidades/modal' ,['block' => true]);		
	
	$this->assign('title', $title);
?>
		
<div id="contenido" >
	<?= $this->Form->control('codigo_pass',['id'=> 'codigo_pass', 'type' => 'hidden', 'value'=> $codigo])?>
	<?= $this->Form->control('mensaje_pass',['id'=> 'mensaje_pass', 'type' => 'hidden', 'value'=> $mensaje])?>
	 
	 <div id="recuperacion_modal" class="modal"> 
		<?= $this->element('form_recuperacion',['btn_close'=>false])?>
	</div>
</div>
  