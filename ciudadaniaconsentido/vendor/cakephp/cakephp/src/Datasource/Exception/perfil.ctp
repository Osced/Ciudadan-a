<div id="perfil_id" style="display: none;"><?=$usuario->usuario_id?></div>
<?php
	echo $this->Html->css('common/forms' ,['block' => true]);

	echo $this->Html->css('pages/perfil' ,['block' => true]);
	echo $this->Html->script('pages/perfil' ,['block' => true]);

	echo $this->Html->css('utilidades/modal' ,['block' => true]);
	echo $this->Html->script('utilidades/modal' ,['block' => true]);

	echo $this->Html->script('https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js' ,['block' => true]);


?>

<?php
	$desc=$usuario->descripcion;
	$exist = $desc;
	$title = 'Cuentános un poco sobre ti, quién eres,qué te motiva. cúales son tus intéreses...';
	if(!$exist && $propietario)
		$desc=$title;

?>

<div id="contenido" >
	<div id="editarPerfil_modal" class="modal">
		<?php
			if($propietario)
				echo $this->element('form_edicionPerfil',["usuario"=>$usuario,'btn_close'=>true]);
		?>
	</div>
	<div id="crearIniciativa_modal" class="modal">
		<?php
			if($propietario)
				echo $this->element('form_crearIniciativa',["usuario"=>$usuario,
															"temas"=>$lista_temas,
															"necesidades"=>$lista_necesidades,
															"quienes"=>$lista_quienes,
															'css_dots'=>'..',
															'btn_close'=>true
															]);
		?>
	</div>
	<div id="editarIniciativa_modal" class="modal">

	</div>
	<div id="crearColectivo_modal" class="modal">
		<?php
			if($propietario)
				echo $this->element('forms/form_Colectivo',['colectivo'=>null,
															'usuario'=>$usuario,
															'tiposcolectivo'=>$tiposcolectivo,
															'caracteres'=>$caracteres,
															'accion'=>'crear',
															'css_dots'=>'..',
															'btn_close'=>true
															]);
		?>
	</div>
	<div id="editarColectivo_modal" class="modal">

	</div>
	<div id ="Main_container">
				<div id="div_foto_perfil" class="w3-center float_left">
					<?=$this->element('usuario_imagen',[	'usuario' => $usuario,
														'img_id'=>'foto_perfil'])
					?>
				</div>
				<div id="div_nombre_perfil">
					<table>
						<tr>
							<td>
								<span id="nombre_perfil" class="float_left" onclick="javascript:;">
									<?=$usuario->nombres ?>
									<?php if($auth_user) echo $usuario->apellidos; ?>
								</span>
							</td>
							<td>
								<?php if($propietario)
									echo '<div id="btn_editar_perfil" class="btn"></div>';
								?>
							</td>
						</tr>
					</table>
				</div>
				<div id="menu_iniciativas_perfil" class="" >
					<div id="btn_propias_perfil" class=<?php echo'"btn_perfil '.'"';?>>
						<div id="icono_btn_creadas_perfil" class="icon_btn_perfil "></div>
						<span>Iniciativas</span>
					</div>
					<div id="btn_colectivos_perfil" class="btn_perfil">
						<div id="icono_btn_colaboracion_perfil" class="icon_btn_perfil"></div>
						Colectivos
					</div>
					<div id="btn_megusta_perfil" class="btn_perfil"  >
						<div id="icono_btn_megusta_perfil" class="icon_btn_perfil"></div>
						Siguiendo
					</div>
				</div>
				<div id="div_descripcion" style="display:<?php if($exist||!$propietario)echo'none';?>;">
					<div id="btn_editarDescripcion" style="display:<?php if(!$exist || !$propietario)echo'none';?>;" onclick="javascript:;"></div>
					<?=$this->Form->create('descripcion', ['id' =>'UsuarioDescripcionForm','url'=>'/usuarios/editar'])?>
					<div id="descripcion_field">
					<?= $this->Form->control('usuario_id',['type' => 'hidden', 'value'=> $usuario->usuario_id])?>
					<textarea id="descripcion_input" name="descripcion"type="text"  <?php if($exist || !$propietario)echo'disabled';?>
					title=<?='"'.$title.'"'?> > <?=$desc?></textarea>
					</div>
					<?=$this->Form->end()?>
					<div id="btn_compartirDescripcion" class="form_btn" style="display:<?php if($exist||!$propietario)echo'none';?>;" onclick="javascript:;">
						Compartir
					</div>
				</div>
				<div id=iniciativas_container  style="display:<?php if(!$exist||!$propietario)echo'none';?>;" >
					<hr id="separador_iniciativas">
					<?php
						if($propietario){
							echo
							'<label id="crearIniciativa">
								Crear Iniciativa
								<div id ="btn_crearIniciativa" class="btn_crear"></div>
							</label>
							<label id="crearColectivo" class="hide">
								Crear Colectivo
								<div id ="btn_crearColectivo" class="btn_crear"></div>
							</label>';
						}
					?>
					<div id="div_iniciativas">
					</div>
				</div>
	</div>
</div>
