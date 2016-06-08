<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-05-15 23:03:42
=======
/* Smarty version 3.1.29, created on 2016-05-27 20:40:54
>>>>>>> antonio
  from "C:\wamp\www\obligatorio_php\vistas\usuarios_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_5739004eaedeb7_60446921',
=======
  'unifunc' => 'content_5748b0d6439833_39131871',
>>>>>>> antonio
  'file_dependency' => 
  array (
    'e532878ff992638570b6acfd8fb981f0506baad9' => 
    array (
      0 => 'C:\\wamp\\www\\obligatorio_php\\vistas\\usuarios_nuevo.tpl',
<<<<<<< HEAD
      1 => 1463353380,
=======
      1 => 1464381651,
>>>>>>> antonio
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5739004eaedeb7_60446921 ($_smarty_tpl) {
=======
function content_5748b0d6439833_39131871 ($_smarty_tpl) {
>>>>>>> antonio
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
<<<<<<< HEAD
</title>

=======
 - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
>>>>>>> antonio
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
<<<<<<< HEAD
=======

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
    
    // JUST AN EXAMPLE OF VALIDATIN CUSTOM FUNCTIONS : funcCall[validate2fields]
    function validate2fields(){
      if($("#nombre").val() =="" || $("#apellido").val() == ""){
        return true;
      }else{
        return false;
      }
    }
  <?php echo '</script'; ?>
>
>>>>>>> antonio
    
  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="main">
<<<<<<< HEAD
        <h1 class="page-header">Crear usuario</h1>
=======
        <h1 class="page-header">Cuenta nueva</h1>
>>>>>>> antonio
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        <?php }?>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
<<<<<<< HEAD
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
=======
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control validate[required,custom[noSpecialCaracters],length[0,30]]" placeholder="Nickname" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control validate[required,custom[onlyLetter],length[0,30]] text-input" placeholder="Nombre" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control validate[required,custom[onlyLetter],length[0,30]] text-input" placeholder="Apellido" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Contraseña" value=''>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[password]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Email" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value=''>
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
>>>>>>> antonio
        </form>
        </div>
      </div>
    </div>
  </body>
</html><?php }
}
