<?php
/* Smarty version 3.1.29, created on 2016-06-06 19:58:42
  from "/var/www/html/pruebas/obligatorio_php/vistas/cabezal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57560022e18513_62634715',
  'file_dependency' => 
  array (
    '91064d6ded96f463285942663e69fd5d77f9bc27' => 
    array (
      0 => '/var/www/html/pruebas/obligatorio_php/vistas/cabezal.tpl',
      1 => 1465253917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57560022e18513_62634715 ($_smarty_tpl) {
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
          <?php if ($_smarty_tpl->tpl_vars['usuario_logueado']->value) {?>
              <li><a href="#">Hola <?php echo $_smarty_tpl->tpl_vars['usuario_nombre']->value;?>
</a></li>
            <?php } else { ?>
              <li><a href="usuario/getLogin/">Iniciar sesión</a></li>
            <?php }?>
            
            <li><a href="usuario/nuevo/">Registrarse</a></li>
          </ul>
        </div>
      </div>
    </nav><?php }
}
