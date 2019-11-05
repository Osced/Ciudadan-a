<?php
	echo $this->Html->css('plugins/jqcloud.min.css',['block' => true]);
	echo $this->Html->script('plugins/jqcloud.min.js',['block' => true]);

	echo $this->Html->css('pages/home',['block' => true]);
	echo $this->Html->css('common/forms',['block' => true]);

	echo $this->Html->script('pages/home',['block' => true]);
	echo $this->Html->script('core/login',['block' => true]);





	$this->assign('title', $title);
?>

<meta property="og:image"  content="<?=$this->Url->build(['controller' => 'img','action' => "logo_home_ciudadania.png"])?>"/>
<?php
	if($sesion_iniciada)
		echo $this->element('side_menu',['usuario'=>$usuario])
?>

<div id="contenido" >
	<div id="recuperacion_modal" class="modal">
       <?= $this->element('form_recuperacion',['btn_close'=>true])?>
	</div>
	<div id="registro_modal" class="modal">
		 <?= $this->element('form_registro',['temas'=>$lista_temas,'btn_close'=>true])?>
	</div>
	<div id="activacion_modal" class="modal">
		<?= $this->element('form_activacion',['btn_close'=>true])?>
	</div>
	<div  id="Main_container">
		<div id="left_container" <?php if($sesion_iniciada)echo'class="row"';?>; >
			<div id="frame_1" class="w3-center" style="<?php if($sesion_iniciada)echo'display:none';?>;" >
				<div id="content_1">
					<h5>COMPARTE iniciativas ciudadanas,</h5>
					<h5>CONÉCTATE con el mundo y FORMATE para</h5>
					<h5>la construcción de ciudadanía</h5>
					<div id="btn_vermas" class="form_btn"> Ver más</div>
				</div>
			</div>
			<div id="frame_1_logged" class="w3-center" style="<?php if(!$sesion_iniciada)echo'display:none';?>;">
				<div id="content_extra">
					<div id="V_sdeparator"></div>
				</div>
				<div id="content_1" class="content_logged">
					<h5>COMPARTE iniciativas ciudadanas,</h5>
					<h5>CONÉCTATE con el mundo y FORMATE para</h5>
					<h5>la construcción de ciudadanía</h5>
					<div id="btn_vermas" class="form_btn"> Ver más</div>
				</div>
			</div>
			<div id="frame_2" class="hide-medium frame_2">
				<div id="iniciativas_container">
					<span class="title">INICIATIVAS</span>
					<span class="title">CIUDADANAS</span>
					<hr>
					<div class="iniciativas_destacadas"></div>
				</div>
				<div class="vl"></div>
				<div id="tagCloud_container">
					<span class="title">PALABRAS EN</span>
					<span class="title">CÓDIGO CIUDADANO</span>
					<hr>
						<div id="keywords" class="keywords"></div>
				</div>
				<div id="terminos">
					<span>© Ciudadania con Sentido es una iniciativa del Grupo de Investigación en Educación en Ambientes Virtuales de la Universidad Pontificia Bolivariana y de la Corporación Región, que busca promover la vinculación social y comunitaria
					</span>
					</div>
				</div>
		</div>
		<div id="right_container" style="display:<?php if($sesion_iniciada)echo'none';?>;" >
			<div id="Login_Container" class= "w3-center form_container" >
				<div class = "logo" ><?php echo $this->Html->image('logo_home_ciudadania.png'); ?></div>
				<h6>Promueve la socialización de iniciativas</h6>
				<h6>ciudadanas para la convivencia pacifica y la</h6>
				<h6>construccion de cultura de paz</h6>
				<br>
				<?php echo $this->Form->create('Login', ['id' => 'UsuarioLoginForm','url'=>'/usuarios/login']); ?>
				<div class="input_container w3-center">
					<?= $this->Form->control('correo',['label'=>false ,
														'div' => false,
														'id'=>'usuario_username',
														'title'=> 'Correo electrónico',
														'value'=>'Correo electrónico',
														'class'=>'form_input'
														])?>
				</div>
				<div class="input_container w3-center">
					<?= $this->Form->control('password',['label'=>false,
														'div' => false,
														'id'=>'usuario_password',
														'style'=>'display:none;',
														'class'=>'form_input',
														'autocomplete'=> 'off'
														]) ?>
					<input type="text" id="usuario_FakePassword" class="FakePassword form_input" title="contraseña"  value="Contraseña" autocomplete="off" />
				</div>
				<br>
				<div id="btn_iniciar_sesion" class="form_btn"  onclick="javascript:;" tabindex="3" > Iniciar sesión</div>
				<?= $this->Form->end() ?>
				<br>
				<br>
				<br>
				<h5>¿no tienes cuenta? <a id="btn_irARegistro" class="btn"  href="javascript:;">Regístrate</a></h5>
				<h5><a id="btn_OlvidoContraseña" href="javascript:;" >¿Olvidaste tu contraseña?</a></h5>
				<br>
			</div>
		</div>
		<div id="frame_2_mobile" class="hide-large frame_2">
			<div id="iniciativas_container">
					<span class="title">INICIATIVAS</span>
					<span class="title">CIUDADANAS</span>
					<hr>
					<div class="iniciativas_destacadas"></div>
				</div>
				<div class="vl"></div>
				<div id="tagCloud_container">
					<span class="title">PALABRAS EN</span>
					<span class="title">CÓDIGO CIUDADANO</span>
					<hr>
						<div id="keywords2" class="keywords"></div>
				</div>
				<div id="terminos">
					<span>© Ciudadania con Sentido es una iniciativa del Grupo de Investigación en Educación en Ambientes Virtuales de la Universidad Pontificia Bolivariana y de la Corporación Región, que busca promover la vinculación social y comunitaria
					</span>
					</div>
				</div>
			</div>
	</div>

</div>
