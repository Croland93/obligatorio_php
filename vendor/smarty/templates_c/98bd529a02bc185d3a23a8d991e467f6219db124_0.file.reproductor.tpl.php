<?php
/* Smarty version 3.1.29, created on 2016-06-12 22:19:40
  from "E:\wamp64\www\obligatorio_php\vistas\reproductor.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575ddffc9efa87_57354307',
  'file_dependency' => 
  array (
    '98bd529a02bc185d3a23a8d991e467f6219db124' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\reproductor.tpl',
      1 => 1465769976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575ddffc9efa87_57354307 ($_smarty_tpl) {
?>

<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
<link href="css/repro.css" rel="stylesheet">


<div id="barra">

	<input type="range" value="" id="progreso">




	<div id="controles">


		<i class="fa fa-step-backward fa-3x" aria-hidden="true"></i>


		<i id="boton-play" class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i>


		<i class="fa fa-step-forward fa-3x" aria-hidden="true"></i>

		<!-- <i class="fa fa-pause-circle-o fa-3x" style="color:white; padding-right: 15px;" aria-hidden="true"></i> -->

	</div>


		<div id="ctrl_volumen">


			<i class="fa fa-volume-up fa-2x" aria-hidden="true"></i>


		</div>


	<span id="current-time" "></span>

	<span id="duration"></span>


</div>


<?php }
}
