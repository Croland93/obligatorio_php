<?php
/* Smarty version 3.1.29, created on 2016-03-30 22:02:01
  from "D:\wamp\www\tip\ejemplos\clase5\vistas\usuarios_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc4cd9280337_20058679',
  'file_dependency' => 
  array (
    'a1dcb0fbce222f89e4d336b48973d6bb06cc904d' => 
    array (
      0 => 'D:\\wamp\\www\\tip\\ejemplos\\clase5\\vistas\\usuarios_nuevo.tpl',
      1 => 1430785228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_56fc4cd9280337_20058679 ($_smarty_tpl) {
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
  </head>
  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Apellido</label>  
              <div class="col-md-4">
              <input id="apellido" name="apellido" type="text" placeholder="Silvera" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Email</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="pepe@gmail.com" class="form-control input-md" required="">
                
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Password</label>  
              <div class="col-md-4">
              <input id="pass" name="pass" type="password"  minlength="6" title="6 letras mín." class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="edad">Edad</label>  
              <div class="col-md-4">
              <input id="edad" name="edad" type="text" placeholder="21" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">C.I.</label>  
              <div class="col-md-4">
              <input id="ci" name="ci" type="text" placeholder="" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="guardar"></label>
              <div class="col-md-4">
                <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
              </div>
            </div>

            </fieldset>
          </form>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
  </body>
</html>

<?php }
}
