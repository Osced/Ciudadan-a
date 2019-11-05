<?php
use  App\Objects\Utilities;
$util = new Utilities();

if (!isset($img_width))
	$img_width =380 ;
if (!isset($img_id))
	$img_id = 'img_colectivo';

$img_height = 250;
$path = 'files/colectivos/' . $colectivo->colectivo_id . '_full.jpg';
$imagen_colectivo_src = '/' . $path;
if (!file_exists($path)){
		$imagen_colectivo_src ="/img/utilidades/colectivo.jpg";
}

echo $this->Html->css('pages/ver_colectivo' ,['block' => true]);
echo $this->Html->script('pages/ver_colectivo' ,['block' => true]);

echo $this->Html->css('utilidades/modal' ,['block' => true]);
echo $this->Html->script('utilidades/modal' ,['block' => true]);

?>
<?php
	if($usuario)
		echo $this->element('side_menu',['usuario'=>$usuario])
?>
<div id="editarColectivo_modal" class="modal">
	<?php	if($colectivo->esPropio)
			echo $this->element('forms/form_Colectivo',["colectivo"=>$colectivo,
																									"usuario"=>$usuario,
																									"tiposcolectivo"=>$tiposcolectivo,
																									"caracteres"=>$caracteres,
																									'accion' => 'editar',
																									'css_dots'=>'..',
																									'btn_close'=>true
														]);
	?>
</div>
<div id="denunciarColectivo_modal" class="modal">
	<?php
		/*if($usuario && !$colectivo->esPropio)
	  	echo $this->element('form_DenunciarColectivo',['colectivo'=> $colectivo,
	                                        	'usuario'=>$usuario,
	                                        	'btn_close'=>true,
	                                                        ]);
	*/?>
</div>
<div id="Main_container">
	<div id="top_frame">
		<?php if($colectivo->esPropio)
			echo '<div id="btn_editarColectivo" class="btn_editar_colectivo"></div>';
		?>
		<div class="row">
			<span>Colectivo</span>
		</div>
		<div id="colectivo_nombre" class="row">
			<span><?= $colectivo->nombre?></span>
		</div>
		<div class="div_fecha">
			<?php	if($colectivo->created){
				$fecha = $colectivo->created->day.' '.  mb_strtoupper($util->monthName($colectivo->created->month)).'  '.$colectivo->created->year;
				echo $fecha;
			}
			?>
		</div>
		<hr>
		<div id= "colectivo_icons" >
			<div id="icono_iniciativas_colectivo" class="icono_colectivo"></div>
			<div id="numero_iniciativas_<?=$colectivo->colectivo_id?>" class="dato_colectivo"><?=count($colectivo->iniciativas)?> </div>
		</div>
	</div>
	<div id="middle_frame" class="row">
		<div id="div_img_colectivo">
			<?=$this->Html->image($imagen_colectivo_src, ['id' => $img_id, 'width' => $img_width, 'height' => $img_height])?>
			<div id= "main_colectivo_icons" >
				<!-------------------  otras  opciones:    --------------->
				<?php	if($usuario){
						echo
							'<div id="btn_opciones" class="">&#8226; &#8226; &#8226;
								<div id="otrasOpciones">';

						if (!$colectivo->esPropio) {
							echo
								'<div id="btn_denunciar" class="icono_colectivo otrasOpciones">
										<div>Denunciar</div>
								</div>';
						}
						else{
							echo
								'<div id="btn_eliminar" class="icono_colectivo otrasOpciones">
										<div>Eliminar</div>
								</div>';
						}
						echo '</div>
							</div>';
					}
				?>
			</div>
			<hr>
			<!-------------------   Asociado a:             --------------->
			<!------------------------------------------------------------->
			<div class="bold_font">Asociado a:</div>
			<?php	foreach ($colectivo->usuarios as $u) {
						echo '<div class="row_btn">'
								.'<div id="btn_usuario_'.$u->usuario_id.'" class="btn btn_usuario" onclick="javascript:;">'
									.$this->element('usuario_imagen',['usuario' => $u,
																		'img_id'=>'foto_usuarioAsociado'])
								.'</div>'
								.'<div id="nombre_usuarioAsociado">'
									.'<span>'.$u->nombres.' </span>'
										.(($usuario)?'<span> '.$u->apellidos.'</span>':'')
								.'</div>'
							.'</div>';
					}
			?>
			<hr>
			<!-------------------  La iniciativa necesita:  --------------->
			<!------------------------------------------------------------->
			<div id="div_iniciativas_colectivo">
				<script>
					function verIniciativa(iniciativa_id){
						window.open(webRoot+"/iniciativas/ver/"+iniciativa_id,"_blank");
					}
				</script>
				<label class="bold_font">Iniciativas:</label>
				<?php	foreach ($colectivo->iniciativas as $iniciativa) {
							echo '<div class="btn row" onclick="javascript:verIniciativa('.$iniciativa->iniciativa_id.');">'.$iniciativa->nombre.'</div>';
						}
				?>
			</div>
			<!--<div id="btn_colaborar">Deseo unirme</div>-->
			<hr>
		</div>
		<div id="panel_derecho">
			<!-------------------      descripcion          --------------->
			<!------------------------------------------------------------->
			<div id="descripcion">
				<br><br>
				<div id="descripcion_content"><?=$colectivo->descripcion?></div>
				<br><br>
			</div>
		</div>
	</div>
</div>
