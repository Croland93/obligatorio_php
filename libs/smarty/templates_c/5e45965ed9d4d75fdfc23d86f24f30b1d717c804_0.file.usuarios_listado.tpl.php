<?php
/* Smarty version 3.1.29, created on 2016-03-28 22:10:59
  from "D:\wamp\www\tip\ejemplos\clase5\vistas\usuarios_listado.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f9abf3d8c962_53233332',
  'file_dependency' => 
  array (
    '5e45965ed9d4d75fdfc23d86f24f30b1d717c804' => 
    array (
      0 => 'D:\\wamp\\www\\tip\\ejemplos\\clase5\\vistas\\usuarios_listado.tpl',
      1 => 1459203057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_56f9abf3d8c962_53233332 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
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
          <h2 class="sub-header">Listado</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Ci</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['usuarios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_persona_0_saved_item = isset($_smarty_tpl->tpl_vars['persona']) ? $_smarty_tpl->tpl_vars['persona'] : false;
$_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['persona']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->value) {
$_smarty_tpl->tpl_vars['persona']->_loop = true;
$__foreach_persona_0_saved_local_item = $_smarty_tpl->tpl_vars['persona'];
?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['persona']->value->getNombre(), 'UTF-8');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getApellido();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getEdad();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getCI();?>
</td>
                    <td><input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='index.php?borrar=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getCI();?>
'"/></td>
                  </tr>
                <?php
$_smarty_tpl->tpl_vars['persona'] = $__foreach_persona_0_saved_local_item;
}
if ($__foreach_persona_0_saved_item) {
$_smarty_tpl->tpl_vars['persona'] = $__foreach_persona_0_saved_item;
}
?>
              </tbody>
            </table>
          </div>
        </div>
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }
}
