<?php
/* Smarty version 3.1.29, created on 2016-06-18 20:59:32
  from "E:\wamp64\www\obligatorio_php\vistas\reproductor.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5765b6340f5601_58940242',
  'file_dependency' => 
  array (
    '98bd529a02bc185d3a23a8d991e467f6219db124' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\reproductor.tpl',
      1 => 1466283546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5765b6340f5601_58940242 ($_smarty_tpl) {
?>

<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
<link href="css/nuevo.css" rel="stylesheet">


<div id="barra">

    <input type="range" value="" id="progreso">




    <div id="controles">


        <i id="boton-anterior" class="fa fa-step-backward fa-3x" aria-hidden="true"></i>


        <i id="boton-play" class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i>


        <i id="boton-siguiente" class="fa fa-step-forward fa-3x" aria-hidden="true"></i>

        <!-- <i class="fa fa-pause-circle-o fa-3x" style="color:white; padding-right: 15px;" aria-hidden="true"></i> -->

    </div>


    <div id="ctrl_volumen">


        <i class="fa fa-volume-up fa-2x" aria-hidden="true"></i>
        <!-- <input id="volume-rango" type="range" value=""> -->

    </div>


  
        
<input id="volume-rango" type="range" value="">

  


    <span id="current-time" "></span>
    <span id="duration"></span>


</div>
<?php }
}
