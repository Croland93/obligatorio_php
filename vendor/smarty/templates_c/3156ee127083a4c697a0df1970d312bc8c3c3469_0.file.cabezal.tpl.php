<?php
/* Smarty version 3.1.29, created on 2016-06-14 01:17:02
  from "E:\wamp64\www\obligatorio_php\vistas\cabezal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f5b0e88b302_77412844',
  'file_dependency' => 
  array (
    '3156ee127083a4c697a0df1970d312bc8c3c3469' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\cabezal.tpl',
      1 => 1465866927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575f5b0e88b302_77412844 ($_smarty_tpl) {
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
          <?php if ($_smarty_tpl->tpl_vars['usuario_logueado']->value) {?>
              <li><a href="usuario/perfil/">Hola, <?php echo $_smarty_tpl->tpl_vars['usuario_nick']->value;?>
!</a></li>
              <li><a href="usuario/logout/">Cerrar sesión</a></li>
            <?php } else { ?>
              <li><a href="usuario/getLogin/">Iniciar sesión</a></li>
              <li><a href="usuario/nuevo/">Registrarse</a></li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav><?php }
}
