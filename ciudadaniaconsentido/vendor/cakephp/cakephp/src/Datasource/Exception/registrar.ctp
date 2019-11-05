<?php
	echo $this->Html->css('general');
	
	echo $this->Html->css('pages/registrar',['block' => true]);	
	echo $this->Html->css('utilidades/modal',['block' => true]);	
	echo $this->Html->script('pages/registrar' ,['block' => true]);

	
	$this->assign('title', $title);
?>
		
<div id="contenido" >
	<div id="registro_modal" class="modal">
		<?= $this->element('form_registro',['temas'=>$lista_temas,'btn_close'=>false,'css_dots'=>'..'])?>
	</div>
</div>
  