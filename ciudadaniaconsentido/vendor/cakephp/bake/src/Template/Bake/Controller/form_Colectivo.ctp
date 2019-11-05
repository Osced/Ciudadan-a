<?php
	echo $this->Html->css('common/forms',['block' => true]);
	echo $this->Html->script('common/forms',['block' => false]);

	echo $this->Html->script('utilidades/validadores',['block' => true]);
	echo $this->Html->css('utilidades/validadores',['block' => true]);

	echo $this->Html->css('elements/forms/form_colectivo',['block' => true]);
	echo $this->Html->script('core/colectivo',['block' => true]);
	
	echo $this->Html->script('utilidades/debugger',['block' => true]);
?>

<div id="editarColectivo_container" class= "w3-center form_container colectivo_container">
	<?php if($btn_close){
		echo '<div  class="form_close"></div>';
	}?>
	<div id="div_datosEditarColectivo" class= " form_slide" name="slide_1">
		<?php echo $this->Form->create('Colectivo', [	'id' => $accion.'ColectivoForm',
																									'url'=>'/colectivos/'.$accion,
																									'class'=>'colectivoForm',
																									'accion' => $accion]); ?>
		<?= $this->Form->control('colectivo_id',['type' => 'hidden', 'value'=> ($colectivo)?$colectivo->colectivo_id:''])?>
		<div class="form_data">
			<div class="input_container w3-center">
				<div class ="form_label">
					<label>Nombre del Colectivo</label>
				</div>
				<?= $this->Form->control('nombre',[ 'label'=>false ,
													'div' => false,
													'id'=>$accion.'_nombreColectivo',
													'class'=>'form_input nombreColectivo',
													'maxlength' => 50,
													'value' => ($colectivo)?$colectivo->nombre:''
													])
				?>
			</div>
			<div class="input_container w3-center">
				<div class ="form_label">Tipo de colectivo</div>
				<?php
				echo $this->Form->control('colectivo_tipo_id',['options'=> $tiposcolectivo,
													'id' => $accion.'_colectivoTipoId',
													'div' => false ,
													'label' => false,
													'title'=> 'Tipo de colectivo',
													'empty' => 'Seleccione...',
													'value' => ($colectivo)?$colectivo->colectivo_tipo_id:'',
													'class'	=> 'select-css minimal input_select colectivoTipoId'
													]);
				?>
			</div>
			<div class="input_container w3-center">
				<div class ="form_label">Carácter del colectivo</div>
				<?php
				echo $this->Form->control('caracter_id',['options'=> $caracteres,
													'id' => $accion.'_colectivoCaracterId',
													'div' => false ,
													'label' => false,
													'title'=> 'Carácter del Colectivo ',
													'empty' => 'Seleccione...',
													'value' => ($colectivo)?$colectivo->caracter_id:'',
													'class'	=> 'select-css minimal input_select colectivoCaracterId'
													]);
				?>
			</div>

			<div id="" class="btn_icon">
				<div id="" class="btn_imagenColectivo btn" img_file="<?=$accion?>_file_imgColectivo" >
					Elegir imagen de portada
					<div id ="icon_imagenPortada" class=""></div>
					<?php echo $this->Form->control('imagen',['id' => $accion.'_file_imgColectivo' ,
															'type'	=> 'file',
															'accept' => 'image/*',
															'label'	=> false,
															'style'	=> 'display:none']);
					?>
				</div>
			</div>

			<div class="input_container w3-center">
				<div class ="form_label">Descripción</div>
					<?= $this->Form->control('descripcion',['label'=>false ,
															'div' => false,
															'type' => 'textarea',
															'id'=>$accion.'_descripcionColectivo',
															'title'=> '',
															'value'=> ($colectivo)?$colectivo->descripcion:'',
															'class'=>'form_input descripcionColectivo',
															'autocomplete'=> 'off'
															])
					?>
			</div>

			<br>
		</div>
		<div id="" class="form_btn Form_btnAjust app_footer <?=($accion=="crear")?'btn_submitForm':'btn_Siguiente'?>">
			Siguiente
		</div>
		<?= $this->Form->end()?>
	</div>
	<div id="div_editarVincularPersonas" class= "form_slide hide" name="slide_2">
		<?php
		if($colectivo)
		echo '<div id="btn_backSlide" class="btn_back" onclick="javascript:;"> &#8249;</div>';
		?>
		<div class="form_data">
			<?php echo $this->Form->create('Colectivo', ['url'=>'/colectivos/invitar','onsubmit'=>"return false;"]); ?>
			<?= $this->Form->control('colectivo_id',['class'=>'invitar_colectivo_id','type' => 'hidden', 'value'=>($colectivo)?$colectivo->colectivo_id:''])?>
			<div id="div_correo" class="input_container w3-center">
				<?= $this->Form->control('correo',['label'=>false ,
												'div' => false,
												'title'=> 'Correo electrónico',
												'class'=>'form_input float_input correoInvitar',
												'validate'=>false,
												'maxlength' => 60,
												'autocomplete'=> 'off'
											]) ?>
				<div class="wrong validatorIcon">
					<span  class="tooltiptext">Tooltip text</span>
				</div>
				<div class="check validatorIcon"></div>
			</div>
			<div id="div_btn_invitarEditarColectivo" class="btn_icon">
				<div id="btn_invitarColectivo" class="btn_invitar btn" check_field="correo_usuariosColectivo">
					Enviar Invitación
					<div class ="icon_invitar" ></div>
				</div>
			</div>
			<?=$this->Form->end()?>
			<div class="div_usuariosColectivo">
			<div id="div_invitados" class="div_invitadosColectivo">
				<span>Invitados</span>
				<hr>
				<div id="invitadosEditar_container" class="invitados_container">
				<?php
				if($colectivo){
					foreach ($colectivo->usuarios as $usuario) {
						if($usuario->_joinData->colectivo_rol_id ==4){
							echo $this->element('forms/form_eliminarMiembro',['usuario'=>$usuario,'colectivo'=>$colectivo]);
						}
					}
				}
				?>
				</div>
			</div>
			<div id="div_MiembrosEditar" class="div_Miembros">
				<span>Miembros</span>
				<hr>
				<div id="miembrosEditar_container" class="miembros_container">
				<?php
				if($colectivo){
					foreach ($colectivo->usuarios as $usuario) {
						if($usuario->_joinData->colectivo_rol_id <=3 && $usuario->_joinData->colectivo_rol_id >1){
							echo'<div id="miembro_'.$usuario->usuario_id.'" class="div_invitado">
									<div class="invitado_nombre">'.$usuario->nombres.''.$usuario->apellidos.' </div>';
							if($usuario->_joinData->colectivo_rol_id ==3){
								$accion = 2;
								$class='btn_promover';
							}
							else{
								$accion = 3;
								$class='btn_degradar';
							}
								echo '<div id="btn_gestionarMiembro" class="'.$class.'">';
								//Formulario para promover o degradar a un miembro del colectivo
								echo $this->Form->create('Colectivo', ['class' => 'gestionarMiembroForm_'.$usuario->usuario_id,'url'=>'/colectivos/gestion','type' => 'hidden']);
								echo $this->Form->control('colectivo_id',['type' => 'hidden', 'value'=> $colectivo->colectivo_id]);
								echo $this->Form->control('usuario_id',['type' => 'hidden', 'value'=> $usuario->usuario_id]);
								echo $this->Form->control('accion',['class'=>'accion_gestion','type' => 'hidden', 'value'=> $accion]);
								echo $this->Form->end();
								echo '</div>';
								echo '<div class="eliminar_miembro btn_eliminar">';
									//Formulario para elminiardar a un miembro del colectivo
									echo $this->Form->create('Colectivo', ['class' => 'eliminarMiembroForm','url'=>'/colectivos/gestion','type' => 'hidden']);
									echo $this->Form->control('colectivo_id',['type' => 'hidden', 'value'=> $colectivo->colectivo_id]);
									echo $this->Form->control('usuario_id',['type' => 'hidden', 'value'=> $usuario->usuario_id]);
									echo $this->Form->control('accion',['type' => 'hidden', 'value'=> 0]);
									echo $this->Form->end();
								echo '</div>';
							echo '</div>';
						}
					}
				}
				?>
				</div>
			</div>
			</div>
		</div>
		<div id="" class="form_btn Form_btnAjust app_footer <?=($accion=="crear")?'btn_finalizar':'btn_submitForm'?>" >
				Finalizar
		</div>
	</div>
</div>
