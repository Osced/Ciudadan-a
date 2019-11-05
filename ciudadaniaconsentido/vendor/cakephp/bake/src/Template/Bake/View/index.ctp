<?php
// Las siguientes líneas permiten utilizar el "code completion" de netbeans con los helpers y la vista
/* @var $this View */


echo $this->Html->css('pages/formate',['inline' => false]);
echo $this->Html->script('pages/formate',['inline' => false]);



?>
<?php
	if($usuario)
		echo $this->element('side_menu',['usuario'=>$usuario])
?>

<div id="top_frame">
		<div id="titulo_formate" class="row">
			FORMÁTE
		</div>
		<hr>
		<span></span>
	</div>
<div id="columna_centro">

	<div id="cursos_container"></div>
</div>

<div style="height: 300px; text-align: center; padding-top: 170px;">
</div>
