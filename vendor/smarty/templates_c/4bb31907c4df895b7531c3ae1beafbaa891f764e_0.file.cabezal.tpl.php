<?php
/* Smarty version 3.1.29, created on 2016-07-09 22:38:40
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/cabezal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578160d0cd1b70_14643480',
  'file_dependency' => 
  array (
    '4bb31907c4df895b7531c3ae1beafbaa891f764e' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/cabezal.tpl',
      1 => 1468096715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578160d0cd1b70_14643480 ($_smarty_tpl) {
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
              <li><a href="usuario/my_profile/">Hola, <?php echo $_smarty_tpl->tpl_vars['usuario_nick']->value;?>
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
