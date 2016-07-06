<?php
/* Smarty version 3.1.29, created on 2016-07-06 01:36:53
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/usuarios_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577c4495291422_00422019',
  'file_dependency' => 
  array (
    'e501bf88b7ba04e4585594cdcc20120cbafa86e1' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/usuarios_login.tpl',
      1 => 1467761810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_577c4495291422_00422019 ($_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">
    
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    
  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid" style="height: 600px;">
      <div class="main">
        <h1 class="page-header">Login</h1>
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
          <form class="form-signin" method="POST" >
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
            <?php }?>
            <fieldset class="form-group">
              <label for="Email">Correo electrónico</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Email">
              <div id="email_available"></div>
            </fieldset>
            <fieldset class="form-group">
              <label for="Password">Contraseña</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña">
            </fieldset>
            
            <button class="submit form-control btn btn-primary" type="submit">Ingresar</button>
            <br><br>
            <p style="text-align: center;">¿Aún no tienes cuenta? <a href="usuario/nuevo/">Registrate aqui!</a></p>

          </form>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <p>Copyrighterino</p>
      </div>
    </footer>
  </body>
</html>

<?php }
}
