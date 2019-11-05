
<?php
echo $this->Html->script('elements/colectivo_mini');

if(isset($colectivos)){
 foreach($colectivos as $colectivo){
	if(!$colectivo->eliminado)
		if($colectivo->esMiembro)
			echo $this->element('colectivo_mini',["colectivo"=>$colectivo]);
 }
}
?>

