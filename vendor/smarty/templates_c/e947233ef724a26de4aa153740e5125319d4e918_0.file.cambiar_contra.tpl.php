<?php
/* Smarty version 3.1.29, created on 2016-06-16 03:15:35
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/cambiar_contra.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5761fdb7aff850_56408749',
  'file_dependency' => 
  array (
    'e947233ef724a26de4aa153740e5125319d4e918' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/cambiar_contra.tpl',
      1 => 1466039732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_5761fdb7aff850_56408749 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
 - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Javascript personales -->
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.validationEngine-en.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>  
    $(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
      
      $("#formID").validationEngine()
    });
  <?php echo '</script'; ?>
>
  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid" style="height: 650px">
      <div class="main">
        <?php if ($_smarty_tpl->tpl_vars['msgerror']->value != '') {?>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        <div class="alert alert-danger" role="alert"><br><p style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['msgerror_two']->value;?>
</p><br></div>
        </div>
        <?php } else { ?>
        <h1 class="page-header">Cambiar contraseña</h1>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        <?php if ($_smarty_tpl->tpl_vars['msgerror']->value != '') {?>
        <div class="alert alert-danger" role="alert"><br><p style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['msgerror']->value;?>
</p><br></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['noform']->value != '') {?>
        <div class="alert alert-success" role="alert"><br><p style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['msgok']->value;?>
</p><br></div>
        <?php } else { ?>
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <input type="password" id="old-pass" name="old-pass" class="form-control" placeholder="Contraseña vieja" value=''>
          </fieldset>
          <fieldset class="form-group">
            <input type="password" id="new-pass" name="new-pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Nueva contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[new-pass]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <input type="submit" value="Cambiar ahora!" class="submit form-control btn btn-primary">
        </form>
        <?php }?>
        </div>
        <?php }?>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <p>Copyrighterino</p>
      </div>
    </div>
  </body>
</html><?php }
}
