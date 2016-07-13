<?php
/* Smarty version 3.1.29, created on 2016-07-12 22:58:36
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-seguidores.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578559fc594468_41307527',
  'file_dependency' => 
  array (
    '368acbc5308b71c64f3fd001f25d0ac632bb6eb1' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-seguidores.tpl',
      1 => 1468357079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_578559fc594468_41307527 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/perfil-user.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 lateral-perfil">
        </div>
        <div class="col-md-3 perfil-1">
          <img class="avatar-user" src="<?php echo $_smarty_tpl->tpl_vars['nick']->value->getImg();?>
" width="150" height="150">
          <h2 id="h2-title"><?php echo $_smarty_tpl->tpl_vars['usuario_nick']->value;?>
</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/my_profile/" id="menu-option">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" id="menu-option">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/my_profile/followers" style="color: white; text-decoration: none;">Siguiendo/Seguidores</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <div class="col-md-5 follower-perfil">
              <h4 id="h4-title">Seguidores</h4>
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <?php
$_from = $_smarty_tpl->tpl_vars['suscriptores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tesiguen_0_saved_item = isset($_smarty_tpl->tpl_vars['tesiguen']) ? $_smarty_tpl->tpl_vars['tesiguen'] : false;
$_smarty_tpl->tpl_vars['tesiguen'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tesiguen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tesiguen']->value) {
$_smarty_tpl->tpl_vars['tesiguen']->_loop = true;
$__foreach_tesiguen_0_saved_local_item = $_smarty_tpl->tpl_vars['tesiguen'];
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['tesiguen']->value->getImg();?>
" width="25" height="25" style="float: left; margin-right: 8px;">
                <p><?php echo $_smarty_tpl->tpl_vars['tesiguen']->value->getNick();?>
</p>
                <?php
$_smarty_tpl->tpl_vars['tesiguen'] = $__foreach_tesiguen_0_saved_local_item;
}
if ($__foreach_tesiguen_0_saved_item) {
$_smarty_tpl->tpl_vars['tesiguen'] = $__foreach_tesiguen_0_saved_item;
}
?>
                <br>
              </div>
              <div class="col-md-1"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-5 following-perfil">
              <h4 id="h4-title">Siguiendo</h4>
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <?php
$_from = $_smarty_tpl->tpl_vars['suscripciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_siguiendo_1_saved_item = isset($_smarty_tpl->tpl_vars['siguiendo']) ? $_smarty_tpl->tpl_vars['siguiendo'] : false;
$_smarty_tpl->tpl_vars['siguiendo'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['siguiendo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['siguiendo']->value) {
$_smarty_tpl->tpl_vars['siguiendo']->_loop = true;
$__foreach_siguiendo_1_saved_local_item = $_smarty_tpl->tpl_vars['siguiendo'];
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['siguiendo']->value->getImg();?>
" width="25" height="25" style="float: left; margin-right: 8px;">
                <p><?php echo $_smarty_tpl->tpl_vars['siguiendo']->value->getNick();?>
</p>
                <?php
$_smarty_tpl->tpl_vars['siguiendo'] = $__foreach_siguiendo_1_saved_local_item;
}
if ($__foreach_siguiendo_1_saved_item) {
$_smarty_tpl->tpl_vars['siguiendo'] = $__foreach_siguiendo_1_saved_item;
}
?>
                <br>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
        </div>
        <div class="col-md-1 lateral-perfil">
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <a id="copyright">Copyrighterino</a>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }
}