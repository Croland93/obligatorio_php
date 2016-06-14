<?php
/* Smarty version 3.1.29, created on 2016-06-14 02:32:45
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-editar_perfil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f50adba16f4_97358457',
  'file_dependency' => 
  array (
    '5965e80dc70e6a40c9e7dcf5ed7748f26062d45d' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-editar_perfil.tpl',
      1 => 1465861725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_575f50adba16f4_97358457 ($_smarty_tpl) {
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
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
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
          <img class="avatar-user" src="<?php echo $_smarty_tpl->tpl_vars['usuario_imagen']->value;?>
" width="150" height="150">
          <h2><?php echo $_smarty_tpl->tpl_vars['usuario_nick']->value;?>
</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/perfil/" id="menu-option">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" style="color: white; text-decoration: none;">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <?php if ($_smarty_tpl->tpl_vars['msgerror']->value != '') {?>
            <div class="col-md-12 error-message"><br><?php echo $_smarty_tpl->tpl_vars['msgerror']->value;?>
</div>
            <br>
            <br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['msgerror_two']->value != '') {?>
            <div class="col-md-12 error-message"><br><?php echo $_smarty_tpl->tpl_vars['msgerror_two']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['msgok']->value != '') {?>
            <div class="col-md-12 ok-message"><br><?php echo $_smarty_tpl->tpl_vars['msgok']->value;?>
</div>
            <br>
            <br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['msgok_two']->value != '') {?>
            <div class="col-md-12 ok-message"><br><?php echo $_smarty_tpl->tpl_vars['msgok_two']->value;?>
</div>
            <?php }?>
            <h3>Editar perfil</h3>
            <hr id="side-perfil">
            <div class="col-md-5 desc-gral-perfil">
              <h4 id="h4-title">Perfil</h4>
              <?php if ($_smarty_tpl->tpl_vars['usuario_apellido']->value != '' || $_smarty_tpl->tpl_vars['usuario_nombre']->value != '') {?>
              <p>Si necesitas cambiar estos datos, solicita un cambio. Se te enviará un mensaje a tu correo asociado a esta cuenta para que puedas cambiar estos datos.</p>
              <?php } else { ?>
              <p>Muestrale al mundo como te llamas y hazte de más amigos con tus mismos gustos musicales.</p>
              <?php }?>
              <form id="formID" class="formular" method="POST" action="">
                <fieldset class="form-group">
                  <?php if ($_smarty_tpl->tpl_vars['usuario_nombre']->value != '') {?>
                  <h5>Nombre: <?php echo $_smarty_tpl->tpl_vars['usuario_nombre']->value;?>
</h5>
                  <?php } else { ?>
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value=''>
                  <?php }?>
                </fieldset>
                <fieldset class="form-group">
                  <?php if ($_smarty_tpl->tpl_vars['usuario_apellido']->value != '') {?>
                  <h5>Apellido: <?php echo $_smarty_tpl->tpl_vars['usuario_apellido']->value;?>
</h5>
                  <?php } else { ?>
                  <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" value=''>
                  <?php }?>
                </fieldset>
                <?php if ($_smarty_tpl->tpl_vars['usuario_nombre']->value != '' && $_smarty_tpl->tpl_vars['usuario_apellido']->value != '') {?>
                <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Solicitar cambio</a>
                <?php } else { ?>
                <button type="submit" class="submit form-control btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                <?php }?>
                <br>
                <br>
              </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 desc-gral-perfil">
              <h4 id="h4-title">Datos de cuenta</h4>
              <h5>Cambiar correo</h5>
              <hr>
              <p>Recuerda de ingresar un correo válido, de lo contrario no podrás validar tu cuenta.</p>
              <form id="formID2" class="formular" method="POST" action="">
              <fieldset class="form-group">
                  <input type="text" id="oldemail" name="oldemail" class="form-control" placeholder="Email actual" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Nuevo email" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="reemail" name="reemail" class="form-control" placeholder="Confirmar email" value='' autocomplete="off">
                </fieldset>
                <button type="submit" class="submit form-control btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                <br>
                <br>
                <h5>Cambiar contraseña</h5>
                <hr>
                <p>Para cambiar tu contraseña se te enviará un correo de confirmación para que puedas completar esta acción.</p>
                <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Solicitar cambio</a>
                <br>
                <br>
              </form>
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
