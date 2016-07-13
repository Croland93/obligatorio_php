<?php
/* Smarty version 3.1.29, created on 2016-07-12 22:27:01
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/ver_perfil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57855295430e50_61157347',
  'file_dependency' => 
  array (
    '886520fc8d86bbd40a99c68b6a695ea1516a06e5' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/ver_perfil.tpl',
      1 => 1468355218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_57855295430e50_61157347 ($_smarty_tpl) {
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
 type="text/javascript">
      function deleteConfirmation(userID){
        var respuesta = confirm("¿Realmente deseas eliminar tu cuenta? Si aceptas no hay vuelta atrás :(");
        if (respuesta){
          $.ajax({
            type: 'POST',
            url: 'usuario/my_profile/borrar/'+userID
            })
          window.location.href="index/home/";
        } else {
          alert("Muchas gracias por quedarte con nosotros :)");
        }
      }

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
          <img class="avatar-user" src="<?php echo $_smarty_tpl->tpl_vars['nick']->value->getImg();?>
" width="150" height="150">
          <h2 id="h2-title"><?php echo $_smarty_tpl->tpl_vars['usuario_nick']->value;?>
</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/my_profile/" style="color: white; text-decoration: none;">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" id="menu-option">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/my_profile/followers" id="menu-option">Siguiendo/Seguidores</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <h3 id="h3-title">Descripción general</h3>
            <hr id="side-perfil">
            <div class="col-md-6 desc-gral-perfil">
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
              <h4 id="h4-title">Perfil</h4>
              <h5>Nombre</h5>
              <?php if ($_smarty_tpl->tpl_vars['usuario_nombre']->value == '') {?>
              <p id="p-profile">Nombre no declarado</p>
              <?php } else { ?>
              <p id="p-profile"><?php echo $_smarty_tpl->tpl_vars['usuario_nombre']->value;?>
</p>
              <?php }?>
              <h5>Apellido</h5>
              <?php if ($_smarty_tpl->tpl_vars['usuario_apellido']->value == '') {?>
              <p id="p-profile">Apellido no declarado</p>
              <?php } else { ?>
              <p id="p-profile"><?php echo $_smarty_tpl->tpl_vars['usuario_apellido']->value;?>
</p>
              <?php }?>
              <h5>Correo electrónico</h5>
              <p id="p-profile"><?php echo $_smarty_tpl->tpl_vars['usuario_email']->value;?>
</p>
              <h5>ID Cuenta</h5>
              <p id="p-profile"><?php echo $_smarty_tpl->tpl_vars['usuario_id']->value;?>
</p>
              <br>
              <a href="usuario/edit_profile/" class="btn btn-block btn-edit-perfil"><span class="glyphicon glyphicon-edit"></span> Editar perfil</a>
              <br>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 extra-perfil">
              <h4 id="h4-title">Imagen</h4>
              <h5 style="text-align: center;">Avatar actual</h5>
              <img class="show-perfil" src="<?php echo $_smarty_tpl->tpl_vars['nick']->value->getImg();?>
" width="100" height="100">
              <br>
              <a href="usuario/avatar_change/" class="btn btn-block btn-edit-perfil"><span class="glyphicon glyphicon-camera"></span> Cambiar</a>
              <br>
            </div>
            <div class="col-md-12 danger-zone">
              <h4 id="h4-danger">Zona de peligro</h4>
              <h5>Eliminar cuenta</h5>
              <p id="p-profile">Si desea eliminar su cuenta, proceda con el siguiente botón, pero recuerde que todas sus listas de reproducciones (playlists) y preferencias serán eliminadas juntos con ella. ¿Realmente desea eliminar su cuenta?</p>
              <a href="javascript:deleteConfirmation(<?php echo $_smarty_tpl->tpl_vars['nick']->value->getId();?>
)" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-warning-sign"></span> Eliminar cuenta</a>
              <br>
              <br>
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
