<?php
/* Smarty version 3.1.29, created on 2016-05-15 22:54:08
  from "C:\wamp\www\obligatorio_php\vistas\cabezal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5738fe10423628_08405782',
  'file_dependency' => 
  array (
    'fbbdfffb8a121dcd8fa7258a3d7845ae0aa26596' => 
    array (
      0 => 'C:\\wamp\\www\\obligatorio_php\\vistas\\cabezal.tpl',
      1 => 1463352772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5738fe10423628_08405782 ($_smarty_tpl) {
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Iniciar sesión</a></li>
            <li><a href="usuario/nuevo/">Registrarse</a></li>
          </ul>
        </div>
      </div>
    </nav><?php }
}
