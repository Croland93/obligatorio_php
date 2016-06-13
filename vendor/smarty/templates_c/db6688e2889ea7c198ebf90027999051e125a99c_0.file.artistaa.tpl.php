<?php
/* Smarty version 3.1.29, created on 2016-06-12 22:21:18
  from "E:\wamp64\www\obligatorio_php\vistas\artistaa.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575de05e3e5f00_42084606',
  'file_dependency' => 
  array (
    'db6688e2889ea7c198ebf90027999051e125a99c' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\artistaa.tpl',
      1 => 1465770074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575de05e3e5f00_42084606 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    hola
  </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
hola

<?php
$_from = $_smarty_tpl->tpl_vars['albums']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_album_0_saved_item = isset($_smarty_tpl->tpl_vars['album']) ? $_smarty_tpl->tpl_vars['album'] : false;
$_smarty_tpl->tpl_vars['album'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['album']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->_loop = true;
$__foreach_album_0_saved_local_item = $_smarty_tpl->tpl_vars['album'];
?>

 <h1>
 <?php echo $_smarty_tpl->tpl_vars['album']->value['nombre'];?>

 </h1>
  <img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['imagen'];?>
">

<?php
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved_local_item;
}
if ($__foreach_album_0_saved_item) {
$_smarty_tpl->tpl_vars['album'] = $__foreach_album_0_saved_item;
}
?>

  
</body>
</html><?php }
}
