<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>
        <?= $this->fetch('title') ?>
    </title>
		<?php
		echo $this->fetch('meta');
		
		echo $this->Html->css('general');
		echo $this->Html->css('layout/default');
		echo $this->Html->css('utilidades/w3');
		echo $this->fetch('css');
		
		echo $this->Html->script('jquery/jquery-3.3.1.min');
		echo $this->Html->script('default');
		echo $this->Html->script('utilidades/debugger.js');
		echo $this->fetch('script');


		
		?>
</head>
<body>
    <nav id ="top-bar" class="top-bar expanded MainContent" data-topbar role="navigation">
      <div id="btn_abrirSideMenu" class="btn_sideMenu">
      		<hr>
      		<hr>
      	</div>
      	<div id="btn_cerrarSideMenu" class="btn_sideMenu hide">
      		&#10005
      	</div>
       <div id="logo_top"><?php echo $this->Html->image('logo_banner.png'); ?></div>
	   <div id="Menu">
	   		<a id="menu_perfil" class="menu_item link_perfil" >Perfil</a>
			<a id="menu_iniciativas" class="menu_item link_iniciativas" >Iniciativas</a>
			<a id="menu_formate" class="menu_item link_formate">Formáte</a>
			<a id="menu_conectate" class="menu_item link_conectate" href="" >Conéctate</a>
			<!--<div id="div_buscar" class= "menu_item" >
				
				<?= $this->Form->control('buscar',[ 'label'=>false ,
													'div' => false,
													'id'=>'buscar_field',
													'title'=> 'Buscar...', 
													'value'=> 'Buscar...' ,
													]) ?>
				<?=	$this->Html->image('icons/icono_lupa.png')?>
			</div>-->
	   </div>
    </nav>
    <div id="sideMenu" class="side_menu hide" >
			 <a  class="side_button link_perfil" >Perfil</a>
			 <hr>
			 <a  class="side_button link_iniciativas">Iniciativas</a>
			 <hr>
			 <a  class="side_button link_formate">Formáte</a>
			 <hr>
			 <a  class="side_button link_conectate">Conéctate</a>
			</div>

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
