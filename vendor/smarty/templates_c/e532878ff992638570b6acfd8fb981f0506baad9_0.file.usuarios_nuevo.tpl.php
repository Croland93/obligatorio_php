<?php
/* Smarty version 3.1.29, created on 2016-05-15 23:03:42
  from "C:\wamp\www\obligatorio_php\vistas\usuarios_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5739004eaedeb7_60446921',
  'file_dependency' => 
  array (
    'e532878ff992638570b6acfd8fb981f0506baad9' => 
    array (
      0 => 'C:\\wamp\\www\\obligatorio_php\\vistas\\usuarios_nuevo.tpl',
      1 => 1463353380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_5739004eaedeb7_60446921 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="main">
        <h1 class="page-header">Crear usuario</h1>
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        <?php }?>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        <form method="POST">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nickname" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" minlength="6" class="form-control" placeholder="Contraseña" value='' required>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" minlength="6" class="form-control" placeholder="Repetir contraseña" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email" value='' required>
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="form-control btn btn-primary">
        </form>
        </div>
      </div>
    </div>
  </body>
</html><?php }
}
