<?php
/* Smarty version 3.1.29, created on 2016-06-07 03:23:34
  from "E:\wamp64\www\obligatorio_php\vistas\artista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57563e36efe534_62392742',
  'file_dependency' => 
  array (
    '196059268c7593c5b2057caac4f6f5cdd0262fb1' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\artista.tpl',
      1 => 1465269810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57563e36efe534_62392742 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    hola


    <?php echo $_smarty_tpl->tpl_vars['albums']->value['nombre'];?>

  </title>
  <img src="<?php echo $_smarty_tpl->tpl_vars['albums']->value['imagen'];?>
">
</head>
<body>

</body>
</html><?php }
}
