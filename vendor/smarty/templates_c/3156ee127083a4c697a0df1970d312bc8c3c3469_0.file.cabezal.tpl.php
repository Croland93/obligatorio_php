<?php
/* Smarty version 3.1.29, created on 2016-05-28 21:55:59
  from "E:\wamp64\www\obligatorio_php\vistas\cabezal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574a13ef675543_25565748',
  'file_dependency' => 
  array (
    '3156ee127083a4c697a0df1970d312bc8c3c3469' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\cabezal.tpl',
      1 => 1464467251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574a13ef675543_25565748 ($_smarty_tpl) {
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
          <!--<a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>-->
          <a href="index/home/"><img src="../obligatorio_php/public/media/logo-jukebox-miniatura-2.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="usuario/login/">Iniciar sesión</a></li>
            <li><a href="usuario/nuevo/">Registrarse</a></li>
          </ul>
        </div>
      </div>
    </nav><?php }
}
