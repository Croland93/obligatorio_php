<?php
/* Smarty version 3.1.29, created on 2016-07-10 22:07:32
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/stalked_user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5782ab048151c8_85746059',
  'file_dependency' => 
  array (
    '08c1c5588c6291c4ceff2fe154cd153da898009b' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/stalked_user.tpl',
      1 => 1468181108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_5782ab048151c8_85746059 ($_smarty_tpl) {
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
      function subscribeTo(idStalked){
          $.ajax({
            type: 'POST',
            url: 'usuario/subscribe/'+idStalked
            })
      }
    <?php echo '</script'; ?>
>

  </head>

  <body style="background-color: #696969;">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 lateral-stalked_profile">
        </div>
        <div class="col-md-10">
          <div class="col-md-12 logo-jukebox-stalked">
            <img class="jukebox-stalked_logo" src="public/media/logo-jukebox-letras-2.png">
          </div>
          <div class="col-md-5 stalked-perfil-1" style="background-color: rgba(0, 61, 86, 1); height: 500px;">
            <img class="avatar-stalked-user" src="<?php echo $_smarty_tpl->tpl_vars['stalked_user_data']->value->getImg();?>
" width="300" height="300">
          </div>
          <div class="col-md-7 stalked-perfil-1" style="background-color: rgba(0, 61, 86, 1); height: 500px;">
            <br>
            <br>
            <h1 id="h1-stalked"><?php echo $_smarty_tpl->tpl_vars['stalked_user_data']->value->getNick();?>
</h1>
            <hr>
            <h4 id="h4-stalked">Nombre</h4>
            <?php if ($_smarty_tpl->tpl_vars['stalked_user_data']->value->getNombre() == '') {?>
            <p id="p-stalked">Nombre no declarado</p>
            <?php } else { ?>
            <p id="p-stalked"><?php echo $_smarty_tpl->tpl_vars['stalked_user_data']->value->getNombre();?>
</p>
            <?php }?>
            <h4 id="h4-stalked">Apellido</h4>
            <?php if ($_smarty_tpl->tpl_vars['stalked_user_data']->value->getApellido() == '') {?>
            <p id="p-stalked">Apellido no declarado</p>
            <?php } else { ?>
            <p id="p-stalked"><?php echo $_smarty_tpl->tpl_vars['stalked_user_data']->value->getApellido();?>
</p>
            <?php }?>
            <h4 id="h4-stalked">Correo electrónico</h4>
            <p id="p-stalked"><?php echo $_smarty_tpl->tpl_vars['stalked_user_data']->value->getEmail();?>
</p>
            <br>
            <br>
            <a href="javascript:subscribeTo(<?php echo $_smarty_tpl->tpl_vars['stalked_user_data']->value->getId();?>
)" class="btn btn-primary btn-warning" style="float: right; margin-right: 20px;" <?php echo $_smarty_tpl->tpl_vars['disponible']->value;?>
><span class="glyphicon glyphicon-user"></span> Suscribirse</a>
          </div>
        </div>
        <div class="col-md-1 lateral-stalked_profile">
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

  </body>
</html><?php }
}
