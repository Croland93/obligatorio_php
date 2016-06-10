<?php
/* Smarty version 3.1.29, created on 2016-06-10 09:15:35
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-editar_perfil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575a6917b696b3_84609302',
  'file_dependency' => 
  array (
    '5965e80dc70e6a40c9e7dcf5ed7748f26062d45d' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/vp-editar_perfil.tpl',
      1 => 1465542929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_575a6917b696b3_84609302 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
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
 src="js/jquery.validationEngine-en.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    
    $(document).ready(function(){
      $('#email').keyup(function(){
        var e = $('#email').val();
        if (e!=''){
          $.post('/obligatorio_php/usuario/check', {email:e}, 
            function(result){
              console.log(result);
              $('#email_available').html(result);
          }); 
        } else {
          $('#email_available').html('');
        } 
      });
    });
    
    <?php echo '</script'; ?>
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
            <h3>Editar perfil</h3>
            <hr id="side-perfil">
            <div class="col-md-5 desc-gral-perfil">
              <h4 id="h4-title">Perfil</h4>
              <p>Muestrale al mundo como te llamas y hazte de más amigos con tus mismos gustos musicales.</p>
              <form id="formID" class="formular" method="POST" action="">
                <fieldset class="form-group">
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" value=''>
                </fieldset>
                <button type="submit" class="submit form-control btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
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
                  <input type="text" id="old-email" name="old-email" class="form-control" placeholder="Email actual" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Nuevo email" value=''>
                  <div id="email_available"></div>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value='' autocomplete="off">
                </fieldset>
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
