
<?php
		echo'<div id="invitado_'.$usuario->usuario_id.'" class="div_invitado">
					<div class="invitado_nombre">'.$usuario->nombres.' '.$usuario->apellidos.' </div>
					<div class="eliminar_invitacion btn_eliminar">';
						//Formulario para elminiardar a un miembro del colectivo
						echo $this->Form->create('Colectivo', ['class' => 'eliminarMiembroForm','url'=>'/colectivos/gestion','type' => 'hidden']);
						echo $this->Form->control('colectivo_id',['type' => 'hidden', 'value'=> $colectivo->colectivo_id]);
						echo $this->Form->control('usuario_id',['type' => 'hidden', 'value'=> $usuario->usuario_id]);
						echo $this->Form->control('accion',['type' => 'hidden', 'value'=> 0]);
						echo $this->Form->end();
					echo '</div>';
		echo '</div>';
	?>
	<?php
	if(isset($ajax) && $ajax){
		echo'
			<script>
			$("#invitado_'.$usuario->usuario_id.' .btn_eliminar").click(function() {
				if(!$(this).hasClass("btn_disable")){
						submitEliminarMiembro($(this));
				}
			});
		 </script>';
 		}
	 ?>
